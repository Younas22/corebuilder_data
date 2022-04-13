<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'error';

 
/*account url*/
$route['company-login'] = 'account/Account';
$route['user-login'] = 'account/Account/user_login';
$route['doLogin'] = 'account/Account/doLogin';
$route['already_login'] = 'account/Account/already_login';
$route['logout/(:any)'] = 'account/Account/logout/$1';
$route['signup'] = 'account/Account/signup';
$route['do-register'] = 'account/Account/do_register';




/*******************admin routes*******************/
$route['admin/dashboard'] = 'admin/Admin_dashboard';
$route['admin/export'] = 'admin/Admin_dashboard/export';
$route['admin/profile'] = 'admin/Admin_dashboard/profile';
$route['admin/update/profile'] = 'admin/Admin_dashboard/update_profile';
$route['admin/add-project-images'] = 'admin/Admin_dashboard/add_project_images';
	$route['admin/upload_project_images'] = 'admin/Admin_dashboard/upload_project_images';
$route['admin/project-images'] = 'admin/Admin_dashboard/project_images';
$route['admin/project-images/del/(:num)'] = 'admin/Admin_dashboard/project_images_del/$1';
$route['images/folder/(:num)/(:num)'] = 'admin/Admin_dashboard/images_folder/$1/$2';
$route['images/folder/(:num)/(:num)'] = 'admin/Admin_dashboard/images_folder/$1/$2';
$route['admin/readfile'] = 'admin/Admin_dashboard/readfile';
$route['help'] = 'admin/Admin_dashboard/help';
$route['admin/all-users'] = 'admin/Admin_dashboard/all_users';
$route['admin/all-agencies'] = 'admin/Admin_dashboard/all_agencies';
	$route['admin/downloaded-users/(:num)'] = 'admin/Admin_dashboard/downloaded_users/$1';
	$route['admin/new-users/(:num)'] = 'admin/Admin_dashboard/new_users/$1';
	$route['admin/agency/(:num)'] = 'admin/Admin_dashboard/agency/$1';

$route['admin/agency/all-users/(:num)'] = 'admin/Admin_dashboard/agency_all_users/$1';
$route['admin/agency/downloaded-users/(:num)/(:num)'] = 'admin/Admin_dashboard/agency_downloaded_users/$1/$2';
$route['admin/agency/new-users/(:num)/(:num)'] = 'admin/Admin_dashboard/agency_new_users/$1/$2';
$route['admin/agency/active-document/(:num)'] = 'admin/Admin_dashboard/active_document/$1';

$route['admin/downloaded_user_xlsx'] = 'admin/Downloaded_user/index';
$route['admin/export-data'] = 'admin/Downloaded_user/export_data';

$route['admin/auto-users'] = 'admin/Admin_auto_user/index';
$route['admin/auto-user-delete/(:num)'] = 'admin/Admin_auto_user/user_delete/$1';
$route['admin/auto-user-status/(:num)/(:num)'] ='admin/Admin_auto_user/user_status/$1/$2';
$route['admin/auto_p'] ='admin/Admin_auto_user/auto_p';
$route['admin/auto_p_type'] ='admin/Admin_auto_user/auto_p_type';

// $route['emails'] = 'admin/Dashboard/emails';
// $route['status'] = 'admin/Dashboard/status';
// $route['delete/(:num)'] = 'admin/Dashboard/delete/$1';
// $route['emails/delete/(:num)'] = 'admin/Dashboard/emailsdelete/$1';
// $route['view/(:num)'] = 'admin/Dashboard/view/$1';



/*company routes*/
$route['company/dashboard'] = 'company/Company_dashboard';
$route['company/profile'] = 'company/Company_dashboard/profile';
$route['company/update/profile'] = 'company/Company_dashboard/update_profile';
$route['company/add-user'] = 'company/Company_dashboard/add_user';
$route['company/submit_user'] = 'company/Company_dashboard/submit_user';
$route['company/add-project/(:num)'] = 'company/Company_dashboard/add_project/$1';
$route['company/submit_project'] = 'company/Company_dashboard/submit_project';
$route['company/add-projects-img'] = 'company/Company_dashboard/add_projects_img';
$route['company/add-project-img/(:num)/(:num)/(:num)'] = 'company/Company_dashboard/add_project_img/$1/$2/$3';
$route['company/submit_project_img'] = 'company/Company_dashboard/submit_project_img';
	$route['company/get_project_terms'] = 'company/Company_dashboard/get_project_terms';
$route['company/all-users'] = 'company/Company_dashboard/all_users';
$route['company/user-view/(:num)'] = 'company/Company_dashboard/user_view/$1';
$route['company/update/user_profile'] = 'company/Company_dashboard/update_user_profile';
$route['company/user-delete/(:num)'] = 'company/Company_dashboard/user_delete/$1';

$route['company/user-projects/(:num)']='company/Company_dashboard/user_projects/$1';
$route['company/project-view/(:num)'] ='company/Company_dashboard/project_view/$1';
$route['company/project-edit/(:num)'] ='company/Company_dashboard/project_edit/$1';
$route['company/project_update'] ='company/Company_dashboard/update_projects';
$route['company/projects-detiles/(:any)'] ='company/Company_dashboard/projects_detiles/$1';
$route['company/user-status/(:num)/(:num)'] ='company/Company_dashboard/user_status/$1/$2';
$route['company/images-custom/(:num)/(:num)'] ='company/Company_dashboard/images_custom/$1/$2';
$route['company/update_font'] ='company/Company_dashboard/update_font';
$route['company/update_invoice_type'] ='company/Company_dashboard/update_invoice_type';
$route['company/mail_view'] ='company/Company_dashboard/mail_view';

