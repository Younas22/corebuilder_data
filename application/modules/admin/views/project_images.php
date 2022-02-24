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
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <ul id="myTabedu1s" class="tab-review-design">
            <li class="active"><a href="#description"><?=$title?></a></li>
            <li class="active" style="float: right;"><a href="<?=base_url('admin/add-project-images')?>">Add project images</a></li>
        </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            
                            <div class="dropzone_files" class="pro-ad addcoursepro" >
<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 col-lg-offset-2">
<form action="<?= base_url('admin/project-images') ?>" class="" id="fileupload" enctype="multipart/form-data" method="GET">
<div class="input-group custom-go-button">
<select class="form-control" name="project_id">
<option selected>select project type</option>
<?php foreach ($projects as $pkey):?>
<option value="<?=$pkey->id?>"><?=$pkey->projects_title?></option>
<?php endforeach; ?>
</select>
<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go!</button></span>
</div>
</form>
</div>




                            <!-- images -->
         <div class="courses-area">
            <div class="container-fluid">
                <div class="row" style="text-align:center;">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/1')?>" class="btn btn-primary">folder-1</a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/2')?>" class="btn btn-primary">folder-2</a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/3')?>" class="btn btn-primary">folder-3</a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/4')?>" class="btn btn-primary">folder-4</a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/5')?>" class="btn btn-primary">folder-5</a>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4" style="margin-top: 20px;">
                        <a href="<?=base_url('images/folder/6')?>" class="btn btn-primary">folder-6</a>
                    </div>
                </div><hr>

                <?php if ($get_project_images) { ?>
                <div class="row flex">
                    <?php foreach ($get_project_images as $img): ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12" style="text-align:center;">
                        <div class="thumbnail">
                            <img src="<?=base_url('assets/img/project_img/').$img->p_image?>" alt="">
                            <div class="product-buttons">
    <a href="<?=base_url('admin/project-images/del/').$img->id?>" class="btn btn-primary">Delete</a>
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