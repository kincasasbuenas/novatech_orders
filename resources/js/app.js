import './bootstrap';

document.getElementById('formOrders').addEventListener('submit', function (e) {
    e.preventDefault(); 

    // Realiza una solicitud AJAX para enviar el formulario
    console.log($(this).serialize());
    
    $.ajax({
        type: 'POST',
        url: "{{ route('orders.store') }}",
        data: $(this).serialize(),
        dataType: 'json',
        success: function (response) {

            alert("Tu orden ha sido creada exitosamente!");
        },
        error: function () {
           
        }
    });
});


function deleteOrderById(id) {
    e.preventDefault();
    if (confirm("¿Estás seguro de que deseas eliminar este registro?")) {
        
        $.ajax({
            type: 'DELETE',
            url: `{{ route('orders.store') }}/${id}`,
            dataType: 'json',
            success: function (response) {
                alert("Registro con ID " + id + " eliminado correctamente.");
            },
            error: function () {
                // Maneja errores si es necesario
            }
        });

    }
}
