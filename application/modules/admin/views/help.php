<?php  $user_type = $this->session->userdata('logged_in')->user_type; ?>
<div class="breadcome-area" style="display:none">
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
<div class="admintab-area mg-b-15">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

<div class="admintab-wrap edu-tab1 mg-t-30">
<ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1 tab-menu-right" >
<li class="active"><a data-toggle="tab" href="#Content_Writing" aria-expanded="false" style="font-size: 16px;">Content Writing</a></li>
<li><a data-toggle="tab" href="#Novel_Typing" aria-expanded="false" style="font-size: 16px;"> Novel Typing</a></li>
<li><a data-toggle="tab" href="#Dialogue_Typing" aria-expanded="false" style="font-size: 16px;">Dialogue Typing</a></li>
<li><a data-toggle="tab" href="#Captcha" aria-expanded="false" style="font-size: 16px;">Captcha</a></li>
<li><a data-toggle="tab" href="#Form_Filling" aria-expanded="false" style="font-size: 16px;">Form Filling</a></li>
<li><a data-toggle="tab" href="#Invoice_Calculation" aria-expanded="false" style="font-size: 16px;">Invoice Calculation</a></li>
<li><a data-toggle="tab" href="#Number_Filling" aria-expanded="false" style="font-size: 16px;">Number Filling</a></li>
</ul>
        <div class="tab-content">
            <!-- Content_Writing -->
<div class="tab-pane  flipInX custon-tab-style1 active in" style="margin-top:20px; background-color:white;" id="Content_Writing">

<p><div style="padding: 15px;">
    <h4 style="color:#3399ff">Content Writing: -</h4>
    <p>Content writing projects fall under the category of  <b>“Text Writing Family”</b>. These are the projects where an image is displayed to a user and he/she must type it in given Notepad and submit to a Company or Agency. User might also be provided with texts having errors in it and user will type the acorrect text in Notepad. These projects can also be made available with other formats however, the execution method by the user will be the same. 
 </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Content Writing Projects: -</h5>
    <p>
        Core Builder Content Writing Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided inbuilt projects with different configurations like  <b>Content Writing 25 pages, Content Writing 55, Content Writing 75, Content Writing 100, etc</b>.<br>
        <p>Apart from the inbuilt projects we have also provided you a<b>Master Folder</b>where we have pre-uploaded 2000+ text images. You can use this folder to create your own project configuration like<b>Content Writing 250 pages, Content Writing 320 pages, Content Writing 411 pages etc. </b>These are just examples; you can actually create unlimited project in a particular Writing category with any number of images under 2000. Once you have created a new project it will be saved in your dashboard and you don’t need to create that project again for another user until you delete it.</p>

        <h5 style="color:#3399ff">How to assign a Content Writing Project to a user: -</h5>
        <p>There are two ways to assign a project to a user.</p>
        <ol>
            <li><b>Assign the project while adding a user</b></li><br>
            <li><b>Assign the project after user is added.</b></li>
        </ol>
    </p>

    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>

    <p>Step 1: In Project Title select  <b>Content Writing</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select  <b>Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 6: Click <b>Submit</b>.</p>
    <p>After clicking submit system will take you to the next page.<b> Select you desired project here (only one) and click Add button. The project will be assigned.
    </b></p>


    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard  <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>

    <h5 style="color:#3399ff">How to Create your own projects in Content Writing Section: -</h5>

        <ol>
            <li>Click on the <b>Content Writing</b> folder from your dashboard or choose <b>Create Project</b> option from the menu given on right side.</li>

            <li>Click on your desired project from the dropdown menu</li>
            <li>You will be redirected to the <b>Create Project Page</b>, under which click on <b>Create Customer Project</b></li>

            <li>On the next screen you will see the list of thousands of images available in our server.</li>

            <li>You can <b>select any number</b> of images as per your choice.</li>
            <li>After choosing the images click on <b>Submit</b> button.</li>
            <li>The <b>new Customer Project</b> for those particular images will be created in your content writing folder.</li>

            <li>You can find your created projects under  <b>Custom Project section</b> of <b>Content Writing </b> folder.</li>

            <li>The same folder will appear while assigning this project to any of your user.</li>
        </ol>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div></p>
