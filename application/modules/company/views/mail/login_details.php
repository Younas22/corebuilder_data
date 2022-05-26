<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Email Confirmation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
  /**
   * Google webfonts. Recommended to include the .woff version for cross-client compatibility.
   */
  @media screen {
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 400;
      src: local('Source Sans Pro Regular'), local('SourceSansPro-Regular'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/ODelI1aHBYDBqgeIAH2zlBM0YzuT7MdOe03otPbuUS0.woff) format('woff');
    }
    @font-face {
      font-family: 'Source Sans Pro';
      font-style: normal;
      font-weight: 700;
      src: local('Source Sans Pro Bold'), local('SourceSansPro-Bold'), url(https://fonts.gstatic.com/s/sourcesanspro/v10/toadOcfmlt9b38dHJxOBGFkQc6VGVFSmCnC_l7QZG60.woff) format('woff');
    }
  }
  /**
   * Avoid browser level font resizing.
   * 1. Windows Mobile
   * 2. iOS / OSX
   */
  body,
  table,
  td,
  a {
    -ms-text-size-adjust: 100%; /* 1 */
    -webkit-text-size-adjust: 100%; /* 2 */
  }
  /**
   * Remove extra space added to tables and cells in Outlook.
   */
  table,
  td {
    mso-table-rspace: 0pt;
    mso-table-lspace: 0pt;
  }
  /**
   * Better fluid images in Internet Explorer.
   */
  img {
    -ms-interpolation-mode: bicubic;
  }
  /**
   * Remove blue links for iOS devices.
   */
  a[x-apple-data-detectors] {
    font-family: inherit !important;
    font-size: inherit !important;
    font-weight: inherit !important;
    line-height: inherit !important;
    color: inherit !important;
    text-decoration: none !important;
  }
  /**
   * Fix centering issues in Android 4.4.
   */
  div[style*="margin: 16px 0;"] {
    margin: 0 !important;
  }
  body {
    width: 100% !important;
    height: 100% !important;
    padding: 0 !important;
    margin: 0 !important;
  }
  /**
   * Collapse table borders to avoid space between cells.
   */
  table {
    border-collapse: collapse !important;
  }
  a {
    color: #1a82e2;
  }
  img {
    height: auto;
    line-height: 100%;
    text-decoration: none;
    border: 0;
    outline: none;
  }
  </style>

</head>
<body style="background-color: #e9ecef;">

  <!-- start preheader -->
  <div class="preheader" style="display: none; max-width: 0; max-height: 0; overflow: hidden; font-size: 1px; line-height: 1px; color: #fff; opacity: 0;">
    A preheader is the short summary text that follows the subject line when an email is viewed in the inbox.
  </div>
  <!-- end preheader -->

  <!-- start body -->
  <table border="0" cellpadding="0" cellspacing="0" width="100%">

    <!-- start logo -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
<!--         <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="center" valign="top" style="background-color: white;">
 
  <div style="width: 100%; display: table; margin-top: 30px;">
        <div style="display: table-row; height: 100px; ">
            <div style="width: 50%; display: table-cell;">
                <a href="<?= base_url() ?>" target="_blank" style="display: inline-block;">
                <img src="https://alphaexposofts.com/assets/img/profile/1649312573PerfectuniqueattractivestylishgeometrictechPDDPPDinitialbasedlettericonlogo.png" alt="Logo" border="0" width="250" > -->
                <!-- <img src="<?=base_url('assets/img/profile/').$logo;?>" alt="Logo" border="0" width="300" > -->
