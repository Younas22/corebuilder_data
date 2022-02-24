<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<style>
.footer {
bottom: 0;
margin-bottom: 0;
border-width: 1px 0 0;
position: fixed;
right: 0;
left: 0;
z-index: 1030;
}
</style>
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
                            <?php if ($user_type == 'user') { ?>
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
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st" >
        <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#">Project Status</a></li>
        </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="review-content-section">
                    <div id="dropzone1" class="pro-ad">
                        
                        <h4 style="text-align: center;">Your Project is End!</h4>
                        <div class="payment-adress" style="margin-top:50px; text-align: center;">
                            <a class="btn btn-primary waves-effect waves-light" href="<?=base_url('user/dashboard')?>">Go to Home</a>
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