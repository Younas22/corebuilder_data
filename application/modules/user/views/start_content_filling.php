<?php  $user_type = $this->session->userdata('logged_in')->user_type; 


// dd($filling_projects);

?>
<style type="text/css">
input[type=text] { text-align:left } .form-control{ padding: 6px,4px !important;}
.form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: grey;
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

.a{padding-right: 38px!important;}
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
    margin-top: 30px;
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

<div class="breadcome-area" style="display:none;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list single-page-breadcome">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <form role="search" class="sr-input-func">
                                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" placeholder="Search..." class="search-int form-control">
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
<div style="margin-top:20px"></div>
</div>
<!-- Single pro tab review Start-->


<div class="single-pro-review-area mt-t-30 mg-b-15 fast">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <div class="<?php if($this->uri->segment(3) == 'form-filling'){echo "hidde";} ?>">
            <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#"><?=$this->uri->segment(3)?></a></li>
            <li><a href="#"  style="color:green !important;">Right: <?php if (empty($get_content_writing->_right)) {
                echo "0";
            }else{echo $get_content_writing->_right;}?></a></li>
            <li><a href="#"  style="color:red !important;">Wrong: <?php if (empty($get_content_writing->wrong)) {
                echo "0";
            }else{echo $get_content_writing->wrong;}?></a></li>
            <li><a href="#"  style="color:blue; !important;">Earning: <?php if (empty($get_content_writing->earning)) {
                echo "0";
            }else{echo $get_content_writing->earning;}?></a></li>
            <li><a href="#"  style="color:gray; !important;">Skip: <?=$get_content_writing->refrash_limit;?></a></li>
        </ul><hr>
        </div>


