<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Online Store Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Onlinestores extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		
		$this -> load -> model('backend/onlinestores_model');
	}

	public function index() {
		$data['stores'] = $this -> onlinestores_model -> GetAll();
		$this -> load -> view('backend/onlinestores/list_view', $data);
	}

	
	function add() {
		$this -> form_validation -> set_rules('name', 'Store Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('url', 'URL', 'trim|xss_clean');
		
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/onlinestores/add_view');
		} else// passed validation proceed to post success logic
		{
				$form_data = array('name' => set_value('name'), 'url' => set_value('url'));
				if ($this -> onlinestores_model -> SaveStore($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/onlinestore/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'n error occurred saving your information. Please try again later');
					redirect('admin/onlinestore/add');

				}
		
		}
	
	}

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Store Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('url', 'URL', 'trim|xss_clean');
		
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['stores'] = $this -> onlinestores_model -> GetOne($id);
			$this -> load -> view('backend/onlinestores/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model
			
					$form_data = array('name' => set_value('name'), 'url' => set_value('url'));
					if ($this -> onlinestores_model -> UpdateStore($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/onlinestore/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'Nothing Changed');
						redirect('admin/onlinestore/edit/' . $id);

					}
		}
	}

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {
			redirect('admin/stores/');
		} else {
			$this -> db -> delete('onlinestores', array('id' => $id));
			if ($filename != null) {
				$full_path = 'uploads/' . $filename;
				echo $full_path;
				unlink($full_path);
			}

			$this -> ci_alerts -> set('success', 'Store deleted successfully');
			redirect('admin/onlinestores/');
		}

	}

}
/* End of file onlinestores.php */