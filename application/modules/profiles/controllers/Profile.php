<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

	public function index() {
		$data['page_title'] = "Research Proposals";
		$data['content_view'] = "research/index";

		$this->template->index($data);
	}

	public function create_research_proposal() {
		$data['page_title'] = "Submit Research Proposal";
		$data['content_view'] = "research/create_research_proposal";

		$this->template->index($data);
	}

	public function in_house() {
		$data['page_title'] = "College Research Proposal Endorsement";
		$data['content_view'] = "research/in_house";
		$data['college'] = "College Name";

		$this->template->index($data);
	}

	public function approve_research_proposal() {
		$data['page_title'] = "Approve Reseach Proposal";
		$data['content_view'] = "research/approve_research_proposal";

		$this->template->index($data);
	}

	public function internally_funded_research() {
		$data['page_title'] = "Internally-Funded Research Proposal Endorsement";
		$data['content_view'] = "research/internally_funded_research";

		$this->template->index($data);
	}

	public function coordinators_list() {
		$data['page_title'] = "List of Coordinators";
		$data['content_view'] = "research/coordinators_list";

		$this->template->index($data);
	}

	public function activities() {
		$data['page_title'] = "Activities";
		$data['content_view'] = "research/activities";

		$this->template->index($data);
	}

	public function process_flow() {
		$data['page_title'] = "Process Flow";
		$data['content_view'] = "research/process_flow";

		$this->template->index($data);
	}

	public function report() {
		$data['page_title'] = "Report";
		$data['content_view'] = "research/report";

		$this->template->index($data);
	}
}