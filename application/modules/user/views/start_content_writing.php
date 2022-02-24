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
    <?php if ($user_type == 'user') { ?>
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
<div style="margin-top:20px"></div>
</div>
<!-- style -->
<style>
.zoom-header {
display: flex;
}
.zoomin {
position: relative;
/*z-index: 1000;*/
}
.main-container {
/*width: 500px;*/
/*height: 500px;*/
/*background: blue;*/
background: white;
overflow: auto;
}
.zoomout {
position: relative;
/*z-index: 1000;*/
}
.maindiv {
/*width: 500px;*/
height: 400px;
background: white;
transform-origin:0% 0%;
}
textarea {
margin-top: 15px;
/*margin-left: 50px;*/
width: 500px;
height: 350px;
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
</style>
<!-- end style -->
<!-- Single pro tab review Start-->
<div class="single-pro-review-area mt-t-30 mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="product-payment-inner-st">
<ul id="myTabedu1" class="tab-review-design">
<li class="active"><a href="#description"><?=$this->uri->segment(3)?></a></li>
<!-- <li><a href="#description"  style="color:green !important;">Right: <?=$get_content_writing->_right?></a></li>
<li><a href="#description"  style="color:red !important;">Wrong: <?=$get_content_writing->wrong?></a></li>
<li><a href="#description"  style="color:blue; !important;">Earning: <?=$get_content_writing->earning?></a></li> -->

<!-- <li><a href="#"  style="color:gray; !important;">Skip: <?=$get_content_writing->refrash_limit;?></a></li> -->

</ul>
<div id="myTabContent" class="tab-content custom-product-edit">
<div class="product-tab-list tab-pane fade active in" id="description">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="review-content-section">
    <div id="dropzone1" class="pro-ad">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <p>
<?php if ($this->uri->segment(3) == 'content-writing') { ?>             
<label class=""><?=$this->uri->segment(3)?> Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Content Typing Project you are provided with fixed number of pages to type.</li>
    <li>You must complete the project in given time period.</li>
    <li>Text is Displayed on left hand side in form of images and you must type the text in Notepad on right hand side. </li>
    <li>On left right hand side Images are displayed one by one. You might need to scroll to see full page. There is also Zoom in and Zoom out option to for enhanced visibility.</li>
    <li>Once you have completed the page. Please submit the page once completed and system will redirect you to next image.</li>
    <li>Text in images is extremely sensitive. Even one-character error also effects your accuracy report.</li>
    <li>Total number of pages and current page is displayed on top of image section. In e.g. 1/100, 2/100, 10/100, 50/100, 90/100, 100/100.</li>
    <li>After project is complete click submit or end project.</li>
</ol>
</div>

<?php } ?>

<?php if ($this->uri->segment(3) == 'novel-typing') { ?>             
<label class=""><?=$this->uri->segment(3)?> Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard.
<br><br>

<ol>
    <li>In Novel Typing Project you are provided with fixed number of pages to type.
</li>
    <li>You must complete the project in given time period.</li>
    <li>Text is Displayed on left hand side in form of images and you must type the text in Notepad on right hand side. </li>
    <li>On left right hand side Images are displayed one by one. You might need to scroll to see full page. There is also Zoom in and Zoom out option to for enhanced visibility.</li>
    <li>Once you have completed the page. Please submit the page once completed and system will redirect you to next image.</li>
    <li>Text in images is extremely sensitive. Even one-character error also effects your accuracy report.</li>
    <li>Total number of pages and current page is displayed on top of image section. In e.g. 1/100, 2/100, 10/100, 50/100, 90/100, 100/100.</li>
    <li>After project is complete click submit or end project.</li>
</ol>
</div>

<?php } ?>

<?php if ($this->uri->segment(3) == 'dialogue -typing') { ?>             
<label class=""><?=$this->uri->segment(3)?> Instructions</label>
<div style="overflow: scroll; height: 130px;">This Project is not provided by Core Builder. The company name you are working for is displayed on your dashboard. 
<br><br>

<ol>
    <li>In Dialogue Typing Project you are provided with fixed number of pages to type.</li>
    <li>You must complete the project in given time period</li>
    <li>Text is Displayed on left hand side in form of images and you must type the text in Notepad on right hand side. </li>
    <li>On left right hand side Images are displayed one by one. You might need to scroll to see full page. There is also Zoom in and Zoom out option to for enhanced visibility.</li>
    <li>Once you have completed the page. Please submit the page once completed and system will redirect you to next image.</li>
    <li>Text in images is extremely sensitive. Even one-character error also effects your accuracy report.</li>
    <li>Total number of pages and current page is displayed on top of image section. In e.g. 1/100, 2/100, 10/100, 50/100, 90/100, 100/100.</li>
    <li>After project is complete click submit or end project.</li>
</ol>
</div>

<?php } ?>
                </p>

                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="zoom-header">
                    <button class="zoomin">zoom in </button>
                    <select id="sel" class="select" onchange="handleChange()">
                        <option value=0.5>50%</option>
                        <option value=0.75>75%</option>
                        <option value=0.85>85%</option>
                        <option value=0.9>90%</option>
                        <option value=1 selected>100%</option>
                        <option value=1.2>120%</option>
                        <option value=1.5>150%</option>
                        <option value=1>reset</option>
                    </select>
                    <button class="zoomout"> zoom out</button>
                    <?php if ($get_content_writing->quantity != 0) { ?>
                    <input type="text" name="" value="<?=$get_img_quantity+1?>/<?=$get_image_quantity?>" size="5" style="text-align: center;">
                    <?php } ?>
                </div>
                <div class="main-container">
                    <?php if (!empty($get_up_data->p_image)) { ?>
                    <div  class="maindiv">
                        <img id='image' src='<?=base_url('assets/img/project_img/').$get_up_data->folder_number.'/'.$get_up_data->p_image?>'/>
                        <input type="hidden" name="image_path" id="image_path" value="<?=base_url('assets/img/project_img/').$get_up_data->folder_number.'/'.$get_up_data->p_image?>">
                    </div>
                    <?php }else{ ?>
                    <div class="maindiv">
                        <h2>Image not found!</h2>
                    </div>
                    <?php } ?>
                </div>
            </div>
                            <form action="<?=base_url('user/submit_content_writing')?>" class="needsclick add-professors" id="demo1-upload" method="POST">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                    <div class="main-textarea"><h4>Notepad</h4></div>
                    <div  class="maintextarea">
                        <input type="hidden" name="up_data_id" value="<?=$get_up_data->up_data_id?>">
                        <input type="hidden" name="current_url" value="<?=current_url()?>">
                        <input type="hidden" name="p_id" value="<?=$this->uri->segment(4)?>">
                        <textarea placeholder="Type here..." rows="20" name="filling_val" id="comment_text" style="width: 100%;" class="ui-autocomplete-input" role="textbox" aria-autocomplete="list" aria-haspopup="true" onselectstart="return false" onpaste="return false" onCopy="return false" onCut="return false" onDrag="return false" onDrop="return false" autocomplete="off"></textarea>
                    </div>
                    </div>
                
<div class="row larg_devices_mb">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="payment-adress">
            <style>.hide{display: none;}</style>
            <button id="Save_File" type="submit" class="btn btn-primary waves-effect waves-light hide">Save File</button>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <div class="payment-adress">
            <a class="btn btn-primary waves-effect waves-light end_project" href="#0">End Project</a>
<!--                         <a class="btn btn-danger" href="<?=base_url('user/get_skip_/').$get_content_writing->project_id.'/'.$get_up_data->up_data_id?>"  style="color:white !important;">Skip</a> -->
        </div>
    </div>
</div>
   </form>         
        </div>







<div class="cd-popup" role="alert">
<div class="cd-popup-container">
        <p>Are you sure you want to End the project?</p>
        <ul class="cd-buttons">
        <li><a href="<?=base_url('user/project_end/').$this->uri->segment(4)?>">Yes</a></li>
        <li><a href="#" id="model_hide_btn" class="img-replace">No</a></li>
        </ul>
        <a href="#0" class="cd-popup-close img-replace"></a>
    </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->
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
<script src="<?=base_url('assets/js/')?>start_content_writing/start_content_writing.js"></script>
<script src="<?=base_url('assets/')?>imgtotext_js/tesseract.min.js"></script>
<script>
let zoomArr = [0.5,0.75,0.85,0.9,1,1.2,1.5];
var element = document.querySelector('.maindiv');
let value = element.getBoundingClientRect().width / element.offsetWidth;
let indexofArr = 4;
handleChange = ()=>{
let val = document.querySelector('#sel').value;
val = Number(val)
console.log('handle change selected value ',val);
indexofArr = zoomArr.indexOf(val);
console.log('Handle changes',indexofArr)
element.style['transform'] = `scale(${val})`
}
document.querySelector('.zoomin').addEventListener('click',()=>{
console.log('value of index zoomin is',indexofArr)
if(indexofArr < zoomArr.length-1){
indexofArr += 1;
value = zoomArr[indexofArr];
document.querySelector('#sel').value = value
// console.log('current value is',value)
// console.log('scale value is',value)
element.style['transform'] = `scale(${value})`
}
})
document.querySelector('.zoomout').addEventListener('click',()=>{
console.log('value of index  zoom out is',indexofArr)
if(indexofArr >0){
indexofArr -= 1;
value = zoomArr[indexofArr];
document.querySelector('#sel').value = value
// console.log('scale value is',value)
element.style['transform'] = `scale(${value})`
}
})
jQuery(document).ready(function(){
jQuery(function() {
jQuery(this).bind("contextmenu", function(event) {
event.preventDefault();
// alert('Right click disable in this site!!')
});
});
});
// var count = $("comment_text").text().length;
// if (count == 11) {
//         alert(count);
// }
$('#comment_text').keyup(function () {
var max = 140;
var len = $(this).val().length;
if (len >= max) {
$('#Save_File').removeClass('hide');
}
});
/*image convert*/
// alert();
$( document ).ready(function() {
// $("#startLink").click(function () {
// var img = document.getElementById('selected-image');
// var img = 'http://localhost/img-coverter/unnamed.png';
var img = $('#image_path').val();
console.log(img);
startRecognize(img);
// });
function startRecognize(img){
recognizeFile(img);
}
function recognizeFile(file){
$("#log").empty();
const corePath = window.navigator.userAgent.indexOf("Edge") > -1
? '<?=base_url('assets/')?>imgtotext_js/tesseract-core.asm.js'
: '<?=base_url('assets/')?>imgtotext_js/tesseract-core.wasm.js';
const worker = new Tesseract.TesseractWorker({
corePath,
});
worker.recognize(file,'eng')
.progress(function(packet){
// console.info(packet)
// progressUpdate(packet)
})
.then(function(data){
// console.log(data.text)
// alert(data.text);
if (data.text) {
$(".maintextarea").append("<input type='hidden' name='text_value' value='"+data.text+"'>");
}
})
}
//end project popup
jQuery(document).ready(function ($) {
//open popup
$(".end_project").on("click", function (event) {
event.preventDefault();
$(".cd-popup").addClass("is-visible");
});
//close popup
$(".cd-popup").on("click", function (event) {
if (
$(event.target).is(".cd-popup-close") ||
$(event.target).is(".cd-popup")
) {
event.preventDefault();
$(this).removeClass("is-visible");
}
});
//close popup when clicking the esc keyboard button
$(document).keyup(function (event) {
if (event.which == "27") {
$(".cd-popup").removeClass("is-visible");
}
});

$("#model_hide_btn").click(function(){
    $(".cd-popup").removeClass("is-visible");
});

});


});
/*end image convert*/
</script>