</div>
            <!-- end Content_Writing -->
            <!-- Novel_Typing -->
            <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Novel_Typing">
                                
<p><div style="padding: 15px;">
    <h4 style="color:#3399ff">Novel Typing: -</h4>
    <p>Novel Typing projects fall under the category of  <b>“Text Typing  Family”</b>. These are the projects where an image is displayed to a user and he/she must type it in given Notepad and submit to a Company or Agency. User might also be provided with texts having errors in it and user will type the acorrect text in Notepad. These projects can also be made available with other formats however, the execution method by the user will be the same. 
 </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Novel Typing Projects: -</h5>
    <p>
        Core Builder Novel Typing Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided inbuilt projects with different configurations like  <b>Novel Typing 25 pages, Novel Typing 55, Novel Typing 75, Novel Typing 100, etc</b>.<br>
        <p>Apart from the inbuilt projects we have also provided you a<b>Master Folder</b>where we have pre-uploaded 2000+ text images. You can use this folder to create your own project configuration like<b>Novel Typing 250 pages, Novel Typing 320 pages, Novel Typing 411 pages etc. </b>These are just examples; you can actually create unlimited project in a particular Writing category with any number of images under 2000. Once you have created a new project it will be saved in your dashboard and you don’t need to create that project again for another user until you delete it.</p>

        <h5 style="color:#3399ff">How to assign a Novel Typing Project to a user: -</h5>
        <p>There are two ways to assign a project to a user.</p>
        <ol>
            <li><b>Assign the project while adding a user</b></li><br>
            <li><b>Assign the project after user is added.</b></li>
        </ol>
    </p>

    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>

    <p>Step 1: In Project Title select  <b>Novel Typing</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select  <b>Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 6: Click <b>Submit</b>.</p>
    <p>After clicking submit system will take you to the next page.<b> Select you desired project here (only one) and click Add button. The project will be assigned.
    </b></p>


    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard  <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>

    <h5 style="color:#3399ff">How to Create your own projects in Novel Typing Section: -</h5>

        <ol>
            <li>Click on the <b>Novel Typing</b> folder from your dashboard or choose <b>Create Project</b> option from the menu given on right side.</li>

            <li>Click on your desired project from the dropdown menu</li>
            <li>You will be redirected to the <b>Create Project Page</b>, under which click on <b>Create Customer Project</b></li>

            <li>On the next screen you will see the list of thousands of images available in our server.</li>

            <li>You can <b>select any number</b> of images as per your choice.</li>
            <li>After choosing the images click on <b>Submit</b> button.</li>
            <li>The <b>new Customer Project</b> for those particular images will be created in your Novel Typing folder.</li>

            <li>You can find your created projects under  <b>Custom Project section</b> of <b>Novel Typing </b> folder.</li>

            <li>The same folder will appear while assigning this project to any of your user.</li>
        </ol>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div></p>
            </div>
            <!-- end Novel_Typing -->
            <!-- Dialogue_Typing -->
            <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Dialogue_Typing">
                                <p><div style="padding: 15px;">
    <h4 style="color:#3399ff">Dialogue Typing: -</h4>
    <p>Dialogue Typing projects fall under the category of  <b>“Text Typing  Family”</b>. These are the projects where an image is displayed to a user and he/she must type it in given Notepad and submit to a Company or Agency. User might also be provided with texts having errors in it and user will type the acorrect text in Notepad. These projects can also be made available with other formats however, the execution method by the user will be the same. 
 </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Dialogue Typing Projects: -</h5>
    <p>
        Core Builder Dialogue Typing Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided inbuilt projects with different configurations like  <b>Dialogue Typing 25 pages, Dialogue Typing 55, Dialogue Typing 75, Dialogue Typing 100, etc</b>.<br>
        <p>Apart from the inbuilt projects we have also provided you a<b>Master Folder</b>where we have pre-uploaded 2000+ text images. You can use this folder to create your own project configuration like<b>Dialogue Typing 250 pages, Dialogue Typing 320 pages, Dialogue Typing 411 pages etc. </b>These are just examples; you can actually create unlimited project in a particular Writing category with any number of images under 2000. Once you have created a new project it will be saved in your dashboard and you don’t need to create that project again for another user until you delete it.</p>

        <h5 style="color:#3399ff">How to assign a Dialogue Typing Project to a user: -</h5>
        <p>There are two ways to assign a project to a user.</p>
        <ol>
            <li><b>Assign the project while adding a user</b></li><br>
            <li><b>Assign the project after user is added.</b></li>
        </ol>
    </p>

    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>

    <p>Step 1: In Project Title select  <b>Dialogue Typing</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select  <b>Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 6: Click <b>Submit</b>.</p>
    <p>After clicking submit system will take you to the next page.<b> Select you desired project here (only one) and click Add button. The project will be assigned.
    </b></p>


    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard  <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>

    <h5 style="color:#3399ff">How to Create your own projects in Dialogue Typing Section: -</h5>

        <ol>
            <li>Click on the <b>Dialogue Typing</b> folder from your dashboard or choose <b>Create Project</b> option from the menu given on right side.</li>

            <li>Click on your desired project from the dropdown menu</li>
            <li>You will be redirected to the <b>Create Project Page</b>, under which click on <b>Create Customer Project</b></li>

            <li>On the next screen you will see the list of thousands of images available in our server.</li>

            <li>You can <b>select any number</b> of images as per your choice.</li>
            <li>After choosing the images click on <b>Submit</b> button.</li>
            <li>The <b>new Customer Project</b> for those particular images will be created in your Dialogue Typing folder.</li>

            <li>You can find your created projects under  <b>Custom Project section</b> of <b>Dialogue Typing </b> folder.</li>

            <li>The same folder will appear while assigning this project to any of your user.</li>
        </ol>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div></p>
            </div>
            <!-- end Dialogue_Typing -->
            <!-- Captcha -->
            <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Captcha">
                                
