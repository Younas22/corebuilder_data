<?php  $user_type = $profile->user_type; ?>
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
<div style="margin-top:20px; margin-bottom: 20px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
	<div class="profile-info-inner">
<style>
.circular--landscape {
  display: inline-block;
  position: relative;
  width: 200px;
  height: 200px;
  overflow: hidden;
  border-radius: 50%;
}
.circular--landscape img {
  width: auto;
  height: 100%;
  margin-left: -50px;
}
</style>
<div class="profile-img" style="text-align:center;">
<?php if (!empty($profile->profile_img)) { ?>
<img src="<?=base_url('assets/')?>img/profile/<?=$profile->profile_img?>" class="img-thumbnail circular--landscape" alt="" style="width:200px"/>
<?php }else{ ?>
<img src="<?=base_url('assets/')?>img/profile/demo.jpg?>" class="img-responsive circular--landscape" alt="" style="width:200px"/>
<?php } ?>
</div> 
		<div class="profile-details-hr">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr">
						<p><b>Earning</b><br /> <?= round($user_earning[0]->earning, 2);?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
					<div class="address-hr tb-sm-res-d-n dps-tb-ntn">
						<p><b>Projects</b><br /><?=$user_projects?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" style="margin-bottom: 80px;">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
		<ul id="myTabedu1" class="tab-review-design">
			<li><a href="#INFORMATION">Other Details</a></li>
		</ul>
		<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
			<div class="product-tab-list" id="INFORMATION">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="review-content-section">
							<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<label>First Name</label>
											<input name="first_name" type="text" class="form-control" placeholder="First Name" value="<?=$profile->first_name?>">
										</div>
										<div class="form-group">
											<label>Last Name</label>
											<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?=$profile->last_name?>">
										</div>
										<div class="form-group">
											<label>Email</label>
											<input type="text" name="company_email" class="form-control" placeholder="Email" value="<?=$profile->company_email?>" disabled>
										</div>
									</div>
									<div class="col-lg-6">
										<div class="form-group">
											<label>Phone</label>
											<input type="text" name="user_phone" class="form-control" placeholder="Phone" value="<?=$profile->user_phone?>">
										</div>
										<div class="form-group">
											<label>Password</label>
											<input type="text" name="password" class="form-control" placeholder="Password" value="<?=$profile->decript_password?>">
										</div>
										<div class="form-group">
											<div class="payment-adress mg-t-15">
											<a href="<?= base_url('company/user-projects/').$profile->id; ?>" class="btn btn-primary waves-effect waves-light mg-b-15">User-Projects</a>
										</div>
										</div>
									</div>
								</div>
								<!-- <div class="row" style="margin-top: 20px;">
									<div class="col-lg-12">
										<div class="payment-adress mg-t-15">
											<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
										</div>
									</div>
								</div> -->
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