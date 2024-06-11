<?php
use CodeIgniter\Model;

class home_model extends Ci_Model
{
	public function getEmployeeData()
	{
		return $this->db->get('employee_data')->result_array();
	}

    public function addEmployeeData($item)
	{
		return $this->db->insert('employee_data', $item);
	}

    public function hapus($id)
	{
        $this->db->where('id', $id);
	  	$this->db->delete("employee_data");	  	
	}

    public function edit($id)
	{
		return $this->db->get_where('employee_data', ['id' => $id])->row_array();
	}

	public function editDataEmployee()
	{
		$employee_data = [
			"employee_id" => $this->input->post('employee_id', true),
			"employee_name" => $this->input->post('employee_name', true),
			"email" => $this->input->post('email', true),
			"job_title" => $this->input->post('job_title', true),
			"department" => $this->input->post('department', true),				
		];
			$this->db->where('id', $this->input->post('id'));
       		$this->db->update('employee_data', $employee_data);
	}

	public function update($data,$id)
    {
        $this->db->where('id', $id);
        $this->db->update('employee_data',$data);
        $this->db->affected_rows();
    }
}
