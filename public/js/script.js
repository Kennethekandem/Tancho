// $(document).ready(function(){
//
//
//
//     // $.ajaxSetup({
//     //     headers: {
//     //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     //     }
//     // });
//
//     $("#delete_blog").click(function(){
//         let blogid = $(this).attr("data-blogid");
//         $.ajax({
//             type: 'post',
//             url: "/blog/" + blogid,
//             dataType: 'json',
//             headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
//             data: {id:blogid,"_token": "{{ csrf_token() }}"},
//
//             success: function (data) {
//                 alert('success');
//             },
//             error: function (data) {
//                 alert(data);
//             }
//         });
//     });
//
//
// });
$(document).ready(function(){
    $('.delete_blog').click(function(event) {
       event.preventDefault();

       $('#example23').load($(this)).attr('href');
    });
});