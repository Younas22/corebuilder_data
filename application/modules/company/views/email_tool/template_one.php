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


        <!-- tabs start-->
        <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content-details shadow-reset">
                            <h2>About Templates one</h2>
                            <p>These are the Custom Animate Tab Bootstrap. Using animate bounce, flash, pulse, rubberBand, shake, swing, tada, wobble, jello, bounceIn, bounceInDown, bounceInLeft, bounceInRight, bounceInUp, fadeIn, fadeInDown, fadeInDownBig,
                                fadeInLeft, fadeInLeftBig, fadeInRight, fadeInRightBig, fadeInUp, fadeInUpBig, flipInX, flipInY, lightSpeedIn, rotateIn, rotateInDownLeft, rotateInDownRight, rotateInUpLeft, rotateInUpRight, rollIn, zoomIn, zoomInDown,
                                zoomInLeft, zoomInRight, zoomInUp etc.</p>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 100px;">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="edu-tab1 mg-t-30">
                            <div class="tab-content" style="background: white; padding: 15px;">
                                <a href="<?=base_url('company/create-compaign')?>" class="btn btn-custon-four btn-danger btn-md">back</a>
                                <div class="hpanel email-compose mailbox-view">
                                    <div class="panel-heading hbuilt">
                                        <div class="p-xs h4">
                                            <small class="pull-right view-hd-ml">
                                            08:26 PM (16 hours ago)
                                            </small> Email view
                                        </div>
                                    </div>
                                    <div class="border-top border-left border-right bg-light">
                                        <div class="p-m custom-address-mailbox">
                                            <div>
                                                <span class="font-extra-bold">Subject: </span> Lorem Ipsum has been the industry's standard dummy text ever
                                            </div>
                                            <div>
                                                <span class="font-extra-bold">From: </span>
                                                <a href="#">example.@email.com</a>
                                            </div>
                                            <div>
                                                <span class="font-extra-bold">Date: </span> 14.10.2016
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body panel-csm">
                                        <div>
                                            <h4>Hello Jonathan! </h4>
                                            <p>Dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the dustrys</strong> standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                                a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                                                containing Lorem Ipsum passages, and more
                                                <br/>
                                                <br/>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                                            a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. recently with.</p>
                                            <p>Mark Smith
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                </div>
            </div>
        </div>
        <!-- tabs End-->