<div style="padding: 15px;">
    <h4 style="color:#3399ff">Captcha Filling</h4>
    <p>Captcha Filling projects fall under the category of <b>“Alphanumeric Character submission”</b>. These are the projects where a captcha is displayed to a user and he/she has to type it in given section and submit to a Company or Agency. User might also be provided with captcha with different formats, fonts, trends or difficulty levels. These projects can also be made available with other formats however, the execution method by the user will be the same. </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Captcha Filling Projects: -</h5>
    <p>
        Core Builder Captcha Filling Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided two types of inbuilt captcha filling projects with different configurations like <b>a) Target Captcha.  b) Non-Target Captcha</b>.<br>
        <ol>
            <li><b>In Target captcha you have to assign a limited number of captcha to user like 500 captcha, 1000 captcha, 5000 captcha, 11000 captcha, 32000 captcha, 50000 captcha, etc.</b></li><br>
            <li><b>In Non-Target Captcha you just have to select the Non-Target category and unlimited Captcha will be assigned to the user. Non-Target Project are subjected to time limit assigned by company.</b></li>
        </ol>
        
    </p>
    <h5 style="color:#3399ff">Assign the project while adding a user: -
    </h5>
    <p>There are two ways to assign a project to a user.</p>
    <ol>
        <li><b>Assign the project while adding a user</b>.</li>
        <li><b>Assign the project after user is added.</b></li>
    </ol>
    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>
    <p>Step 1: In Project Title select <b>Captcha</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select <b>Target or Non-Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: If Target option is selected then enter the <b>Quantity of captcha</b> you want to assign to user.</p>
    <p>Step 6: If Non-Target option is selected then system will automatically assign <b>unlimited captcha</b>.</p>
    <p>Step 7: Select Project Font according to the difficulty you want to keep.</p>
    <p>Step 8: Enter the project price i.e the amount you want to keep for every correct captcha. e.g. Rs 1.5/ captcha.</p>
    <p>Step 9: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 10: Click <b>Submit</b>.</p>
    <b>After clicking submit the project will be assigned.</b><br><br>
    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div>
</div>
            <!-- end Captcha -->
            <!-- Form_Filling -->
            <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Form_Filling">
                                
