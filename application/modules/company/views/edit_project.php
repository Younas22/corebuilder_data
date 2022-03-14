<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>

<style>
    .container {
  /*display: block;*/
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 2px;
  left: 0;
  height: 30px;
  width: 30px;
  background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 12px;
  top: 8px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}


/*text area*/
textarea {
  margin-top: 10px;
  /*margin-left: 50px;*/
  width: 100%;
  height: 100px;
  -moz-border-bottom-colors: none;
  -moz-border-left-colors: none;
  -moz-border-right-colors: none;
  -moz-border-top-colors: none;
  background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
  border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
  border-image: none;
  border-radius: 6px 6px 6px 6px;
  border-style: none solid solid none;
  border-width: medium 1px 1px medium;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
  color: #555555;
  font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
  font-size: 1em;
  line-height: 1.4em;
  padding: 5px 8px;
  transition: background-color 0.2s ease 0s;
}


textarea:focus {
    background: none repeat scroll 0 0 #FFFFFF;
    outline-width: 0;
}


.modal.modal-wide .modal-dialog {
  width: 90%;
}
.modal-wide .modal-body {
  overflow-y: auto;
}
/*end text area*/
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
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="product-payment-inner-st">
        <ul id="myTabedu1" class="tab-review-design">
            <li class="active"><a href="#description">Project Information</a></li>
        </ul>
        
        <div id="myTabContent" class="tab-content custom-product-edit">
        <div class="product-tab-list tab-pane fade active in" id="description">


                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="review-content-section">
                            <div id="dropzone1" class="pro-ad">
                                <form action="<?=base_url('company/project_update')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="form-group">
    <input type="hidden" name="project_id" value="<?=$project_edit->project_id?>">
    <input type="hidden" name="u_id" value="<?=$project_edit->users_id?>">
    <label>Projec title</label>
    <input type="hidden" name="p_id" value="<?=$project_edit->id?>">
    <input type="text" readonly="" class="form-control" value="<?=$project_edit->projects_title?>">

</div>

<div class="form-group">
<label>Projec Type</label>
<select name="p_type" class="form-control" id="p_type">
<?php  if (
    $project_edit->projects_title != 'Content Writing' && 
    $project_edit->projects_title != 'Novel Typing' && 
    $project_edit->projects_title != 'Dialogue Typing') {
        if ($project_edit->p_type == 'Target') {?>
    <option value="Target" selected="">Target</option>
    <option value="Non Target" id="non_tr">Non Target</option>
<?php }else{?>
    <option value="Non Target" id="non_tr" selected>Non Target</option>
    <option value="Target">Target</option>
<?php } }else{?>
    <option value="Target" selected="">Target</option>
<?php } ?>
</select>
</div>

<?php if (
    $project_edit->projects_title != 'Content Writing' && 
    $project_edit->projects_title != 'Novel Typing' && 
    $project_edit->projects_title != 'Dialogue Typing') {
if ($project_edit->p_type == 'Target') {?>
<div class="form-group" id="quantity">
<label>Projec Quantity</label>
<input name="quantity" type="text" class="form-control" value="<?=$project_edit->quantity?>"  placeholder="Quantity">
</div>
<?php } }else{ ?>
<input name="quantity" type="hidden" value="<?=$project_edit->quantity?>">
<?php } ?>

                                            

<div class="form-group" id="price">
    <label>Projec Price</label>
    <input name="price" type="text" class="form-control" placeholder="price" value="<?=$project_edit->price?>">
</div>
                                        </div>

                                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

<style>
.input-container input {
    /*border: none;*/
    box-sizing: border-box;
    outline: 0;
    padding: .75rem;
    position: relative;
    width: 100%;
}

.input-container_ input {
    /*border: none;*/
    box-sizing: border-box;
    outline: 0;
    padding: .75rem;
    position: relative;
    width: 100%;
}

