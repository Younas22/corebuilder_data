<?php  $user_type = $profile->user_type; ?>
<?php  
// if ($this->session->flashdata('msg') == 1) {
// echo "<script>alert('Please Check Term and Conditions Box, and Start Project!')</script>";
// }
// if ($this->session->flashdata('msg') == 'Please add img1') {
// echo "<script>alert('first img is required')</script>";
// }
// if ($this->session->flashdata('msg') == 'Please add img2') {
// echo "<script>alert('2nd img is required')</script>";
// }

// if ($this->session->flashdata('msg') == 'Max 50kb file is allowed for image.') {
// echo "<script>alert('Max 50kb file is allowed for image.')</script>";
// }

// dd($project_view);

?> 

<div style="margin-top:20px;"></div>
<?php if ($project_view->terms_conditions_status == 1 && !empty($this->session->flashdata('accep_terms'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('accep_terms'); ?></p>
</div>
<?php }

if(!empty($this->session->flashdata('accep_terms_error'))){?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('accep_terms_error'); ?></p>
</div>
<?php } ?>

<!-- policy model -->
<style>
.modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}

</style>
<!-- end policy model-->


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
							<li><span class="bread-blod"><?=$user_type?>/ project-view</span>
							<?php }elseif($user_type == 'admin'){ ?>
							<li><span class="bread-blod"><?=$user_type?>/ project-view</span>
							<?php }else{ ?>
							<li><span class="bread-blod"><?=$user_type?>/ project-view</span>
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
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<div class="profile-info-inner" id="project_view">
		
<div class="profile-img card-header" style="text-align:center; margin-top: 10px; margin-bottom: 30px;">
<h3><?=$project_view->projects_title?></h3>
</div>
		<div class="profile-details-hr">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p style="color: #fff !important;"><b>Earning</b><br /><?= round($project_view->earning, 2);?></p>
					</div> 
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p style="color: #fff !important;"><b>Project Type</b><br /><?=$project_view->p_type?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p style="color: #fff !important;"><b>Right</b><br /><?=$project_view->_right?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p style="color: #fff !important;"><b>Wrong</b><br /><?=$project_view->wrong?></p>
					</div>
				</div>
			</div>
			<?php 


                $overall_accuracy_report = '--';
                    //overall Accuracy report
                if ($project_view->p_type != 'Non Target') {
                    $quantity = (int)$project_view->quantity;
                    $current_right = (int)$project_view->_right;
                    $overall_accuracy_rep = $current_right/$quantity*100;
                    $overall_accuracy_report = number_format((float)$overall_accuracy_rep, 2, '.', '').'%';
                    if ($overall_accuracy_report == 'nan') {
                        $overall_accuracy_report = '--';
                    }
                }

			//Accuracy report
			if (!empty((int)$project_view->wrong)) {
				$wrong = (int)$project_view->wrong;
			}else{
				$wrong = 1;
			}
			 		$current = (int)$project_view->_right+$wrong;
			 		$current_right = (int)$project_view->_right;
			 		$accuracy_rep = $current_right/$current*100;
			?>
			<hr>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p style="color: #fff !important;"><b>Skips Remaining</b><br /><?=$project_view->refrash_limit?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p style="color: #fff !important;"><b>Accuracy</b><br /><?= number_format((float)$accuracy_rep, 2, '.', '').'%' ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
		

<!-- 		<div class="d-flex flex-row bg-info">
		<h4>Project Details</h4>
		<h4 style="float: right;">Project Details</h4>
		<div class="payment-adress mg-t-15" style="float: right;">
			<a href="<?= base_url('company/user-projects/').$project_view->users_id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15">Back to Projects</a>
		</div>
		</div> -->



<div>
   <div class="row">
       <h4 class="col-md-4">Project Details</h4>
   </div>
</div>

		<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
			<div class="product-tab-list" id="INFORMATION">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="review-content-section">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>Projects title</label>
											<p><?=$project_view->projects_title?></p>
										</div>
										<div class="form-group">
											<label>Start Date</label>
											<p><?=$project_view->start_date?></p>
											<input type="hidden" name="s" id="start_date_for_counting" value="<?=$project_view->start_date?>">
										</div>
<?php if ($project_view->p_type == 'Target') {?>
<div class="form-group">
<label>Quantity</label>
<p><?=$project_view->quantity?></p>
<input type="hidden" name="s" id="start_date_for_counting" value="<?=$project_view->start_date?>">
</div>
<?php } ?>


									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Project Type</label>
											<p><?=$project_view->p_type?></p>
										</div>
										<div class="form-group">
											<label>End Date</label>
											<p><?=$project_view->end_date?></p>
											<input type="hidden" name="e" id="end_date_for_counting" value="<?=$project_view->end_date?>">
											<input type="hidden" name="we" id="start_date_for_counting" value="<?=$project_view->start_date?>">
										</div>

										<div class="form-group">
											<label>Overall Accuracy</label>
											<p><?=$overall_accuracy_report?></p>
											<input type="hidden" name="e" id="end_date_for_counting" value="<?=$project_view->end_date?>">
											<input type="hidden" name="we" id="start_date_for_counting" value="<?=$project_view->start_date?>">
										</div>
										<!-- <div class="form-group">
											<div class="payment-adress mg-t-15">
											<a href="<?= base_url('company/user-projects/').$profile->id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15">User-Projects</a>
										</div>
										</div> -->
									</div>
								</div>
								<div class="row" style="margin-top: 20px;">
									<hr>
								</div>
								<!-- end form -->
<!-- count down -->
<style>
	body {
  background: #f5f5f5;
}
#timer {
  font-family: Arial, sans-serif;
  font-size: 20px;
  color: #999;
  letter-spacing: -1px;
}
#timer span {
  font-size: 60px;
  color: #333;
  margin: 0 3px 0 15px;
}
#timer span:first-child {
  margin-left: 0;
}
  
