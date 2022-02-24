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
/*//////////////////////////////////////////////////////*/
@import url("https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap");
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
/* ******************* Main Styeles : Radio Card */
label.radio-card {
cursor: pointer;
}
label.radio-card .card-content-wrapper {
background: #fff;
border-radius: 5px;
max-width: 280px;
/*min-height: 330px;*/
padding: 15px;
display: grid;
box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.04);
transition: 200ms linear;
}
label.radio-card .check-icon {
width: 20px;
height: 20px;
display: inline-block;
border: solid 2px #e3e3e3;
border-radius: 50%;
transition: 200ms linear;
position: relative;
}
label.radio-card .check-icon:before {
content: "";
position: absolute;
inset: 0;
background-image: url("data:image/svg+xml,%3Csvg width='12' height='9' viewBox='0 0 12 9' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0.93552 4.58423C0.890286 4.53718 0.854262 4.48209 0.829309 4.42179C0.779553 4.28741 0.779553 4.13965 0.829309 4.00527C0.853759 3.94471 0.889842 3.88952 0.93552 3.84283L1.68941 3.12018C1.73378 3.06821 1.7893 3.02692 1.85185 2.99939C1.91206 2.97215 1.97736 2.95796 2.04345 2.95774C2.11507 2.95635 2.18613 2.97056 2.2517 2.99939C2.31652 3.02822 2.3752 3.06922 2.42456 3.12018L4.69872 5.39851L9.58026 0.516971C9.62828 0.466328 9.68554 0.42533 9.74895 0.396182C9.81468 0.367844 9.88563 0.353653 9.95721 0.354531C10.0244 0.354903 10.0907 0.369582 10.1517 0.397592C10.2128 0.425602 10.2672 0.466298 10.3112 0.516971L11.0651 1.25003C11.1108 1.29672 11.1469 1.35191 11.1713 1.41247C11.2211 1.54686 11.2211 1.69461 11.1713 1.82899C11.1464 1.88929 11.1104 1.94439 11.0651 1.99143L5.06525 7.96007C5.02054 8.0122 4.96514 8.0541 4.90281 8.08294C4.76944 8.13802 4.61967 8.13802 4.4863 8.08294C4.42397 8.0541 4.36857 8.0122 4.32386 7.96007L0.93552 4.58423Z' fill='white'/%3E%3C/svg%3E%0A");
background-repeat: no-repeat;
background-size: 12px;
background-position: center center;
transform: scale(1.6);
transition: 200ms linear;
opacity: 0;
}
label.radio-card input[type=radio] {
appearance: none;
-webkit-appearance: none;
-moz-appearance: none;
}
label.radio-card input[type=radio]:checked + .card-content-wrapper {
box-shadow: 0 2px 4px 0 rgba(219, 215, 215, 0.5), 0 0 0 2px #3057d5;
}
label.radio-card input[type=radio]:checked + .card-content-wrapper .check-icon {
background: #3057d5;
border-color: #3057d5;
transform: scale(1.2);
}
label.radio-card input[type=radio]:checked + .card-content-wrapper .check-icon:before {
transform: scale(1);
opacity: 1;
}
label.radio-card input[type=radio]:focus + .card-content-wrapper .check-icon {
box-shadow: 0 0 0 4px rgba(48, 86, 213, 0.2);
border-color: #3056d5;
}
label.radio-card .card-content img {
margin-bottom: 10px;
}
label.radio-card .card-content h4 {
font-size: 16px;
letter-spacing: -0.24px;
text-align: center;
color: #1f2949;
margin-bottom: 10px;
}
label.radio-card .card-content h5 {
font-size: 14px;
line-height: 1.4;
text-align: center;
color: #686d73;
}
/*//////////////////////////////////////////////////////*/
/*.inline-checkbox-cs:hover {
background-color: #dcf19c;
}*/
</style>
<div class="breadcome-area" style="display:none;">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="breadcome-list single-page-breadcome">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="breadcome-heading">
                        <form action="<?=base_url('company/all-users')?>" method="GET" role="search" class="sr-input-func">
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
                     <?php if ($user_type == 'company') { ?>
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
<div style="margin-top: 20px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="product-status mg-b-15">
<div class="container-fluid">
<div class="row larg_devices_mb">
   <?php if ($title == 'content-writing' || $title == 'novel-typing' || $title == 'dialogue-typing') { ?>
<div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
   <div class="product-status-wrap">
      <h4>Select <b style="color:red"><?= ucfirst($this->uri->segment(3)) ?></b> Image folder</h4>
      <hr>

<?php if (!empty($this->session->flashdata('add_typing_project'))) { ?>
<div class="alert alert-success alert-success-style2 alert-st-bg1">
<button type="button" class="close sucess-op" data-dismiss="alert" aria-label="Close">
<span class="icon-sc-cl" aria-hidden="true">×</span>
</button>
<i class="fa fa-check edu-checked-pro admin-check-pro admin-check-pro-clr" aria-hidden="true"></i>
<p><strong>Alert!</strong> <?= $this->session->flashdata('add_typing_project'); ?></p>
</div>
<?php } ?>

      <form action="<?=base_url('company/add-projects-img/')?>" method="POST">
         <div class="asset-inner">
            <div class="row">
               <input type="hidden" name="up_id" value="<?=$project_id?>">
               <input type="hidden" name="redirect_url" value="<?=current_url().'?u_id='.$this->input->get('u_id').'&project_id='.$this->input->get('project_id').'&p_id='.$this->input->get('p_id')?>">
               <?php for ($i=1; $i < 7; $i++) { ?>
               <center>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="inline-checkbox-cs">
<?php
if ($i == 1) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
   echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_1.','.$i.'">';

}

if ($i == 2) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_2.','.$i.'">';

}

if ($i == 3) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_3.','.$i.'">';

}

