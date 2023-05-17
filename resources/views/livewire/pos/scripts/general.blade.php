<script>
    // $(.tblscroll').nicesscroll({
    //     cursorcolor: "#515365",
    //     cursorwidth: "30px",
    //     background: "rbga(20,20,20,0.3)",
    //     cursorborder: "0px",
    //     cursorborderradius:3
    // });
//     $(".tblscroll").niceScroll({
//         cursorcolor: "#515365",
//         cursorwidth: "20px",
//         background: "rbga(20,20,20,0.3)",
//         cursorborder: "0px",
//         cursorborderradius:3
// });  // a world full of color!
    // const Toast = Swal.mixin({
    //         toast: true,
    //         position: 'top-end',
    //         showConfirmButton: false,
    //         timer: 2000,
    //         timerProgressBar: true,
    //         didOpen: (toast) => {
    //             toast.addEventListener('mouseenter', Swal.stopTimer)
    //             toast.addEventListener('mouseleave', Swal.resumeTimer)
    //         }
    //         })
    function Confirm(id, eventName, text){

        Swal.fire({
            title: '¿Estás seguro?',
            text: text,
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: '¡Sí, elimínelo!'
            }).then(function(result) {
            if (result.value) {
                window.livewire.emit(eventName, id)
                Swal.close()
            }
            })


    }

    // Toast.fire({
    //     type: 'success',
    //     title: Msg
    //   })

</script>
