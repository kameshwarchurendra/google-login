<script type="text/javascript"> $(document).ready(function(e) {
//=========================Student============================//

//=========================Student============================//
var cls_table = $(".my_custom_datatable").DataTable({
   'order': [[0, "asc"]],
   'paging': true,
   'pageLength': 50,
   'pagingType': "numbers",
   'language': {
     searchPlaceholder: 'Search...',
     Search: ''
   }
 });

 $(".my_custom_datatable").each(function(i,element) {

   new $.fn.dataTable.Buttons(cls_table.eq(i), {
     buttons: [{
         extend: "excel",
         className: "datatable-btn btn-sm"
       },
       {
         extend: "pdf",
         className: "datatable-btn btn-sm"
       },
       {
         extend: "print",
         className: "datatable-btn btn-sm"
       }
     ]
   });

   cls_table.eq(i).buttons().container().appendTo(
     $('.col-sm-6:eq(0)', 
     cls_table.eq(i).table().container())
   );

 });
//=========================/Student===========================//

//=========================/Student===========================//
}); </script>