<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarTagihan extends CI_Controller {

	public function index()
	{
		$this->templates_l->load('tagihan/daftarTagihan_v');
	}
}
