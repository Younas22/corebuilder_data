<?php defined('BASEPATH') OR exit('No direct script access allowed');

// $config = array(
//      'protocol' => 'sendmail',
//     'smtp_host' => 'smtp.tecyoun.com', 
//     'smtp_port' => 465,
//     'smtp_user' => 'contact@tecyoun.com',
//     'smtp_pass' => '****',
//     'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
//     'mailtype' => 'text', //plaintext 'text' mails or 'html'
//     'smtp_timeout' => '4', //in seconds
//     'charset' => 'iso-8859-1',
//     'wordwrap' => TRUE
// );



        $config = array();
        $config['useragent']           = "CodeIgniter";
        $config['mailpath']            = "/usr/bin/sendmail"; // or "/usr/sbin/sendmail"
        $config['protocol']            = "mail";
        $config['smtp_host']           = "localhost";
        $config['smtp_port']           = "25";
        $config['mailtype'] = 'html';
        $config['charset']  = 'utf-8';
        $config['priority']  = '1';
        $config['newline']  = "\r\n";
        $config['wordwrap'] = TRUE;
