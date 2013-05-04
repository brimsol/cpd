<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Stores Class
 * @package Glenna Jean
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Stores extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		//$this -> load -> library('session');
		$this -> load -> model('backend/stores_model');
	}

	public function index() {

		$config = array();
		$config["base_url"] = site_url('admin/stores/');
		$config["total_rows"] = $this -> db -> count_all('stores');
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['stores'] = $this ->  stores_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$data['states'] = $this -> stores_model -> GetAllStates();
		$this -> load -> view('backend/stores/list_view', $data);

	}

	public function view($id) {

		$data['stores'] = $this -> stores_model -> GetOne($id);
		$this -> load -> view('backend/stores/detail_view', $data);
		//echo $id;

	}

	function add() {
		$this -> form_validation -> set_rules('name', 'Store Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('address', 'Address', 'trim|xss_clean|max_length[300]');
		$this -> form_validation -> set_rules('state', 'State', 'required|trim|xss_clean');
		$this -> form_validation -> set_rules('contact_no', 'Contact Number', 'trim|xss_clean');
		$this -> form_validation -> set_rules('url', 'URL', 'trim|xss_clean');
		$this -> form_validation -> set_rules('latitude', 'category', 'trim|xss_clean');
		$this -> form_validation -> set_rules('longitude', 'category', 'trim|xss_clean');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['states'] = $this -> stores_model -> GetAllStates();
			$this -> load -> view('backend/stores/add_view', $data);
		} else// passed validation proceed to post success logic
		{
			$form_data = array('name' => set_value('name'), 'address' => set_value('address'), 'state' => set_value('state'), 'url' => set_value('url'), 'contact_no' => set_value('contact_no'), 'longitude' => set_value('longitude'), 'latitude' => set_value('latitude'));
			if ($this -> stores_model -> SaveStore($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/store/add');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'n error occurred saving your information. Please try again later');
				redirect('admin/store/add');

			}

		}

	}

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Store Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('address', 'Address', 'trim|xss_clean|max_length[300]');
		$this -> form_validation -> set_rules('state', 'State', 'required|trim|xss_clean');
		$this -> form_validation -> set_rules('contact_no', 'Contact Number', 'trim|xss_clean');
		$this -> form_validation -> set_rules('url', 'URL', 'trim|xss_clean');
		$this -> form_validation -> set_rules('latitude', 'category', 'trim|xss_clean');
		$this -> form_validation -> set_rules('longitude', 'category', 'trim|xss_clean');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['stores'] = $this -> stores_model -> GetOne($id);
			$data['states'] = $this -> stores_model -> GetAllStates();
			$this -> load -> view('backend/stores/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model

			$form_data = array('name' => set_value('name'), 'address' => set_value('address'), 'state' => set_value('state'), 'url' => set_value('url'), 'contact_no' => set_value('contact_no'), 'longitude' => set_value('longitude'), 'latitude' => set_value('latitude'));
			if ($this -> stores_model -> UpdateStore($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/store/edit/' . $id);
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'Nothing Changed');
				redirect('admin/store/edit/' . $id);

			}
		}
	}

	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['stores'] = $this -> stores_model -> GetAllInState($filter);
		$this -> load -> view('backend/stores/list_ajax_view', $data);

	}

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {
			redirect('admin/stores/');
		} else {
			$this -> db -> delete('stores', array('id' => $id));
			if ($filename != null) {
				$full_path = 'uploads/' . $filename;
				echo $full_path;
				unlink($full_path);
			}

			$this -> ci_alerts -> set('success', 'Store deleted successfully');
			redirect('admin/stores/');
		}

	}

}

/* End of file stores.php */