input[type="datetime-local"]::-webkit-calendar-picker-indicator {
    background: transparent;
    bottom: 0;
    color: transparent;
    cursor: pointer;
    height: auto;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    width: auto;
}
</style>
                                            <div class="form-group input-container">
                                                <label>Start Date</label>
                                                <input name="start_date" id="start_date" type="datetime-local" class="form-control" placeholder="start date" data-date-inline-picker="true" value="<?=$project_edit->start_date?>">
                                            </div>
                                            <div class="form-group input-container_">
                                                <label>End Date</label>
                                                <input name="end_date" id="end_date" type="datetime-local" class="form-control" placeholder="end date" data-date-inline-picker="true" value="<?=$project_edit->end_date?>">
                                            </div>

<?php if ($project_edit->projects_title == 'Captcha') {?>
<div class="form-group" id="font">
    <style>.hide{display: none;}</style>
    <label>Project Font</label>
    <select name="font" class="form-control" >

<?php if ($project_edit->font == 'TOMOPRG_.TTF') {?>
<option value="TOMOPRG_.TTF" selected>Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>

<?php } ?>

<?php if ($project_edit->font == 'STARTER Bold.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf" selected>Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>
<?php } ?>

<?php if ($project_edit->font == 'Space_Galaxy.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf" selected>Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>
<?php } ?>

<?php if ($project_edit->font == 'radiospace.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf" selected>Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>
<?php } ?>

<?php if ($project_edit->font == '1.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf" selected>Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>
<?php } ?>

        <?php if ($project_edit->font == '2.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf" selected>Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>

        <?php } ?>

        <?php if ($project_edit->font == '3.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf" selected>Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>

        <?php } ?>

        <?php if ($project_edit->font == '4.otf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf" selected>Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf">Legend</option>


        <?php } ?>

<?php if ($project_edit->font == '5.otf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf" selected>Expert</option>
<option value="6.ttf">Legend</option>
<?php } ?>

<?php if ($project_edit->font == '6.ttf') {?>
<option value="TOMOPRG_.TTF">Beginner</option>
<option value="STARTER Bold.ttf">Basic</option>
<option value="Space_Galaxy.ttf">Rookie</option>
<option value="radiospace.ttf">Intermediate</option>
<option value="1.ttf">Advanced</option>
<option value="2.ttf">Semi-Pro</option>
<option value="3.ttf">Professional</option>
<option value="4.otf">Master</option>
<option value="5.otf">Expert</option>
<option value="6.ttf" selected>Legend</option>
<?php } ?>
    </select>
</div>
<?php } ?>

<?php if ($project_edit->projects_title == 'Invoice Calculation') {?>

<div class="form-group" id="invoice_type">
    <style>.hide{display: none;}</style>
    <label>Invoice Type</label>
    <select name="numbers_tape" class="form-control" >
    <?php if ($project_edit->difficulty == 1) {?>
        <option value="1" selected="">Routine Products</option>
        <option value="2">Pharmaceuticals</option>
        <option value="3">Automobiles</option>
    <?php } if ($project_edit->difficulty == 1) {?>
        <option value="1">Routine Products</option>
        <option value="2" selected>Pharmaceuticals</option>
        <option value="3">Automobiles</option>
    <?php }else{?>
        <option value="1">Routine Products</option>
        <option value="2">Pharmaceuticals</option>
        <option value="3" selected>Automobiles</option>
    <?php } ?>
    </select>
</div>
<?php } ?>


<?php if ($project_edit->projects_title == 'Alpha-Numeric Validation') {?>

<div class="form-group" id="numbers_tape">
    <style>.hide{display: none;}</style>
    <label>Difficulty</label>
    <select name="numbers_tape" class="form-control">
    <?php if ($project_edit->difficulty == 1) {?>
        <option value="1" selected>Rookie</option>
        <option value="2">Expert</option>
        <option value="3">Professional</option>
    <?php }
    if ($project_edit->difficulty == 2) {?>
        <option value="1">Rookie</option>
        <option value="2" selected>Expert</option>
        <option value="3">Professional</option>
    <?php }else{?>
        <option value="1">Rookie</option>
        <option value="2">Expert</option>
        <option value="3" selected>Professional</option>
    <?php } ?>
    </select>
</div>
<?php } ?>


