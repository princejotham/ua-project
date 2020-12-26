<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Research extends MY_Controller
{
    public function __construct()
    {
      parent::__construct();
			$this->load->model('research_model','research');
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

	public function research_project() {
		$data['page_title'] = "Project Profile";
		$data['content_view'] = "research/research_project";

		$this->template->index($data);
	}

	public function create_coordinator() {
		$data['page_title'] = "Create New Coordinator";
		$data['content_view'] = "research/create_coordinator";

		$this->template->index($data);
	}

	public function create_activity() {
		$data['page_title'] = "Create New Activity";
		$data['content_view'] = "research/create_activity";

		$this->template->index($data);
	}

	public function research_create()
	{
		$this->_validate();
		
		$research_data = array(
			'title' => $this->input->post('title'),
			'affiliation' => $this->input->post('college_affiliation'),
			'background_study' => $this->input->post('background_study'),
			'significant_study' => $this->input->post('significant'),
			'definition_terms' => $this->input->post('definition_terms'),
			'methodology' => $this->input->post('methodology'),
			'work_plan' => $this->input->post('work_plan'),
			'credentials' => $this->input->post('credentials'),
			'research_references' => $this->input->post('references')
		);

		$proponent_data = array(
			'name' => $this->input->post('proponent')
		);

		$budget_data = array(
			'description' => $this->input->post('budgetitem'),
			'amount' => $this->input->post('budgetamount')
		);

		$insert = $this->research->save($research_data);

		echo json_encode(array("status" => TRUE));
	}

	public function research_update()
	{
		$this->_validate();
		$data = array(
				'firstName' => $this->input->post('firstName'),
				'lastName' => $this->input->post('lastName'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address'),
				'dob' => $this->input->post('dob'),
			);
		$this->research->update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function research_delete($id)
	{
		$this->research->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;

		if($this->input->post('title') == '')
		{
			$data['inputerror'][] = 'title_error';
			$data['error_string'][] = 'Title is required';
			$data['status'] = FALSE;
		}

		if(!empty($this->input->post('proponent'))){
			foreach ($this->input->post('proponent') as $key => $value) {
				// $this->db->insert('tagslist',$value);
				if($value == '') {
					$data['inputerror'][] = 'proponent_error';
					$data['error_string'][] = 'Proponent is required';
					$data['status'] = FALSE;
				}
			}
		}

		if($this->input->post('references') == '')
		{
			$data['inputerror'][] = 'references_error';
			$data['error_string'][] = 'References is required';
			$data['status'] = FALSE;
		}

		if($data['status'] === FALSE)
		{
			echo json_encode($data);
			exit();
		}
	}
}