</style>
<!-- end count down -->
<div id="timer">
<span id="left_time"></span><br>
<span id="days"></span>
<span id="hours"></span>
<span id="minutes"></span>
<span id="seconds"></span>
<span id="end"></span>

</div>



 
						<?php if ($user_type == 'company') { ?>
							<a href="<?= base_url('company/user-projects/').$project_view->users_id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15 col-md-4" style="margin-top: 20px; margin-right: 20px; margin-bottom: 70px;">Back to Projects</a>

						<?php 
							if ($project_view->terms_conditions_status == 1) { ?>
							<a  class="btn btn-primary waves-effect waves-light mg-b-15 col-md-4" style="margin-top: 20px;" data-toggle="modal" href="#Accepted_terms" class="btn btn-primary">Accepted terms</a>			
							<?php }else{ ?>
							<p><br><b style="color:red;"> [User Still not accepted Terms and Conditions]</b></p>
							<?php } }else{ ?>

								<?php if ($project_view->terms_conditions_status == 1) { 
if ($this->uri->segment(3) == 'content-writing' || $this->uri->segment(3) == 'novel-typing' || $this->uri->segment(3) == 'dialogue-typing') {
									?>
							<a href="<?= base_url('user/start-project/').strtolower(str_replace(' ', '-', $this->uri->segment(3))).'/'.$project_view->project_id.'/'.$project_view->users_id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15 col-md-4" style="margin-top: 20px; margin-bottom: 100px;">Start Projects</a>				
							<?php }else{?>
							<a href="<?= base_url('user/start-filling-project/').strtolower(str_replace(' ', '-', $this->uri->segment(3))).'/'.$project_view->project_id.'/'.$project_view->users_id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15 col-md-4" style="margin-top: 20px; margin-bottom: 100px;">Start Projects</a>
							<?php } }else{ if ($this->session->userdata('logged_in')->user_type != 'admin') {?>
							<a  class="btn btn-primary waves-effect waves-light mg-b-15 col-md-4" style="margin-top: 20px; margin-bottom: 100px;" data-toggle="modal" href="#tallModal" id="accep_terms">Accep terms</a>

							<?php } } } ?>


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



<div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
		<p><b style="color:red;">Please read Terms and Conditions clearly and upload ID Card front and back side photo</b></p>
		<h3>Terms and Conditions</h3>
    <p><?php  echo $project_view->custom_terms_conditions?></p>
      </div>
      <br><br><br>
<!--       <div style="margin: 20px;">
      	<hr>
      	<b style="color:red">If your file is bigger than 50 KB.Follow the steps to compress your photo.</b>
				<p>Step 1: Go to <a href="https://redketchup.io/bulk-image-resizer" target="_blank">https://redketchup.io/bulk-image-resizer</a></p>
   			<p>Step 2: Under "Select Multiple Images" Click Add images”.</p>       
   			<p>Step 3: Select the image you want to decrease the size (Only one at a time).</p>
   			<p>Step 4: Scroll Down, in "Predefined Tasks" select "Downscale to a maximum file size".</p>       
   			<p>Step 5: Click "Maximum File Size" and Enter 48 Kb.</p>       
   			<p>step 6:  Click Process Batch.</p>       
   			<p> Step 7: Once Processing is complete, click "Download All" and the file will be downloaded.</p>
   			<b style="color:red;">*Repeat this process to compress the file size of other files also. Select only one Image at a time*</b>
      	<hr>
			</div> -->
      <!-- img start -->


      <style>
      	.upload-image input{
    display: block !important;
    width: 158px !important;
    height: 45px !important;
    opacity: 0 !important;
    overflow: hidden !important;
    
}
.upload-image {
  cursor:pointer !important;
  width: 100%;
  height: 30px;
  overflow:hidden;
  position:relative;
  display:inline-block;
  /*background-color:#fff;*/
  background-repeat: no-repeat;
  background-image:
    url('http://icons.iconarchive.com/icons/martz90/circle/512/camera-icon.png');
  background-size:20px 20px;
  margin-left: 145px;
}
      </style>
      <div class="container">
      	<div class="row">
      		<div class="col-lg-12" style="text-align:center;">

