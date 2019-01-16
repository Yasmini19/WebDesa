<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPenduduk extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		// $this->load->model('DataPenduduk_model');
		// $data['data_list'] = $this->DataPenduduk_model->getDataPenduduk();
		$this->load->view('admin/DataPenduduk');
	}
}