<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');		
	}

	public function index()
	{
		$this->load->model('home_model');
		$data["employee_data"] = $this->home_model->getEmployeeData();

		$this->load-> view('template/header');
		$this->load-> view('template/sidebar');
		$this->load-> view('employee_data', $data);
		$this->load-> view('template/footer');
	}

	public function add_employee_data()
	{
		$this->load->model('home_model');
		$data["employee_data"] = $this->home_model->getEmployeeData();

		$this->load-> view('template/header');
		$this->load-> view('template/sidebar');
		$this->load-> view('add_employee_data', $data);
		$this->load-> view('template/footer');
	}

	public function addnewemployee()
	{
		$employee_id = $this->input->post('employee_id');
		$employee_name = $this->input->post('employee_name');
		$email = $this->input->post('email');
		$job_title = $this->input->post('job_title');
		$department = $this->input->post('department');
		
		$data = Array(
			"employee_id" => $employee_id,
			"employee_name" => $employee_name,
			"email" => $email,
			"job_title" => $job_title,
			"department" => $department,														
		);

		$this->form_validation->set_rules('employee_name', 'Employee Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('job_title', 'Job Title', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('add_employee_data',$data);
			$this->load->view('templates/footer');
			
		} else {
			$this->load->model('home_model');
			$this->home_model->addEmployeeData($data);
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data added successfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Home');
		}
	}

	public function deleteEmployeeData($id)
	{		
		$id = $this->home_model->hapus($id);
        $this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Data Deleted Succesfully!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('Home');
	}

	public function ubah($id)
	{		
		$this->load->model('home_model');
		$data["employee_data"] = $this->home_model->edit($id);

		$this->form_validation->set_rules('employee_id', 'Employee ID', 'required');
		$this->form_validation->set_rules('employee_name', 'Employee Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('job_title', 'Job Title', 'required');
		$this->form_validation->set_rules('department', 'Department', 'required');		

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('template/header');
			$this->load->view('template/sidebar');
			$this->load->view('ubah_data_employee',$data);
			$this->load->view('template/footer');
			
		} else {
			$this->home_model->editDataEmployee();
			$this->session->set_flashdata('flash', '<div class="alert alert-success" role="alert">Edit data success!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			return redirect('Home');
		}
	}

}
