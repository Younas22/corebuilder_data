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
          <h3>Register as Company</h3>
        </div>
        <div class="content-error">
          <div class="hpanel">
            <div class="panel-body">
              <form method="POST" action="<?=base_url('do-register')?>">
                <div class="row">
                  <div class="form-group col-lg-12">
                    <label>Company Name *</label>
                    <input id="frist_name" type="text" class="form-control" name="company_name" autofocus required="" placeholder="Not changeable">
                    <?= form_error('company_name', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="last_name">Manager Name *</label>
                    <input id="last_name" type="text" class="form-control" name="manager_name" required placeholder="Not changeable">
                    <?= form_error('manager_name', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="email">Company Email *</label>
                    <input id="email" type="email" class="form-control" name="company_email" required placeholder="Not changeable">
                    <?= form_error('company_email', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-12">
                    <label for="email">Phone *</label>
                  <input id="email" type="text" class="form-control" name="phone" required="" placeholder="Not changeable">
                    <?= form_error('phone', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="password" class="d-block">Password *</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="">
                    <?= form_error('password', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="password2" class="d-block">Password Confirmation *</label>
                    <input id="password2" type="password" class="form-control" name="confirm_password" required="">
                    <?= form_error('confirm_password', '<div class="text-warning">', '</div>'); ?>
                  </div>
                  <div class="form-group col-lg-6">
                    <label for="password2" class="d-block" data-toggle="modal" href="#tallModal" style="cursor:pointer;">terms and conditions </label>
                    <input id="terms_status" type="checkbox" class="form-controld" name="terms_status" tabindex="2" value="1" required>
                  </div>
                  <div class="text-center">
                    <label for="password" class="d-block">Select Theme Color</label><br>
                    <label class="btn btn-primary">
                      <input type="radio" name="theme" id="option2" value="blue" autocomplete="off" checked="">Blue
                    </label>
                    <label class="btn btn-danger">
                      <input type="radio" name="theme" id="option3" value="red" autocomplete="off">Red
                    </label>
                  </div>
                </div>
                <div class="text-center" style="margin-top: 20px;">
                  <button class="btn btn-success loginbtn">Register</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="mt-5 text-muted text-center">
          Have an account? <a href="<?=base_url('signin')?>">Login</a>
        </div>
        <div class="text-center login-footer">
          <p>Copyright © 2022 All rights reserved. Data Entry Software by CORE BUILDER. 43. <a href="https://thecorebuilder.com" target="_blank">www.thecorebuilder.com</a> <a href="https://www.thecorebuilder.com/t-c-privacy-policy" style="font-size: 8px;" target="_blank">Read T&C</a></p>
        </div>
      </div>
    </div>











          <!-- Modal -->

<div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
    <h3>Terms and Conditions</h3>
        <p>
    Before you sign up and download or use downloadable product from ThemeHunt for your own purposes, please make sure you have read, understood, and agreed to all the terms. By accessing or using ThemeHunt, we assume you’ve accepted the terms of use given below. These Terms apply to all visitors, users and others who wish to access or use the Service. If you disagree with any part of the terms then you do not have permission to access the platform.</p>
    <h3>Introduction</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <h3>Accounts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <h3>Unauthorized/Illegal Usage</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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