<style>
  .active_{
    color: black !important;
    font-weight: bold !important;
  }
</style>

    <div class="left-sidebar-pro">
      <nav id="sidebar" class="">
        <div class="sidebar-header">
          <a href="<?=base_url($this->session->userdata('logged_in')->user_type.'/'.'dashboard')?>"><img class="main-logo" src="<?=base_url('assets/')?>img/logo/logo.png" alt="" /></a>
          <strong><a href="<?=base_url($this->session->userdata('logged_in')->user_type.'/'.'dashboard')?>"><img src="<?=base_url('assets/')?>img/logo/logosn.png" alt="" /></a></strong>
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
          <nav class="sidebar-nav left-sidebar-menu-pro">
            <ul class="metismenu" id="menu1">


<!-- //////////////////admin////////////// -->
<?php if($this->session->userdata('logged_in')->user_type == 'admin'){ ?>
<li class="active">
<a title="Landing Page" href="<?=base_url('admin/dashboard')?>" aria-expanded="false"><span class="educate-icon educate-home icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Dashboard</span></a></li>


<li class="active">
<a title="Landing Page" href="<?=base_url('admin/profile')?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Admin Profile</span></a></li>


<li><a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-course icon-wrap"></span> <span class="mini-click-non">Project Images</span></a>
<ul class="submenu-angle" aria-expanded="false">
<!-- <li><a title="All Courses" href="<?=base_url('admin/project-images')?>"><span class="mini-sub-pro">All Images</span></a></li> -->
<li><a title="Add Courses" href="<?=base_url('admin/add-project-images')?>"><span class="mini-sub-pro">Add Project images</span></a></li>
</ul>
</li>


<li class="">
<a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap"></span> <span class="mini-click-non">User Details</span></a>
<ul class="submenu-angle collapse" aria-expanded="false" style="height: 0px;">
    <li><a title="All Professors" href="<?=base_url('admin/all-users')?>"><span class="mini-sub-pro">All Users</span></a></li>
    <li><a title="Add Professor" href="<?=base_url('admin/all-agencies')?>"><span class="mini-sub-pro">All Egency</span></a></li>
    <li><a title="Edit Professor" href="<?=base_url('admin/downloaded-users/1')?>"><span class="mini-sub-pro">Downloaded Users</span></a></li>
    <li><a title="Professor Profile" href="<?=base_url('admin/new-users/0')?>"><span class="mini-sub-pro">New Users</span></a></li>
</ul>
</li>


<li class="active">
<a title="Landing Page" href="<?=base_url('admin/auto-users')?>" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Auto Users</span></a></li>
<?php } ?>


<!-- //////////////////company////////////// -->
<?php if ($this->session->userdata('logged_in')->user_type == 'company') { ?>
<li class="active">
<a class="<?php if($this->uri->segment(2) == 'dashboard')echo "active_"; ?>" title="Dashboard Page" href="<?=base_url('company/dashboard')?>" aria-expanded="false"><i class="fa fa-home"></i> <span class="mini-click-non">Dashboard</span></a></li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'profile')echo "active_"; ?>" title="Company Profile Page" href="<?=base_url('company/profile')?>" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true"></i> <span class="mini-click-non">Company Profile</span></a>
</li>

<li>
<!-- <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fi-rr-mode-portrait"></span> <span class="mini-click-non">Users</span></a> -->
<ul class="submenu-angle" aria-expanded="false">
<!-- <li><a title="All Students" href="<?=base_url('company/all-users')?>"><span class="mini-sub-pro">All Users</span></a></li>
<li><a title="Add Students" href="<?= base_url('company/add-user') ?>"><span class="mini-sub-pro">Add User</span></a></li> -->
<!-- <li><a title="Edit Students" href="edit-student.html"><span class="mini-sub-pro">Edit Student</span></a></li>
<li><a title="Students Profile" href="student-profile.html"><span class="mini-sub-pro">Student Profile</span></a></li> -->
</ul>
</li>


<li >
  <a class="<?php if($this->uri->segment(2) == 'add-user')echo "active_"; ?>" title="Add User" href="<?=base_url('company/add-user')?>" aria-expanded="false">
    <i class="fa fa-user" aria-hidden="true"></i>
    <span class="mini-click-non">Add User</span>
  </a>
</li>


