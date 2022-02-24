<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<style type="text/css">input[type=text] { text-align:left } .form-control{
    padding: 6px,4px !important;
}
.form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: red;
            opacity: 1; /* Firefox */
}

.form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
            color: red;
}

.form-control::-ms-input-placeholder { /* Microsoft Edge */
            color: red;
 }

 .vl {
  border-left: 6px solid red;
  height: 360px;
  position: absolute;
  left: 50%;
  margin-left: -3px;
  top: 0;
}

.a{padding-right: 38px}
@media only screen and (max-width: 1264px) {
 .vl {
    display: none;
}

.a{padding-right: 24px !important;}

@media only screen and (max-width: 992px) {
 .vl {
    display: none;
}

 .cc {
    border-top: 1px solid black;
    margin-bottom: 10px;
 }
}

@media only screen and (max-width: 768px) {
 .vl {
    display: none;
}

 .cc {
    border-top: 1px solid black;
        margin-top: 10px;
        margin-bottom: 10px;
}
}
</style>
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
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <div class="hide">
            <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description"><?=$this->uri->segment(3)?></a></li>
            <li><a href="#description"  style="color:green !important;">Right: <?php if (empty($get_content_writing->_right)) {
                echo "0";
            }else{echo $get_content_writing->_right;}?></a></li>
            <li><a href="#description"  style="color:red !important;">Wrong: <?php if (empty($get_content_writing->wrong)) {
                echo "0";
            }else{echo $get_content_writing->wrong;}?></a></li>
            <li><a href="#description"  style="color:blue; !important;">Earning: <?php if (empty($get_content_writing->earning)) {
                echo "0";
            }else{echo $get_content_writing->earning;}?></a></li>
            <li><a href="#Skip"  style="color:gray; !important;">Skip</a></li>
        </ul><hr>
        </div>
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad">

<form action="<?=base_url('user/submit_content_writing')?>" class="needsclick add-professors" id="demo1-upload" method="POST">

<?php if ($this->uri->segment(3) == 'number-filling') {?>
<!-- number filling form-->
    <div class="all-form-element-inner">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_one?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_two?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_three?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_char?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_panch?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_chay?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_sat?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_ath?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_no?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <label class=""><input class="form-control" type="text" size="10" value="<?=$filling_projects->num_box_ten?>" disabled></label>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4"></div>
            </div><hr>

            <div class="row" style="text-align:center;">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_one" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_two" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_three" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_char" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_panch" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_chay" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_sat" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_ath" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_no" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-4">
                    <input type="text" class="form-control" name="num_box_ten" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-2 col-xs-1"></div>
            </div>

        </div>
    </div><br><br><hr>

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light" onclick="alert('Do you want to end the project?');">End Project</a>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- end number filling form-->


<!-- invoice-calculation form-->
<?php if ($this->uri->segment(3) == 'invoice-calculation') {?>
    <div class="all-form-element-inner">
        <div class="form-group-inner">

<div class="row" style="text-align:left;">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="">Instructions</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class="">Submit Your Answer</label>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""><input type="" class="form-control" name=""></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class=""></label>
                        </div>
                    </div>
                </div><br><br>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <center><h5>Automatically Generate Shuffeled invoice</h5></center>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col" colspan="2">Items</th>
      <th scope="col">Qty</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td colspan="2">Mark</td>
      <td>54</td>
      <td>21</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2">Jacob</td>
      <td>54</td>
      <td>3232</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>2</td>
      <td>546</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2">Larry the Bird</td>
      <td>656</td>
      <td>65654</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2">Larry the Bird</td>
      <td>76</td>
      <td>768789</td>
    </tr>
  </tbody>
</table>
                </div>
            </div>


        </div>
    </div><br><br><hr>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light" onclick="alert('Do you want to end the project?');">End Project</a>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- end invoice-calculation  form-->


<!-- form-filling form-->
<?php if ($this->uri->segment(3) == 'form-filling') {?>
    <div class="all-form-element-inner">
        <div class="form-group-inner">

            <div class="row" style="text-align:left;">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="">Instructions</label>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                        </div>
                    </div><hr>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Name</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">Younas</label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Email ID</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">Eabc@gmail.com</label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Contact Us</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">+473897492374</label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Country</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">Pakistan</label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">City</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">Lahore</label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">D.O.B</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">1995-01-01</label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Qualification</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">10th</label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Occupation</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class="">Web developer</label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class="">+92</label>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <label class="">Web developer</label>
                        </div>
                    </div> -->
                </div><div class="vl"></div>
<!--     <div class="product-payment-inner-st">

    </div> -->
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div>
            <ul id="myTabedu1" class="tab-review-design cc" style="margdin-left: 200px;">
            <li class="active"><a href="#description" class="a" style="font-size: 15px;"><?=$this->uri->segment(3)?></a></li>
            <li><a href="#description" class="a"  style="color:green !important; font-size: 15px;">Right: <?php if (empty($get_content_writing->_right)) {
                echo "0";
            }else{echo $get_content_writing->_right;}?></a></li>
            <li><a href="#description" class="a"  style="color:red !important; font-size: 15px;">Wrong: <?php if (empty($get_content_writing->wrong)) {
                echo "0";
            }else{echo $get_content_writing->wrong;}?></a></li>
            <li><a href="#description" class="a"  style="color:blue; font-size: 15px;;">Earning: <?php if (empty($get_content_writing->earning)) {
                echo "0";
            }else{echo $get_content_writing->earning;}?></a></li>
            <li><a href="#Skip" class="a" style="color:gray; font-size: 15px;">Skip</a></li>
        </ul><hr>
        </div>
                    <center><h5>Form Filling Section</h5></center>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Name" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Email ID" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Contact No:" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Country" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="City" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="D.O.B" />
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Qualification" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" placeholder="Occupation" />
                        </div>
                    </div>

                    <!-- <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" class="form-control" name="num_box_panch" />
                        </div>
                    </div> -->
                </div>
            </div>





        </div>
    </div><br><br><hr>
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light" onclick="alert('Do you want to end the project?');">End Project</a>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- end form-filling form-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>