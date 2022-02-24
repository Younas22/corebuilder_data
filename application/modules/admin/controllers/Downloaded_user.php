<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('./application/third_party/phpoffice/vendor/autoload.php');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Downloaded_user extends MY_Controller {
 

		function __construct()
	{
		parent:: __construct();
		$this->load->model('Admin_dashboard_M','admin_dash');
		if(empty($this->session->userdata('logged_in')))
		{
		return redirect(base_url() . 'signin');
		}
	} 
	

	public function index()
	{
		echo "export_all_new_users";
		exit;

		// $semua_pengguna = $this->admin_dash->export_all_new_users();
		// $spreadsheet = new Spreadsheet;
		// $spreadsheet->setActiveSheetIndex(0)
		// ->setCellValue('A1', 'No')
		// ->setCellValue('B1', 'first name')
		// ->setCellValue('C1', 'company email')
		// ->setCellValue('D1', 'phone')
		// ->setCellValue('E1', 'status');

		// $kolom = 2;
		// $nomor = 1;
		// foreach($semua_pengguna as $pengguna) {
		// 	$spreadsheet->setActiveSheetIndex(0)
		// 	->setCellValue('A' . $kolom, $nomor)
		// 	->setCellValue('B' . $kolom, $pengguna->first_name)
		// 	->setCellValue('C' . $kolom, $pengguna->company_email)
		// 	->setCellValue('D' . $kolom, $pengguna->user_phone)
		// 	->setCellValue('E' . $kolom, $pengguna->user_status);
		// 	$kolom++;
		// 	$nomor++;
		// }

		// $writer = new Xlsx($spreadsheet);
		// header('Content-Type: application/vnd.ms-excel');
		// header('Content-Disposition: attachment;filename="Latihan.xlsx"');
		// header('Cache-Control: max-age=0');
		// $writer->save('php://output');

	}

	public function export_data()
	{

		$export_data = $this->admin_dash->export_all_new_users();
		$spreadsheet = new Spreadsheet;
		$spreadsheet->setActiveSheetIndex(0)
		->setCellValue('A1', 'No')
		->setCellValue('B1', 'Name')
		->setCellValue('C1', 'Email')
		->setCellValue('D1', 'Phone')
		->setCellValue('E1', 'Project')
		->setCellValue('F1', 'Type');

		$kolom = 2;
		$nomor = 1;
		foreach($export_data as $export) {
			if (progress_bar($export->progress_bar_id) >= 30.00){
			$spreadsheet->setActiveSheetIndex(0)
			->setCellValue('A' . $kolom, $nomor)
			->setCellValue('B' . $kolom, $export->first_name)
			->setCellValue('C' . $kolom, $export->company_email)
			->setCellValue('D' . $kolom, $export->user_phone)
			->setCellValue('E' . $kolom, $export->projects_title)
			->setCellValue('F' . $kolom, $export->p_type);
			$kolom++;
			$nomor++;
		}
	}

		$writer = new Xlsx($spreadsheet);
		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="NewUsers.xlsx"');
		header('Cache-Control: max-age=0');
		$writer->save('php://output');

		foreach($export_data as $export) {
			if (progress_bar($export->progress_bar_id) >= 30.00){
			$this->db->where('id',$export->progress_bar_id)->update('u_projects',array('downloaded_status'=>1));
		}}

	}

}