<li class="active">
  <a class="<?php 
  if($this->uri->segment(2) == 'all-users' ||
  $this->uri->segment(2) == 'user-view' || 
  $this->uri->segment(2) == 'user-projects')echo "active_"; ?>" title="View  Users" href="<?=base_url('company/all-users')?>" aria-expanded="false">
    <i class="fa fa-eye" aria-hidden="true"></i>
    <span class="mini-click-non">View  Users</span>
  </a>
</li>

<!-- <li class="active">
  <a class="<?php 
  if($this->uri->segment(2) == 'all-users' ||
  $this->uri->segment(2) == 'user-view' || 
  $this->uri->segment(2) == 'user-projects')echo "active_"; ?>" title="Remove  Users" href="<?=base_url('company/all-users')?>" aria-expanded="false">
    <i class="fa fa-remove" aria-hidden="true"></i>
    <span class="mini-click-non">Remove  Users</span>
  </a>
</li> -->


<!-- <li class="active">
  <a title="Create Project" href="<?=base_url('company/dashboard')?>" aria-expanded="false">
    <i class="fa fa-creative-commons" aria-hidden="true"></i>
    <span class="mini-click-non">Create Project</span>
  </a>
</li> -->

<li>
  <a class="<?php 
  if($this->uri->segment(3) == 'content-writing' ||
  $this->uri->segment(3) == 'novel-typing' || 
  $this->uri->segment(3) == 'dialogue-typing')echo "active_"; ?> has-arrow" title="Create Project" href="#" aria-expanded="false">
    <i class="fa fa-creative-commons" aria-hidden="true"></i>
    <span class="mini-click-non">Create Project</span>
  </a>

<ul class="submenu-angle" aria-expanded="false">
<li><a title="Content Writing" href="<?=base_url('company/projects-detiles/content-writing')?>"><span class="mini-sub-pro">Content Writing</span></a></li>

<li><a title="Novel Typing" href="<?=base_url('company/projects-detiles/novel-typing')?>"><span class="mini-sub-pro">Novel Typing</span></a></li>

<li><a title="Dialogue Typing" href="<?=base_url('company/projects-detiles/dialogue-typing')?>"><span class="mini-sub-pro">Dialogue Typing</span></a></li>
</ul>


<!-- <ul class="submenu-angle" aria-expanded="false">

<li><a title="Content Writing" data-toggle="modal" href="#tallModal_"><i class="fa fa-lock" aria-hidden="true"></i> <span class="mini-sub-pro">Content Writing</span></a></li>

<li><a title="Novel Typing" data-toggle="modal" href="#tallModal_"><i class="fa fa-lock" aria-hidden="true"></i> <span class="mini-sub-pro">Novel Typing</span></a></li>

<li><a title="Dialogue Typing" data-toggle="modal" href="#tallModal_"><i class="fa fa-lock" aria-hidden="true"></i> <span class="mini-sub-pro">Dialogue Typing</span></a></li>
</ul> -->

</li>


<li class="active">
<a class="<?php if($this->uri->segment(2) == 'withdrawal') echo "active_"; ?>" title="Withdrawal Request" href="<?=base_url('company/withdrawal')?>" aria-expanded="false">
    <i class="fa fa-dollar" aria-hidden="true"></i>
    <span class="mini-click-non">Withdrawal Request</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(3) == 'accuracy') echo "active_"; ?>" title="Accuracy Status" data-toggle="modal" href="#tallModal_">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <span class="mini-click-non">Accuracy Status</span>
  </a>
</li>

<?php if (profile()->custom_terms == 0) { ?>
  <li class="active">
  <a class="<?php if($this->uri->segment(3) == 'user-documents') echo "active_"; ?>" title="user documents" data-toggle="modal" href="#tallModal_">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <span class="mini-click-non">User's Documents</span>
  </a>
</li>
<?php }else{ ?>
<li class="active">
<a class="<?php if($this->uri->segment(2) == 'user-documents') echo "active_"; ?>" title="user-documents" href="<?=base_url('company/user-documents')?>" aria-expanded="false">
    <i class="fa fa-file" aria-hidden="true"></i>
    <span class="mini-click-non">User's Documents</span>
  </a>
</li>
<?php }?>


<!-- <li class="active">
<a class="<?php if($this->uri->segment(2) == 'qc-report') echo "active_"; ?>" title="Send QC Report" data-toggle="modal" href="#tallModal_">
    <i class="fa fa-lock" aria-hidden="true"></i>
    <span class="mini-click-non">Send QC Report</span>
  </a>
