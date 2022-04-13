<!doctype html>
<html class="no-js" lang="en">
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Alphaexposofts</title>
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
    <style>
.error-page-int{max-width:100% !important ;}
.col {
  /*float: left;*/
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}



/*REGISTER AS A COMPANY*/
.btnn {
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  /*background-color: transparent;*/
  /*border: 2px solid #e74c3c;*/
  border-radius: 0.6em;
  color: #e74c3c;
  cursor: pointer;
  /*display: flex;*/
  align-self: center;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1;
  margin: 20px;
  
  text-decoration: none;
  text-align: center;
  text-transform: uppercase;
  font-family: "Montserrat", sans-serif;
  font-weight: 700;
}
.btnn:hover, .btnn:focus {
  /*color: black;*/
  /*outline: 0;*/
}

.third {
  /*border-color: #3498db;*/
  color: #fff;
  /*box-shadow: 0 0 40px 40px #3498db inset, 0 0 0 0 #3498db;*/
  /*transition: all 150ms ease-in-out;*/
}
.third:hover {
  background-color: grey;
  /*box-shadow: 0 0 10px 0 #3498db inset, 0 0 10px 4px #3498db;*/
}
/*REGISTER AS A COMPANY*/



@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
/*  .vl {
    display: none;
  }*/
  /* show the hidden text on small screens */

}





.btn-padding{
  padding:10px 50px 10px 50px; 
  text-align:center !important; 
  background: #006DF0;
}

@media only screen and (max-width: 370px) {

.labal-font{
    font-size: .4rem;
  }

.btn-padding{
  padding:10px; 
  text-align:center !important; 
  background: #006DF0;
}

}

@media only screen and (max-width: 937px) {
  .col {
    width: 100%;
  }
}

    </style>
    <div class="error-pagewrap">
      <div class="error-page-int">
        <div class="login-brand mb-5">
          <img src="<?=base_url()?>assets/img/logo/New Project.png" alt="logo" width="100" class="shadow-light rounded-circle">
        </div>
        <div class="text-center m-b-md custom-login" style="margin-top: 20px;">
          <h3>Login Here As A User</h3>
        </div>
        <!-- <div class="content-error"> -->
<!--           <div class="hpanel">
            <div class="panel-body"> -->

<div class="container ">
  <div class="row" style="background:white;">
    <div class="col-lg-12 col-md-12 col-sm-12 col-12 panel-body ">
      <b style="float: right;">Download Agencies Version <a href="#"><img height="30px" width="30px" src="<?=base_url()?>assets/img/1024px-Font_Awesome_5_regular_arrow-circle-up_blue.svg.png"></a></b><br><br><br>
              <form action="<?=base_url('doLogin')?>" id="loginForm" method="POST" class="col">
                <?php if ($this->session->flashdata()) { ?>
                <div class="alert alert-warning p-2">
                  <?= $this->session->flashdata('msg'); ?>
                </div>
                <?php } ?>
                <div class="form-group email-input">
                  <label for="email">Email</label>
                  <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                  <?= form_error('email', '<div class="text-warning">', '</div>'); ?>
                  <div class="invalid-feedback labal-font">
                    Please fill in your email
                  </div>
                </div>
                <div class="form-group">
                  <input type="hidden" name="type" value="user">
                  <label for="email">password</label>
                  <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                  <?= form_error('password', '<div class="text-warning">', '</div>'); ?>
                  <div class="invalid-feedback labal-font">
                    please fill in your password
                  </div>
                </div>
                <div class="form-group" style="text-align:center">
                  <button type="submit" class="btn btn-primary btn-padding" tabindex="4">Login</button>
                </div>
              </form>
    </div>

  </div>
</div>





<!--             </div>
          </div> -->
        <!-- </div> -->



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

<!--         <br><div class="mt-5 text-muted text-center">
          Don't have an account? <a href="<?=base_url('signup')?>">Create One</a>
        </div> -->
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