<div style="padding: 15px;">
    <h4 style="color:#3399ff">Form Filling: -</h4>
    <p>Form Filling projects fall under the category of   <b>“Multiple Alphanumeric Character submission”</b>. These are the projects where a Form is displayed to a user and he/she has to type it in given section and submit to a Company or Agency. User might also be provided with Form with different formats, fonts, trends or difficulty levels. These projects can also be made available with other formats however, the execution method by the user will be the same.  </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Form Filling Projects: -</h5>
    <p>Core Builder Form Filling Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided two types of inbuilt Form filling projects with different configurations like   <b>a) Target Form.  b) Non-Target Form.</b></p>
    <b>In Target Form you have to assign a limited number of Form to user like 500 Form, 1000 Form, 5000 Form, 11000 Form, 32000 Form, 50000 Form, etc.</b>
    <b>In Non-Target Form you just must select the Non-Target category and unlimited Form will be assigned to the user. Non-Target Project are subjected to time limit assigned by company.</b><br><br>
    <h5 style="color:#3399ff">How to assign a Form Filling Project to a user: -</h5>
    <p>There are two ways to assign a project to a user.</p>
    <ol>
        <li><b>Assign the project while adding a user. </b></li>
        <li><b>Assign the project after user is added. </b></li>
    </ol>
    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>
    <p>Step 1: In Project Title select <b>Form Filling</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select <b>Target or Non-Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: If Target option is selected then enter the <b>Quantity of Form </b> you want to assign to user.</p>
    <p>Step 6: If Non-Target option is selected then system will automatically assign <b>unlimited Form </b>.</p>
    <p>Step 7: Select Project Font according to the difficulty you want to keep.</p>
    <p>Step 8: Enter the project price i.e the amount you want to keep for every correct Form . e.g. Rs 1.5/ Form .</p>
    <p>Step 9: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 10: Click <b>Submit</b>.</p>
    <b>After clicking submit the project will be assigned.</b><br><br>
    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div>  
            </div>
            <!-- end Form_Filling -->
            <!-- Invoice_Calculation -->
        <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Invoice_Calculation">
                                
<div style="padding: 15px;">
    <h4 style="color:#3399ff">Invoice Calculation: -</h4>
    <p>Invoice Calculation projects fall under the category of  <b>“Multiple Alphanumeric Character submission”</b>. These are the projects where an Invoice is displayed to a user and he/she has to type it in given section and submit to a Company or Agency. User might also be provided with Invoice with different formats, fonts, trends or difficulty levels. These projects can also be made available with other formats however, the execution method by the user will be the same. </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Invoice Calculation Projects: -</h5>
    <p>Core Builder Invoice Calculation Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided two types of inbuilt Invoice Calculation projects with different configurations like  <b>a) Target Invoice.  b) Non-Target Invoice.</b></p>
    <b>In Target Invoice you have to assign a limited number of Invoice to user like 500 Invoice, 1000 Invoice, 5000 Invoice, 11000 Invoice, 32000 Invoice, 50000 Invoice, etc.</b>
    <b>In Non-Target Invoice you just have to select the Non-Target category and unlimited Invoice will be assigned to the user. Non-Target Project are subjected to time limit assigned by company.</b><br><br>
    <h5 style="color:#3399ff">How to assign a Invoice Calculation Project to a user: -</h5>
    <p>There are two ways to assign a project to a user.</p>
    <ol>
        <li><b>Assign the project while adding a user. </b></li>
        <li><b>Assign the project after user is added. </b></li>
    </ol>
    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully. </p>
    <p>Step 1: In Project Title select <b>Invoice Calculation</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select <b>Target or Non-Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: If Target option is selected then enter the <b>Quantity of Invoice </b> you want to assign to user.</p>
    <p>Step 6: If Non-Target option is selected then system will automatically assign <b>unlimited Invoice </b>.</p>
    <p>Step 7: Select Project Font according to the difficulty you want to keep.</p>
    <p>Step 8: Enter the project price i.e the amount you want to keep for every correct Invoice . e.g. Rs 1.5/ Invoice .</p>
    <p>Step 9: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 10: Click <b>Submit</b>.</p>
    <b>After clicking submit the project will be assigned.</b><br><br>
    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div>


            </div>
            <!-- end Invoice_Calculation -->
            <!-- Number_Filling -->
            <div class="tab-pane  flipInX custon-tab-style1" style="margin-top:20px; background-color:white;" id="Number_Filling">
                                
