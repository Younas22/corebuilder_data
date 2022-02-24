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




<style>
    /*  Reset & General
---------------------------------------------------------------------- */
* { margin: 0px; padding: 0px; }
body {
    background: #ecf1f5;
    font:14px "Open Sans", sans-serif; 
    text-align:center;
}

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

div.footer {
    text-align: right;
    position: relative;
    margin: 20px 5px;
}

div.footer a.Cbtn{
    padding: 10px 25px;
    background-color: #DADADA;
    color: #666;
    margin: 10px 2px;
    text-transform: uppercase;
    font-weight: bold;
    text-decoration: none;
    border-radius: 3px;
}

div.footer a.Cbtn-primary{
    background-color: #5AADF2;
    color: #FFF;
}

div.footer a.Cbtn-primary:hover{
    background-color: #7dbef5;
}

div.footer a.Cbtn-danger{
    background-color: #fc5a5a;
    color: #FFF;
}

div.footer a.Cbtn-danger:hover{
    background-color: #fd7676;
}
</style>
<!-- Single pro tab review Start-->
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-status-wrap">

<h4>
<?php //if ($this->uri->segment(3) != 'projects')
//{ echo ucwords($this->uri->segment(3). ' Project'); }else{echo "Projects";} 
?> 
Project List</h4>
            
<!-- <?php if (!empty($this->session->flashdata('project_msg'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('project_msg'); ?></p>
</div>
<?php }?> -->
<div class="asset-inner">
    <div class="row">

            <?php if (!empty($all_filling_project)) { ?>
                <?php $count=1; foreach ($all_filling_project as $key):?>
                <div class="col-md-4 col-lg-4 col-xl-4">
                <div class="tile">
                    <div class="wrapper">
                        <div class="header"><?=ucfirst($key->first_name)?></div><br><?=$key->company_email?>

                        <!--<div class="banner-img">-->
                        <!--    <?php if (!empty($key->profile_img)) { ?>-->
                        <!--    <img src="<?=base_url('assets/')?>img/profile/<?=$key->profile_img?>" alt="Image 1">-->
                        <!--    <?php }else{ ?>-->
                        <!--    <img src="<?=base_url('assets/')?>img/profile/demo.jpg?>" class="img-responsive circular--landscape" alt="Image 1">-->
                        <!--    <?php } ?>-->
                        <!--</div>-->

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

                            <div style="font-size:12px">
                                <strong>Name</strong> <?=$key->first_name?>
                            </div>

                            <div style="font-size:12px; color:#f7f8fa">
                                <strong>.</strong>
                            </div>

                            <div style="font-size:12px">
                                <strong>Project</strong> <?=$key->p_type?>
                            </div>

                        </div>

                        <div class="stats">

                            <div>
                                <strong>Total</strong> <?=$key->_right+$key->wrong?>
                            </div>

                            <div>
                                <strong>Right</strong> <?=$key->_right?>
                            </div>

                            <div>
                                <strong>Wrong</strong> <?=$key->wrong?>
                            </div>

                        </div>

                        <div class="stats">
            <?php 
            //Accuracy report
                    $current = (int)$key->_right+(int)$key->wrong;
                    $current_right = (int)$key->_right;
                    $accuracy_rep = $current_right/$current*100;
            ?>
                            <div>
                                <strong>Accuracy</strong> <?= number_format((float)$accuracy_rep, 2, '.', '').'%' ?>
                            </div>

                            <div>
                                <strong>Earning</strong> <?=$key->earning?>
                            </div>

                            <div>
                                <strong>Skips Remaining</strong> <?=$key->refrash_limit?>
                            </div>

                        </div>

<!--                         <div class="footer">
                            <a href="#" class="Cbtn Cbtn-primary">View</a>
                            <a href="#" class="Cbtn Cbtn-danger">Delete</a>
                        </div> -->
                    </div>
                </div> 
                </div>
                <?php $count++; endforeach; ?>
            <?php }else{ echo "Data Not Found!"; } ?>

    </div>
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