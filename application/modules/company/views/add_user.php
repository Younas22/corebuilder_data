<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<div class="breadcome-area" style="display:none">
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
<div style="margin-top:20px"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description">User Information</a></li>
        </ul>

<?php if ($this->session->flashdata('is_unique')) { 
    echo "This User is already exists!";
    $this->session->unset_userdata('is_unique'); 
} ?>

        <div id="myTabContent" class="tab-content custom-product-edit">
        <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad">
                               <form action="<?=base_url('company/submit_user')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                        <label style="color:red; font-size: 20px;">*</label>
                                                <input name="company_id" type="hidden" value="<?=$this->session->userdata('logged_in')->id;?>">
                                                <input name="first_name" type="text" class="form-control" placeholder="First Name" required="" autocomplete="off">
                                            </div>
                                            <div class="form-group">
                                        <label style="color:red; font-size: 20px;">*</label>
                                                <input name="last_name" type="text" class="form-control" placeholder="Last Name" required="">
                                            </div>
                                            <div class="form-group">
                                        <label style="color:red; font-size: 20px;">*</label>
                                                <input name="user_phone" type="number" class="form-control" placeholder="Mobile no." required="">
                                                <!-- <?= form_error('user_phone', '<div class="text-warning">', '</div>'); ?> -->
                                            </div>
                                            <div class="form-group">
                                        <label style="color:red; font-size: 20px;">*</label>
                                            <input name="company_email"  type="email" class="form-control" placeholder="Email" required="">
                                                <!-- <?= form_error('is_unique', '<div class="text-warning">', '</div>'); ?> -->
                                            </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress larg_devices_mb">
                                            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>