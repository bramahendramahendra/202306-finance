<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		// data view components 
		$dataView = array();
		$dataView["titleWebsite"] = "Dashboard";
		$dataView["titlePage"] = "Dashboard";
		$this->templates_l->load('dashboard_v', $dataView);
	}
}
