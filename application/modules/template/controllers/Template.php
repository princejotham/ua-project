<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index($data = NULL) {
		$this->load->view('admin_template', $data);
	}
}