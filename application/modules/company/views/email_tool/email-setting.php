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

<style>
.cir {
  width: 50px;
  height: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 50px;
  color: #fff;
  text-align: center;
}
</style>

<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Default Settings</h2>
                            <div class="m icon-box">
                                <i class="fa fa-cog cir" style="background: #8a8d8f;"></i>
                            </div>
                            <button class="btn btn-custon-rounded-two btn-default" style="margin-top: 20px;">Configure</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Test List</h2>
                            <div class="m icon-box">
                                <i class="fa fa-users cir" style="background: #20d2a1"></i>
                            </div>
                            <button class="btn btn-custon-rounded-two btn-default" style="margin-top: 20px;">Set up</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Unsubscribe Pages</h2>
                            <div class="m icon-box">
                                <i class="fa fa-times cir" style="background: #fe4b10"></i>
                            </div>
                            <button class="btn btn-custon-rounded-two btn-default" style="margin-top: 20px;">Personalize</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Google Analytics & Social</h2>
                            <div class="m icon-box">
                                <i class="fa fa-google cir" style="background: #fe4b10"></i>
                            </div>
                            <button class="btn btn-custon-rounded-two btn-default" style="margin-top: 20px;">Configure</button>
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
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Global Calculated Values</h2>
                            <div class="m icon-box">
                                <i class="fa fa-calculator cir" style="background: #8a8d8f"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Webhooks</h2>
                            <div class="m icon-box">
                                <i class="fa fa-flag cir" style="background: #10d6fe"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Your Sender & Domain</h2>
                            <div class="m icon-box">
                                <i class="fa fa-user cir bg-primary"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-3">
                <div class="hpanel widget-int-shape responsive-mg-b-30">
                    <div class="panel-body">
                        <div class="text-center content-box">
                            <h2 class="m-b-xs">Get a dedicated IP</h2>
                            <div class="m icon-box">
                                <i class="fa fa-send cir" style="background: #fb764b"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>