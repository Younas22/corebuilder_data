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
<div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap">
                            <h4>Add Project Image</h4>
                            <div class="add-product">
                                <a href="#" id="add_project_img">Add Project Image</a>
        <input type="hidden" id="up_id" name="up_id" value="<?=$up_id?>">
        <input type="hidden" id="get_quantity" name="quantity" value="<?=$get_quantity->quantity?>">
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <!-- <th>Select Image</th> -->
                                        <th>Project Title</th>
                                        <th>Status</th>
                                    </tr>
                                    <?php foreach ($project_img as $key):?>
                                        <tr>
                                        <td>1</td>
<td>
<div class="inline-checkbox-cs">
    <label class="checkbox-inline i-checks pull-left">
<input type="checkbox" value="<?=$key->id?>" name="up_data_id" id="inlineCheckbox1"><img src="<?=base_url('assets/img/project_img/').$key->p_image?>" alt="" /></label>
</div>
</td>
                                        <td><?=$key->projects_title?></td>
                                        <td>
                                <?php if ($key->p_status == 1) {
                                echo "<button class='pd-setting'>Active</button>";} ?>
                                
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                    
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <?=$links?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>