</li> -->

<li>
  <a class="<?php 
  if($this->uri->segment(2) == 'qc-report' ||
  $this->uri->segment(2) == 'premium-qc-report')echo "active_"; ?> has-arrow" title="qc-report" href="#" aria-expanded="false">
    <i class="fa fa-creative-commons" aria-hidden="true"></i>
    <span class="mini-click-non">Send QC Report</span>
  </a>

<ul class="submenu-angle" aria-expanded="false">
<li>
      <a title="Basic QC Report" href="<?=base_url('company/qc-report')?>">
      <span class="mini-sub-pro">Basic QC Report</span></a>
</li>
<li>
      <a title="Premium QC Report" title="Send QC Report" data-toggle="modal" href="#tallModal_o">
      <i class="fa fa-lock" aria-hidden="true"></i>
    <span class="mini-sub-pro">Premium QC Report</span></a>
</li>

</ul>

</li>




<!-- <li class="active">
  <a class="<?php if($this->uri->segment(3) == 'accuracy') echo "active_"; ?>" title="Accuracy Status" href="<?=base_url('company/project/accuracy')?>" aria-expanded="false">
    <i class="fa fa-check" aria-hidden="true"></i>
    <span class="mini-click-non">Accuracy Status</span>
  </a>
</li>

<li class="active">
<a class="<?php if($this->uri->segment(2) == 'qc-report') echo "active_"; ?>" title="Send QC Report" href="<?=base_url('company/qc-report')?>" aria-expanded="false">
    <i class="fa fa-mobile-phone" aria-hidden="true"></i>
    <span class="mini-click-non">Send QC Report</span>
  </a>
</li> -->

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'sms-panel') echo "active_"; ?>" title="SMS Panel" href="<?=base_url('company/sms-panel')?>" aria-expanded="false">
    <i class="fa fa-comment" aria-hidden="true"></i>
    <span class="mini-click-non">SMS Panel</span>
  </a>
</li>

<!-- mail_compaign -->
  <?php  if (profile()->mail_compaign == 1) { ?>
    <li>
      <a class="<?php 
      if($this->uri->segment(2) == 'email-dashboard'||$this->uri->segment(2) == 'email-tool'||$this->uri->segment(2) == 'email-template'||$this->uri->segment(2) == 'email-setting')echo "active_"; ?> has-arrow" title="qc-report" href="#" aria-expanded="false">
        <i class="fa fa-send" aria-hidden="true"></i>
        <span class="mini-click-non">Email Server</span>
      </a>

      <ul class="submenu-angle" aria-expanded="false">
        <li>
          <a title="Basic QC Report" href="<?=base_url('company/email-dashboard')?>">
            <span class="mini-sub-pro">Dashboard</span></a>
        </li>
        <li>
          <a title="Basic QC Report" href="<?=base_url('company/email-tool')?>">
            <span class="mini-sub-pro">Email</span></a>
        </li>
        <li>
          <a title="Basic QC Report" href="<?=base_url('company/email-template')?>">
            <span class="mini-sub-pro">Templates</span></a>
        </li>
        <li>
          <a title="Basic QC Report" href="<?=base_url('company/email-setting')?>">
            <span class="mini-sub-pro">Setting</span></a>
        </li>
      </ul>
    </li>
  <?php }else{ ?>
<li class="active">
    <a class="<?php if($this->uri->segment(2) == 'email-server') echo "active_"; ?>" title="Email Server" href="<?=base_url('company/email-server')?>" aria-expanded="false">
      <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
      <span class="mini-click-non">Email Server</span>
    </a>
</li>
<?php } ?>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'email-configuration') echo "active_"; ?>" title="Email Configuration" href="<?=base_url('company/email-configuration')?>" aria-expanded="false">
    <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
    <span class="mini-click-non">Email Configuration</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'whatsApp-server') echo "active_"; ?>" title="WhatsApp Server" href="<?=base_url('company/whatsApp-server')?>" aria-expanded="false">
    <i class="fa fa-at" aria-hidden="true"></i>
    <span class="mini-click-non">WhatsApp Server</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'video-training') echo "active_"; ?>" title="Traing Video" href="<?=base_url('company/video-training')?>" aria-expanded="false">
    <i class="fa fa-film" aria-hidden="true"></i>
    <span class="mini-click-non">Traing Video</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'get-in-touch') echo "active_"; ?>" title="Get in Touch" href="<?=base_url('company/get-in-touch')?>" aria-expanded="false">
    <i class="fa fa-question-circle" aria-hidden="true"></i>
    <span class="mini-click-non">Get in Touch</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'feedback') echo "active_"; ?>" title="Feedback" href="<?=base_url('company/feedback')?>" aria-expanded="false">
    <i class="fa fa-star" aria-hidden="true"></i>
    <span class="mini-click-non">Feedback</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'unlock-projects') echo "active_"; ?>" title="Unlock Projects" href="<?=base_url('company/unlock-projects')?>" aria-expanded="false">
    <i class="fa fa-unlock" aria-hidden="true"></i>
    <span class="mini-click-non">Unlock Projects</span>
  </a>
