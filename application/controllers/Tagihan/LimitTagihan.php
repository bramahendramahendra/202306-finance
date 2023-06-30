<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LimitTagihan extends CI_Controller {

	public function index()
	{
		// data view components 
		$dataView = array();
		$dataView["titleWebsite"] = "Limit Tagihan";
		$dataView["titlePage"] = "Limit Tagihan";
		$this->templates_l->load('tagihan/limitTagihan_v', $dataView);
	}
}
