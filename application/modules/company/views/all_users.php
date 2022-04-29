<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}
 
.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
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
                                <form action="<?=base_url('company/all-users')?>" method="GET" role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control" name="user_searching">
                                    <!-- <a href="" type="submit"><i class="fa fa-search"></i></a> -->
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <!-- <ul class="breadcome-menu">
                                <li><a href="<?=base_url()?>">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <?php if ($user_type == 'company') { ?>
                            <li><span class="bread-blod"><?=$user_type?> / <?=$url_title?></span>
                            <?php } ?>
                        </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- Single pro tab review Start-->
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-status-wrap larg_devices_mb">

<div style="display: flex;">
<h4 style="margin-right: 60%;">Users List <span  data-toggle="tooltip"  title="Total Users"> (<?=$total_user?>) </span></h4>
<select name="results" class="form-control" style="float:right; width:10%; margin-right: 10px;">
    <?php 
    $results = $this->session->userdata('results');
    $results_arr = [10,20,50,100];
    for ($i=0; $i < count($results_arr); $i++) { 
        if ($results_arr[$i] == $results) { ?>
            <option value="<?=$results_arr[$i]?>" selected><?=$results_arr[$i]?></option>
        <?php }else{?>
            <option value="<?=$results_arr[$i]?>"><?=$results_arr[$i]?></option>
        <?php } } ?>
    </select>

  <select name="userprojects" class="form-control" style="float:right; width:10%;">
    <option value="all">All</option>
    <?php 
    $results_ = $this->session->userdata('userprojects');
    $userprojects = 0;
    foreach ($get_projects as $key) {
        if ($userprojects < 4) {
     if ($key->projects_title == $results_) { ?>
            <option value="<?=$key->projects_title?>" selected><?=$key->projects_title?></option>
        <?php }else{?>
            <option value="<?=$key->projects_title?>"><?=$key->projects_title?></option>
        <?php } }$userprojects++; } ?>
    </select>
</div>

<!-- <br><br><br><br><br><br><br><br><br><br> -->

<?php if (!empty($this->session->flashdata('user_msg'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('user_msg'); ?></p>
</div>
<?php }

if(!empty($this->session->flashdata('user_errors'))){?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-times edu-danger-error admin-check-pro admin-check-pro-clr3" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('user_errors'); ?></p>
</div>
<?php } ?>


        <div class="asset-inner">
            <?php if (!empty($all_users)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Project</th>
                    <!-- <th>Type</th> -->
                    <!-- <th>Start</th> -->
                    <!-- <th>End</th> -->
                    <th>User status</th>
                    <th>Action</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php $count=1; foreach ($all_users as $key):?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$key->first_name?></td>
                    <td><?=$key->company_email?></td>
                    <td><?=$key->user_phone?></td>
                    <td><?=$key->decript_password?></td>
                    <td><?=$key->projects_title;?></td>
                    <!-- <td><?=$key->p_type?></td> -->
                    <!-- <td><?=$key->start_date?></td> -->
                    <!-- <td><?=$key->end_date?></td> -->

<?php 
if ($key->irritate_mode == null) {$irritate_mode = 0;}else{$irritate_mode = $key->irritate_mode;} 
if ($key->auto_font == null) {$auto_font = 0;}else{$auto_font = $key->auto_font;} 
if ($key->user_status == 1) { ?>
<td>
    <label class="switch">
        <input type="checkbox" onclick='window.location.assign("<?=base_url('company/user-status/').$key->users_id?>/0?>")' checked>
        <span class="slider round"></span>
    </label>
</td>
<?php }else{ ?>
<td>
    <label class="switch">
        <input type="checkbox" onclick='window.location.assign("<?=base_url('company/user-status/').$key->users_id?>/1?>")'>
        <span class="slider round"></span>
    </label>
</td>
<?php } ?>

                    <td>
<?php if ($irritate_mode == 1) { ?>
  <button class="pd-setting-ed"><a href="<?=base_url('company/irritate-mode/').$key->users_id.'/'.$irritate_mode?>" data-toggle="tooltip" title="Auto Irritate mode Off"><i class="fa fa-check"></i></a></button>
<?php }else{ ?>
  <button class="pd-setting-ed"><a href="<?=base_url('company/irritate-mode/').$key->users_id.'/'.$irritate_mode?>" data-toggle="tooltip" title="Auto Irritate mode On"><i class="fa fa-times"></i></a></button>
<?php } ?>

                        <button class="pd-setting-ed"><a href="<?=base_url('company/add-project/').$key->users_id?>" data-toggle="tooltip" title="Add-Project"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></button>
                        <button class="pd-setting-ed"><a href="<?=base_url('company/user-view/').$key->users_id?>" data-toggle="tooltip" title="View"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
<button data-toggle="tooltip" title="remove" class="pd-setting-ed">
<a href="" data-toggle="modal" data-target="#myModal<?php echo $key->users_id; ?>">
<i class="fa fa-trash-o" aria-hidden="true"></i></a>
</button>

<?php if ($auto_font == 1) { ?>
  <button class="pd-setting-ed"><a href="<?=base_url('company/user-auto-font/').$key->users_id.'/'.$auto_font?>" data-toggle="tooltip" title="Auto Font Disable"><i class="fa fa-check"></i></a></button>
<?php }else{ ?>
  <button class="pd-setting-ed"><a href="<?=base_url('company/user-auto-font/').$key->users_id.'/'.$auto_font?>" data-toggle="tooltip" title="Auto Font Active"><i class="fa fa-times"></i></a></button>
<?php } ?>






                    </td>
                    <!-- <td><button class="pd-setting">Active</button></td> -->
                </tr>



<center><div id="myModal<?php echo $key->users_id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to delete this user? </p>
      </div>
      <div class="modal-footer">
          <a  href="<?=base_url('company/user-delete/').$key->users_id?>" class="btn btn-default"  >Yes</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div></center>
                <?php $count++; endforeach; ?>
                <!-- <td>
                    <a href="<?=base_url('company/add-project/').$key->users_id?>" data-toggle="tooltip" title="Add-Project" class="pd-setting-ed"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td> -->
            </table>
            <?php }else{ echo "Data Not Found!"; } ?>
        </div>
        <div class="custom-pagination">
            <ul class="pagination">
                <?=$links?>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>