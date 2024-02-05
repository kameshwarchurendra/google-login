<script type="text/javascript"> $(document).ready(function(e) {
//=========================Mail============================//

//=========================Mail============================//

$("form#frm-mail-send").submit(function(e) { e.preventDefault();
  var clkbtn =  $("#btn-mail-send"); clkbtn.prop('disabled',true);
  var formData = new FormData(this); 

  $.ajax({
    type: "POST",
    url: "<?php echo /*site_url to base_url*/ base_url('Email/send_mail'); ?>",
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
//=========================/Mail===========================//

//=========================/Mail===========================//
}); </script>