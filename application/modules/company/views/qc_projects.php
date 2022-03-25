<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<?php  $user_id = $this->session->userdata('logged_in')->id; ?>

<style>

.tile{
    width: 100%;
    background:#fff;
    border-radius:5px;
    box-shadow:0px 2px 3px -1px rgba(151, 171, 187, 0.7);
    float:left;
    transform-style: preserve-3d;
    margin: 10px 5px;

}

.header{
    border-bottom:1px solid #ebeff2;
    padding:19px 0;
    text-align:center;
    color:#59687f;
    font-size:600;
    font-size:19px; 
    position:relative;
}

.banner-img {
    padding: 5px 5px 0;
}

.banner-img img {
    width: 100%;
    border-radius: 5px;
}

.dates{
    border:1px solid #ebeff2;
    border-radius:5px;
    padding:20px 0px;
    margin:10px 20px;
    font-size:16px;
    color:#5aadef;
    font-weight:600;    
    overflow:auto;
}
.dates div{
    float:left;
    width:50%;
    text-align:center;
    position:relative;
}
.dates strong,
.stats strong{
    display:block;
    color:#adb8c2;
    font-size:11px;
    font-weight:700;
}
.dates span{
    width:1px;
    height:40px;
    position:absolute;
    right:0;
    top:0;  
    background:#ebeff2;
}
.stats{
    border-top:1px solid #ebeff2;
    background:#f7f8fa;
    overflow:auto;
    padding:15px 0;
    font-size:16px;
    color:#59687f;
    font-weight:600;
    border-radius: 0 0 5px 5px;
}
.stats div{
    border-right:1px solid #ebeff2;
    width: 33.33333%;
    float:left;
    text-align:center
}

.stats div:nth-of-type(3){border:none;}
</style>

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
                <?php 
                // dd($alluser_projects);
                 $count=1; foreach ($alluser_projects as $key):

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
                            <!-- <button class="pd-setting-ed">
                            <a href="<?=base_url('company/qc-report-view/basic/').$key->project_id?>" data-toggle="tooltip" title="View QC Report"><i class="fa fa-eye"></i></a>
                            </button> -->

                            <button data-toggle="tooltip" value="<?=$key->project_id?>" title="View QC Report" class="View_QCReport pd-setting-ed">
                            <a href="" data-toggle="modal" data-target="#Qc_View_Modal<?php echo $key->project_id; ?>">
                            <i class="fa fa-eye"></i>
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

                            <button data-toggle="tooltip" title="Status" class="pd-setting-ed">
                            <a href="" data-toggle="modal" data-target="#myModalstatus<?php echo $key->project_id; ?>">
                            <i class="fa fa-check" aria-hidden="true"></i>
                            </button>
                        </td>
                    </tr>



<center><div id="myModalstatus<?php echo $key->project_id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

    <form action="<?=base_url('company/qc-report-approve/').$key->project_id?>" method="POST">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">QC Report Admin Status</h4>
        <b style="color: red"><?php if ($key->qc_report_status == 'no') {
            echo "No Action Made";
        }else{echo $key->qc_report_status;} ?></b>
      </div>
      <div class="modal-body">

<div style="display: flex;"><h4 style="text-align: left;">Report Updated: </h4>
    <span style="text-align: right; color: white">-------------------------------------</span>
    <span style="text-align: right;"><?php if ($key->report_status_date == null) { echo "No Action Made";}else{echo $key->report_status_date;} ?></span>
</div>

<div style="display: flex;"><h4 style="text-align: left;">Report Viewed: </h4>
    <span style="text-align: right; color: white">---------------------------------------</span>
    <span style="text-align: right;"><?php if ($key->report_view_date == null) { echo "No Action Made";}else{echo $key->report_view_date;} ?></span>
</div>

<div style="display: flex;"><h4 style="text-align: left;">Report Downloaded: </h4>
    <span style="text-align: right; color: white">----------------------------</span>
    <span style="text-align: right;"><?php if ($key->report_download_date == null) { echo "No Action Made";}else{echo $key->report_download_date;} ?></span>
</div>

<div style="display: flex;"><h4 style="text-align: left;">Report Send: </h4>
    <span style="text-align: right; color: white">-------------------------------------------</span>
    <span style="text-align: right;"><?php if ($key->report_send_date == null) { echo "No Action Made";}else{echo $key->report_send_date;} ?></span>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">cancel</button>
      </div>
      </form>

    </div>
  </div>
</div>
</center>

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



<center><div id="Qc_View_Modal<?php echo $key->project_id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">QC-Report Summary</h4>

        <div style="font-size:16px; color: red;">
            <strong>Earning</strong> <?=$key->earning?>
        </div>
      </div>

                        <div class="stats">
                            <div style="font-size:12px">
                                <strong>Name</strong> <?=$key->first_name?>
                            </div>

                            <div style="font-size:12px">
                                <strong>Email</strong> <?=$key->company_email?>
                            </div>

                             <div style="font-size:12px">
                                <strong>Phone</strong> <?=$key->user_phone?>
                            </div>
                        </div>


                        <div class="dates">
                            <div class="start">
                                <strong>STARTS</strong> <?=date('m-d-Y',strtotime($key->start_date))?>
                                <span></span>
                            </div>


                            <div class="ends">
                                <strong>ENDS</strong> <?=date('m-d-Y',strtotime($key->end_date))?>
                            </div>
                        </div>

                        <div class="stats">
                            <div>
                                <strong>Project</strong> <?=$key->projects_title?>
                            </div>
                            <div style="font-size:12px">
                                <strong>Project Type</strong> <?=$key->p_type?>
                            </div>

                            
                            <div>
                                <strong>Overall Accuracy</strong> <?=overall_accuracy_report($key->project_id)?>
                            </div>
                        </div>

                        <div class="stats">

                            <div>
                                <strong>Quantity</strong> <?=$key->quantity?>
                            </div>

                            <div>
                                <strong>Right</strong> <?=$key->_right?>
                            </div>

                            <div>
                                <strong>Wrong</strong> <?=$key->wrong?>
                            </div>

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