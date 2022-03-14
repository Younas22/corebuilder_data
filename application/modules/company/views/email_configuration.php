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
<div style="margin-top:20px;"></div>
</div>


<?php if (!empty($this->session->flashdata('email_configuration_msg'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('email_configuration_msg'); ?></p>
</div>
<?php } ?>

<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid" >
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" > <!-- padding: 180px;  -->
    <div class="product-payment-inner-st larg_devices_mb" style="background: white;">
        <ul id="myTabedu1" class="tab-review-design larg_devices_mb">
            <li class="active"><a href="#description"><?=$title?></a></li>
        </ul>


        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>If you want to CREATE A CUSTOM PROJECT</b>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <hr>

                <form action="<?=base_url('company/submit_email_configuration')?>" method="post">
                    <div class="form-group">
                        <label>Configure mail</label><br>
                        <span style="color:red;">All the projects will be sent to users from this email</span>
                        <input type="text" name="configure_mail" class="form-control" placeholder="Configure Email" value="<?=$profile->configure_mail?>">
                    </div>
                    <div class="form-group">
                        <label>Configure mail password</label><br>
                        <input type="text" name="configure_mail_pass" class="form-control" placeholder="Configure Email Password" value="<?=$profile->configure_mail_pass?>">
                    </div>
                    <button type="submit">Add Email Configuration data</button>
                </form>
        </div>


    </div>
</div>
</div>
</div>
</div>