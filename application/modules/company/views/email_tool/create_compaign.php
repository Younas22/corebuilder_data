<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
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
<div style="margin-top:50px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
    <div class="container-fluid" >
        <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="margin-bottom: 100px;">
                        <div class="sparkline15-list mg-t-30">
                            <div class="sparkline15-hd">
                                <div class="main-sparkline15-hd" style="margin-bottom: 50px;">
                                    <h1>Create Compaign</h1>
                                </div>
                            </div>



                            <div class="sparkline15-graph">
                                <form action="<?=base_url('company/add-compaign')?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="touchspin-inner">
                                            <label>Compaign Name</label>
                                            <input class="form-control" type="text" name="compaign_name">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="touchspin-inner">
                                            <label>Subject</label>
                                            <input class="form-control" type="text" name="subject">
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="touchspin-inner">
                                            <label>From email</label>
                                            <input class="form-control" type="text" name="from_mail">
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="touchspin-inner">
                                            <label>Contant</label>
                                            <textarea class="form-control" type="text" name="contant" rows="10"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="1" name="tmplate"> <i></i> Template one 
                                            </label>
                                            <a href="<?=base_url('company/template_one')?>" class="btn btn-custon-four btn-danger btn-md">Template one</a>
                                        </div>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12" style="margin-top: 30px;">
                                        <div class="i-checks pull-left">
                                            <label>
                                                <input type="radio" value="2" name="tmplate"> <i></i> Template two 
                                            </label>
                                            <a href="<?=base_url('company/template_two')?>" class="btn btn-custon-four btn-danger btn-md">Template two</a>
                                        </div>
                                    </div>


                                    <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12" style="margin-top: 30px;">
                                        <label class="login2 pull-right pull-right-pro">Emails</label>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-top: 30px;">
                                        <div class="file-upload-inner ts-forms">
                                            <div class="input prepend-big-btn">
                                                <label class="icon-right" for="prepend-big-btn">
                                                        <!-- <i class="fa fa-download"></i> -->
                                                    </label>
                                                <div class="file-button">
                                                    Browse
                                                    <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;" name="email_file">
                                                </div>
                                                <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row" style="margin-top: 30px;">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" style="margin-top: 30px;">
                                        <button type="submit" class="btn btn-custon-four btn-primary btn-md">submit</button>
                                    </div>
                                </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>