<?php if ($profile[1]->custom_terms == 1) { ?>
<form class="well form-horizontal">

                      <fieldset>


	<div class="form-group">
	    <label class="col-md-4 control-label">Terms and Conditions</label>
	    <div class="col-md-8 inputGroupContainer">
	       <div class="input-group">
	       	<span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span>
		<input type="checkbox" name="terms_conditions_status" value="1" class="form-control">
	</div><br><hr>
	<input type="hidden" name="project_name" value="<?=strtolower(str_replace(' ', '-', $this->uri->segment(3)))?>">
	<input type="hidden" name="project_id" value="<?=$project_view->project_id;?>">
	       </div>
	    </div>



                         <div class="form-group">
                            <label class="col-md-4 control-label">Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="fullName" name="fullName" placeholder="As Per Aadhar Card" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Date Of Birth</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="addressLine1" name="addressLine1" placeholder="DD/MM/YYYY" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Aadhar Number </label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="addressLine2" name="addressLine2" placeholder="0000-0000-0000" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Pan Card</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="city" name="city" placeholder="ABCDE1234F" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Bank Name</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="state" name="state" placeholder="Enter Bank Name" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">Account No</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Bank Account number" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">IFSC Code</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Enter IFSC Code" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div><br>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Aadhar Card Front</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Enter IFSC Code" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Aadhar Card Back</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Enter IFSC Code" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Pan Card</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Enter IFSC Code" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>

                         <div class="form-group">
                            <label class="col-md-4 control-label">Other ID Front</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-arrow-right"></i></span><input id="postcode" name="postcode" placeholder="Enter IFSC Code" class="form-control" required="true" value="" type="file"></div>
                            </div>
                         </div>

                      </fieldset>
                   </form>

<?php }else{ ?>


<form class="form-inline" action="<?= base_url('user/accep-terms')?>" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<label for="Terms and Conditions">Terms and Conditions</label>
		<input type="checkbox" name="terms_conditions_status" value="1" class="form-control">
	</div><br><hr>
	<input type="hidden" name="project_name" value="<?=strtolower(str_replace(' ', '-', $this->uri->segment(3)))?>">
	<input type="hidden" name="project_id" value="<?=$project_view->project_id;?>">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group">
				<label>Img1<span style="color:red; font-size: 20px;">*</span></label>
				<div class="form-control">
					<input type='file'  name="img_one" required size="50" />
				</div>
				<br>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group">
				<label>Img2<span style="color:red; font-size: 20px;">*</span></label>
				<div class="form-control">
					<input type='file'  name="img_two" required size="50" />
				</div>
				<br>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group">
				<label>Img3</label>
				<div class="form-control">
					<input type='file'  name="img_three" />
				</div>
				<br>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-12">
			<div class="form-group">
				<label>Img4</label>
				<div class="form-control">
					<input type='file'  name="img_four" />
				</div>
				<br>
			</div>
		</div>
	</div>
	<br>
	<button type="submit" class="btn btn-primary">Upload</button>
</form>
<?php } ?>


      		</div>
      	</div>
      </div>
      <!-- img end -->


<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->




<!-- Accepted_terms -->
<div id="Accepted_terms" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
		<h3>Terms and Conditions</h3>
    <?=$project_view->custom_terms_conditions?>
      </div>
      <br><br><br>


<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
  width: 40%;
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

</style>

<div class="container" style="text-align:center !important;">
	<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<img src="<?=base_url('assets/img/term_conditions/').$project_view->img_one?>" alt="Avatar" style="width:100%">
				<div class=""><hr>
					<h4><b>Img1</b></h4>
					<a href="<?=base_url('assets/img/term_conditions/').$project_view->img_one?>" download>Download</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<img src="<?=base_url('assets/img/term_conditions/').$project_view->img_two?>" alt="Avatar" style="width:100%">
				<div class=""><hr>
					<h4><b>Img2</b></h4>
					<a href="<?=base_url('assets/img/term_conditions/').$project_view->img_two?>" download>Download</a>
				</div>
			</div>
		</div>
	</div>
<hr>
		<div class="row">
		<div class="col-lg-6">
			<div class="card">
				<img src="<?=base_url('assets/img/term_conditions/').$project_view->img_three?>" alt="Avatar" style="width:100%">
				<div class=""><hr>
					<h4><b>Img3</b></h4>
					<a href="<?=base_url('assets/img/term_conditions/').$project_view->img_three?>" download>Download</a>
				</div>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="card">
				<img src="<?=base_url('assets/img/term_conditions/').$project_view->img_four?>" alt="Avatar" style="width:100%">
				<div class=""><hr>
					<h4><b>Img4</b></h4>
					<a href="<?=base_url('assets/img/term_conditions/').$project_view->img_four?>" download>Download</a>
				</div>
			</div>
		</div>
	</div>
</div>
      <!-- img end -->


      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- jQuery first, then Popper.js and Bootstrap JS. -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
<script>
	 function ImageSetter(input,target) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                target.attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $(".imgInp").change(function(){
      var imgDiv=$(this).data('id');  
           imgDiv=$('#' + imgDiv);    
        ImageSetter(this,imgDiv);
    });
</script>