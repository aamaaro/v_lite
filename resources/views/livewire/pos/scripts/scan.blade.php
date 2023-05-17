<script>
    document.addEventListener('DOMContentLoaded', function(){

try {

    onScan.attachTo(document, {
    suffixKeyCodes: [13], // enter-key expected at the end of a scan
    reactToPaste: true, // Compatibility to built-in scanners in paste-mode (as opposed to keyboard-mode)
    onScan: function(sCode, iQty) { // Alternative to document.addEventListener('scan')
        console.log('Scanned: ' + iQty + 'x ' + sCode);
        Livewire.emit('scan-code', sCode)
    },
    onKeyDetect: function(iKeyCode){ // output all potentially relevant key events - great for debugging!
        console.log('Pressed: ' + iKeyCode);
    }
});

//     onScan.attachTo(document, {
//     suffixKeyCodes: [13],
//     onScan: function(barcode) {
//         console.log(barcode)
//         Livewire.emit('scan-code', 'barcode')
//     },
//     onScanError: function(e) {
//         console.log(e)
//     }
// });
const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 800,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
            })

            Toast.fire({
            type: 'success',
            title: 'Lector de codigo de barra listo'
            })

    console.log('Scanner ready')

} catch (e) {
     console.log(e)

}
        });

</script>
