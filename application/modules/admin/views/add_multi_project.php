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
	<?php if (!empty($this->session->flashdata('add_multi_project'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1" style="margin:20px;">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('add_multi_project'); ?></p>
</div>
<?php }?>

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
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
	<input type="hidden" name="auto_users_id" value="<?=$auto_users_id?>">
	<input type="hidden" name="core_user_id" value="<?=$core_user_id?>">

	<div class="row">
		<div class="col-lg-4">
			<div class="form-group">
				<label>Captcha</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="4" name="project_id" <?php if (!empty($captcha)) echo "checked";?>> Check
					</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<label>Accuracy</label>
				<select name="accuracy_type" class="form-control" required="">
					<?php if ($captcha) { ?>
					<option value="<?=$captcha->autotyper_val?>" selected><?=$captcha->accuracy_type?> %</option>
					<?php }else{?>
					<option value="" selected="" disabled="">Select Accuracy</option>
					<?php } ?>
					<option value="72">7 - 72 %</option>
					<option value="82">14 - 82 %</option>
					<option value="86">20 - 86 %</option>
					<option value="89">25 - 89 %</option>
					<option value="91">31 - 91 %</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4">
			<button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 27px; float: right;">Add</button>
		</div>
	</div>
</form>

<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="auto_users_id" value="<?=$auto_users_id?>">
	<input type="hidden" name="core_user_id" value="<?=$core_user_id?>">
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group">
				<label>Form Filling</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="5" name="project_id" <?php if (!empty($Form_Filling)) echo "checked";?>> Check
					</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<label>Accuracy</label>
				<select name="accuracy_type" class="form-control" required="">
					<?php if ($Form_Filling) { ?>
					<option value="<?=$Form_Filling->autotyper_val?>" selected><?=$Form_Filling->accuracy_type?> %</option>
					<?php }else{?>
					<option value="" selected="" disabled="">Select Accuracy</option>
					<?php } ?>
					<option value="72">7 - 72 %</option>
					<option value="82">14 - 82 %</option>
					<option value="86">20 - 86 %</option>
					<option value="89">25 - 89 %</option>
					<option value="91">31 - 91 %</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4">
			<button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 27px; float: right;">Add</button>
		</div>
	</div>
</form>

<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="auto_users_id" value="<?=$auto_users_id?>">
	<input type="hidden" name="core_user_id" value="<?=$core_user_id?>">
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group">
				<label>Invoice Calculation</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="6" name="project_id" <?php if (!empty($Invoice_Calculation)) echo "checked";?>> Check
					</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<label>Accuracy</label>
				<select name="accuracy_type" class="form-control" required="">
					<?php if ($Invoice_Calculation) { ?>
					<option value="<?=$Invoice_Calculation->autotyper_val?>" selected><?=$Invoice_Calculation->accuracy_type?> %</option>
					<?php }else{?>
					<option value="" selected="" disabled="">Select Accuracy</option>
					<?php } ?>
					<option value="72">7 - 72 %</option>
					<option value="82">14 - 82 %</option>
					<option value="86">20 - 86 %</option>
					<option value="89">25 - 89 %</option>
					<option value="91">31 - 91 %</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4">
			<button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 27px; float: right;">Add</button>
		</div>
	</div>
</form>

<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="auto_users_id" value="<?=$auto_users_id?>">
	<input type="hidden" name="core_user_id" value="<?=$core_user_id?>">
	<div class="row">
		<div class="col-lg-4">
			<div class="form-group">
				<label>Alpha-Numeric Validation</label>
				<div class="checkbox">
					<label>
						<input type="checkbox" value="7" name="project_id" <?php if (!empty($Alpha_Numeric_Validation)) echo "checked";?>> Check
					</label>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
			<div class="form-group">
				<label>Accuracy</label>
				<select name="accuracy_type" class="form-control" required="">
					<?php if ($Alpha_Numeric_Validation) { ?>
					<option value="<?=$Alpha_Numeric_Validation->autotyper_val?>" selected><?=$Alpha_Numeric_Validation->accuracy_type?> %</option>
					<?php }else{?>
					<option value="" selected="" disabled="">Select Accuracy</option>
					<?php } ?>
					<option value="72">7 - 72 %</option>
					<option value="82">14 - 82 %</option>
					<option value="86">20 - 86 %</option>
					<option value="89">25 - 89 %</option>
					<option value="91">31 - 91 %</option>
				</select>
			</div>
		</div>
		<div class="col-lg-4">
			<button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top: 27px; float: right;">Add</button>
		</div>
	</div>
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