if ($i == 4) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_4.','.$i.'">';

}

if ($i == 5) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_5.','.$i.'">';

}

if ($i == 6) {
echo '<label for="radio-card-'.$i.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card-'.$i.'" value="'.$folder_6.','.$i.'">';

}
?>
                                       <div class="card-content-wrapper">
                                          <span class="check-icon"></span>
                                          <div class="card-content">
                                             <center><i class="fa fa-folder" aria-hidden="true"  style="color: #337ab7; font-size: 100px;"></i></center>
                                             <h4>
                                             <?php
                                             if ($i == 1) {if (!empty($folder_1)) 
                                                {echo $folder_1." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }

                                             if ($i == 2) {if (!empty($folder_2)) 
                                                {echo $folder_2." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }

                                             if ($i == 3) {if (!empty($folder_3)) 
                                                {echo $folder_3." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }

                                             if ($i == 4) {if (!empty($folder_4)) 
                                                {echo $folder_4." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }

                                             if ($i == 5) {if (!empty($folder_5)) 
                                                {echo $folder_5." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }

                                             if ($i == 6) {if (!empty($folder_6)) 
                                                {echo $folder_6." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             }
                                             ?>
                                             </h4>
                                             <h5>Click and select images</h5>
                                             <center>
                                             <a href="<?=base_url('images/folder/').$i.'/'.$p_val?>" class="btn btn-danger"><i class="fa fa-eye" aria-hidden="true"  style="color: white; font-size: 15px;"></i></a>
                                             </center>
                                          </div>
                                       </div>
                                    </label>
                                    
                                 </div>
                              </div>
                              </center>
                              <?php } ?>
                  









<div style="text-align:center; margin-bottom: 50px;"><b style="color:white;">.</b></div>
<?php if (!empty($custom_img_qty)) { ?>
                  <h4 style="text-align:center; margin-top:50px;">Custom Projects <input type="checkbox" name="custom_project" value="selected_custom_project"></h4><hr>
               <?php $count=1; foreach ($custom_img_qty as $key) {?>
               <center>
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                  <div class="inline-checkbox-cs">
         
                     <?php
// echo $key->project_number.'|';
// echo $key->total_img;
echo '<label for="radio-card_'.$key->project_number.'" class="radio-card">';
echo '<input type="radio" name="up_data_id" class="" id="radio-card_'.$key->project_number.'" value="'.$key->total_img.','.$key->project_number.'">';

                     ?>
                                       <div class="card-content-wrapper">
                                          <span class="check-icon"></span>
                                          <div class="card-content">
                                             <center><i class="fa fa-folder" aria-hidden="true"  style="color: #337ab7; font-size: 100px;"></i></center>
                                             <h4>
                                             <?php
                                             if (!empty($key->total_img)) 
                                                {echo $key->total_img." Pages Project";}else
                                                {echo "NNN Pages Project";}
                                             
                                             ?>
                                             </h4>
                                             <h5>Click and select images</h5>
                                             <center>
                                             <a href="<?=base_url('company/images-custom/').$count.'/'.$key->p_id?>" class="btn btn-danger"><i class="fa fa-eye" aria-hidden="true"  style="color: white; font-size: 15px;"></i></a>
                                             </center>
                                          </div>
                                       </div>
                                    </label>
                                    
                                 </div>
                              </div>
                              </center>
                              <?php $count++; } } ?>















                           </div>
                           
                           <?php if (!empty($this->input->get('u_id'))) { ?>
                           <center style="margin-top: 50px; margin-bottom: 50px;">
                           <!-- <a href="#" class="btn btn-danger" style="color: white; width: 10rem;">Select custom images</a> -->
                           <button type="submit" class="btn btn-primary" style="color: white; width: 20%; margin-top: 5px;">Add A Project</button>
                           </center>
                           <?php } else{ 
                              if($title == 'content-writing'){$p_id = 1;}
                              if($title == 'novel-typing'){$p_id = 2;}
                              if($title == 'dialogue-typing'){$p_id = 3;}
                               ?>
                           <center style="margin-top: 50px; margin-bottom: 50px;">
                           <a href="<?=base_url('company/create-custom-project/').$p_id?>" class="btn btn-danger" style="color: white; width: 10rem;">Create Custom Project</a>
                           </center>
                           <?php }?>
                        </div>
                     </form>
                  </div>
               </div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 user_mb">
        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
          <div class="single-review-st-hd">
            <h2>Online User</h2>
          </div>
          <?php if ($p_users) { foreach ($p_users as $key):?>
          <div class="single-review-st-text">
            <?php if ($key->profile_img) {?>
            <img src="<?=base_url('assets/')?>img/profile/<?=$key->profile_img?>" alt="" />
            <?php }else{ ?>
            <img src="<?=base_url('assets/')?>img/profile/1634211873icon-5359553_1920.png?>" alt="" />
            <?php } ?>
            <div class="review-ctn-hf">
              <h3><?=$key->first_name.' '.$key->last_name?> (<?=$key->total_p?>)</h3>
              <p><?=$key->company_email?></p>
            </div>
            <div class="review-item-rating">
              <?php if ($key->login_status == 1) {?>
              <i class="fa fa-circle" style="color:#5cb85c;" aria-hidden="true"></i>
              <?php }else{?>
              <i class="fa fa-circle" style="color:#777;" aria-hidden="true"></i>
              <?php } ?>
            </div>
          </div>
          <?php endforeach; }else{echo "User Not Found!";}?>
        </div>
</div>













<?php }else{ ?>
<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
   <div class="product-status-wrap">
      <h4><b style="color:refd"><?= ucfirst($this->uri->segment(3)) ?></b></h4>
      <hr>
      <div class="asset-inner">
         <div class="row" style="text-align:center">

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="analytics-sparkle-line reso-mg-b-30" style="border: 1px solid; color: #337ab7;">
<div class="analytics-content">
<h5>Total Users</h5>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70"
aria-valuemin="0" aria-valuemax="100" style="width:100%">
</div>
</div><br>
 <ul class="list-inline two-part-sp">
<!--      <li>
         <div id="sparklinedashd"><a href=
         "<?php
         if($p_id_for_users == 4){
            echo base_url('company/captcha/users/').$p_id_for_users;
         }

         if($p_id_for_users == 5){
            echo base_url('company/form-filling/users/').$p_id_for_users;
         }

         if($p_id_for_users == 6){
            echo base_url('company/invoice-calculation/users/').$p_id_for_users;
         }

         if($p_id_for_users == 7){
            echo base_url('company/number-filling/users/').$p_id_for_users;
         }?>" 
         class="btn btn-info" style="font-size:12px">Click Here</a></div>
     </li> -->
     <li class="text-center sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter"><?=$p_users_qty?></span></span>
     </li>
 </ul>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<div class="analytics-sparkle-line reso-mg-b-30" style="border: 1px solid; color: #337ab7;">
<div class="analytics-content">
<h5>Total Projects</h5>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70"
aria-valuemin="0" aria-valuemax="100" style="width:100%">
</div>
</div><br>
 <ul class="list-inline two-part-sp">
<!--      <li>
         <div id="sparklinedashd"><a href=
         "<?php
         if($p_id_for_users == 4){
            echo base_url('company/captcha/projects/').$p_id_for_users;
         }

         if($p_id_for_users == 5){
            echo base_url('company/form-filling/projects/').$p_id_for_users;
         }

         if($p_id_for_users == 6){
            echo base_url('company/invoice-calculation/projects/').$p_id_for_users;
         }

         if($p_id_for_users == 7){
            echo base_url('company/number-filling/projects/').$p_id_for_users;
         }?>"  class="btn btn-info" style="font-size:12px">Click Here</a></div>
     </li> -->
     <li class="text-center sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter"><?=$project_qty?></span></span>
     </li>
 </ul>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br><br></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><br><br></div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="">
<div class="analytics-sparkle-line reso-mg-b-30" style="border: 1px solid; color: #337ab7;">
<div class="analytics-content">
<h5>Target <?= ucfirst($this->uri->segment(3)) ?></h5>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70"
aria-valuemin="0" aria-valuemax="100" style="width:100%">
</div>
</div><br>
 <ul class="list-inline two-part-sp">
     <li>
         <div id="sparklinedashd"><a href=

         "<?php
         if($p_id_for_users == 4){
            echo base_url('company-page/captcha/target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 5){
            echo base_url('company-page/form-filling/target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 6){
            echo base_url('company-page/invoice-calculation/target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 7){
            echo base_url('company-page/number-filling/target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }?>" 
          class="btn btn-info" style="font-size:12px">Click Here</a></div>
     </li>
     <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter"><?=$p_target_qty?></span></span>
     </li>
 </ul>
</div>
</div>
</div>

<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="margin-bottom: 60px;">
<div class="analytics-sparkle-line reso-mg-b-30" style="border: 1px solid; color: #337ab7;">
<div class="analytics-content">
<h5>Non-Target <?= ucfirst($this->uri->segment(3)) ?></h5>
<div class="progress">
<div class="progress-bar" role="progressbar" aria-valuenow="70"
aria-valuemin="0" aria-valuemax="100" style="width:100%">
</div>
</div><br>
 <ul class="list-inline two-part-sp">
     <li>
         <div id="sparklinedashd"><a href=
         "<?php
         if($p_id_for_users == 4){
            echo base_url('company-page/captcha/non-target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 5){
            echo base_url('company-page/form-filling/non-target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 6){
            echo base_url('company-page/invoice-calculation/non-target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }

         if($p_id_for_users == 7){
            echo base_url('company-page/number-filling/non-target/').$this->session->userdata('logged_in')->id.'/'.$p_id_for_users;
         }?>"
          class="btn btn-info" style="font-size:12px">Click Here</a></div>
     </li>
     <li class="text-right sp-cn-r"><i class="fa fa-level-up" aria-hidden="true"></i> <span class="counter text-success"><span class="counter"><?=$p_nontarget_qty?></span></span>
     </li>
 </ul>
</div>
</div>
</div>
 


         </div>
      </div>
   </div>
</div>
<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="single-review-st-item res-mg-t-30 table-mg-t-pro-n">
          <div class="single-review-st-hd">
            <h2>Online User</h2>
          </div>
          <?php if ($p_users) { foreach ($p_users as $key):?>
          <div class="single-review-st-text">
            <?php if ($key->profile_img) {?>
            <img src="<?=base_url('assets/')?>img/profile/<?=$key->profile_img?>" alt="" />
            <?php }else{ ?>
            <img src="<?=base_url('assets/')?>img/profile/1634211873icon-5359553_1920.png?>" alt="" />
            <?php } ?>
            <div class="review-ctn-hf">
              <h3><?=$key->first_name.' '.$key->last_name?> (<?=$key->total_p?>)</h3>
              <p><?=$key->company_email?></p>
            </div>
            <div class="review-item-rating">
              <?php if ($key->login_status == 1) {?>
              <i class="fa fa-circle" style="color:#5cb85c;" aria-hidden="true"></i>
              <?php }else{?>
              <i class="fa fa-circle" style="color:#777;" aria-hidden="true"></i>
              <?php } ?>
            </div>
          </div>
          <?php endforeach; }else{echo "User Not Found!";}?>
        </div>
</div>
<?php } ?>
            </div>
         </div>
      </div>