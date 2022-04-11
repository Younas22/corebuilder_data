<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<style>
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
                                <form action="<?=base_url('admin/all-agencies')?>" method="GET" role="search" class="sr-input-func">
                                    <input type="text" placeholder="Search..." class="search-int form-control" name="user_searching">
                                    <!-- <a href="" type="submit"><i class="fa fa-search"></i></a> -->
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
    <div class="product-status-wrap">
        <h4>Egencies List</h4>
        
        <div class="asset-inner">
            <?php if (!empty($all_agencies)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <th>Users Document</th>
                    <!-- <th>Project</th> -->
                    <!-- <th>Type</th> -->
                    <!-- <th>Start</th> -->
                    <!-- <th>End</th> -->
                    <th>User status</th>
                    <th width="10" style="text-align:center;">Action</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php $count=1; foreach ($all_agencies as $key):?>
                <tr>
                    <td><?=$count?></td>
                    <td><?php if ($key->first_name) {
                        echo $key->first_name;
                    }else{echo "<p style='color:red'>Empty</p>";} ?></td>
                    <td><?=$key->company_email?></td>
                    <td><?=$key->user_phone?></td>
                    <td><?=$key->decript_password?></td>
                    <!-- <td><?=$key->projects_title?></td> -->
                    <!-- <td><?=$key->p_type?></td> -->
                    <!-- <td><?=$key->start_date?></td> -->
                    <!-- <td><?=$key->end_date?></td> -->

<?php if ($key->custom_terms == 1) { ?>

<td><span class="badge badge-primary" style="background:blue; cursor: pointer;">
    <a data-toggle="modal" data-target="#myModal<?php echo $key->users_id; ?>" class="text-decoration-none text-white"
    data-placement="top" title="Users Document" style="color: white;">ON</a></span>
</td>

<?php }else{ ?>

<td><span class="badge badge-secondary" style="background:gray; cursor: pointer;"><a data-toggle="modal" data-target="#myModal<?php echo $key->users_id; ?>" class="text-decoration-none text-white"
    data-placement="top" title="Users Document" style="color: white;">OFF</a></span>
</td>


<?php } ?>

<?php if ($key->user_status == 1) { ?>
<td><span class="badge badge-primary" style="background:blue;">
    <a onclick="return confirm('Are you sure , you want to disable user account?')" href="<?= base_url('company/user-status/').$key->users_id?>/0" class="text-decoration-none text-white" data-toggle="tooltip"
    data-placement="top" title="Click and desable account" style="color: white;">ON</a></span>
</td>
<?php }else{ ?>
<td><span class="badge badge-secondary" style="background:gray;"><a onclick="return confirm('Are you sure , you want to enable User account?')" href="<?= base_url('company/user-status/').$key->users_id?>/1" class="text-decoration-none text-white" data-toggle="tooltip"
data-placement="top" title="Click and enable Account" style="color: white;">OFF</a></span>
</td>
<?php } ?>

<td width="10">
<button class="pd-setting-ed">
    <a href="<?=base_url('admin/agency/').$key->users_id?>" data-toggle="tooltip" title="Profile"><span class="educate-icon educate-student" aria-hidden="true"></span></a>
</button>

<button class="pd-setting-ed">
    <a href="<?=base_url('admin/agency/all-users/').$key->users_id?>" data-toggle="tooltip" title="All Users"><i class="fa fa-user edu-avatar" aria-hidden="true"></i></a>
</button>

<button class="pd-setting-ed">
    <a href="<?=base_url('admin/agency/downloaded-users/1/').$key->users_id?>" data-toggle="tooltip" title="Downloaded Users"><i class="fa fa-cloud-download edu-check-icon" aria-hidden="true"></i></a>
</button>

<button class="pd-setting-ed">
    <a href="<?=base_url('admin/agency/new-users/0/').$key->users_id?>" data-toggle="tooltip" title="New Users"><i class="fa fa-check edu-checked-pro" aria-hidden="true"></i></a>
</button>
</td>

</tr>



<center><div id="myModal<?php echo $key->users_id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Users Document</h4>
      </div>
      <div class="modal-body">
        <p>Do you want to active Users Document? </p>
      </div>
      <div class="modal-footer">
      <a  href="<?=base_url('admin/agency/active-document/').$key->users_id?>" class="btn btn-default"  >Yes</a>
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