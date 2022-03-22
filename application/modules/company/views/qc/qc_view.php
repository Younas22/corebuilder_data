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
        <h4><?=$title?></h4>
              <div class="asset-inner">
            <?php 

            // dd($project_view);

            if (!empty($project_view)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Right</th>
                    <th>Wrong</th>
                    <th>Quantity</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Overall Accuracy</th>
                </tr>
                    <tr>
                        <td>1</td>
                        <td><?=get_user_profile($project_view->users_id)->first_name?></td>
                        <td><?=get_user_profile($project_view->users_id)->company_email?></td>
                        <td><?=get_user_profile($project_view->users_id)->user_phone?></td>
                        <td><?=$project_view->projects_title?></td>
                        <td><?=$project_view->p_type?></td>
                        <td><?=$project_view->_right?></td>
                        <td><?=$project_view->wrong?></td>
                        <td><?=$project_view->quantity?></td>
                        <td><?=$project_view->start_date?></td>
                        <td><?=$project_view->end_date?></td>
                        <td><?=overall_accuracy_report($project_view->project_id)?></td>

                    </tr>



            </table>
            <?php }else{ echo "Data Not Found!"; } ?>
        </div>

    </div>
</div>
</div>
</div>
</div>