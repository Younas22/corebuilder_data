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
                            <?php if ($user_type == 'admin') { ?>
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
    <div class="product-payment-inner-st">
        <ul id="myTabedu1s" class="tab-review-design">
            <li class="active"><a href="#description"><?=$title?></a></li>
            <!-- <li class="active" style="float: right;"><a href="<?=base_url('admin/add-project-images')?>">Add project images</a></li> -->
        </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            
                <div class="dropzone_files" class="pro-ad addcoursepro">
                            <!-- images -->
         <div class="courses-area">
            <div class="container-fluid">

                <?php if ($get_images_folder) { ?>
                <div class="row flex">
                    <?php foreach ($get_images_folder as $img): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
                        <div class="thumbnail">
                            <img src="<?=base_url('assets/img/project_img/').$img->folder_no.'/'.$img->p_image?>" alt="">
                            <div class="product-buttons">
    <!-- <a href="<?=base_url('admin/project-images/del/').$img->id?>" class="btn btn-primary">Delete</a> -->
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div> 
            <?php } else { ?>
                <div class="row"></div><span>data not found!</span>
            <?php } ?>
                
                
            </div>
        </div>
                            <!-- end images -->
<?= $links; ?>
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