<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?=Ucfirst(profile()->user_type)?> Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/')?>img/logo/logosn.png">
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css"> -->
    
    <!-- <link rel="stylesheet" href="<?=base_url('assets/')?>css/new_icon/uicons-regular-rounded.css"> -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/font-awesome.min.css">
    <!-- owl.carousel CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/owl.transitions.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/animate.css">
    <!-- normalize CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/normalize.css">
    <!-- meanmenu icon CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/meanmenu.min.css">
    <!-- main CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/main.css">
    <!-- educate icon CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/educate-custon-icon.css">
    <!-- morrisjs CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS  -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/datapicker/datepicker3.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/form/all-type-forms.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/alerts.css">
    <?php if (check_theme() == 'blue') { ?>
      <link rel="stylesheet" href="<?=base_url('assets/')?>css/style.css">
    <?php }else{?>
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/red_style.css">
    <?php } ?>
    <!-- dropzone -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/dropzone.css">
    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/responsive.css">
    <link rel="stylesheet" href="<?=base_url('assets/')?>css/cd_popup.css">
    <!-- modernizr JS -->
    <script src="<?=base_url('assets/')?>js/vendor/modernizr-2.8.3.min.js"></script>

    <style>

    /*globel css*/
.larg_devices_mb{
  margin-bottom: 50px;
}
/*end globel css*/

.mobile_logo_hide{
  display: none;
}

.top_marg{
    margin-bottom: 50px;
}

.folder_font_size{
    font-size: 1.2vw;
}

.folder_size{
    font-size: 9vw;
}

@media only screen and (min-width: 768px) {
  .user_mb {
    margin-bottom: 70px;
  }
}


.sr-input-func button {
    position: absolute;
    top: 5px;
    right: -5px;
    color: #999;
    transition: .5s ease-out;
    font-size: 14px;
} 


@media only screen and (max-width: 768px) {
  .user_mb {
    margin-bottom: 120px;
  }
  .larg_devices_mb{margin-bottom: 120px;}


.sr-input-func button {
  /*background-color: black;*/
    position: absolute;
    top: 5px;
    right: 8px;
    color: #999;
    transition: .5s ease-out;
    font-size: 12px;
}


}
.form-control{
  /*width: 200px !important;*/
}

@media only screen and (max-width: 988px) {
  .mobile_logo_hide{
    display: block;
    background-color: white;
  }

  .top_marg{
      margin-bottom: 0;
      background-color: white;
  }

  .folder_font_size{
    font-size: 1vw;
  }

  .folder_size{
    font-size: 15vw;
}

}

@media only screen and (max-width: 448px) {

  .single-product-text a{
    font-size: 9px !important;
  }

}

@media only screen and (max-width: 1168px) {
  .top_marg{
      margin-bottom: 0;
      background-color: white;

  }
}

/*red color them*/
.header-top-area{

}
/*end red color them*/
</style>

  </head>
  <body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Start Left menu area -->
    <?php $this->load->view('side_bar'); ?>
    <!-- End Left menu area -->

<style>
#load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("<?=base_url('assets/img/output-onlinegiftools.gif')?>") no-repeat center center rgb(204, 204, 179)
}
</style>
<div id="load"></div>


    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 top_marg">
            <div class="logo-pro mobile_logo_hide">
              <a href="index.html"><img class="main-logo" src="<?=base_url('assets/')?>img/logo/logo.png" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
      <div class="header-advance-area">
        <div class="header-top-area">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="header-top-wraper">
                  <div class="row">
                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                      <div class="menu-switcher-pro">
                        <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                        <i class="educate-icon educate-nav"></i>
                        </button>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                      <div class="header-top-menu tabl-d-n"  style="display:none;">
                        <ul class="nav navbar-nav mai-top-nav">
                        <li class="nav-item"><a href="<?=base_url(profile()->user_type.'/dashboard')?>" class="nav-link">Home</a></li>
                        
                    <li class="nav-item dropdown res-dis-nn">
                      <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Projects <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                      <div role="menu" class="dropdown-menu animated zoomIn">
                        <a href="#" class="dropdown-item">Content Writing</a>
                        <a href="#" class="dropdown-item">Novel Typing</a>
                        <a href="#" class="dropdown-item">Dialogue Typing</a>
                        <a href="#" class="dropdown-item">Captcha</a>
                        <a href="#" class="dropdown-item">Form Filling</a>
                        <a href="#" class="dropdown-item">Invoice Calculation</a>
                        <a href="#" class="dropdown-item">Number Filling</a>
                      </div>
                    </li>

                </ul>
              </div>
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
              <div class="header-right-info">
                <ul class="nav navbar-nav mai-top-nav header-right-menu">

                <li class="nav-item">

