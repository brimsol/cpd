<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * categories Class
 * @package Glenna Jean
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
Class Categories extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}

		$this -> load -> model('backend/categories_model');
	}

	//List all collection on backend
	public function index() {
		$data['categories'] = $this -> categories_model -> get_all();
		$this -> load -> view('backend/categories/list_view', $data);
	}

	//add new categories,get from view add to db

	function add() {
		$this -> form_validation -> set_rules('name', 'Category Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[200]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/add_view');

		} else// passed validation proceed to post success logic
		{
			$form_data = array('name' => set_value('name'), 'description' => set_value('description'));
			if ($this -> categories_model -> save($form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/categories/add');
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'An error occurred saving your data. Please try again later');
				redirect('admin/categories/add');

			}
		}
	}

	//I like to order the food items in this way

	function sorting() {
		//I know N+1 Problem is here let me solve it in future.
		$this -> categories_model -> sort_order_update();

	}

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Category Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[200]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['categories'] = $this -> categories_model -> get_one($id);
			$this -> load -> view('backend/categories/edit_view', $data);
		} else
		{

			$form_data = array('name' => $this -> input -> post('name'), 'description' => $this -> input -> post('description'));
			if ($this -> categories_model -> update($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
			{
				$this -> ci_alerts -> set('success', 'Saved Successfully');
				redirect('admin/categories/edit/' . $id);
				// or whatever logic needs to occur
			} else {
				$this -> ci_alerts -> set('success', 'Nothing Changed');
				redirect('admin/categories/edit/' . $id);

			}

		}
	}

	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['categories'] = $this -> categories_model -> GetAll($filter);
		$this -> load -> view('backend/categories/list_ajax_view', $data);

	}

	//oops,deleted from db and unlink the related image

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/categories/');

		} elseif ($filename != null) {
			$this -> db -> delete('categories', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Category deleted successfully');
					redirect('admin/categories/');

				} else {

					$this -> ci_alerts -> set('success', 'Category delected from database,but image files are not removed');
					redirect('admin/categories/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Category deleted successfully');
				redirect('admin/categories/');
			}
		}

	}

}

/* End of file categories.php */
