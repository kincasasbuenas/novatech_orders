@extends('template')
	
@section('content')

<div class="flex flex-row flex-wrap flex-auto gap-6">
  <div class="flex-1">

    <form id="formOrders" action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
            <h1 class="text-base font-semibold leading-7 text-gray-900">Purchase Order Form</h1>
            <p class="mt-1 text-sm leading-6 text-gray-600">
                the purchase order form number must appear correspondence, invoice shopping papers and packeages. 
                Goods are subject to our inspection and approval. 
                if shipment will be delayed. please let us know immediately
            </p>

            <div class="mt-10 grid grid-cols-1 gap-x-4 gap-y-2 sm:grid-cols-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Collect from</h3>
                <div class="col-span-full">
                    <div class="mt-2">
                        <input type="text" name="street-address" placeholder="Street Address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="mt-2">
                        <input type="text" name="street-address-two" placeholder="Street Address Line 2" id="street-address-two" autocomplete="street-address" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="city" placeholder="City" id="city" autocomplete="given-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="region" placeholder="Region" id="region" autocomplete="family-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="postalcode" placeholder="Postal / Zip code" id="postalcode" autocomplete="given-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                    <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option>Country</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    </select>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-4 gap-y-2 sm:grid-cols-6">
                <h3 class="text-base font-semibold leading-7 text-gray-900">Ship to</h3>
                <div class="col-span-full">
                    <div class="mt-2">
                        <input type="text" name="ship-street-address" placeholder="Street Address" id="ship-street-address" autocomplete="street-address" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                    <div class="mt-2">
                        <input type="text" name="ship-street-address-two" placeholder="Street Address Line 2" id="ship-street-address-two" autocomplete="street-address" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="ship-city" placeholder="City" id="ship-city" autocomplete="given-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="ship-region" placeholder="Region" id="ship-region" autocomplete="family-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>
                <div class="sm:col-span-3">
                    <div class="mt-2">
                        <input type="text" name="ship-postalcode" placeholder="Postal / Zip code" id="ship-postalcode" autocomplete="given-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                    <select id="ship-country" name="ship-country" autocomplete="country-name" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                    <option>Country</option>
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                    </select>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-4 gap-y-2 sm:grid-cols-6">

                <div class="sm:col-span-3">
                    <div class="mt-2">
                    <label for="date-ordered" class="block text-sm font-medium leading-6 text-gray-900">Date Ordered</label>
                    
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="date" name="date-ordered" class="block w-full  rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="DD/MM/YYYY">
                    </div>

                    </div>
                </div>

                <div class="sm:col-span-3">
                    <div class="mt-2">
                    <label for="date-received" class="block text-sm font-medium leading-6 text-gray-900">Date Received</label>
                    <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                        </svg>
                    </div>
                    <input datepicker datepicker-autohide type="date" name="date-received" class="block w-full  rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="DD/MM/YYYY">
                    </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="sm:col-span-2 sm:col-start-1">
                <label for="qty" class="block text-sm font-medium leading-6 text-gray-900">Qty</label>
                <div class="mt-2">
                    <input type="text" name="qty" id="qty" autocomplete="address-level2" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                <div class="mt-2">
                    <input type="text" name="price" id="price"  placeholder="USD 0" id="address-level1" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>

                <div class="sm:col-span-2">
                <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                <div class="mt-2">
                    <input type="text" name="description" id="description" autocomplete="off" class="block w-full rounded-md border-0 p-2.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 flex items-center justify-center gap-x-6">
    <button type="submit" class="text-gray-900 gap-x-2 bg-white hover:bg-gray-100 border border-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium  text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-gray-600 dark:bg-gray-800 dark:border-gray-700 dark:text-white dark:hover:bg-gray-700 mr-2 mb-2">
    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-send" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
            <path d="M10 14l11 -11"></path>
            <path d="M21 3l-6.5 18a.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a.55 .55 0 0 1 0 -1l18 -6.5"></path>
            </svg>
         Submit purchase order form
    </button>
    </div>
    </form>

  </div>

  <!-- TABLE -->
  <div class="flex-1">

        @if (count($orders) > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="p-3">
                            Order Number
                        </th>
                        <th scope="col" class="p-3">
                            Date Ordered
                        </th>
                        <th scope="col" class="p-3">
                            Date Received
                        </th>
                        <th scope="col" class="p-3">
                            Price
                        </th>
                        <th scope="col" class="p-3">
                            Description
                        </th>
                        <th scope="col" class="p-3">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <td scope="row" class="p-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $order['id'] }}
                        </td>
                        <td class="p-3">
                        {{ $order['data']['date-ordered'] }}
                        </td>
                        <td class="p-3">
                        {{ $order['data']['date-received'] }}
                        </td>
                        <td class="p-3">
                        {{ $order['data']['price'] }}
                        </td>
                        <td class="p-3">
                        {{ $order['data']['description'] }}
                        </td>
                        <td class="p-3 ">
                            <div class="flex flex-row flex-wrap flex-auto gap-3 justify-start">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" onclick="deleteOrderById({{ $order['id'] }})">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                            </div>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>
        @else
        <h2 class="text-base font-semibold leading-7 text-gray-900 text-center">No hay ordenes creadas</h2>
        @endif

  </div>
</div

@endsection