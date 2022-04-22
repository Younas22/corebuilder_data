<style>.fixed-bottom{
    position: fixed;
    /*height: 100px;*/
    bottom: 0;
    width: 100%;
}</style>
<div class="footer-copyright-area footer fixed-bottom">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="footer-copy-right">
                                        <p>Copyright © 2022 All rights reserved. Data Entry Software by CORE BUILDER. <a href="https://thecorebuilder.com" target="_blank">www.thecorebuilder.com</a> <a href="https://www.thecorebuilder.com/t-c-privacy-policy" style="font-size: 8px;" target="_blank">Read T&C</a></p>
                                </div>
                        </div>
                </div>
        </div>
</div>
</div>
<!-- jquery
============================================ -->

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>
<script src="http://cdn.craig.is/js/rainbow-custom.min.js"></script>

<!-- <script src="<?=base_url('assets/')?>js/vendor/jquery-1.12.4.min.js"></script> -->
<!-- bootstrap JS
============================================ -->
<script src="<?=base_url('assets/')?>js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/')?>js/bootstrap-switch.js"></script>
<!-- wow JS
============================================ -->
<script src="<?=base_url('assets/')?>js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="<?=base_url('assets/')?>js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="<?=base_url('assets/')?>js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="<?=base_url('assets/')?>js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="<?=base_url('assets/')?>js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="<?=base_url('assets/')?>js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
============================================ -->
<script src="<?=base_url('assets/')?>js/counterup/jquery.counterup.min.js"></script>
<script src="<?=base_url('assets/')?>js/counterup/waypoints.min.js"></script>
<script src="<?=base_url('assets/')?>js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="<?=base_url('assets/')?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?=base_url('assets/')?>js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="<?=base_url('assets/')?>js/metisMenu/metisMenu.min.js"></script>
<script src="<?=base_url('assets/')?>js/metisMenu/metisMenu-active.js"></script>
<!-- morrisjs JS
============================================ -->
<script src="<?=base_url('assets/')?>js/morrisjs/raphael-min.js"></script>
<script src="<?=base_url('assets/')?>js/morrisjs/morris.js"></script>
<script src="<?=base_url('assets/')?>js/morrisjs/morris-active.js"></script>
<!-- morrisjs JS
============================================ -->
<script src="<?=base_url('assets/')?>js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?=base_url('assets/')?>js/sparkline/jquery.charts-sparkline.js"></script>
<script src="<?=base_url('assets/')?>js/sparkline/sparkline-active.js"></script>
<!-- calendar JS
============================================ -->
<script src="<?=base_url('assets/')?>js/calendar/moment.min.js"></script>
<script src="<?=base_url('assets/')?>js/calendar/fullcalendar.min.js"></script>
<script src="<?=base_url('assets/')?>js/calendar/fullcalendar-active.js"></script>
<script src="<?=base_url('assets/')?>js/datepicker/datepicker-active.js"></script>
<!-- plugins JSjs/datepicker/datepicker-active.js
============================================ -->
<script src="<?=base_url('assets/')?>js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="<?=base_url('assets/')?>js/main.js"></script>
<!-- dropzone.js -->
<script src="<?=base_url('assets/')?>js/dropzone.js"></script>


