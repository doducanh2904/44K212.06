<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thu_thu_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('Thu_Thu');
	}

}

/* End of file Thu_thu_controller.php */
/* Location: ./application/controllers/Thu_thu_controller.php */