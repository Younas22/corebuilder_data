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
								<a href="<?=base_url('admin/all-agencies')?>" class="btn btn-custon-four btn-primary btn-sm">back</a>
							</div>
						</div>
						
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
<!-- Single pro tab review Start-->

<div class="courses-area">
<div class="container-fluid">
<div class="row mg-b-15">
	<?php if (!empty($mail_files)) {
		foreach ($mail_files as $key) { ?>
	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
		<div class="courses-inner mg-t-30">
			<div class="courses-title">
				<a href="<?=base_url('assets/email/').$key->email_file?>"><img src="https://tradecouncil.net/wp-content/uploads/2021/05/647702-excel-512.png" alt="" height="150" width="150"></a>
				<h2><?=$key->compaign_name?></h2>
			</div>

			<div class="product-buttons">
				<a href="<?=base_url('assets/email/').$key->email_file?>" class="btn btn-custon-four btn-primary btn-sm">download</a>
			</div>
		</div>
	</div>
<?php } }else{echo "<div style='margin-left:20px;'>file not found</div>";} ?>
</div>
</div>
</div>