<!-- tawk chat JS
============================================ -->
<!-- <script src="<?=base_url('assets/')?>js/tawk-chat.js"></script> -->
<script>
jQuery(document).ready(function() {

let current_page_ = $(location).attr('href');
var current_page_split = current_page_.split('/');
let project_view_ = current_page_split[current_page_split.length-2];
if (project_view_ == 'add-project') {
    $('#font').addClass('hide');
    $('#invoice_type').addClass('hide');
    $('#numbers_tape').addClass('hide');
    $('#form_tape').addClass('hide');
}


// $.datetimepicker.setLocale('pt-BR');
// $('#start_date').datetimepicker();
// $('#end_date').datetimepicker();
// alert();

$('select[name="font"]').click(function() {
let fonts = $(this).val();
let start_date = $('#start_date').val();
// alert(start_date);
});

// $('.open-datetimepicker').click(function(event){
//     event.preventDefault();
//     $('#end_date').click();
// });

$('select[name="fonts"]').change(function() {
let fonts = $(this).val();
var fontArr = fonts.split(',');
var font = fontArr[0];
var project_id = fontArr[1];

$.ajax({
url: "<?php echo base_url("company/update_font");?>",
type: "POST",
data: {
up_id: project_id,
font: font
},
dataType:"json",
cache: false,
success: function(dataResult){
location.reload();
}

});
});

$('.View_QCReport').click(function (e) {
    var id = $(this).val();

    $.ajax({
url: "<?php echo base_url("company/View_QCReport");?>",
type: "POST",
data: {
id: id
},
dataType:"json",
cache: false,
success: function(dataResult){
// location.reload();
}

});


})

$('select[name="results"]').change(function() {
let results = $(this).val();

$.ajax({
url: "<?php echo base_url("company/set_results_per_page");?>",
type: "POST",
data: {
results: results
},
dataType:"json",
cache: false,
success: function(dataResult){
location.reload();
}

});
});


$('select[name="invoice_type_"]').change(function() {
let invoice_types = $(this).val();
// alert(invoice_types);
var invoice_typeArr = invoice_types.split(',');
var invoice_type = invoice_typeArr[0];
var project_id = invoice_typeArr[1];

$.ajax({
url: "<?php echo base_url("company/update_invoice_type");?>",
type: "POST",
data: {
up_id: project_id,
invoice_type: invoice_type
},
dataType:"json",
cache: false,
success: function(dataResult){
location.reload();
}

});
});



$('select[name="auto_p_type"]').change(function() {
let auto_p_type = $(this).val();
// alert(invoice_types);
var auto_p_typeArr = auto_p_type.split(',');
var user_id = auto_p_typeArr[0];
var type = auto_p_typeArr[1];

$.ajax({
url: "<?php echo base_url("admin/auto_p_type");?>",
type: "POST",
data: {
user_id: user_id,
type: type
},
dataType:"json",
cache: false,
success: function(dataResult){
location.reload();
}

});
});

$('select[name="auto_p"]').change(function() {
let auto_project = $(this).val();
// alert(auto_project);
var auto_typeArr = auto_project.split(',');
var user_id = auto_typeArr[0];
var project_id = auto_typeArr[1];

$.ajax({
url: "<?php echo base_url("admin/auto_p");?>",
type: "POST",
data: {
project_id: project_id,
user_id: user_id
},
dataType:"json",
cache: false,
success: function(dataResult){
location.reload();
}

});
});


$(".modal-wide").on("show.bs.modal", function() {
  var height = $(window).height() - 200;
  $(this).find(".modal-body").css("max-height", height);
});

// $('#project_id').on('change', function(){ 
//         alert($('#project_id').val());
// });
 
$("#project_id").on('change', function(){
        let project_id = $('#project_id').val();
if (project_id == 5 || project_id == 6 || project_id == 7) {
        $('#form_filling div').removeClass('hide');
        $('#invoice div').removeClass('hide');
        $('#numbring div').removeClass('hide');
        $('#writing').addClass('hide');
}else{
        $('#form_filling div').addClass('hide');
        $('#invoice div').addClass('hide');
        $('#numbring div').addClass('hide');
        $('#writing').removeClass('hide');
}
});


$("#p_id").on('change', function(){
        let p_id = $('#p_id').val();
        if (p_id == 1 || p_id == 2 || p_id == 3) {
        $('#quantity').addClass('hide');
        $('#non_tr').addClass('hide');
        $('#price').addClass('hide');
        }else{
        $('#non_tr').removeClass('hide');
        $('#quantity').removeClass('hide');
        $('#price').removeClass('hide');
}
});


$("#p_id").on('change', function(){
        let project_id = $('#p_id').val();
if (project_id != 5) {
        $('#form_tape').addClass('hide');
}else{
        $('#form_tape').removeClass('hide');
}
});

$("#p_id").on('change', function(){
        let project_id = $('#p_id').val();
if (project_id != 4) {
        $('#font').addClass('hide');
}else{
        $('#font').removeClass('hide');
}
});

$("#p_id").on('change', function(){
        let project_id = $('#p_id').val();
if (project_id != 6) {
        $('#invoice_type').addClass('hide');
}else{
        $('#invoice_type').removeClass('hide');
}
});

$("#p_id").on('change', function(){
        let project_id = $('#p_id').val();
if (project_id != 7) {
        $('#numbers_tape').addClass('hide');
}else{
        $('#numbers_tape').removeClass('hide');
}
});

$("#p_type").on('change', function(){
        let p_type = $('#p_type').val();
if (p_type == 'Non Target') {
        $('#quantity').addClass('hide');
}else{
        let p_id = $('#p_id').val();
        if (p_id == 1 || p_id == 2 || p_id == 3) {
        $('#quantity').addClass('hide');
        }else{
        $('#quantity').removeClass('hide');}
}
});


// add_project_img
$('#add_project_img').click(function(){
let up_id = $('#up_id').val();
let get_quantity = $('#get_quantity').val();
let up_data_ids = new Array();
$("input[name='up_data_id']:checked").each(function() {
up_data_ids.push($(this).val());
});
 
if(up_data_ids.length != 0) {
$.ajax({
url: "<?php echo base_url("company/submit_project_img");?>",
type: "POST",
data: {
up_id: up_id,
get_quantity: get_quantity,
up_data_ids: up_data_ids
},
dataType:"json",
cache: false,
success: function(dataResult){
       if (dataResult.st === 0) {
        alert(dataResult.msg);
       }else{
        alert(dataResult.msg);
        window.location.href = "<?php echo base_url("company/all-users");?>"; 
        
       }
}
});
}
else{
alert('Please select images');
}

});




/*count down*/
let s = $(location).attr('href');
var splitByForwardSlash = s.split('/');
let project_view = splitByForwardSlash[splitByForwardSlash.length-2];
let user_project_view = splitByForwardSlash[splitByForwardSlash.length-3];
// alert(project_view);
if (project_view== 'project-view' || user_project_view== 'user-project-details') {

    var countDownDate = new Date($('#end_date_for_counting').val()).getTime();
    var start_date_ = new Date($('#start_date_for_counting').val()).getTime();
    // Run myfunc every second
    var myfunc = setInterval(function() {
    var now = new Date().getTime();

    // if (start_date_ > now) {alert('big')}else{alert('small')}
        var timeleft = start_date_ - now;

        if (timeleft < 0) {
        var timeleft_ = countDownDate - now;
                // Calculating the days, hours, minutes and seconds left
                var days = Math.floor(timeleft_ / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeleft_ % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeleft_ % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft_ % (1000 * 60)) / 1000);

                // Result is output to the specific element
                document.getElementById("left_time").innerHTML = "Time Start";
                document.getElementById("days").innerHTML = days + "d ";
                document.getElementById("hours").innerHTML = hours + "h " ;
                document.getElementById("minutes").innerHTML = minutes + "m " ;
                document.getElementById("seconds").innerHTML = seconds + "s " ;
                $('#accep_terms').show();
        }else{
                var timeleft_ = start_date_ - now;
                // Calculating the days, hours, minutes and seconds left
                var days = Math.floor(timeleft_ / (1000 * 60 * 60 * 24));
                var hours = Math.floor((timeleft_ % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((timeleft_ % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((timeleft_ % (1000 * 60)) / 1000);
                document.getElementById("left_time").innerHTML = "Project Starting Time";
                document.getElementById("days").innerHTML = days + "d ";
                document.getElementById("hours").innerHTML = hours + "h " ;
                document.getElementById("minutes").innerHTML = minutes + "m " ;
                document.getElementById("seconds").innerHTML = seconds + "s " ;
                $('#accep_terms').hide();
        }
        
    // Display the message when countdown is over
        if (timeleft_ < 0) {
                clearInterval(myfunc);
                document.getElementById("left_time").innerHTML = "TIME UP!!";
                document.getElementById("days").innerHTML = "0";
                document.getElementById("hours").innerHTML = "0" ;
                document.getElementById("minutes").innerHTML = "0";
                document.getElementById("seconds").innerHTML = "0";
                $('#accep_terms').show();

        }
    }, 1000);
}
/*end count down*/

function diff_hours(dt2, dt1) 
 {

  var diff =(dt2.getTime() - dt1.getTime()) / 1000;
  diff /= (60 * 60);
  return Math.abs(Math.round(diff));
  
 }
/*company profile fill function*/
let current_page = $(location).attr('href');
let check_company = "<?=$this->session->userdata('logged_in')->user_type?>";
let account_created_time ="<?=get_company_created_at()?>";
let company_profile_page = "<?=base_url('company/profile');?>";
let check_company_profile = "<?=check_company_profile();?>";

// alert(account_created_time);
let creat_time = new Date(account_created_time).getTime();

// let time_now = new Date().getTime();
let time_now = moment().subtract(0, 'hours').format('YYYY-MM-DD HH:mm:ss');
let time_now_js = new Date(time_now).getTime();

var diff =(time_now_js - creat_time) / 1000;
diff /= (60 * 60);

// alert(time_now);
// alert(parseInt(diff));

if (check_company == 'company') {
if (parseInt(diff) >= 1) {
        // alert(parseInt(diff));
        if (check_company_profile == 'company_logo' || check_company_profile == 'company_website' || check_company_profile == 'Please add Company Logo and Company Website') {
                if (current_page != company_profile_page) {
                        $('#profile_Modal').modal('show');
                // window.location.href = company_profile_page;
                
                // alert('ok');
                // alert('You need to complete Your profile section');

            }
        }

    }
}
/*end company profile fill function*/

jQuery(document).ready(function() {
    if ('<?=$this->session->userdata('logged_in')->irritate_mode?>'  == 1 || '<?=$this->session->userdata('logged_in')->user_type?>'  == 'company') {
        // alert('ok');
        slow_loading();
        // jQuery('#load').hide();
    }


function slow_loading(){
    let get_url = $(location).attr('href');
    var url_splitByForwardSlash = get_url.split('/');

    let pro_id = url_splitByForwardSlash[url_splitByForwardSlash.length-2];
    let pro_title = url_splitByForwardSlash[url_splitByForwardSlash.length-3];
    let pro_type = url_splitByForwardSlash[url_splitByForwardSlash.length-4];

     // if(typeof integer == 'number'){
     //    alert(integer + " is a number <br/>");
     // }else{
     //    alert(integer + " is not a number <br/>");
     // }

     //alert("<?=slow_loading('"+parseInt(pro_id)+"')?>");
     let fadeOut_time = "<?php echo slow_loading($this->uri->segment(4))?>";
     // alert(fadeOut_time);
    if (pro_type == 'start-filling-project') {
        if (fadeOut_time == 8000) {
            jQuery('.all-content-wrapper').hide();
            jQuery('#load').fadeOut(8000);
            jQuery('.all-content-wrapper').show();
        }else{
            jQuery('.all-content-wrapper').hide();
            jQuery('#load').fadeOut(1000);
            jQuery('.all-content-wrapper').show();
        }
    }else{
        jQuery('.all-content-wrapper').hide();
        jQuery('#load').fadeOut(1000);
        jQuery('.all-content-wrapper').show();
    }
}

    
});

});
</script>
</body>
<!-- Mirrored from retrina.com/uone/personal-with-bg-video/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 22 Apr 2020 14:28:30 GMT -->
</html>