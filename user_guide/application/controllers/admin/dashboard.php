<?php 

class Dashboard Extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('user');
		$this->user->isloggedin();

	}

}

?>