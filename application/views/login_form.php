<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>Car Care| Login page</title>
    <link rel="icon" href="images/icon.png" type="image/gif" sizes="16x16">
      <meta name="google-signin-client_id" content="333544391510-eiome8jne96t9rjj8237qs9ajq9nir5j.apps.googleusercontent.com">
    <!--<meta content="text/html;charset=utf-8" http-equiv="Content-Type">-->
    <!--<meta content="width=device-width, initial-scale=1.0" name="viewport">-->
    <!--<meta content="Rentaly - Multipurpose Vehicle Car Rental Website Template" name="description">-->
    <!--<meta content="" name="keywords">-->
    <!--<meta content="" name="author">-->
    <!--=====================CSS Files============================= -->
    <!--<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">-->
    <!--<link href="css/mdb.min.css" rel="stylesheet" type="text/css" id="mdb">-->
    <!--<link href="css/plugins.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
    <!--<link href="css/coloring.css" rel="stylesheet" type="text/css">-->
    <!-- color scheme -->
    <!--<link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css">-->
      <!--<script src="https://apis.google.com/js/platform.js" async defer></script> -->
<link href="<?php echo base_url('assets/plugins/sweet-alerts/css/sweetalert.css');?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="<?php echo base_url('assets/plugins/sweet-alerts/js/sweetalert.min.js');?>"></script>
 <script src="<?php echo base_url('assets/plugins/sweet-alerts/js/custom-sweetalerts.js');?>"></script>
 <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
     <style>
     @media only screen and (max-width: 992px) {
           .otp {
              height: 30px !important;
              width: 30px !important;
              font-size: 20px;
              text-align: center;
              border: 1px solid #000000;
          }
          .otp::-webkit-inner-spin-button,
          .otp::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
          }
          
     }
     
    .otp {
          height: 45px;
          width: 45px;
          font-size: 25px;
          text-align: center;
          border: 1px solid #000000;
      }
      .otp::-webkit-inner-spin-button,
      .otp::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
</head>

<body>
    <div id="wrapper">
        <!-- page preloader begin -->
        <div id="de-preloader"></div>
        <!-- page preloader close -->
        <!--Header View start -->
        <!--Header View end -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            
            
            
            <section id="section-hero" aria-label="section" class="jarallax">
                <img src="<?php echo base_url('img/images/background/2.jpg');?>" class="jarallax-img" alt="">
                <div class="v-center" id="login">
                    <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-4 offset-lg-4">
                                    <div class="padding40 rounded-3 shadow-soft" data-bgcolor="#ffffff">
                                        <h4>Login</h4>
                                        <div class="spacer-10"></div>
                                        <div class="row g-2">
                                            <div class="col-lg-6">
                                             <a href="<?php echo $loginURL; ?>"><img src="<?php echo base_url('assets/sign-in-with-google-icon-3.jpg'); ?>" style="width:150px;height:40px;"></a>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
               
            </section>
        </div>
        <!-- content close -->
    
    
    
    
   <!-- Top Footer Start-->

   <!-- Top Footer End -->

</body>
 <script>
      function getCodeBoxElement(index) {
        return document.getElementById('codeBox' + index);
      }
      function onKeyUpEvent(index, event) {
        const eventCode = event.which || event.keyCode;
        if (getCodeBoxElement(index).value.length === 1) {
          if (index !== 6) {
            getCodeBoxElement(index+ 1).focus();
          } else {
            getCodeBoxElement(index).blur();
            // Submit code
            console.log('submit code ');
          }
        }
        if (eventCode === 8 && index !== 1) {
          getCodeBoxElement(index - 1).focus();
        }
      }

      function onFocusEvent(index) {
        for (item = 1; item < index; item++) {
          const currentElement = getCodeBoxElement(item);
          if (!currentElement.value) {
              currentElement.focus();
              break;
          }
        }
      }
 </script>
</html>