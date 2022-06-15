<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<?php  $user_id = $this->session->userdata('logged_in')->id; ?>
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
                        <li><span class="bread-blod"><?=$user_type?> / <?=$url_title?></span>
                            <?php } ?>
                        </li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div style="margin-top:20px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!-- start -->
<div class="product-status-wrap larg_devices_mb">
    <h4>User Project List</h4>
    
    <?php if (!empty($this->session->flashdata('project_msg'))) { ?>
    <div class="alert alert-success alert-success-style2 alert-st-bg1">
        <button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
        <span class="icon-sc-cl" aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
        <p><strong>Alert!</strong> <?= $this->session->flashdata('project_msg'); ?></p>
    </div>
    <?php }?>










<div class="asset-inner">
    <?php if (!empty($alluser_projects)) { ?>
    <table>
        <tr>
            <th>No</th>
            <th>Project</th>
            <th>Type</th>
            <th>Start</th>
            <th>End</th>
            <th>Overall Accuracy</th>
            <th>Accuracy</th>
            <th>Action</th>
        </tr>
        <?php $count=1; foreach ($alluser_projects as $key):?>
        <tr>
            <td><?=$count?></td>
            <td><?=$key->projects_title?></td>
            <td><?=$key->p_type?></td>
            <td><?=$key->start_date?></td>
            <td><?=$key->end_date?></td>
            <td><?=overall_accuracy_report($key->project_id)?></td>
            <td><?=accuracy_report($key->project_id)?></td>
            <td>
                <?php if ($user_type == 'company') { ?>
                <button class="pd-setting-ed">
                    <a href="<?=base_url('company/project-view/').$key->project_id?>" data-toggle="tooltip" title="View"><i class="fa fa-search"></i>
                    </a>
                </button>

                <button class="pd-setting-ed">
                   <a href="<?=base_url('company/project-edit/').$key->project_id?>" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                    </a>
                </button>

                <button class="pd-setting-ed">
                   <a href="<?=base_url('company/del-user-projects/').$key->project_id.'/'.$key->users_id?>" data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i>
                    </a>
                </button>
                <?php }else{ ?>

                <button class="pd-setting-ed">
                    <a href="<?=base_url('user/withdraw-request/').$key->project_id.'/'.$key->up_id?>" data-toggle="tooltip" title="withdraw-request"><i class="fa fa-money icon-wrap"></i>
                    </a>
                </button>

                    <a href="<?=base_url('user/user-project-details/').strtolower(str_replace(' ', '-', $key->projects_title)).'/'.$key->project_id?>" data-toggle="tooltip" title="start work" class="btn btn-primary" style="color:white !important;">start
                    </a>
                <?php } ?>
            </td>
        </tr>
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
        <!-- end -->
</div>
</div>
</div>
</div>