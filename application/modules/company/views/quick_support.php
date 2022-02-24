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
<div style="margin-top:20px;"></div>
</div>
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid" >
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" > <!-- padding: 180px;  -->
    <div class="product-payment-inner-st larg_devices_mb" style="background: white;">
        <ul id="myTabedu1" class="tab-review-design larg_devices_mb">
            <li class="active"><a href="#description"><?=$title?></a></li>
        </ul>
        
        <?php if ($title == 'SMS Panel') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>CHEAP & PREMIUM BULK SMS </b>
                <p>kindly drop a mail to us at.  <a href="mailto:addon@thecorebuilder.in">addon@thecorebuilder.in</a></p>
            </div>
        </div>
        <?php } ?>


        <?php if ($title == 'Email Server') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>MASTER EMAIL MARKETING SERVER</b>
                <p>kindly drop a mail to us at.  <a href="mailto:addon@thecorebuilder.in">addon@thecorebuilder.in</a></p>
            </div>
        </div>
        <?php } ?>


        <?php if ($title == 'WhatsApp Server') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>UNITRUPPED WHATSAPP CHANNEL </b>
                <p>kindly drop a mail to us at.  <a href="mailto:addon@thecorebuilder.in">addon@thecorebuilder.in</a></p>
            </div>
        </div>
        <?php } ?>

        <?php if ($title == 'Training Video') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>Click On This link for Training Video</b>
                <p><a href="https://www.thecorebuilder.com/agn078u-9kg6-ijm0-pvrp17-87htgfdr8-4r556traning" target="_blank">https://www.thecorebuilder.com/agn078u-9kg6-ijm0-pvrp17-87htgfdr8-4r556traning</a></p>

            </div>
        </div>
        <?php } ?>

        <?php if ($title == 'Get In Touch') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <!-- <b>Click On This link for Quick res</b> -->
                <p><a href="https://www.thecorebuilder.com/about" target="_blank">https://www.thecorebuilder.com/about</a></p>

            </div>
        </div>
        <?php } ?>

        <?php if ($title == 'Feedback') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <!-- <b>Click On This link for Quick res</b> -->
                <p><a href="https://www.thecorebuilder.com/agn078u-9kg6-ijm0-pvrp17-87htgfdr8-4r556traning" target="_blank">https://www.thecorebuilder.com/agn078u-9kg6-ijm0-pvrp17-87htgfdr8-4r556traning</a></p>

            </div>
        </div>
        <?php } ?>

        <?php if ($title == 'Unlock Projects') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>If you want to UNLOCK ANY PREMIUM PROJECT</b>
                <p>kindly get in touch with us at.<a href="mailto:addon@thecorebuilder.in">addon@thecorebuilder.in</a></p>

            </div>
        </div>
        <?php } ?>

        <?php if ($title == 'Develop Projects') { ?>
            <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" id="description">
                <b>If you want to CREATE A CUSTOM PROJECT</b>
                <p>kindly get in touch with us at.<a href="mailto:addon@thecorebuilder.in">addon@thecorebuilder.in</a></p>

            </div>
        </div>
        <?php } ?>

    </div>
</div>
</div>
</div>
</div>