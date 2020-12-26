<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index() {
		$data['page_title'] = "Dashboard";
		$data['content_view'] = "dashboard/index";

		$this->template->index($data);
	}
}