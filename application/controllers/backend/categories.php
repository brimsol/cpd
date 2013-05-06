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
		$this -> form_validation -> set_rules('name', 'Collection Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/categories/add_view', $data);

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

	//Edit collection,little tricky no change if there is no new image

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'Product Name', 'required|trim|xss_clean|max_length[200]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[2000]');
		$this -> form_validation -> set_rules('category', 'Collection', 'required|trim|xss_clean');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['categories'] = $this -> categories_model -> GetOne($id);
			$data['categories_list'] = $this -> categories_model -> get_all_collection_names();
			$this -> load -> view('backend/categories/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model
			if (isset($_FILES['userfile']['name'])) {

				$fileUpload = $_FILES['userfile']['name'];

			} else {

				$fileUpload = '';

			}
			if (strlen($fileUpload) > 0) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;
				$this -> load -> library('upload', $config);

				if ($this -> upload -> do_upload()) {
					$data = $this -> upload -> data();
					$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'image' => $data['file_name'], 'category' => set_value('category'), 'new' => $this -> input -> post('new'), 'store' => $this -> input -> post('store'), 'similar' => serialize($this -> input -> post('similar')));
					if ($this -> categories_model -> UpdateCollection($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/collection/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/collection/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['categories'] = $this -> categories_model -> get_all_collection_names();
					$data['categories'] = $this -> categories_model -> GetOne($id);
					//$data['categories'] = $this -> categories_model -> get_all_collection_names();
					$this -> load -> view('backend/categories/edit_view', $data);
				}
			} else {

				$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'category' => set_value('category'), 'new' => $this -> input -> post('new'), 'store' => $this -> input -> post('store'), 'similar' => serialize($this -> input -> post('similar')));

				if ($this -> categories_model -> UpdateCollection($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/collection/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/collection/edit/' . $id);

				}

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
			$tables = array('products', 'swatches');
			$this -> db -> where('category', $id);
			$this -> db -> delete($tables);
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Collection deleted successfully');
					redirect('admin/categories/');

				} else {

					$this -> ci_alerts -> set('success', 'Collection delected from database,but image files are not removed');
					redirect('admin/categories/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Collection deleted successfully');
				redirect('admin/categories/');
			}
		}

	}

}

/* End of file categories.php */
