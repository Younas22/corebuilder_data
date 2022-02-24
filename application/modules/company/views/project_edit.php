<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<div class="breadcome-area">
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
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description">Edit Project Information</a></li>
        </ul>
        
        <div id="myTabContent" class="tab-content custom-product-edit">
        <div class="product-tab-list tab-pane fade active in" id="description">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad">
                                <form action="<?=base_url('company/project_update')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
                                    <div class="row">
                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <input type="hidden" name="p_id" value="<?=$project_edit->id?>">
                            <input type="hidden" name="u_id" value="<?=$project_edit->u_id?>">
                                        <label>Start date</label>
                                            <div class="form-group">
                                                <input name="start_date" id="start_date" type="datetime-local" class="form-control" placeholder="start date" value="<?=$project_edit->start_date?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <label>End date</label>
                                            <div class="form-group">
                                                <input name="end_date" id="end_date" type="datetime-local" class="form-control hasDatepicker" placeholder="end date" value="<?=$project_edit->end_date?>">
                                            </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress">
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
<!-- jQuery first, then Popper.js and Bootstrap JS. -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>