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
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div style="margin-top:20px"></div>
</div>
<!-- Single pro tab review Start-->
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-status-wrap">
        <h4>User withdrawal List</h4>
        
        <div class="asset-inner">
            <?php if (!empty($allwithdrawal)) { ?>
            <table>
                <tr>
                    <th>No</th>
                    <th>First name</th>
                    <th>Phone</th>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Withdraw</th>
                    <th>Created at</th>
                    <th>Status</th>
                    <!-- <th>Action</th> -->
                </tr>
                <?php $count=1; foreach ($allwithdrawal as $key):?>
                <tr>
                    <td><?=$count?></td>
                    <td><?=$key->first_name?></td>
                    <td><?=$key->user_phone?></td>
                    <td><?=$key->projects_title?></td>
                    <td><?=$key->p_type?></td>
                    <td><?=$key->total_withdraw?></td>
                    <td><?=$key->created_at?></td>
                    <td>
                    	<?php if ($key->withdraw_status == 'pending') { ?>
                  		<span class="btn-sm btn btn-warning"><?=$key->withdraw_status?></span>
                    	<?php }else{ ?>
                  		<span class="btn-sm btn btn-success"><?=$key->withdraw_status?></span>
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
</div>
</div>
</div>
</div>