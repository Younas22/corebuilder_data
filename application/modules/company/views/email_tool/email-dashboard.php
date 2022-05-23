<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<div class="breadcome-area" style="display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control">
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu">
                                <li><a href="<?=base_url()?>">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <?php if ($user_type == 'company') { ?>
                            <li><span class="bread-blod"><?=$user_type?> / <?=$url_title?></span>
                            <?php } ?>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div style="margin-top:50px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>All Your Contacts</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa fa-users text-dark"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success"><?=$total_mail->total_mail?></h1>
                            <!-- <hr> 10 -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Opened</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa fa-eye text-info"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success">4</h1>
                            <!-- <hr> 0 % -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Clicked</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa fa-hand-o-up text-success"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success">3</h1>
                            <!-- <hr> 0 % -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="stats-title pull-left">
                            <h4>Blacklisted</h4>
                        </div>
                        <div class="stats-icon pull-right">
                            <i class="fa fa-ban text-danger"></i>
                        </div>
                        <div class="m-t-xl widget-cl-1">
                            <h1 class="text-success">2</h1>
                            <!-- <hr> 0 % -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Email Compaigns</h2>
                            <p class="font-bold text-info"><i>No Compaign Found</i></p>
                            <div class="m icon-box">
                                <i class="educate-icon educate-miscellanous"></i>
                            </div>
                            <a href="<?=base_url('company/create-compaign');?>" class="btn btn-primary widget-btn-2 btn-sm" style="margin-top: 20px; color: white">Create a New Compaign</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>