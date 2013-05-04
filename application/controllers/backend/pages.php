<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Pages Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Pages extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		$this -> load -> model('backend/pages_model');
	}

	public function index() {
		$data['pages'] = $this -> pages_model -> GetAllTitles();
		$this -> load -> view('backend/pages/list_view', $data);
	}

	/*
	 public function get_page_content($id = null) {

	 if ($id != null) {
	 $page = $this -> pages_model -> GetOne($id);

	 //$this -> load -> view('backend/pages/list_view', $data);
	 } else {
	 echo "Page Not Found";
	 }

	 }

	 public function get_page_title($id = null) {

	 if ($id != null) {
	 $page = $this -> pages_model -> GetOne($id);

	 //$this -> load -> view('backend/pages/list_view', $data);
	 } else {
	 echo "Page Not Found";
	 }

	 }*/

	function add() {
		$this -> form_validation -> set_rules('title', 'Title', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('body', 'Body', 'xss_clean|trim');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/pages/add_view');
		} else// passed validation proceed to post success logic
		{
			$form_data = array('title' => set_value('title'), 'body' => $this -> input -> post('body'));
			if ($this -> pages_model -> SavePage($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/page/add');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('error', 'An error occurred saving your information. Please try again later');
				redirect('admin/page/add');
			}
		}
	}

	function edit($id) {
		$this -> form_validation -> set_rules('title', 'Title', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('body', 'Body', 'xss_clean|trim');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['pages'] = $this -> pages_model -> GetOne($id);
			$this -> load -> view('backend/pages/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			$form_data = array('title' => set_value('title'), 'body' => $this -> input -> post('body'));
			if ($this -> pages_model -> UpdatePage($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/page/edit/' . $id);
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'Nothing Changed');
				redirect('admin/page/edit/' . $id);
			}
		}
	}

	function delete($id = null) {

		if ($id == '' || $id == null) {
			redirect('admin/slider/');
		} else {
			$this -> db -> delete('pages', array('id' => $id));
			$this -> ci_alerts -> set('success', 'Page deleted successfully');
			redirect('admin/pages/');
		}

	}

}
/* End of file pages.php */