<div style="padding: 15px;">
    <h4 style="color:#3399ff">Number Filling: -</h4>
    <p>Number Filling projects fall under the category of <b>“Alphanumeric Character submission”</b>. These are the projects where a Number is displayed to a user and he/she has to type it in given section and submit to a Company or Agency. User might also be provided with Number with different formats, fonts, trends or difficulty levels. These projects can also be made available with other formats however, the execution method by the user will be the same. </p><br>
    <h5 style="color:#3399ff">What is Different in Core Builder Number Filling Projects: -</h5>
    <p>Core Builder Number Filling Projects brings you the unique feature of Automation and eliminates your manual work to a great extent. We have provided two types of inbuilt Number filling projects with different configurations like <b>a) Target Number Filling.  b) Non-Target Number Filling.</b></p>
    <b>In Target Number Filling you have to assign a limited number of quantity to user like 500, 1000, 5000, 11000, 32000, 50000, etc.</b>
    <b>In Non-Target Number Filling you just have to select the Non-Target category and unlimited quantity will be assigned to the user. Non-Target Project are subjected to time limit assigned by company.</b><br><br>
    <h5 style="color:#3399ff">How to assign a Number Filling Project to a user: -</h5>
    <p>There are two ways to assign a project to a user.</p>
    <ol>
        <li><b>Assign the project while adding a user. </b></li>
        <li><b>Assign the project after user is added. </b></li>
    </ol>
    <h5 style="color:#3399ff">Assign the project while adding a user: -</h5>
    <p>When you will add a user, an automatic email will be sent to user with login credentials. (User should check email in Primary, social, promotion and spam. Email can land in any folder). If user has still not received the email, then please forward the credentials directly to user. You can find user`s email and password in user profile. After user is created system will directly take u to the project assigning page. On this page you have to fill all the details carefully.</p>
    <p>Step 1: In Project Title select <b>Number Filling</b>.</p>
    <p>Step 2: Select <b>Start date and time</b>.</p>
    <p>Step 3: Under Project type select <b>Target or Non-Target</b>.</p>
    <p>Step 4: Select <b>End date and time.</b></p>
    <p>Step 5: If Target option is selected then enter the <b>Quantity of Numbers </b> you want to assign to user.</p>
    <p>Step 6: If Non-Target option is selected then system will automatically assign <b>unlimited quantity </b>.</p>
    <p>Step 7: Select Project Font according to the difficulty you want to keep.</p>
    <p>Step 8: Enter the project price i.e the amount you want to keep for every correct Numbers . e.g. Rs 1.5/ Numbers .</p>
    <p>Step 9: Write, paste or edit your T&C for this particular project.</p>
    <p>Step 10: Click <b>Submit</b>.</p>
    <b>After clicking submit the project will be assigned.</b><br><br>
    <h5 style="color:#3399ff">Assign the project after user is added: -</h5>
    <p>If the user is already added and you want to assign him/her a project. Follow the Steps.</p>
    <br><br>
    <p>Step 1: On left hand-side of your dashboard <b>locate and click option “View Users”</b>. </p>
    <p>Step 2: Now locate the user you want to assign 1 or more projects.
    </p>
    <p>Step 3: On the right-hand side under Action section there are 3 options. Click Add-Project option having + icon on it.</p>
    <p>Step 4: you will be redirected to the project assigning screen and from here you can <b>follow method (i) steps</b>.</p>
    <ul>
        <li><h4>If you have any questions, please contact us.</h4></li>
        <li><h4>Email: - <a href="mail:corecare@thecorebuilder.in">corecare@thecorebuilder.in</a></h4></li>
    </ul>
    <br><br><br>
</div>



            </div>
            <!-- end Number_Filling -->
        </div>
    </div>
</div>
</div>
</div>
</div>