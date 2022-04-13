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

<!-- Single pro tab review Start-->
<div class="product-status mg-b-15" style="margin-top: 50px;">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-status-wrap larg_devices_mb">

<div style="display: flex;">
<h4 style="margin-right: 50%;">Users Documents <span  data-toggle="tooltip"  title="Total Users">
  <!-- (<?=$total_user?>)  -->
</span></h4>
<select name="results" class="form-control" style="float:right; width:28%; display: none;">
    <?php 
    $results = $this->session->userdata('results');
    $results_arr = [10,20,50,100];
    for ($i=0; $i < count($results_arr); $i++) { 
        if ($results_arr[$i] == $results) { ?>
            <option value="<?=$results_arr[$i]?>" selected><?=$results_arr[$i]?></option>
        <?php }else{?>
            <option value="<?=$results_arr[$i]?>"><?=$results_arr[$i]?></option>
        <?php } } ?>
<!--         <option value="10" selected="">10</option>
        <option value="20">20</option>
        <option value="50">50</option>
        <option value="100">100</option> -->
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
            <?php  if (!empty($total_users_documents)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <!-- <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th> -->
                    <th>Project</th>
                    <!-- <th>Type</th> -->
                    <!-- <th>Start</th> -->
                    <!-- <th>End</th> -->
                    <th>Action</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php 
                    $No = 1; foreach ($total_users_documents as $key_ => $value_) {
                       foreach ($value_ as $k => $key) {
                ?>
                <tr>
                    <td><?=$No?></td>
                    <td><?=$key->first_name?></td>
                    <!-- <td><?=$key->company_email?></td>
                    <td><?=$key->user_phone?></td>
                    <td><?=$key->decript_password?></td> -->
                    <td><?=letest_projects_title($key->u_id)->projects_title;?></td>
                    <!-- <td><?=$key->p_type?></td> -->
                    <!-- <td><?=$key->start_date?></td> -->
                    <!-- <td><?=$key->end_date?></td> -->


                    <td>
                        <button class="pd-setting-ed"><a href="<?=base_url('company/project-view/').$key->id?>" data-toggle="tooltip" title="View"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
<!-- <button data-toggle="tooltip" title="remove" class="pd-setting-ed">
<a href="" data-toggle="modal" data-target="#myModal<?php echo $key->u_id; ?>">
<i class="fa fa-trash-o" aria-hidden="true"></i></a>
</button> -->
                    </td>
                    <!-- <td><button class="pd-setting">Active</button></td> -->
                </tr>



<center><div id="myModal<?php echo $key->u_id; ?>" class="modal fade" role="dialog">
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
          <a  href="<?=base_url('company/user-delete/').$key->u_id?>" class="btn btn-default"  >Yes</a>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
    </div>

  </div>
</div></center>
                <?php $No++;  }} ?>
                <!-- <td>
                    <a href="<?=base_url('company/add-project/').$key->u_id?>" data-toggle="tooltip" title="Add-Project" class="pd-setting-ed"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a>
                    <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                    <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                </td> -->
            </table>
            <?php }else{ echo "Data Not Found!"; } ?>
        </div>
        <!-- <div class="custom-pagination">
            <ul class="pagination">
                <?=$links?>
            </ul>
        </div> -->
    </div>
</div>
</div>
</div>
</div>