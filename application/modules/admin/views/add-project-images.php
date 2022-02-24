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
                            <li><span class="bread-blod"><?=$user_type?> /add-project-images</span>
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
            <li class="active"><a href="#description">Add Project Images</a></li>
        </ul>
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            
                            <div class="dropzone_files" class="pro-ad addcoursepro" style="text-align:center;">
                                <form action="<?= base_url('admin/upload_project_images') ?>" class="" id="fileupload" enctype="multipart/form-data" method="POST">
                                    <div class="row" style="margin-bottom: 25px;">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-lg-offset-3 col-md-offset-3 col-xs-offset-3 col-sm-offset-3 col-offset-3">
                                            <select class="c-select form-control" name="p_id" id="project_id">
                                                <option selected>select project type</option>
                                                <?php foreach ($projects as $pkey):?>
                                                <option value="<?=$pkey->id?>"><?=$pkey->projects_title?></option>
                                                <?php endforeach; ?>
                                            </select><br>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" name="inlineCheckbox1" id="inlineCheckbox1" value="1">
  <label class="form-check-label" for="inlineCheckbox1">Folder 1</label>


  <input class="form-check-input" type="checkbox" name="inlineCheckbox2" id="inlineCheckbox2" value="2">
  <label class="form-check-label" for="inlineCheckbox2">Folder 2</label>



  <input class="form-check-input" type="checkbox" name="inlineCheckbox3" id="inlineCheckbox3" value="3">
  <label class="form-check-label" for="inlineCheckbox3">Folder 3</label>

  <input class="form-check-input" type="checkbox" name="inlineCheckbox4" id="inlineCheckbox4" value="4">
  <label class="form-check-label" for="inlineCheckbox4">Folder 4</label>



  <input class="form-check-input" type="checkbox" name="inlineCheckbox5" id="inlineCheckbox5" value="5">
  <label class="form-check-label" for="inlineCheckbox5">Folder 5</label>

  <input class="form-check-input" type="checkbox" name="inlineCheckbox6" id="inlineCheckbox6" value="6">
  <label class="form-check-label" for="inlineCheckbox6">Folder 6</label>
</div><br><br><br>

                                            <!-- writing -->
                                <div class="form-group-inner" id="writing">
                                    <input type="file" name="files[]" multiple="">
                                </div>

                                <style>.hide{display: none;}</style>

                                            <!-- form filling -->
                                            <div class="form-group-inner" id="form_filling">
                                                <div class="hide">
                                                <h5>form filling</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_one"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_two"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_three"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_four"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_panch"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_chay"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_sat"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_ath"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_no"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="form_val_ten"/>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <!-- end form filling -->



                                        <!-- numbring -->
                                            <div class="form-group-inner" id="numbring">
                                                <div class="hide">
                                                <h5>form numbring</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_one" />
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_two"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_three"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_char"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_panch"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_chay"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_sat"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_ath"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_no"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="num_box_ten"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <!-- end numbring -->                                                          <!-- invoice -->
                                            <div class="form-group-inner" id="invoice">
                                                <div class="hide">
                                                <h5>form invoice</h5>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="invoice_one"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="invoice_two"/>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="invoice_three"/>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <input type="text" class="form-control" name="invoice_char"/>
                                                    </div>
                                                </div>

                                            <div class="row">
                                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                    <input type="text" class="form-control" name="invoice_panch"/>
                                                </div>
                                            </div>
                                            </div>

                                            </div>
                                            <!-- end invoice -->


                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
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