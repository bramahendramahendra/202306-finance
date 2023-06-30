<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PembayaranTagihan extends CI_Controller {

	public function index()
	{
		$this->templates_l->load('tagihan/pembayaranTagihan_v');
	}
}