</li>

<li class="active">
  <a class="<?php if($this->uri->segment(2) == 'develop-projects') echo "active_"; ?>" title="Develop Projects" href="<?=base_url('company/develop-projects')?>" aria-expanded="false">
    <i class="fa fa-plus-circle" aria-hidden="true"></i>
    <span class="mini-click-non">Develop Projects</span>
  </a>
</li>


<li class="active">
  <a class="<?php if($this->uri->segment(1) == 'help') echo "active_"; ?>" title="Help" href="<?=base_url('help')?>" aria-expanded="false">
    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
    <span class="mini-click-non">Help</span>
  </a>
</li>
<div style="margin-bottom: 50px;"></div>


<?php } ?>

<!-- //////////////////user////////////// -->
<?php if ($this->session->userdata('logged_in')->user_type == 'user') { ?>
<li class="active">
<a class="<?php if($this->uri->segment(2) == 'dashboard')echo "active_"; ?>" title="Dashboard" href="<?=base_url('user/dashboard')?>" aria-expanded="false"><i class="fa fa-home"></i> <span class="mini-click-non">Dashboard</span></a></li>


<li class="active">
<a class="<?php if($this->uri->segment(2) == 'profile')echo "active_"; ?>" title="User Profile" href="<?=base_url('user/profile')?>" aria-expanded="false"><i class="fa fa-user-secret" aria-hidden="true"></i> <span class="mini-click-non">User Profile</span></a>
</li>



<li>
  <?php if (!empty(user_active_projects())) { ?>
<a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cube icon-wrap"></i><span class="mini-click-non">Projects</span></a>

<ul class="submenu-angle" aria-expanded="false">
<li><a class="<?php if($this->uri->segment(2) == 'user-projects')echo "active_"; ?>" title="All Projects" href="<?=base_url('user/user-projects/').$this->session->userdata('logged_in')->id?>"><span class="mini-sub-pro">All Projects</span></a></li>
</ul>


<?php //foreach (user_active_projects() as $project) { ?>
<!-- <ul class="submenu-angle" aria-expanded="false">
<li><a title="All Students" href="<?=base_url('user/user-project-details/').strtolower(str_replace(' ', '-', $project->projects_title)).'/'.$project->project_id?>"><span class="mini-sub-pro"><?=$project->projects_title?></span></a></li>
</ul> -->
  <?php } ?>


</li>


<!-- <li>
<a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-money icon-wrap"></i><span class="mini-click-non">withdraw</span></a>

<ul class="submenu-angle" aria-expanded="false"> -->

<li class="active">
<a class="<?php if($this->uri->segment(2) == 'withdraw')echo "active_"; ?>" title="Withdraw Requests" href="<?=base_url('user/withdraw/').$this->session->userdata('logged_in')->id?>" aria-expanded="false"><span class="fa fa-money icon-wrap" aria-hidden="true"></span> <span class="mini-click-non">Withdraw Requests</span></a>
</li>

<!-- </ul>
</li> -->

<?php } ?>




              



            </ul>
          </nav>
        </div>
      </nav>
    </div>







<!-- Modal -->
<div id="tallModal_" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Alert</h4>
      </div>
      <div class="modal-body">
        <p>Contact us for getting these features unlcoked. Email Us at addon@corebuilder.in</p>
        <!-- <a href="https://thecorebuilder.com/about" target="_blank" class="btn btn-primary">Contact us</a> -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div id="tallModal_o" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <!-- <h4 class="modal-title">Alert</h4> -->
      </div>
      <!-- <div class="modal-body"> -->
          <img src="<?=base_url('assets/img/project_img/Advance Project Report.png')?>">
      <!-- </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

