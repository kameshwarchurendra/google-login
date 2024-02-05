<script type="text/javascript"> $(document).ready(function(e) {
  //===========================Staff ==========================//

//===========================Staff==========================//



$("form#frm-add-alumni").submit(function(e) { e.preventDefault();
  var clkbtn =  $("#btn-add-alumni"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 

  $.ajax({
    type: "POST",
    url: "<?php echo /*site_url to base_url*/ base_url('Alumni/Upload_alumni'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo base_url('/'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }
    }, error: function (jqXHR, status, err){clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
    });
  });



 $("form#frm-update-staff").submit(function(e) { e.preventDefault();
  var clkbtn =  $("#btn-update-staff"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 

  $.ajax({
    type: "POST",
    url: "<?php echo /*site_url to base_url*/ base_url('Staff/Update_Upload_staff'); ?>",
    data: formData,
    processData: false,
    contentType: false,
    dataType: "JSON", 
    success: function(data) {
      if(data.status=='success'){
        swal(data.message, {icon: "success", timer: 1000, });
        setTimeout(function(){
          window.location = "<?php echo /*site_url to base_url*/ base_url('Staff/staff_view_list'); ?>"; 
        },1000);
      }else{ clkbtn.prop('disabled',false);
        swal(data.message, {icon: "error", timer: 5000, });
      }
    }, error: function (jqXHR, status, err){clkbtn.prop('disabled',false);
      swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
    }
    });
  });




$("#staff_tbl").on("click",".delete-staff",function(){ 

  var clkbtn = $(this); clkbtn.prop('disabled',true);
  var dlt_id = $(this).data('value');
  swal({
    title: "Are you sure?",
    text: "Once deleted, you will not be able to recover this data!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {

        $.ajax({
          type: "POST",
          url: "<?php echo /*site_url to base_url*/ base_url('staff/delete_a_staff'); ?>",
          data: {delete_id:dlt_id},
          dataType: "JSON",
          success: function(data) {
            if(data.status=='success'){
              swal(data.message, {icon: "success", timer: 1000, });
              setTimeout(function(){ location.reload(); },1000);
            }else{ clkbtn.prop('disabled',false);
              swal(data.message, {icon: "error", timer: 5000, });
            }  
          }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
            swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
          }
        });
       
    } else { clkbtn.prop('disabled',false);
      swal("Your Data is safe!", { icon: "info", timer: 2000, });
    }
  });
  });

$("#staff_tbl").on("click",".view-staff",function(){ 

  var clkbtn = $(this); clkbtn.prop('disabled',true);
  var dlt_id = $(this).data('value');
        $.ajax({
          type: "POST",
          url: "<?php echo /*site_url to base_url*/ base_url('Staff/staff_a_view'); ?>",
          data: {view_id:dlt_id},
          dataType: "JSON",
          success: function(data) {
            if(data.status=='success'){
               $("#myModal").modal("show");
            }else{ clkbtn.prop('disabled',false);
              swal(data.message, {icon: "error", timer: 5000, });
            }  
          }, error: function (jqXHR, status, err) { clkbtn.prop('disabled',false);
            swal("Some Problem Occurred!! please try again", { icon: "error", timer: 2000, });
          }
        });
   });
  

//==========================/Staff==========================//

//==========================/Staff==========================//
}); </script>