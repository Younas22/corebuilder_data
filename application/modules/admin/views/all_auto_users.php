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

    .sr-input-func button {
    position: absolute;
    top: 5px;
    right: -5px;
    color: #999;
    transition: .5s ease-out;
    font-size: 14px;
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
                                <form action="<?=$action?>" method="GET" role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control" name="user_searching">
                                    <!-- <a href="" type="submit"><i class="fa fa-search"></i></a> -->
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12" style="display:none">
                            <ul class="breadcome-menu">
                                <li><a href="<?=base_url()?>">Home</a> <span class="bread-slash">/</span>
                            </li>
                            <?php if ($user_type == 'admin') { ?>
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
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-status-wrap" style="margin-bottom:100px;">
        <h4>Auto Users List</h4>
<?php if (!empty($this->session->flashdata('user_msg'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('user_msg'); ?></p>
</div>
<?php }

if (!empty($this->session->flashdata('user_disable'))) { ?>
    <style>
        .admin-check-pro-clr{
            background-color:grey;
        }
        .admin-check-pro-clr:after{
            border-left:11px solid grey;
        }
    </style>
<div class="alert alert-secondary alert-success-style2 alert-st-bg1" style="">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('user_disable'); ?></p>
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
                    <th>Start</th>
                    <th>End</th>
                    <th>status</th>
                    <th>Project</th>
                    <th>Type</th>
                    <!-- <th>User status</th> -->
                    <th>Action</th>
                </tr>
                <?php $count=1; foreach ($all_users as $key):?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$key->name ?></td>
                    <td><?=$key->email?></td>
                    <td><?=$key->phone?></td>
                    <td><?=date('Y-m-d',strtotime($key->start_project))?></td>
                    <td><?=date('Y-m-d',strtotime($key->end_project))?></td>
<?php if ($key->p_status == 1) { ?>
<td>
    <label class="switch">
        <input type="checkbox" onclick='window.location.assign("<?=base_url('admin/auto-user-status/').$key->id?>/0?>")' checked>
        <span class="slider round"></span>
    </label>
</td>
<?php }else{ ?>
<td>
    <label class="switch">
        <input type="checkbox" onclick='window.location.assign("<?=base_url('admin/auto-user-status/').$key->id?>/1?>")'>
        <span class="slider round"></span>
    </label>
</td>
<?php } ?>

<td>
    <select class="form-control" style="width:130px;" name="auto_p">
        <?php foreach ($get_projects as $project) { ?>
            <?php if ($project->id == $key->main_pid) { ?>
            <option class="form-group" selected="" disabled=""><?=$project->projects_title?></option>
            <?php }else{?>
        <option class="form-group" value="<?=$key->id.','.$project->id?>"><?=$project->projects_title?></option>
            <?php } ?>
        <?php } ?>
    </select>
</td>
<td>
    <select class="form-control" style="width:100px;" name="auto_p_type">
        <option class="form-group" selected="" disabled=""><?=$key->project_type?></option>
        <option class="form-group" value="<?=$key->id?>,ultra">Ultra</option>
        <option class="form-group" value="<?=$key->id?>,turbo">Turbo</option>
    </select>
</td>


<td>
    <button data-toggle="tooltip" title="remove" class="pd-setting-ed">
<a href="" data-toggle="modal" data-target="#myModal<?php echo $key->id; ?>">
<i class="fa fa-trash-o" aria-hidden="true"></i></a>
</button>
</td>
                    <!-- <td><?=$key->p_type?></td> -->
                    <!-- <td><?=$key->start_date?></td> -->
                    <!-- <td><?=$key->end_date?></td> -->

<!-- <?php if ($key->user_status == 1 && $user_type != 'admin') { ?>
<td><span class="badge badge-primary" style="background:blue;">
<a onclick="return confirm('Are you sure , you want to disable user account?')" href="<?= base_url('company/user-status/').$key->users_id?>/0" class="text-decoration-none text-white" data-toggle="tooltip"
data-placement="top" title="Click and desable account" style="color: white;">ON</a>

</span></td>
<?php }else{ ?>
<td><span class="badge badge-secondary" style="background:gray;"><a onclick="return confirm('Are you sure , you want to enable User account?')" href="<?= base_url('company/user-status/').$key->users_id?>/1" class="text-decoration-none text-white" data-toggle="tooltip"
data-placement="top" title="Click and enable Account" style="color: white;">OFF</a></span></td>
<?php } ?> -->

                </tr>

<center><div id="myModal<?php echo $key->id; ?>" class="modal fade" role="dialog">
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
          <a  href="<?=base_url('admin/auto-user-delete/').$key->id?>" class="btn btn-default"  >Yes</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div></center>
                <?php $count++; endforeach; ?>
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