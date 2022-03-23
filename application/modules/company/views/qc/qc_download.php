<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Order Confirmation</title>
    <!-- Favicon -->
    <link rel="icon" href="./images/favicon.png" type="image/x-icon" />
    <!-- Invoice styling -->
    <style>
      body {
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        /*text-align: center;*/
        color: #777;
      }
      body h1 {
        font-weight: 300;
        margin-bottom: 0px;
        padding-bottom: 0px;
        color: #000;
      }
      body h3 {
        font-weight: 300;
        margin-top: 10px;
        margin-bottom: 20px;
        font-style: italic;
        color: #555;
      }
      body a {
        color: #06f;
      }
      .invoice-box {
        max-width: 1000px;
        margin: auto;
        padding: 30px;
        border: 1px solid #eee;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        line-height: 24px;
        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
        color: #555;
      }
      .invoice-box table {
        width: 100%;
        line-height: inherit;
        /*text-align: left;*/
        border-collapse: collapse;
      }
      .invoice-box table td {
        padding: 5px;
        vertical-align: top;
      }
      .invoice-box table tr td:nth-child(2) {
        /*text-align: right;*/
      }
      .invoice-box table tr.top table td {
        padding-bottom: 20px;
      }
      .invoice-box table tr.top table td.title {
        font-size: 45px;
        line-height: 45px;
        color: #333;
      }
      .invoice-box table tr.information table td {
        padding-bottom: 40px;
      }
      .invoice-box table tr.heading td {
        background: #eee;
        border-bottom: 1px solid #ddd;
        font-weight: bold;
      }
      .invoice-box table tr.details td {
        padding-bottom: 20px;
      }
      .invoice-box table tr.item td {
        border-bottom: 1px solid #eee;
      }
      .invoice-box table tr.item.last td {
        border-bottom: none;
      }
      .invoice-box table tr.total td:nth-child(2) {
        border-top: 2px solid #eee;
        font-weight: bold;
      }
      @media only screen and (max-width: 600px) {
        .invoice-box table tr.top table td {
          width: 100%;
          display: block;
          text-align: center;
        }
        .invoice-box table tr.information table td {
          width: 100%;
          display: block;
          text-align: center;
        }
      }
    </style>
  </head>
  <body>
    <div class="invoice-box" style="background-color: white; margin-bottom:40px; margin-top: 40px;">
      <table>
        <tr class="top">
          <td colspan="2">
            <table>
              <tr>
                <td class="title" style="">
                    <img src="<?=base_url('assets/img/profile/').$this->session->userdata('logged_in')->company_logo;?>" alt="Company logo" style="width: 100%; max-width: 300px" />
                    <h2 style="float: right; margin-top: 50px"><?=$this->session->userdata('logged_in')->company_name?></h2>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table><hr>
      <style>
      .table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
      }
      .td, .th {
      border: 1px solid #dddddd;
      /*text-align: left !important;*/
      padding: 8px;
      }
      .tr:nth-child(even) {
      background-color: #dddddd;
      }
      </style>

      <div style="text-align: justify;">
        <p>Dear <b><?=$get_withdraw_report->first_name?></b><br>Greetings from <b><?=$this->session->userdata('logged_in')->company_name?>,</b> your job partner.<br><br>We are glad that you have decided to work with us. We hope our Relationship will bring change for the good.</p><br>

        <p>We had approved your request for your <b>Rs.<?=$get_withdraw_report->total_withdraw?>/</b>- against your project of <b><?=$get_withdraw_report->projects_title?></b>. Kindly find below the payment details for your reference.</p>

      </div>
  <h2 style="margin-top:50px;">QC Report: <?=$project_view->projects_title?></h2>
      <table class="table">
                    <b>Name:</b> <?=get_user_profile($project_view->users_id)->first_name?>
                    <b>Email:</b> <?=get_user_profile($project_view->users_id)->company_email?>
                    <b>Phone:</b> <?=get_user_profile($project_view->users_id)->user_phone?>
                    <tr>
                    <th>Project</th>
                    <th>Type</th>
                    <th>Right</th>
                    <th>Wrong</th>
                    <th>Quantity</th>
                    <th>Start</th>
                    <th>End</th>
                    <th>Overall Accuracy</th>
                </tr>
                    <tr>
                        <td><?=$project_view->projects_title?></td>
                        <td><?=$project_view->p_type?></td>
                        <td><?=$project_view->_right?></td>
                        <td><?=$project_view->wrong?></td>
                        <td><?=$project_view->quantity?></td>
                        <td><?=date('m-d-Y',strtotime($project_view->start_date))?></td>
                        <td><?=date('m-d-Y',strtotime($project_view->end_date))?></td>
                        <td><?=overall_accuracy_report($project_view->project_id)?></td>

                    </tr>
      </table>
      <br>
      <br><hr>
        <div style="text-align: justify;"><p>Copyright © 2022 All rights reserved. Data Entry Software by CORE BUILDER.</p><a href="https://www.thecorebuilder.com/">www.thecorebuilder.com <a href="https://www.thecorebuilder.com/t-c-privacy-policy" style="font-size: 10px;">Read T&C</a></a></div>
      <br>
    </div>
  </body>
</html>