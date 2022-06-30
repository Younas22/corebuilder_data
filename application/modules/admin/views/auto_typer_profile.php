<?php 
	
// dd(get_user_project_for_setTime($autotyper_users->core_user_id));
$user_type = $this->session->userdata('logged_in')->user_type; 

  ?>
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
								<li><a href="<?=$_SERVER['HTTP_REFERER']?>">Back</a> <span class="bread-slash"></span>
							</li>

<!-- <?php if ($user_type == 'company') { ?>
<li><span class="bread-blod"><?=$user_type?> Profile</span>

<?php }elseif($user_type == 'admin'){ ?>
<li><span class="bread-blod"><?=$user_type?> Profile</span>

<?php }else{ ?>
<li><span class="bread-blod"><?=$user_type?> Profile</span>
<?php } ?> -->


						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div style="margin-top: 20px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
	<?php if (!empty($this->session->flashdata('profile'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1" style="margin:20px;">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('profile'); ?></p>
</div>
<?php }?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="profile-info-inner">




		<div class="profile-details-hr">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Project</b><br /> <?=auto_project_name($autotyper_users->main_pid);?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Type</b><br /> <?=$autotyper_users->project_type?></p>
					</div>
				</div>
			</div><hr>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Name</b><br /> <?=$autotyper_users->name?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Phone</b><br /> <?=$autotyper_users->phone?></p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Email</b><br /> <?=$autotyper_users->email?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Password</b><br /> <?=$autotyper_users->de_password?></p>
					</div>
				</div>
			</div>
		</div>




	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
		<ul id="myTabedu1" class="tab-review-design">
			<li><a href="#INFORMATION">Auto Users Details</a></li>
		</ul>
		<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
			<div class="product-tab-list" id="INFORMATION">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="review-content-section">
<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">

<div style="margin-bottom: 20px;"></div>
<div class="form-group">
	<label>Project List</label>
	<select name="autotyper_user_project" class="form-control" id="autotyper_user_project" required="">
		<option value="" selected="" disabled="">Select Project</option>
		<?php  $count=1; foreach (get_user_project($autotyper_users->core_user_id) as $k) { ?>
			<option value="<?=$k->project_id?>"><?=$k->projects_title.' '.$count?></option>
		<?php $count++;} ?>
	</select>
</div>

<div id="earning_details">

</div>

							<div class="row" style="margin-top: 20px; margin-bottom: 70px;">
								<div class="col-lg-12">
									<div class="payment-adress mg-t-15">
										<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
									</div>
								</div>
							</div>
							<!-- end form -->
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



