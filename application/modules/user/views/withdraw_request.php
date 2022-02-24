<?php  $user_type = $profile->user_type; ?>
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
								<li><a href="<?=base_url('user/dashboard')?>">Home</a> <span class="bread-slash">/</span>
							</li>
							<?php if ($user_type == 'company') { ?>
							<li><span class="bread-blod"><?=$user_type?> withdraw-request</span>
							<?php }elseif($user_type == 'admin'){ ?>
							<li><span class="bread-blod"><?=$user_type?> withdraw-request</span>
							<?php }else{ ?>
							<li><span class="bread-blod"><?=$user_type?> withdraw-request</span>
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
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">


<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
		<ul id="myTabedu1" class="tab-review-design" style="text-align:center;">
			<li><a href="#INFORMATION">Wallet: <?=$wallet_amount?></a></li>
		</ul>
		<div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">
			<div class="product-tab-list" id="INFORMATION">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="review-content-section">
							<form action="<?= $action_type?>" method="POST" enctype="multipart/form-data">
								<div class="row">

<div class="alert alert-info alert-success-style2 alert-st-bg1">
	<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
	<span class="icon-sc-cl" aria-hidden="true">×</span>
	</button>
	<i class="fa fa-info-circle edu-inform admin-check-pro admin-check-pro-clr1" aria-hidden="true"></i>
	<p><strong>Alert!</strong> You can withdraw minimum 500 inr</p>
</div>


<?php if (!empty($this->session->flashdata('withdraw_msg'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('withdraw_msg'); ?></p>
</div>
<?php }

if(!empty($this->session->flashdata('withdraw_errors'))){?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('withdraw_errors'); ?></p>
</div>
<?php } ?>

									<div class="col-lg-4"> </div>
									<div class="col-lg-4">
										<div class="form-group">
											<label>Add Amount</label>
<input name="u_project_id" type="hidden" class="form-control" value="<?=$this->uri->segment(3);?>">
<input name="project_id" type="hidden" class="form-control" value="<?=$this->uri->segment(4);?>">
<input name="current_url" type="hidden" class="form-control" value="<?=current_url()?>">
											<input name="withdraw_amount" type="number" class="form-control" placeholder="Amount" min="500">
										</div>
									</div>
									<div class="col-lg-4"> </div>
								</div>

								<div class="row" style="text-align:center;">
									<div class="col-lg-4"> </div>
									<div class="col-lg-4">
										<div class="form-group">
											<button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">withdraw-request</button>
										</div>
									</div>
									<div class="col-lg-4"> </div>
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