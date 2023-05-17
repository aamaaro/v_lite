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

        window.livewire.on('scan-ok', Msg => {
            Toast.fire({
            type: 'success',
            title: Msg
            })
        });

        window.livewire.on('scan-notfound', Msg => {
            Toast.fire({
            type: 'warning',
            title: Msg
            })
        });
        window.livewire.on('no-stock', Msg => {
            Toast.fire({
            type: 'danger',
            title: Msg
            })
        });
        window.livewire.on('sale-error', Msg => {
            Toast.fire({
            type: 'warning',
            title: Msg
            })
        });
        window.livewire.on('sale-ok', Msg => {
            Toast.fire({
            type: 'success',
            title: Msg
            })
        });

        window.livewire.on('scan-emty', Msg => {
            Toast.fire({
            type: 'success',
            title: Msg
            })
        });
        window.livewire.on('print-ticket', saleId => {
            window.open("print://", saleId, '_blank')
        });

    });
</script>