$route['company/withdrawal'] ='company/Company_dashboard/withdrawal';
$route['company/withdrawal-status/(:num)'] ='company/Company_dashboard/withdrawal_status/$1';
$route['company/create-custom-project/(:num)'] ='company/Company_dashboard/create_custom_project/$1';
$route['company/project/accuracy'] ='company/Company_dashboard/project_accuracy';
$route['company/qc-report'] ='company/Company_dashboard/qc_report';
$route['company/sms-panel'] ='company/Company_dashboard/sms_panel';
$route['company/email-server'] ='company/Company_dashboard/email_server';
$route['company/whatsApp-server'] ='company/Company_dashboard/whatsApp_server';
$route['company/video-training'] ='company/Company_dashboard/video_training';
$route['company/get-in-touch'] ='company/Company_dashboard/get_in_touch';
$route['company/feedback'] ='company/Company_dashboard/feedback';
$route['company/unlock-projects'] ='company/Company_dashboard/unlock_projects';
$route['company/develop-projects'] ='company/Company_dashboard/develop_projects';
$route['company/add_custom_project'] ='company/Company_dashboard/add_custom_project';
$route['company/set_results_per_page'] ='company/Company_dashboard/set_results_per_page';
$route['company/email-configuration'] ='company/Company_dashboard/email_configuration';
$route['company/submit_email_configuration'] ='company/Company_dashboard/submit_email_configuration';
$route['company/View_QCReport'] ='company/Company_dashboard/View_QCReport';

//qc_view
$route['company/qc-report-view/(:any)/(:num)'] ='company/Company_dashboard/qc_view/$1/$2';
$route['company/qc-report-download/(:any)/(:num)'] ='company/Company_dashboard/qc_download/$1/$2';
$route['company/qc-report-send/(:any)/(:num)'] ='company/Company_dashboard/qc_send/$1/$2';
$route['company/qc-report-approve/(:num)'] ='company/Company_dashboard/qc_approve/$1';
$route['company/document-approval/(:num)/(:num)'] ='company/Company_dashboard/document_approval/$1/$2';
$route['company/user-documents'] ='company/Company_dashboard/user_documents';

$route['company-page/(:any)/(:any)/(:num)/(:num)'] ='company/Company_dashboard/company_filling_project/$1/$2/$3/$4';

// $route['how-to-compress-image'] ='company/Company_dashboard/how_to_compress_image';


//company_filling_user
$route['company/(:any)/users/(:num)'] ='company/Company_dashboard/company_filling_user/$1/$2';
//end company_filling_user

// //company_filling_project
// $route['company/(:any)/(:any)/(:num)'] ='company/Company_dashboard/company_filling_project/$1/$2/$3';
// //end company_filling_project

 
/*User routes*/
$route['user/dashboard'] = 'user/User_dashboard';
$route['user/profile'] = 'user/User_dashboard/profile';
$route['user/end_project'] = 'user/User_dashboard/end_project';
$route['user/update/profile'] = 'user/User_dashboard/update_profile';
$route['user/user-project-details/(:any)/(:num)'] = 'user/User_dashboard/user_project_details/$1/$2';
$route['user/accep-terms'] = 'user/User_dashboard/accep_terms';
$route['user/accep-terms_'] = 'user/User_dashboard/accep_terms_';
$route['user/user-projects/(:num)']='user/User_dashboard/user_projects/$1';
$route['user/get_skip/(:num)']='user/User_dashboard/get_skip/$1';
$route['user/get_skip_/(:num)/(:num)']='user/User_dashboard/get_skip_/$1/$2';


/*Typing_projects*/
$route['user/start-project/(:any)/(:num)/(:num)'] = 'user/Typing_projects/start_p_content_writing/$1/$2/$3';
$route['user/submit_content_writing'] = 'user/Typing_projects/submit_content_writing';

/*end Typing_projects*/



/*form_filling*/
$route['user/start-filling-project/(:any)/(:num)/(:num)'] = 'user/Filling_projects/start_p_filling/$1/$2/$3';
$route['user/submit_number_filling'] = 'user/Filling_projects/submit_number_filling';
$route['user/submit_form_filling'] = 'user/Filling_projects/submit_form_filling';
$route['user/submit_invoice_filling'] = 'user/Filling_projects/submit_invoice_filling';
$route['user/submit_captcha_filling'] = 'user/Filling_projects/submit_captcha_filling';
$route['user/project_end/(:num)'] = 'user/Filling_projects/project_end/$1';
/*end form_filling*/


/*captcha*/
$route['user/start-project/captcha/(:num)/(:num)']= 'user/User_dashboard/start_p_captcha/$1/$2';
$route['user/withdraw-request/(:num)/(:num)']= 'user/User_dashboard/withdraw_request/$1/$2';
$route['user/withdraw/(:num)']= 'user/User_dashboard/all_withdraw/$1';
$route['user/submit_withdraw_request']= 'user/User_dashboard/submit_withdraw_request';
/*end captcha*/





//api for autotyper
$route['api/doLogin']= 'api/Auto_account_api/doLogin';
$route['api/doRegister']= 'api/Auto_account_api/do_register';
$route['api/get-all-project']= 'api/Auto_project_api/get_all_project';
$route['api/get-project']= 'api/Auto_project_api/get_project';
$route['api/get-report']= 'api/Auto_project_api/get_report';
$route['api/configure-project/(:num)']= 'api/Auto_project_api/configure_project/$1';
$route['api/submit_auto_project']= 'api/Auto_project_api/submit_auto_project';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;