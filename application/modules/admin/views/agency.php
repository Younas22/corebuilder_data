<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
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
<li><span class="bread-blod"><?=$user_type?> Profile</span>

<?php }elseif($user_type == 'admin'){ ?>
<li><span class="bread-blod"><?=$user_type?> Profile</span>

<?php }else{ ?>
<li><span class="bread-blod"><?=$user_type?> Profile</span>
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
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="profile-info-inner">




	<div class="profile-img">
			<img src="<?=base_url('assets/')?>img/profile/<?=$profile->company_logo?>" alt="" />
		</div>
		<div class="profile-details-hr">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Company Name</b><br /> <?=$profile->company_name?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Manager Name</b><br /> <?=$profile->manager_name?></p>
					</div>
				</div>
			</div>
				<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Company Email</b><br /> <?=$profile->company_email?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Phone</b><br /> <?=$profile->user_phone?></p>
					</div>
				</div>
			</div>
		</div>




	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
		<ul id="myTabedu1" class="tab-review-design">
			<li><a href="#INFORMATION">Update Details</a></li>
		</ul>
		<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
			<div class="product-tab-list" id="INFORMATION">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="review-content-section">
<!-- <form action="<?= $action_type?>" method="POST" enctype="multipart/form-data"> -->

<div class="row">
<div class="col-lg-6">
<div class="form-group">
<label>Company Name</label>
<input type="text" name="company_name" class="form-control" placeholder="Company Name" value="<?=$profile->company_name?>">
</div>
<div class="form-group">
<label>Manager Name</label>
<input type="text" name="manager_name" class="form-control" placeholder="Manager Name" value="<?=$profile->manager_name?>">
</div>

<div class="form-group">
<label>Company Email</label><br>
<!-- <span style="color:red;">All the projects will be sent to users from this email</span> -->
<input type="text" name="company_email" class="form-control" placeholder="Company Email" value="<?=$profile->company_email?>" disabled>
</div>

<?php
	if ($user_type != 'admin') { ?>
	<div class="form-group">
	<label>Company Logo</label>
	<input type="file" name="company_logo" class="form-control" placeholder="Logo">
	<input type="hidden" name="old_company_logo" value="<?=$profile->company_logo?>">
	</div>
<?php	} ?>


<div class="form-group">
	<label>Theme</label><br>
<label class="btn btn-primary">
<input type="radio" name="theme" id="gridRadios1" value="blue" <?php if ($profile->theme == 'blue') {echo "checked"; }?>> Blue
</label>

<label class="btn btn-danger">
<input type="radio" name="theme" id="gridRadios1" value="red" <?php if ($profile->theme == 'red') {echo "checked"; }?>> Red
</label>
</div>
</div>

<div class="col-lg-6">
<div class="form-group">
<label>Phone</label>
<input type="text" name="user_phone" class="form-control" placeholder="Phone" value="<?=$profile->user_phone?>">
</div>

<div class="form-group">
<label>Decript Password</label>
<input type="text" name="password" class="form-control" placeholder="Password" value="<?=$profile->decript_password?>">
</div>

<div class="form-group">
<label>Website</label>
<input type="text" name="company_website" class="form-control" placeholder="Website" value="<?=$profile->company_website?>">
</div>



<br><div class="form-group" style="margin-top:10px;">
<a data-toggle="modal" href="#tallModal" class="btn btn-primary">Terms and Conditions</a>
<input type="checkbox" name="terms_status" id="gridRadios1" <?php if ($profile->terms_status == 1) {echo "checked"; }?>>
</div>

</div>

<!-- policy model -->

  <!-- Modal -->

<div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
		<h3>Terms and Conditions</h3>
        <p>
		Before you sign up and download or use downloadable product from ThemeHunt for your own purposes, please make sure you have read, understood, and agreed to all the terms. By accessing or using ThemeHunt, we assume you’ve accepted the terms of use given below. These Terms apply to all visitors, users and others who wish to access or use the Service. If you disagree with any part of the terms then you do not have permission to access the platform.</p>
		<h3>Introduction</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<h3>Accounts</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        <h3>Unauthorized/Illegal Usage</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</div>
<!-- end policy model-->




									
<!-- 	<div class="file-upload-inner ts-forms">
		<div class="input prepend-big-btn">
			<label class="icon-right" for="prepend-big-btn">
				<i class="fa fa-download"></i>
			</label>
			<div class="file-button">Browse
<input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
			</div>
			<input type="text" id="prepend-big-btn" placeholder="no file selected">
		</div>
	</div> -->

							</div>
							<!-- <div class="row" style="margin-top: 20px;">
								<div class="col-lg-12">
									<div class="payment-adress mg-t-15">
										<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
									</div>
								</div>
							</div> -->
							<!-- end form -->
						<!-- </form> -->
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

