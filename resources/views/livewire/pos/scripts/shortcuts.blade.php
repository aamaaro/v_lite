<script>
        document.addEventListener('DOMContentLoaded', function(){
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })
    var listener = new window.keypress.Listener();

    listener.simple_combo("f9", function () {
        Livewire.emit('saveSale')
    })

    listener.simple_combo("f12", function () {
        Livewire.emit('a-cash', 0)
    })

    listener.simple_combo("f8", function () {
        document.getElementById('cash').value =''
        document.getElementById('total').value =''
        document.getElementById('cash').focus()
    })

    listener.simple_combo("f4", function () {
        var total = parseFloat(document.getElementById('total').value)
        if (total > 0) {
            Confirm(0, 'clearCart', 'Segur@ de eliminar el carrito')
        } else
        {
            Toast.fire({
            type: 'success',
            title: 'Agrega productos a la venta'
            });
        }
    })
        });
</script>
