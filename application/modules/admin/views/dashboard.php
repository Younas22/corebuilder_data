<?php $user_type = $this->session->userdata('logged_in')->user_type; ?>
<style>
.badge:hover {
color: #ffffff;
text-decoration: none;
cursor: pointer;
}
.badge-error {
background-color: #b94a48;
}
.badge-error:hover {
background-color: #953b39;
}
.badge-warning {
background-color: #f89406;
}
.badge-warning:hover {
background-color: #c67605;
}
.badge-success {
background-color: ##5cc45e;
}
.badge-success:hover {
background-color: #356635;
}
.badge-info {
background-color: #3a87ad;
}
.badge-info:hover {
background-color: #2d6987;
}
.badge-inverse {
background-color: #333333;
}
.badge-inverse:hover {
background-color: #1a1a1a;
}
/*folder style*/
.container {
position: relative;
width: 100%;
max-width: 400px;
}
.container .folder {
width: 100%;
height: auto;
}
.container .btn {
position: absolute;
top: 50%;
left: 50%;
transform: translate(-50%, -50%);
-ms-transform: translate(-50%, -50%);
/*background-color: #555;*/
color: white;
font-size: 26px;
padding: 12px 24px;
border: none;
cursor: pointer;
border-radius: 5px;
text-align: center;
}
.single-product-item{
padding: 0!important;
}
/*end folder style*/

</style>
<div class="breadcome-area" style="display: none;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="breadcome-list">
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
                <li><a href="#">Home</a> <span class="bread-slash">/</span>
              </li>
              <li><span class="bread-blod">Dashboard</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<div style="margin-top:30px;"></div>
</div>
<?php if ($user_type == 'admin'){ ?>
<div class="analytics-sparkle-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="analytics-sparkle-line reso-mg-b-30">
    <a href="<?=base_url('admin/all-users')?>">
      <div class="analytics-content">
      <h5>Total Users</h5>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="width:100%">
        </div>
      </div><br>
      <h2><span class="counter"><?=$count_users?></span></h2>
    </div>
    </a>
  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="analytics-sparkle-line reso-mg-b-30">

    <a href="<?=base_url('admin/all-agencies')?>">
    <div class="analytics-content">
      <h5>Total Egency</h5>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color: green;">
        </div>
      </div><br>
      <h2><span class="counter"><?=$count_agencies?></span></h2>
    </div>
  </a>

  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="analytics-sparkle-line reso-mg-b-30 table-mg-t-pro dk-res-t-pro-30">

    <a href="<?=base_url('admin/downloaded-users/1')?>">
      <div class="analytics-content">
      <h5>Downloaded Users</h5>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color: gray;">
        </div>
      </div><br>
      <h2><span class="counter"><?=$count_downloaded?></span></h2>
    </div>
    </a>

  </div>
</div>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="analytics-sparkle-line table-mg-t-pro dk-res-t-pro-30">

    <a href="<?=base_url('admin/new-users/0')?>">
      <div class="analytics-content">
      <h5>New Users</h5>
      <div class="progress">
        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="70"
          aria-valuemin="0" aria-valuemax="100" style="width:100%; background-color: blue;">
        </div>
      </div><br>
      <h2><span class="counter"><?=$count_new_users?></span></h2>
    </div>
    </a>

  </div>
</div>
</div>
</div>
</div>
<?php } ?>
<!--  -->

