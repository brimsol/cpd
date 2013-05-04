<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Collections Class
 * @package Glenna Jean
 * @subpackage Backend
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Swatches extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		$this -> load -> model('backend/collections_model');
		$this -> load -> model('backend/swatches_model');
	}

	public function index() {

		$config = array();
		$config["base_url"] = site_url('admin/swatches/');
		$config["total_rows"] = $this -> db -> count_all('swatches');
		$config["per_page"] = 20;
		$config["uri_segment"] = 3;
		$config['num_links'] = 9;
		$this -> pagination -> initialize($config);
		$page = ($this -> uri -> segment(3)) ? $this -> uri -> segment(3) : 0;
		$data['swatches'] = $this -> swatches_model -> GetAll($config["per_page"], $page);
		$data['links'] = $this -> pagination -> create_links();
		$data['collections'] = $this -> collections_model -> get_all_collection_names();
		$this -> load -> view('backend/swatches/list_view', $data);
	}

	public function in_collection($id) {

		$data['swatches'] = $this -> swatches_model -> GetAllInACollection($id);
		$this -> load -> view('backend/swatches/list_view', $data);
	}

	public function view($id) {

		$data['products'] = $this -> swatches_model -> GetOne($id);
		$this -> load -> view('backend/swatches/detail_view', $data);

	}
	
	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['products'] = $this -> swatches_model -> GetAllInACollection($filter);
		$this -> load -> view('backend/swatches/list_ajax_view', $data);

	}

	function add() {
		$this -> form_validation -> set_rules('name', 'swatche Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[900]');
		$this -> form_validation -> set_rules('category', 'Collection', 'required|trim|xss_clean');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['collections'] = $this -> collections_model -> get_all_collection_names();
			$this -> load -> view('backend/swatches/add_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model
			$config['upload_path'] = './uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '500';
			$config['encrypt_name'] = TRUE;
			$this -> load -> library('upload', $config);

			if ($this -> upload -> do_upload()) {
				$data = $this -> upload -> data();
				$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'image' => $data['file_name'], 'category' => set_value('category'));
				if ($this -> swatches_model -> SaveSwatche($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/swatche/add');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/swatche/add');

				}
			} else {
				//Failed to upload file.
				$data['upload_error'] = $this -> upload -> display_errors();
				$data['collections'] = $this -> collections_model -> get_all_collection_names();
				$this -> load -> view('backend/swatches/add_view', $data);
			}

		}
	}

	function edit($id) {
		$this -> form_validation -> set_rules('name', 'swatche Name', 'required|trim|xss_clean|max_length[100]');
		$this -> form_validation -> set_rules('description', 'Description', 'required|trim|xss_clean|max_length[900]');
		$this -> form_validation -> set_rules('category', 'Collection', 'required|trim|xss_clean');

		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$data['swatches'] = $this -> swatches_model -> GetOne($id);
			$data['collections'] = $this -> collections_model -> get_all_collection_names();
			$this -> load -> view('backend/swatches/edit_view', $data);
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
					$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'image' => $data['file_name'], 'category' => set_value('category'));
					if ($this -> swatches_model -> UpdateSwatche($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
					{
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/swatche/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/swatche/edit/' . $id);

					}
				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['swatches'] = $this -> swatches_model -> GetOne($id);
					$data['collections'] = $this -> collections_model -> get_all_collection_names();
					$this -> load -> view('backend/swatches/edit_view', $data);
				}
			} else {

				$form_data = array('name' => set_value('name'), 'description' => set_value('description'), 'category' => set_value('category'));

				if ($this -> swatches_model -> UpdateSwatche($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/swatche/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to Update');
					redirect('admin/swatche/edit/' . $id);

				}

			}
		}
	}

	function delete($id = null, $filename = null) {

		if ($id == '' || $id == null) {

			redirect('admin/products/');

		} elseif ($filename != null) {
			$this -> db -> delete('swatches', array('id' => $id));
			$full_path = './uploads/' . $filename;
			//echo $full_path;
			if (file_exists($full_path)) {
				if (unlink($full_path)) {

					$this -> ci_alerts -> set('success', 'Swatch deleted successfully');
					redirect('admin/swatches/');

				} else {

					$this -> ci_alerts -> set('success', 'Swatch delected from database,but image files are not removed');
					redirect('admin/swatches/');
				}
			} else {

				$this -> ci_alerts -> set('success', 'Swatch deleted successfully,files already deleted');
				redirect('admin/swatches/');
			}
		}

	}

}

/* End of file swatches.php */