<?php if ($project_edit->projects_title == 'Form Filling') {?>

<div class="form-group" id="numbers_tape">
    <style>.hide{display: none;}</style>
    <label>Difficulty</label>
    <select name="numbers_tape" class="form-control">
    <?php if ($project_edit->difficulty == 1) {?>
        <option value="1" selected>Form Filling –  Alpha</option>
        <option value="2">Alphanumeric-1</option>
        <option value="3">Alphanumeric-2</option>
    <?php }
    if ($project_edit->difficulty == 2) {?>
        <option value="1">Form Filling –  Alpha</option>
        <option value="2" selected>Alphanumeric-1</option>
        <option value="3">Alphanumeric-2</option>
    <?php }else{?>
        <option value="1">Form Filling –  Alpha</option>
        <option value="2">Alphanumeric-1</option>
        <option value="3" selected>Alphanumeric-2</option>
    <?php } ?>
    </select>
</div>
<?php } ?>






                                </div>


                                </div>
                                <!-- <hr> -->
<!-- <h4 style="text-align:center;">Terms and Conditions</h4>
<div class="row">
    <div class="col-lg-12">
<div style="display:flex; align-items: center;">
    <label class="container"><a data-toggle="modal" href="#tallModal" class="btn btn-primary" id="admin_terms">Terms and Conditions </a>
  <input type="checkbox" name="terms_conditions_status" value="1">
    <span class="checkmark"></span>
</label>

<div>
<a class="btn btn-danger" id="custom_terms">Add Custom Terms and Conditions</a>
</div>
</div> -->

 
<!-- text eria -->
<!-- <style>.hide_textarea{display: none;}</style> -->
<!-- <textarea class="hide_textarea" id="custom_terms_conditions" name="editor1">Terms and Conditions</textarea> -->

  <div ng-app="gaigDemo">
  <div class="" ng-controller="DemoCtrl as demo">
    <div class="gaig-main" style="text-align:center!important;">
              <textarea name="custom_terms_conditions" id="editor1" rows="10" cols="80" placeholder="Write or Paste Your Project Terms and Conditions">
                <?=$project_edit->custom_terms_conditions;?>
              </textarea>
          </div>
    </div>
  </div>
  </div>

<!-- end text eria -->
</div>
</div>


                               <div class="row">
                                    <div class="col-lg-12">
                                        <div class="payment-adress larg_devices_mb">
                                            <center>
                                                <button type="submit" class="btn btn-primary waves-effect waves-light" style="margin-top:20px;">Submit</button>
                                            </center>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>



<!-- terms model -->
<div id="tallModal" class="modal modal-wide fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Terms and Conditions</h4>
      </div>
      <div class="modal-body">
        <h4>Terms and Conditions</h4><p>Please select project</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- end terms model -->

<!-- jQuery first, then Popper.js and Bootstrap JS. -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/ckeditor/ckeditor.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/jquery.min.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/lib/angular.min.js"></script>
  <script src="//cdn.gaic.com/cdn/ui-bootstrap/0.58.0/js/gaig-ui-bootstrap.js"></script>
<script>
    // $('#custom_terms').click(function() {
    //     $('.hide_textarea').removeClass();
    // });

    // $('#custom_terms').click(function() {
    //     $('.hide_textarea').removeClass();
    // });


    // $('#admin_terms').click(function() {
    //     $('textarea').addClass('hide_textarea');
    // });


$('#p_id').change(function() {
let project_id = $(this).val();

$.ajax({
url: "<?php echo base_url("company/get_project_terms");?>",
type: "POST",
data: {
project_id: project_id
},
dataType:"json",
cache: false,
success: function(dataResult){
       if (dataResult.data.project_terms === null) {
        $(".modal-body").empty();
        $(".modal-body").append("<h4>Terms and Conditions</h4><p>Not Found!</p>");
       }else{
        $(".modal-body").empty();
        $(".modal-body").append("<h4>Terms and Conditions</h4><p>"+dataResult.data.project_terms+"</p>");
        // alert(dataResult.data.project_terms);
        
       }
}
});
    })


/*ckediter*/
function DemoCtrl() {

  this.foo = 'foo';
  
  CKEDITOR.editorConfig = function (config) {
    config.extraPlugins = 'confighelper';
  };
  CKEDITOR.replace('custom_terms_conditions');

}

angular
  .module('gaigDemo', ['gaigUiBootstrap'])
  .controller('DemoCtrl', DemoCtrl);
/*end ckediter*/
</script>