<?php if (!empty($this->session->flashdata('invoice_alert'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('invoice_alert'); ?></p>
</div>
<?php }?>

<?php if (!empty($this->session->flashdata('get_skip'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('get_skip'); ?></p>
</div>
<?php }?>


        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <div class="row">
<?php if ($this->uri->segment(3) == 'alpha-numeric-validation') {?>
<div style="margin:20px">
    <?php if ($project_type == 'Non Target') { ?>             
<label class=""><?=$project_type?> Alpha-Numeric Validation Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard.  
<br><br>

<ol>
<li>In Non-Target Alpha-Numeric Validation you are provided with unlimited sequences of Numbers.</li>
<li>
You must work for fixed time period set by the company you are working with.
</li>
    <li>In upper half of screen 10 numbers are displayed each number containing 10 character.</li>
    <li>Type displayed Numbers in boxes on lower half section of screen and click submit. System will automatically recognise if numbers filled are right or wrong. And earnings will be added accordingly.</li>
<li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Numbers displayed are character sensitive and you should fill as it is displayed (Avoid spaces and special characters)</li>
</ol>
</div>

<?php }else{?>
<label class=""><?=$project_type?> Alpha-Numeric Validation Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Target Alpha-Numeric Validation you are provided with fixed quantity of Number sequences.</li>
    <li>You must complete the Alpha-Numeric Validations in given time period.</li>
    <li>In upper half of screen 10 numbers are displayed each number containing 10 character.</li>
    <li>Type displayed Numbers in boxes on lower half section of screen and click submit. System will automatically recognise if numbers filled are right or wrong. And earnings will be added accordingly.</li>
    <li>Skips provided to you depends on the company that you are working for.
</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Numbers displayed are character sensitive and you should fill as it is displayed (Avoid spaces and special characters)</li>
</ol>
</div>
<?php } ?>
</div>
<?php } ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad">

<form action="<?=base_url('user/submit_number_filling')?>" class="needsclick add-professors" id="demo1-upload" method="POST">

<?php if ($this->uri->segment(3) == 'alpha-numeric-validation') {?>
<!-- Alpha-Numeric Validation form-->
    <div class="all-form-element-inner">
        <div class="form-group-inner">
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 1</label><input style="text-align:center;"  class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_one?>' disabled>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 2</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_two?>' disabled>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 3</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_three?>' disabled>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <label class="" style="color:gray;">box 4</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_char?>' disabled>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <label class="" style="color:gray;">box 5</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_panch?>' disabled>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
            </div>
<hr>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 6</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_chay?>' disabled>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 7</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_sat?>' disabled>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                    <label class="" style="color:gray;">box 8</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_ath?>' disabled>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 ">
                    <label class="" style="color:gray;">box 9</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_no?>' disabled>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <label class="" style="color:gray;">box 10</label><input style="text-align:center;" class="form-control" type="text"  onDrag="return false" onDrop="return false" autocomplete="off" size="30" value='<?=$filling_projects->num_box_ten?>' disabled>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
            </div><hr>

            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">

                    <input type="hidden" class="form-control" notab="notab" name="id" value="<?=$filling_projects->id?>" />
                    <input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
                    <input type="hidden" notab="notab" name="current_url" value="<?=current_url()?>">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_one" placeholder="box 1" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_two" placeholder="box 2" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_three" placeholder="box 3" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_char" placeholder="box 4" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_panch" placeholder="box 5" />
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_chay" placeholder="box 6" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_sat" placeholder="box 7" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_ath" placeholder="box 8" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_no" placeholder="box 9" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                    <input type="text" onDrag="return false" onpaste="return false;" onCopy="return false" onCut="return false" autocomplete="off" class="form-control" notab="notab" name="num_box_ten" placeholder="box 10" />
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12"></div>
            </div>

        </div>
    </div><br><br><hr>

    <div class="row larg_devices_mb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
<!-- <a class="btn btn-danger" href="<?=base_url('user/get_skip/').$get_content_writing->project_id?>"  style="color:white !important;">Skip</a> -->


<input type="hidden" name="project_id" value="<?=$get_content_writing->project_id?>">
<input type="hidden" name="redirect_url" value="<?=current_url();?>">
<a class="btn btn-danger" id="skips_btn" style="color:white !important;">Skip</a>



            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light end_project" href="#0">End Project</a>
            </div>
        </div>
    </div>

<div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>If you click yes, this project will end. You won’t be able to work?</p>
        <ul class="cd-buttons">
            <li><a href="<?=base_url('user/project_end/').$this->uri->segment(4)?>">Yes</a></li>
            <li><a href="#0" class="close_end">Cancel</a></li>
        </ul>
        <!-- <a href="#0" class="cd-popup-close img-replace"></a> -->
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
    <?php } ?>
<!-- end Alpha-Numeric Validation form-->
</form>

<!-- invoice-calculation form-->
<form action="<?=base_url('user/submit_invoice_filling')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
<?php if ($this->uri->segment(3) == 'invoice-calculation') { ?>
    <div class="all-form-element-inner">
        <div class="form-group-inner">

<div class="row" style="text-align:left;">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php if ($project_type == 'Non Target') { ?>             
<label class=""><?=$project_type?> Invoice Calculation Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Non-Target Invoice Calculation, you are provided with unlimited number of Invoices.</li>
    <li>
You have to work for fixed time period set by the company you are working with.
</li>
    <li>On left right hand side Invoices are displayed one by one. You might need to scroll to see full Invoice.</li>
    <li>You must calculate sum of all the amounts in invoice and write the sum in box on the right-hand side of screen. System will automatically recognise if the answer filled is right or wrong. And earnings will be added accordingly.</li>
<li>Invoices are extremely sensitive. Answer should be correct till 10 decimal places.</li>
    <li>Skips provided to you depends on the company that you are working for</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for).</li>
</ol>
</div>

<?php }else{?>
<label class=""><?=$project_type?> Invoice Calculation Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Target Invoice Calculation you are provided with fixed quantity of Invoices.</li>
    <li>You must complete the given Invoices in given time period.</li>
    <li>On left right hand side Invoices are displayed one by one. You might need to scroll to see full Invoice.</li>
    <li>You must calculate sum of all the amounts in invoice and write the sum in box on the right-hand side of screen. System will automatically recognise if the answer filled is right or wrong. And earnings will be added accordingly.</li>
    <li>Invoices are extremely sensitive. Answer should be correct till 10 decimal places.</li>
    <li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for).</li>
</ol>
</div>
<?php } ?>
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

                    <div class="row" style="text-align:center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="">Submit Your Answer</label>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<input type="hidden" class="form-control" notab="notab" name="id" value="<?=$filling_projects->id?>" />
<input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
<input type="hidden" notab="notab" name="current_url" value="<?=current_url()?>">
<input type="hidden" notab="notab" name="invoice_type" value="<?=$get_content_writing->invoice_type?>">
<label class=""><input style="border:1px solid;" type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="total_cost"></label>
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
                <center><h5><?=$project_type?> Invoice</h5></center>
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
      <td colspan="2"><?=$filling_projects->item_one?></td>
      <td><?=$filling_projects->q_one?></td>
      <td><?=$filling_projects->invoice_one?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td colspan="2"><?=$filling_projects->item_two?></td>
      <td><?=$filling_projects->q_two?></td>
      <td><?=$filling_projects->invoice_two?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2"><?=$filling_projects->item_three?></td>
      <td><?=$filling_projects->q_three?></td>
      <td><?=$filling_projects->invoice_three?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td colspan="2"><?=$filling_projects->item_char?></td>
      <td><?=$filling_projects->q_char?></td>
      <td><?=$filling_projects->invoice_char?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td colspan="2"><?=$filling_projects->item_panch?></td>
      <td><?=$filling_projects->q_panch?></td>
      <td><?=$filling_projects->invoice_panch?></td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td colspan="2"><?=$filling_projects->item_chay?></td>
      <td><?=$filling_projects->q_chay?></td>
      <td><?=$filling_projects->invoice_chay?></td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td colspan="2"><?=$filling_projects->item_sat?></td>
      <td><?=$filling_projects->q_sat?></td>
      <td><?=$filling_projects->invoice_sat?></td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td colspan="2"><?=$filling_projects->item_ath?></td>
      <td><?=$filling_projects->q_ath?></td>
      <td><?=$filling_projects->invoice_ath?></td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td colspan="2"><?=$filling_projects->item_no?></td>
      <td><?=$filling_projects->q_no?></td>
      <td><?=$filling_projects->invoice_no?></td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td colspan="2"><?=$filling_projects->item_ten?></td>
      <td><?=$filling_projects->q_ten?></td>
      <td><?=$filling_projects->invoice_ten?></td>
    </tr>
    <tr>
      <td colspan="4"></td>
      <td><b>Total ?</b></td>
    </tr>
  </tbody>
</table>
                </div>
            </div>

<!-- <?php

echo  $filling_projects->invoice_one
+$filling_projects->invoice_two
+$filling_projects->invoice_three
+$filling_projects->invoice_char
+$filling_projects->invoice_panch
+$filling_projects->invoice_chay
+$filling_projects->invoice_sat
+$filling_projects->invoice_ath
+$filling_projects->invoice_no
+$filling_projects->invoice_ten;


?> -->

<!-- <?php echo "<br>"; echo $filling_projects->difficulty; ?> -->
        </div>
    </div><br><br><hr>
    <div class="row larg_devices_mb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            <!-- <a class="btn btn-danger" href="<?=base_url('user/get_skip/').$get_content_writing->project_id?>"  style="color:white !important;">Skip</a> -->


<input type="hidden" name="project_id" value="<?=$get_content_writing->project_id?>">
<input type="hidden" name="redirect_url" value="<?=current_url();?>">
<a class="btn btn-danger" id="skips_btn" style="color:white !important;">Skip</a>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                                <a class="btn btn-primary waves-effect waves-light end_project" href="#0">End Project</a>
            </div>
        </div>
    </div>



    <div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>If you click yes, this project will end. You won’t be able to work?</p>
        <ul class="cd-buttons">
            <li><a href="<?=base_url('user/project_end/').$this->uri->segment(4)?>">Yes</a></li>
            <li><a href="#0" class="close_end">Cancel</a></li>
        </ul>
        <!-- <a href="#0" class="cd-popup-close img-replace"></a> -->
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
    <?php } ?>
    </form>
<!-- end invoice-calculation  form-->


<form action="<?=base_url('user/submit_captcha_filling')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
<!-- invoice-calculation form-->
<?php if ($this->uri->segment(3) == 'captcha') { ?>
    <div class="all-form-element-inner">
        <div class="form-group-inner">

<div class="row" style="text-align:left;">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php if ($project_type == 'Non Target') { ?>             
<label class=""><?=$project_type?> Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard.
<br><br>

<ol>
    <li>In non-target captcha you are provided with unlimited quantity of captcha.</li>
    <li>You must work for fixed time period set by the company you are working with.</li>
    <li>On right hand side captchas are displayed one by one.</li>
    <li>Type displayed captcha in box on left hand side and click submit. System will automatically recognise if captcha filled is right or wrong. And earnings will be added accordingly.</li>
    <li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Captcha displayed are case sensitive and you should fill as it is displayed.</li>
</ol>
</div>

<?php }else{?>
<label class=""><?=$project_type?> Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard.
<br><br>

<ol>
    <li>In target captcha you are provided with fixed quantity of captcha.</li>
    <li>You must complete the captcha filling in given time period.</li>
    <li>On right hand side captchas are displayed one by one.</li>
    <li>Type displayed captcha in box on left hand side and click submit. System will automatically recognise if captcha filled is right or wrong. And earnings will be added accordingly.</li>
    <li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Captcha displayed are case sensitive and you should fill as it is displayed.</li>
</ol>
</div>
<?php } ?>
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

                    <div class="row" style="text-align:center">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <label class="">Submit Your Answer</label>
                            <!-- <br><?=$captcha_word?> -->
                        </div>
                        <!-- <br><?=$get_content_writing->font?><br><?=$get_content_writing->auto_font?> -->
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<!--                             <label class=""><input style="border:1px solid;" type="text"  name="captcha_val" class="form-control" notab="notab"></label> -->


                            <label class=""><input style="border:1px solid;" type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrop="return false" autocomplete="off" notab="notab" name="captcha_val" class="form-control" notab="notab" name=""></label>
            <input type="hidden" notab="notab" name="captcha_word" value="<?=$captcha_word?>">
            <input type="hidden" class="form-control" notab="notab" name="id" value="4" />
            <input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
            <input type="hidden" notab="notab" name="current_url" value="<?=current_url()?>">
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
                <center><h5><?=$project_type?> Captcha</h5></center>

                <center> 
                    <div><br>
                    <!-- <img src="<?=$captcha_img?>"> -->
                    <h4 id="captcha"><?=$captcha_img?></h4>
                    <!-- <h4><?=$captcha_word?></h4> -->
                </div>
                </center>

                </div>
            </div>


        </div>
    </div><br><br><hr>
    <div class="row larg_devices_mb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>

                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light ">Submit</button>
            <!-- <a class="btn btn-danger" href="<?=base_url('user/get_skip/').$get_content_writing->project_id?>"  style="color:white !important;">Skip</a> -->


<input type="hidden" name="project_id" value="<?=$get_content_writing->project_id?>">
<input type="hidden" name="redirect_url" value="<?=current_url();?>">
<a class="btn btn-danger" id="skips_btn" style="color:white !important;">Skip</a>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light end_project" href="#0">End Project</a>
            </div>
        </div>
    </div>



    <div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>If you click yes, this project will end. You won’t be able to work?</p>
        <ul class="cd-buttons">
            <li><a href="<?=base_url('user/project_end/').$this->uri->segment(4)?>">Yes</a></li>
            <li><a href="#0" class="close_end">Cancel</a></li>
        </ul>
        <!-- <a href="#0" class="cd-popup-close img-replace"></a> -->
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
    <?php } ?>
</form>
<!-- end invoice-calculation  form-->

<form action="<?=base_url('user/submit_form_filling')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
<!-- form-filling form-->
<?php if ($this->uri->segment(3) == 'form-filling') { ?>
    <div class="all-form-element-inner">
        <div class="form-group-inner">

            <div class="row" style="text-align:left;">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<?php if ($project_type == 'Non Target') { ?>             
<label class=""><?=$project_type?> Form Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Non-Target Form Filling you are provided with unlimited quantity of Forms.</li>
    <li>
You have to work for fixed time period set by the company you are working with.
</li>
    <li>On left hand side forms are displayed one by one. You might need to scroll to see full form</li>
    <li>Fill all displayed sections on right hand side and click submit. System will automatically recognise if form filled is right or wrong. And earnings will be added accordingly.</li>
    <li>Forms are extremely sensitive and need to be filled exactly the same including spaces, case sensitivity and special characters.</li>
    <li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Forms displayed are case and character sensitive and you should fill as it is displayed.</li>
</ol>
</div>

<?php }else{?>
<label class=""><?=$project_type?> Form Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard.
<br><br>

<ol>
    <li>In target Form Filling you are provided with fixed quantity of Forms.</li>
    <li>You have to complete the given forms in given time period.</li>
    <li>On left hand side forms are displayed one by one. You might need to scroll to see full form.</li>
    <li>Fill all displayed sections on right hand side and click submit. System will automatically recognise if form filled is right or wrong. And earnings will be added accordingly.</li>
    <li>Forms are extremely sensitive and need to be filled exactly the same including spaces, case sensitivity and special characters.</li>
    <li>Skips provided to you depends on the company that you are working for.</li>
    <li>After you consume the total skips for 24 hours, amount will be deducted from your earnings for every new skip (Deductions depend on company you are working for)</li>
    <li>Forms displayed are case and character sensitive and you should fill as it is displayed.</li>
</ol>
</div>
<?php } ?>
                        </div>
                    </div><hr>


<style>
@import url(https://fonts.googleapis.com/css?family=Times+New+Roman);
@import url(https://fonts.googleapis.com/css?family=Indie+Flower);

.font{
    font-family: 'Indie Flower';
}

.new_font{
    font-family: 'Times New Roman';
}
</style>
<!-- difficulty 1 -->
<?php if ($filling_projects->difficulty == 1) { ?>
                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Token No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_one?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Line No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_two?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Name</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_three?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Email ID</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_four?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Address</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_panch?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">City</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_chay?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Zipcode</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_sat?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">SIC_Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ath?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">SIC_Discription</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_no?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Web Address</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ten?></label>
                                </div>    
                            </div>
                        </div>
                    </div>
<?php } ?>

<!-- difficulty 2 -->
<?php if ($filling_projects->difficulty == 2) { ?>
                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Token No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_one?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Line No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_two?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Company Name</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_three?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Email ID</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_four?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Referal Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_panch?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Address</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_chay?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">City</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_sat?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Zip Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ath?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Phone Number</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_no?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Sic Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ten?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Sic Description</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_eleven?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Affiliate Token</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_twelve?></label>
                                </div>    
                            </div>
                        </div>
                    </div>
<?php } ?>


<!-- difficulty 3 -->
<?php if ($filling_projects->difficulty == 3) { ?>
                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Token No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_one?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Line No</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_two?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font"><style>.t_boxs{border: 1px solid red;}</style>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Pass Sticks</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_three?></label>
                                </div>    
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Company Name</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_four?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Email</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_panch?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Referal Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_chay?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Address</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_sat?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">City</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ath?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">ZipCode</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_no?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Phone Number</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_ten?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Friendly Local</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_eleven?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Sic Code</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_twelve?></label>
                                </div>    
                            </div>
                        </div>
                    </div>

                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Sic Description</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_thirteen?></label>
                                </div>    
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Label Tag</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_fourteen?></label>
                                </div>    
                            </div>
                        </div>
                    </div>


                    <div class="row new_font">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row t_box">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label style="color: red;">Affiliate Token</label>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                    <label class=""><?=$filling_projects->form_val_fifteen?></label>
                                </div>    
                            </div>
                        </div>
                    </div>
<?php } ?>



                </div>
                <!-- <div class="vl"></div> -->
<!--     <div class="product-payment-inner-st">

    </div> -->
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
            <div style="display:none;">
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
        </ul>
        </div>
            <br><br><br><center><h5>Form Filling Section</h5></center>
<!-- difficulty -->
<?php if ($filling_projects->difficulty == 1) { ?>
    <input type="hidden" name="difficulty" value="<?=$filling_projects->difficulty?>">
            <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_one" placeholder="Token No" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_two" placeholder="Line No" />
                </div>
            </div>
                <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <input type="hidden" class="form-control" notab="notab" name="id" value="<?=$filling_projects->id?>" />
            <input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
            <input type="hidden" name="current_url" value="<?=current_url()?>">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_three" placeholder="Name" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_four" placeholder="Email" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_panch" placeholder="Address:" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_chay" placeholder="City" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_sat" placeholder="Zip Code" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ath" placeholder="SIC_Code" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_no" placeholder="SIC_Discription" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ten" placeholder="Web Address" />
                        </div>
                    </div>
<?php } ?>

<!-- difficulty 2 -->
<?php if ($filling_projects->difficulty == 2) { ?>
    <input type="hidden" name="difficulty" value="<?=$filling_projects->difficulty?>">
            <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_one" placeholder="Token No" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_two" placeholder="Line No" />
                </div>
            </div>
                <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <input type="hidden" class="form-control" notab="notab" name="id" value="<?=$filling_projects->id?>" />
            <input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
            <input type="hidden" name="current_url" value="<?=current_url()?>">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_three" placeholder="Company Name" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_four" placeholder="Email" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_panch" placeholder="Referal Code" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_chay" placeholder="Address" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_sat" placeholder="City" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ath" placeholder="Zip Code" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_no" placeholder="Phone Number" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ten" placeholder="Sic Code" />
                        </div>
                    </div>


                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_eleven" placeholder="Sic Description" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_twelve" placeholder="Affiliate Token" />
                        </div>
                    </div>
<?php } ?>


<!-- difficulty 3 -->
<?php if ($filling_projects->difficulty == 3) { ?>
    <input type="hidden" name="difficulty" value="<?=$filling_projects->difficulty?>">
            <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_one" placeholder="Token No" />
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_two" placeholder="Line No" />
                </div>
            </div>
                <div class="row" style="margin-top:15px;">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <input type="hidden" class="form-control" notab="notab" name="id" value="<?=$filling_projects->id?>" />
            <input type="hidden" class="form-control" notab="notab" name="p_id" value="<?=$this->uri->segment(4)?>" />
            <input type="hidden" name="current_url" value="<?=current_url()?>">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_three" placeholder="Pass Sticks" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_four" placeholder="Company Name" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_panch" placeholder="Email" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_chay" placeholder="Referal Code" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_sat" placeholder="Address" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ath" placeholder="City" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_no" placeholder="Zipcode" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_ten" placeholder="Phone Number" />
                        </div>
                    </div>


                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_eleven" placeholder="Friendly Local" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_twelve" placeholder="Sic Code" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_thirteen" placeholder="Sic Description" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_fourteen" placeholder="label Tag" />
                        </div>
                    </div>

                    <div class="row" style="margin-top:15px;">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <input type="text" onpaste="return false;" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off" class="form-control" notab="notab" name="form_val_fifteen" placeholder="Affiliate Token" />
                        </div>
                    </div>
<?php } ?>



                </div>
            </div>





        </div>
    </div><br><br><hr>
    <div class="row larg_devices_mb">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <style>.hide{display: none;}</style>
                <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
            <!-- <a class="btn btn-danger" href="<?=base_url('user/get_skip/').$get_content_writing->project_id?>"  style="color:white !important;">Skip</a> -->


<input type="hidden" name="project_id" value="<?=$get_content_writing->project_id?>">
<input type="hidden" name="redirect_url" value="<?=current_url();?>">
<a class="btn btn-danger" id="skips_btn" style="color:white !important;">Skip</a>

            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="payment-adress">
                <a class="btn btn-primary waves-effect waves-light end_project" href="#0">End Project</a>
            </div>
        </div>
    </div>



    <div class="cd-popup" role="alert">
    <div class="cd-popup-container">
        <p>If you click yes, this project will end. You won’t be able to work?</p>
        <ul class="cd-buttons">
            <li><a href="<?=base_url('user/project_end/').$this->uri->segment(4)?>">Yes</a></li>
            <li><a href="#0" class="close_end">Cancel</a></li>
        </ul>
        <!-- <a href="#0" class="cd-popup-close img-replace"></a> -->
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
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
<script>
jQuery(document).ready(function ($) {
  //open popup
  $(".end_project").on("click", function (event) {
    event.preventDefault();
    $(".cd-popup").addClass("is-visible");
  });

  //close popup
  $(".cd-popup").on("click", function (event) {
    if (
      $(event.target).is(".cd-popup-close") ||
      $(event.target).is(".cd-popup")||
      $(event.target).is(".close_end")
    ) {
      event.preventDefault();
      $(this).removeClass("is-visible");
    }
  });
  //close popup when clicking the esc keyboard button
  $(document).keyup(function (event) {
    if (event.which == "27") {
      $(".cd-popup").removeClass("is-visible");
    }
  });
$('input[notab=notab]').on('keydown', function(e){ if (e.keyCode == 9)  e.preventDefault() });
});


jQuery(document).ready(function($) {

$('#skips_btn').click(function(){
var project_id = $('[name="project_id"]').val();
var redirect_url = $('[name="redirect_url"]').val();

$.ajax({
    url: "<?=base_url('user/get_skip/').$get_content_writing->project_id?>",
    type: "POST",
    data: {
    project_id: project_id,
    redirect_url: redirect_url
    },
    dataType:"json",
    cache: false,
    success: function(dataResult){
    window.location.href = dataResult.url; 
    }
});


    });



// document.onreadystatechange = function () {
//   var state = document.readyState
//   if (state == 'interactive') {
//        document.getElementById('contents').style.visibility="hidden";
//   } else if (state == 'complete') {
//       setTimeout(function(){
//          document.getElementById('interactive');
//          document.getElementById('load').style.visibility="hidden";
//          document.getElementById('contents').style.visibility="visible";
//       },1000);
//   }
// }

});
</script>