<!--               </a>
            </div>
            <div style="display: table-cell; font-size: 30px"> 
                <h1><?=$ajency_name?></h1>
            </div>
        </div>
    </div>

            </td>
          </tr>
        </table> -->



 
          <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
              <img src="<?=base_url('assets/img/profile/').$logo?>" alt="Logo" border="0" width="250">
            </td>

            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 50px; font-weight: 700; letter-spacing: -1px; line-height: 48px;"><?=$ajency_name?></h1>
            </td>
          </tr>
        </table>

        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end logo -->

    <!-- start hero -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
          <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 36px 24px 0; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; border-top: 3px solid #d4dadf;">
              <h1 style="margin: 0; font-size: 32px; font-weight: 700; letter-spacing: -1px; line-height: 48px;">Account Details</h1>
            </td>
          </tr>
        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end hero -->

    <!-- start copy block -->
    <tr>
      <td align="center" bgcolor="#e9ecef">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; font-size: 15px;">

          <!-- start copy -->
          <tr>
          <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
          <p style="margin: 0;">Dear <b><?=$name?></b>,<br>Greetings from <b><?=$ajency_name?></b>, your job partner.<br> We are glad that you have decided to work with us. We hope our Relationship will bring change for the good.</p><br>
          <p>Kindly Download the Software as per your Devices.</p>
          <b>Here are a few important points before you proceed:</b>
          <ol style="font-size: 15px;">
            <li>Download Core Builder Software for Desktop (Windows). <a href="https://drive.google.com/drive/folders/1O3v7NEhK7u86sfcm1PI0QYjqMbNtapgv?usp=sharing">CLICK HERE</a>
              or click this link: <a href="https://drive.google.com/drive/folders/1O3v7NEhK7u86sfcm1PI0QYjqMbNtapgv?usp=sharing">https://drive.google.com/drive/folders/1O3v7NEhK7u86sfcm1PI0QYjqMbNtapgv?usp=sharing</a> (if a link is not working copy-paste the link in new tab)</li>

           <li>Download Core Builder Software for Mobile (Android). <a href="https://drive.google.com/drive/folders/18p-NqgQ1F_n-rQMuFarUpVR9sQXjUsyq?usp=sharing">CLICK HERE</a>
              or click this link: <a href="https://drive.google.com/drive/folders/18p-NqgQ1F_n-rQMuFarUpVR9sQXjUsyq?usp=sharing" style="font-size: 15px;"> https://drive.google.com/drive/folders/18p-NqgQ1F_n-rQMuFarUpVR9sQXjUsyq?usp=sharing</a> (if a link is not working copy-paste the link in new tab)</li>



           <li>Follow the steps for installing the Core Builder App in your Laptop/desktop- Click on the link to watch installation video <a href="https://drive.google.com/drive/folders/1WodF63vwWM_FXV3SDTs4OUoe8rszr8M5?usp=sharing">CLICK HERE</a>
              or click this link: <a href="https://drive.google.com/drive/folders/1WodF63vwWM_FXV3SDTs4OUoe8rszr8M5?usp=sharing" style="font-size: 15px;"> https://drive.google.com/drive/folders/1WodF63vwWM_FXV3SDTs4OUoe8rszr8M5?usp=sharing</a> (if a link is not working copy-paste the link in new tab)</li>
          </ol>

            <b>Here are your Login Credentials: -</b>
            <br><b>Login ID: <?=$mail?></b><br>
            <b>Password: <?=$password?></b>
            <p>Use the login ID and password to login into the Core Builder: Data Entry Software.</p>
            <b>NOTE:- Please do not End the project before completion as you want to do work on it again. If you ended the project without completion. it will be considered final. If you want to work again you have to contact your project provider.</b><br>

            <b>Regarding Core Builder: Data Entry Software.</b>
            <ol>
              <li>Core Builder and the company you are working for (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>) are two different entities.</li>

              <li>Core builder is just a task management platform and is not responsible for the work provided to you (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>).</li>

              <li>The projects you are working on are not provided to you by Core Builder rather the company you took the project from (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>).</li>

              <li>Core builder is not meant for any commercial transactions. Core Builder does not ask for any money to use its platform.</li>

              <li>If you have paid any fee or any other type of transaction, that transaction will be handled by the company you are working for (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>).</li>

            <li>For any disputes, please reach out to the company you are working for (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>).</li>
            <li>Core Builder is having no knowledge about the agreement between you and the company you are working for (In your case <b><a href="<?=$ajency_web?>" target="_blank"><?=$ajency_web?></a></b>). Therefore, Core Builder is not responsible for any losses or damages.</li>
            <li>Core Builder will never call you for your personal details. Like bank account details, addresses, or other similar details.</li>
            </ol><hr>
            <p>Copyright © 2022 All rights reserved. Data Entry Software by CORE BUILDER.</p><a href="https://www.thecorebuilder.com/">www.thecorebuilder.com <a href="https://www.thecorebuilder.com/t-c-privacy-policy" style="font-size: 10px;">Read T&C</a></a>
          </td>
          </tr>

          <!-- end copy -->

          <!-- start button -->
<!--           <tr>
            <td align="left" bgcolor="#ffffff">
              <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td align="center" bgcolor="#ffffff" style="padding: 12px;">
                    <table border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td align="center" bgcolor="#1a82e2" style="border-radius: 6px;">
                          <a href="https://alphaexposofts.com/" target="_blank" style="display: inline-block; padding: 16px 36px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; color: #ffffff; text-decoration: none; border-radius: 6px;">Login</a>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr> -->
          <!-- end button -->

          <!-- start copy -->
<!--           <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px;">
              <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
              <p style="margin: 0;"><a href="<?=$url?>" target="_blank">https://alphaexposofts.com/</a></p>
            </td>
          </tr> -->
          <!-- end copy -->

          <!-- start copy -->
<!--           <tr>
            <td align="left" bgcolor="#ffffff" style="padding: 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 16px; line-height: 24px; border-bottom: 3px solid #d4dadf">
              <p style="margin: 0;">Cheers,<br> Alphaexposofts</p>
            </td>
          </tr> -->
          <!-- end copy -->

        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- end copy block -->

    <!-- start footer -->
    <tr style="display:none;">
      <td align="center" bgcolor="#e9ecef" style="padding: 24px;">
        <!--[if (gte mso 9)|(IE)]>
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600">
        <tr>
        <td align="center" valign="top" width="600">
        <![endif]-->
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

          <!-- start permission -->
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
              <p style="margin: 0;">You received this email because we received a request for [type_of_action] for your account. If you didn't request [type_of_action] you can safely delete this email.</p>
            </td>
          </tr>
          <!-- end permission -->

          <!-- start unsubscribe -->
          <tr>
            <td align="center" bgcolor="#e9ecef" style="padding: 12px 24px; font-family: 'Source Sans Pro', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; color: #666;">
              <p style="margin: 0;">To stop receiving these emails, you can <a href="https://sendgrid.com" target="_blank">unsubscribe</a> at any time.</p>
              <p style="margin: 0;">Paste 1234 S. Broadway St. City, State 12345</p>
            </td>
          </tr>
          <!-- end unsubscribe -->

        </table>
        <!--[if (gte mso 9)|(IE)]>
        </td>
        </tr>
        </table>
        <![endif]-->
      </td>
    </tr>
    <!-- <br><br><br><br><br> -->
    <!-- end footer -->

  </table>
  <!-- end body -->

</body>
</html>