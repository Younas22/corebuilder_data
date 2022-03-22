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
    <div class="product-status-wrap larg_devices_mb">
        <h4>QC Report List</h4>
            
<?php if (!empty($this->session->flashdata('qc_status'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('qc_status'); ?></p>
</div>
<?php }?>        <div class="asset-inner">
            <?php if (!empty($alluser_projects)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Start</th>
                    <th>End</th>
            <?php //if ($user_type == 'company') { echo "<th>Accuracy</th>";} ?>
            <?php //if ($user_type == 'company') { echo "<th>Font</th>";} ?>
                    <th>Overall Accuracy</th>
                    <th>Accuracy</th>
                    <th>Action</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php $count=1; foreach ($alluser_projects as $key):

                // echo get_project_dedline($key->project_id); exit();

                ?>
                    <tr>
                        <td><?=$count?></td>
                        <td><?=$key->projects_title?></td>
                        <td><?=$key->p_type?></td>
                        <td><?=$key->start_date?></td>
                        <td><?=$key->end_date?></td>
                        <td><?=overall_accuracy_report($key->project_id)?></td>
                        <td><?=accuracy_report($key->project_id)?></td>
                        
                        <td>
                            <button class="pd-setting-ed">
                            <a href="<?=base_url('company/qc-report-view/basic/').$key->project_id?>" data-toggle="tooltip" title="View QC Report"><i class="fa fa-eye"></i></a>
                            </button>

                            <button class="pd-setting-ed">
                            <a href="<?=base_url('company/qc-report-download/basic/').$key->project_id?>" data-toggle="tooltip" title="Download"><i class="fa fa-download" aria-hidden="true"></i></a>
                            </button>

                            <button class="pd-setting-ed">
                            <a href="<?=base_url('company/qc-report-send/basic/').$key->project_id?>" data-toggle="tooltip" title="Send QC Report"><i class="fa fa-send" aria-hidden="true"></i></a>
                            </button>

                            <button data-toggle="tooltip" title="Approve or Reject" class="pd-setting-ed">
                            <a href="" data-toggle="modal" data-target="#myModal<?php echo $key->project_id; ?>">
                            <i class="fa fa-check-circle" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>



<center><div id="myModal<?php echo $key->project_id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    <form action="<?=base_url('company/qc-report-approve/').$key->project_id?>" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Approve or Reject</h4>
      </div>
      <div class="modal-body">
        <select name="qc_status" class="form-control">
            <option disabled="" selected="">Approve or Reject</option>
            <option value="approve">Approve</option>
            <option value="reject">Reject</option>
        </select>
      </div>
      <div class="modal-footer">
        <button class="btn btn-danger" type="submit">submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
      </div>
      </form>

    </div>
  </div>
</div>
</center>




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