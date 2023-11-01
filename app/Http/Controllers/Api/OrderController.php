<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{

    CONST PATH_FILE_JSON = "upload/jsonfile/orders.json";
    CONST RULES =  [
        'street-address' => 'required|string',
        'street-address-two' => 'nullable|string',
        'city' => 'required|string',
        'region' => 'required|string',
        'postalcode' => 'required|string',
        'country' => 'required|string',
        'ship-street-address' => 'required|string',
        'ship-street-address-two' => 'nullable|string',
        'ship-city' => 'required|string',
        'ship-region' => 'required|string',
        'ship-postalcode' => 'required|string',
        'ship-country' => 'required|string',
        'date-ordered' => 'required|date',
        'date-received' => 'required|date',
        'qty' => 'required|integer',
        'price' => 'required|numeric',
        'description' => 'required|string',
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $filePath = self::PATH_FILE_JSON;
        $data = [];

        if (Storage::exists($filePath)) {
            $existingData = json_decode(Storage::get($filePath), true);

            if($existingData !== null){
                $data = $existingData;
            }
           
        }

        return response()->json([
            'status' => true,
            'data' => $data,
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $validator = Validator::make($request->all(), self::RULES);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $formOrderData = $request->all();
        $id = time();
        $data = [];
        $filePath = self::PATH_FILE_JSON;

        if (Storage::exists($filePath)) {
            
            $existingData = json_decode(Storage::get($filePath), true);
            if($existingData !== null){
                $data = $existingData;
            }
           
        }

        $currentOrder= (object) [
            'id' => $id,
            'data' =>  $formOrderData
        ];

        array_push($data, $currentOrder );
        Storage::put($filePath, json_encode($data, JSON_PRETTY_PRINT));

        return response()->json([
            'status' => true,
            'message' => "Order Created successfully!",
            'data' => $data,
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make([
            'slug' => $id,
        ], [
            'slug' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $validator = Validator::make($request->all(), self::RULES);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $filePath = self::PATH_FILE_JSON;
        $data = [];
        $encontrado = null;

        if (Storage::exists($filePath)) {
            
            $existingData = json_decode(Storage::get($filePath), true);
            if($existingData !== null){
                $data = $existingData;
                
                foreach ($data as $clave=>$order) {
                    if ($order['id'] ===  intval($id)) { 
                        $encontrado = $order['data'];
                        unset($data[$clave]);

                        $orderUpdate= (object) [
                            'id' => intval($id),
                            'data' =>  $request->all()
                        ];

                        array_push($data, $orderUpdate );
                        Storage::put($filePath, json_encode(array_values($data), JSON_PRETTY_PRINT));
                        break; 
                    }
                }
            }
        }
        
        return response()->json([
            'status' => true,
            'messaje' => $encontrado !== null ? 'registro actualizado con exito!': 'registro no encontrado',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $validator = Validator::make([
            'slug' => $id,
        ], [
            'slug' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        $filePath = self::PATH_FILE_JSON;
        $data = [];
        $encontrado = null;

        if (Storage::exists($filePath)) {

            $existingData = json_decode(Storage::get($filePath), true);
            if($existingData !== null){
                $data = $existingData;
                
                foreach ($data as $clave=>$order) {

                    if ($order['id'] ===  intval($id)) { 

                        $encontrado = $order['data'];
                        unset($data[$clave]);
                        Storage::put($filePath, json_encode(array_values($data), JSON_PRETTY_PRINT));
                        break; 
                    }
                }
            }
           
        }
        
        return response()->json([
            'status' => true,
            'messaje' => $encontrado !== null ? 'registro eliminado con exito!': 'registro no encontrado',
        ], 200);
    }
}