<?php if ($letest_agencies) {?>
<div class="library-book-area mg-t-10" style="margin-top:30px; margin-bottom:30px;">
<div class="container-fluid">
<div class="row">
<?php foreach ($letest_agencies as $agencies) { ?>
<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  <div class="single-cards-item">
    <div class="single-product-image">
      <img src="<?=base_url('assets/')?>img/product/blue_profile_back.svg" alt="">
    </div>
    <div class="single-product-text">
      <?php if (!empty($agencies->company_logo)) { ?>
      <img src="<?=base_url('assets/')?>img/profile/<?=$agencies->company_logo?>" alt="">
      <?php }else{ ?>
      <img src="<?=base_url('assets/')?>img/profile/not-found.jpg?>" alt="">
      <?php } ?>
      <h4 style="margin-top:10px;"><?=$agencies->company_name?></h4>
      <h5><?php if ($agencies->manager_name) {
      echo "Manager: ".$agencies->manager_name;
      } else {
      echo "Manager: Null";
      }
      ?></h5>
      <a class="follow-cards" href="<?=base_url('admin/agency/').$agencies->id?>">Details</a>
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="cards-dtn">
            <h3><span class="counter"><?=total_user_company($agencies->id)?></span></h3>
            <a href="<?=base_url('admin/agency/all-users/').$agencies->id?>"><p style="color: white; background-color:#21825a;" class="badge">T-Users</p></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
        <div class="cards-dtn">
          <h3><span class="counter"><?=d_user_company($agencies->id)?></span></h3>
          <a href="<?=base_url('admin/agency/downloaded-users/1/').$agencies->id?>"><p style="color:white; background-color: #01939a;" class="badge">D-Users</p></a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="cards-dtn">
            <h3><span class="counter"><?=n_user_company($agencies->id)?></span></h3>
            <a href="<?=base_url('admin/agency/new-users/0/').$agencies->id?>"><p style="color:white; background-color:#a66615;" class="badge">N-Users</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
</div>
</div>
<?php } ?>

<!--  admin projects -->
<?php if ($user_type == 'admin'): ?>
<div class="library-book-area mg-t-0" style="margin-top:30px">
<div class="container-fluid">
<div class="row" style="margin-bottom: 70px;">
        <?php $count=0; foreach ($get_projects as $projects) {
          //if ($count == 7) { break; } ?>
          <?php if ($count == 4 || $count == 5 || $count == 6 || $count == 7 || $count == 8 || $count == 9) { ?> 
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top:30px">
          <?php }else{?>
          <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
          <?php } ?>
          <div class="single-product-item res-mg-t-30 table-mg-t-pro-n tb-sm-res-d-n dk-res-t-d-n" >
            <?php if ($projects->status == 1) { ?>
            <div class="single-product-text edu-pro-tx" style="text-align: center!important;">
              <a href="<?=base_url('company/projects-detiles').'/'.strtolower(str_replace(" ", "-", $projects->projects_title));?>" style="color: black!important;"><?=$projects->projects_title?>
                <div class="container">
                  <div class="folder">
                    <i class="fa fa-folder" aria-hidden="true"  style="color: <?=$projects->background?>; font-size: 120px;"></i>
                  </div>
                  <!-- <i class="fa fa-unlock btn" aria-hidden="true"></i> -->
                </div>
              </a></div>
              <?php }else{ ?>
              <div class="single-product-text edu-pro-tx" onclick="alert('Disabled Project');" style="text-align: center!important;">
                <a style="color: black!important;" ><?=$projects->projects_title?>
                  <div class="container">
                    <div class="folder">
                      <i class="fa fa-folder" aria-hidden="true"  style="color: <?=$projects->background?>; font-size: 120px;"></i>
                    </div>
                    <i class="fa fa-lock btn" aria-hidden="true"></i>
                  </div></a></div>
                  <?php } ?>
                </div>
              </div>
              <?php $count++; } ?>
</div>
</div>
</div>
<?php endif; ?>
<!--  end admin projects -->



<div class="basic-form-area mg-tb-0">
<div class="container-fluid">
<div class="row">

<?php if ($user_type == 'company'): ?>
<div class="col-lg-9 col-md-6 col-sm-12 col-xs-12">
  <div class="product-sales-chart"  style="margin-bottom: 70px;">
    <div class="portlet-title">
      <div class="row">
<style>.single-review-st-item{padding: 10px !important; margin-left: 0!important;}</style>
        <?php foreach ($get_projects as $projects) { ?>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6" style="padding_:0!important;">
          <div class="">
            <?php if ($projects->status == 1) { ?>
            <div class="single-product-text edu-pro-tx" style="text-align: center!important;">
              <a class="folder_font_size" href="<?=base_url('company/projects-detiles').'/'.strtolower(str_replace(" ", "-", $projects->projects_title));?>" style="color: black!important;"><?=$projects->projects_title?>
                <div class="container">
                  <div class="folder">
                    <i class="fa fa-folder folder_size" aria-hidden="true" style="color:<?=$projects->background?>;"></i>
                  </div>
                  <!-- <i class="fa fa-unlock btn" aria-hidden="true"></i> -->
                </div>
                </a>
              </div>
              <?php }else{ ?>
<!-- onclick="alert('Email us for getting more information and purchasing these projects. Our Email Address: abc@gmail.com');"  -->
<div class="single-product-text edu-pro-tx" style="text-align: center!important;">
    <a class="folder_font_size" style="color: black!important;" data-toggle="modal" href="#tallModal"><?=$projects->projects_title?>
      <div class="container">
        <div class="folder">
          <i class="fa fa-folder folder_size" aria-hidden="true" style="color:<?=$projects->background?>;"></i>
        </div>
        <i class="fa fa-lock btn" aria-hidden="true" style="font-size: 4vw;"></i>
      </div>
    </a>
  </div>
                  <?php } ?>
                </div>
              </div>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
      <?php endif; ?>

<style>
  /* Scrollbar Styling */
::-webkit-scrollbar {
  width: 10px;
}

::-webkit-scrollbar-track {
  background-color: #ebebeb;
  -webkit-border-radius: 10px;
  border-radius: 10px;
}

::-webkit-scrollbar-thumb {
  -webkit-border-radius: 10px;
  border-radius: 10px;
  background: #6d6d6d;
}
</style>
<?php if ($user_type != 'admin' && $user_type != 'user'): ?>
      <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 user_mb" style="overflow: scroll; height: 1000px; padding-right: 5px;">
        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
          <div class="single-review-st-hd">
            <h2>Online User</h2>
          </div>
          <?php if ($letest_users) { foreach ($letest_users as $key):?>
          <div class="single-review-st-text">
            <?php if ($key->profile_img) {?>
            <img src="<?=base_url('assets/')?>img/profile/<?=$key->profile_img?>" alt="" />
            <?php }else{ ?>
            <img src="<?=base_url('assets/')?>img/profile/1634211873icon-5359553_1920.png?>" alt="" />
            <?php } ?>
            <div class="review-ctn-hf">
              <h3 style="font-size:12px;"><?=$key->first_name.' | '.letest_projects_title($key->id)->projects_title;?></h3>
              <p style="font-size:11px;"><?=$key->company_email?></p>
            </div>
            <div class="review-item-rating">
              <?php if ($key->login_status > 0) {?>
              <i class="fa fa-circle" style="color:#5cb85c;" aria-hidden="true"></i>
              <?php }else{?>
              <i class="fa fa-circle" style="color:#777;" aria-hidden="true"></i>
              <?php } ?>
            </div>
          </div>
          <?php endforeach; }else{echo "User Not Found!";} ?>
        </div>
      </div>
<?php endif; ?>




<?php if ($user_type == 'user'): ?>
<div class="library-book-area mg-t-0">
<div class="container-fluid">
  <h4 style="text-align:center;">
You Are Working For <span style="color:red;"><?=ucfirst($profile[1]->company_name)?> | <a href="https://<?=ucfirst($profile[1]->company_website)?>" target="_blank"><?=ucfirst($profile[1]->company_website)?></a></span></h4>
<div class="product-sales-chart">
    <div class="portlet-title">
      <h4>All Projects</h4>
  </div>
<div class="row larg_devices_mb">

<!-- #F6F8FA -->
<?php $count=1; if (user_active_projects()){
foreach ($get_all_projects as $projects) { //echo($projects->id); ?>
<?php if (get_user_active_projects($projects->projects_title)->projects_title) {?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" style="margin-top: 1vw;">
  <div class="single-product-text edu-pro-tx" style="text-align: center!important; background-color: white;"><b style="font-size: 1.5vw;"><?=get_user_active_projects($projects->projects_title)->projects_title?></b>
    <a href="<?=base_url('user/user-projects').'/'.$this->session->userdata('logged_in')->id;?>" style="color: black!important;">
      <div class="container">
        <div class="folder">
          <i class="fa fa-folder" aria-hidden="true"  style="color: #f1c112de; font-size: 9vw;"></i>
        </div>
        <i class="btn" aria-hidden="true" style="font-size: 4vw;"><?= get_user_project_QTY($projects->id) ?></i>
      </div>
    </a></div>
  </div>
<?php $count++; }else{?>
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-6" style="margin-top: 1vw;">
  <div class="single-product-text edu-pro-tx" style="text-align: center!important; background-color: white;"><b style="font-size: 1.5vw;"><?=$projects->projects_title?></b>
    <a href="#" style="color: black!important;">
      <div class="container">
        <div class="folder">
          <i class="fa fa-folder" aria-hidden="true"  style="color: #f1c112de; font-size: 9vw;"></i>
        </div>
        <i class="btn" aria-hidden="true" style="font-size: 4vw;">0</i>
      </div>
    </a></div>
  </div>
<?php } ?>



<?php } }else{ echo "<p style='margin-left: 10px;'>Project Not Found!</p>"; } ?>
</div>
</div>
</div>
</div>
<!--  end admin projects -->
<?php endif; ?>

    </div>
  </div>
</div>




  <!-- Modal -->

<center>
  <div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Premium Project</h4>
      </div>
      <div class="modal-body">
        <p>Contact us for getting more information and purchasing these projects</p>
    
    <a href="https://thecorebuilder.com/about" target="_blank" class="btn btn-primary">Contact us</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</center>