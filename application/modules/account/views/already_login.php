<!doctype html>
<html class="no-js" lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Signup | Alphaexposofts</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
    ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>assets/img/logo/logosn.png">
    <!-- Google Fonts
    ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <!-- owl.carousel CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/owl.transitions.css">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/animate.css">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <!-- main CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/main.css">
    <!-- morrisjs CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/form/all-type-forms.css">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/style.css">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css">
    <!-- modernizr JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/vendor/modernizr-2.8.3.min.js"></script>
  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="error-pagewrap">
      <div class="error-page-int">
        <div class="login-brand mb-5">
          <img src="<?=base_url()?>assets/img/logo/New Project.png" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
        <div class="text-center custom-login" style="margin-top: 20px;">
          <h3>Login Status</h3>
        </div> 
        <div class="content-error">
          <div class="hpanel">
            <div class="panel-body">
              <p>
<?php if($this->session->flashdata('login_status')['login_status'] == 1)
$this->session->set_userdata('logged_in',(object)$this->session->flashdata('login_status'));
echo "This User Already logged, first You need to logout!"; ?>
              </p>
              <a href="<?=base_url('logout/').$this->uri->segment(2);?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
            </div>
          </div>
        </div>

        <div class="text-center login-footer">
          <p>Copyright © 2022 All rights reserved. Data Entry Software by CORE BUILDER. 43. <a href="https://thecorebuilder.com" target="_blank">www.thecorebuilder.com</a> <a href="https://www.thecorebuilder.com/t-c-privacy-policy" style="font-size: 8px;" target="_blank">Read T&C</a></p>
        </div>
      </div>
    </div>







    <!-- jquery
    ============================================ -->
    <script src="<?=base_url()?>assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- wow JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/wow.min.js"></script>
    <!-- price-slider JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?=base_url()?>assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- tab JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/tab.js"></script>
    <!-- icheck JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/icheck/icheck.min.js"></script>
    <script src="<?=base_url()?>assets/js/icheck/icheck-active.js"></script>
    <!-- plugins JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <!-- main JS
    ============================================ -->
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <!-- tawk chat JS
    ============================================ -->
    <!-- <script src="<?=base_url()?>assets/js/tawk-chat.js"></script> -->
  </body>
  <!-- Mirrored from technext.github.io/kiaalap/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 05 Sep 2021 14:50:29 GMT -->
</html>