<?php if (profile()->user_type == 'company') { ?>
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
  <?php if (profile()->company_logo) {?>
  <img style="width: 30px !important; height:30px !important; border:1px solid;" src="<?=base_url('assets/')?>img/profile/<?=profile()->company_logo?>"  alt="" />
  <?php }else{ ?>
  <img src="<?=base_url('assets/')?>img/profile/1634211873icon-5359553_1920.png?>" alt="" />
  <?php } ?>
  <span class="admin-name"><?=ucfirst(profile()->company_name)?></span>
  <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
</a>
<?php }else{ ?>
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
  <?php if (profile()->profile_img) {?>
  <img style="width: 30px !important; height:30px !important; border:1px solid;" src="<?=base_url('assets/')?>img/profile/<?=profile()->profile_img?>" alt="" />
  <?php }else{ ?>
  <img src="<?=base_url('assets/')?>img/profile/1634211873icon-5359553_1920.png?>" alt="" />
  <?php } ?>
  <span class="admin-name"><?=ucfirst(profile()->first_name).' '. ucfirst(profile()->last_name)?></span>
  <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
</a>
<?php } ?>




                  <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                  <li><a href="<?=base_url($this->session->userdata('logged_in')->user_type.'/profile')?>"><span class="edu-icon edu-user-rounded author-log-ic"></span>My Profile</a>
                </li>
            <li><a href="<?php if(profile()->user_type == 'admin'){echo base_url('logout/company');}else{echo base_url('logout/').profile()->user_type;}?>"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
          </li>
        </ul>
      </li>

</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu start -->

<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
<ul class="mobile-menu-nav">

<?php if ($this->session->userdata('logged_in')->user_type == 'company') { ?>
<li><a href="<?=base_url('company/dashboard')?>">Dashboard</a></li>
<li><a href="<?=base_url('company/profile')?>">Profile</a></li>
<li><a href="<?=base_url('company/add-user')?>">Add User</a></li>
<li><a href="<?=base_url('company/all-users')?>">View User</a></li>

<li><a data-toggle="collapse" data-target="#democrou" href="#">Create Project <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
<ul id="democrou" class="collapse dropdown-header-top">
<li><a href="<?=base_url('company/projects-detiles/content-writing')?>">Content Writing</a>
</li>
<li><a href="<?=base_url('company/projects-detiles/content-writing')?>">Novel Typing</a>
</li>
<li><a href="<?=base_url('company/projects-detiles/novel-typing')?>">Dialogue Typing</a>
</li>
</ul>
</li>


<li><a href="<?=base_url('company/withdrawal')?>">Withdrawal Request</a></li>
<li><a href="<?=base_url('company/sms-panel')?>">SMS Panel</a></li>
<li><a href="<?=base_url('company/email-server')?>">Email Server</a></li>
<li><a href="<?=base_url('company/whatsApp-server')?>">WhatsApp Server</a></li>
<li><a href="<?=base_url('company/video-training')?>">Traing Video</a></li>
<li><a href="<?=base_url('company/get-in-touch')?>">Get in Touch</a></li>
<li><a href="<?=base_url('company/feedback')?>">Feedback</a></li>
<li><a href="<?=base_url('company/unlock-projects')?>">Unlock Projects</a></li>
<li><a href="<?=base_url('company/develop-projects')?>">Develop Projects</a></li>
<li><a href="<?=base_url('help')?>">Help</a></li>
<?php } ?>

<?php if ($this->session->userdata('logged_in')->user_type == 'user') { ?>
<li><a href="<?=base_url('user/dashboard')?>">Dashboard</a></li>
<li><a href="<?=base_url('user/profile')?>">Profile</a></li>
<?php if (!empty(user_active_projects())) { ?>
<li><a data-toggle="collapse" data-target="#democrou" href="#">Projects <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
<ul id="democrou" class="collapse dropdown-header-top">
<li><a href="<?=base_url('user/user-projects/').$this->session->userdata('logged_in')->id?>">All Projects</a>
</li>
</ul>
</li>
<?php } ?>
<li><a href="<?=base_url('user/withdraw/').$this->session->userdata('logged_in')->id?>">Withdraw Requests</a></li>

<?php } ?>


</ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu end -->




<center>
  <div id="profile_Modal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
        <h4 class="modal-title">Complete Profile</h4>
      </div>
      <div class="modal-body">
        <p>
          <?php if (check_company_profile() == 'company_website') {
            echo "You need add Company Website";
          }

          if (check_company_profile() == 'company_logo') {
            echo "You need add Company Logo";
          }

          if (check_company_profile() == 'Please add Company Logo and Company Website') {
            echo "Please add Company Logo and Company Website";
          } ?>


        </p>
      </div>
      <div class="modal-footer">
          <a  href="<?=base_url('company/profile')?>" class="btn btn-default">Yes</a>
        <!-- <button type="button" class="btn btn-default" data-dismiss="modal">No</button> -->
      </div>
    </div>
  </div>
</div>
</center>