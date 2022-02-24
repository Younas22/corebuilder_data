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
                                <form action="<?=$action?>" method="GET" role="search" class="sr-input-func">
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
        <h4>Downloaded Users List</h4>
        
        <div class="asset-inner">
            <?php if (!empty($downloaded_users)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Password</th>
                    <!-- <th>Project</th> -->
                    <!-- <th>Type</th> -->
                    <!-- <th>Start</th> -->
                    <!-- <th>End</th> -->
                    <!-- <th>User status</th> -->
                    <th>Action</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php $count=1; foreach ($downloaded_users as $key):?>
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

<!-- <?php if ($key->user_status == 1) { ?>
<td><span class="badge badge-primary" style="background:blue;">
<a onclick="return confirm('Are you sure , you want to disable user account?')" href="<?= base_url('company/user-status/').$key->users_id?>/0" class="text-decoration-none text-white" data-toggle="tooltip"
data-placement="top" title="Click and desable account" style="color: white;">ON</a>

</span></td>
<?php }else{ ?>
<td><span class="badge badge-secondary" style="background:gray;"><a onclick="return confirm('Are you sure , you want to enable User account?')" href="<?= base_url('company/user-status/').$key->users_id?>/1" class="text-decoration-none text-white" data-toggle="tooltip"
data-placement="top" title="Click and enable Account" style="color: white;">OFF</a></span></td>
<?php } ?> -->

                    <td>
                        <!-- <a class="pd-setting" href="<?=base_url('company/add-project/').$key->users_id?>">Add-Project</a> -->
                        <!-- <button class="pd-setting-ed"><a href="<?=base_url('company/add-project/').$key->users_id?>" data-toggle="tooltip" title="Add-Project"><i class="fa fa-plus-square-o" aria-hidden="true"></i></a></button> -->
                        <button class="pd-setting-ed"><a href="<?=base_url('company/user-view/').$key->users_id?>" data-toggle="tooltip" title="View"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></button>
                    </td>
                    <!-- <td><button class="pd-setting">Active</button></td> -->
                </tr>
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