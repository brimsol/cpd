<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Slider Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Slider extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
		
		$this -> load -> model('backend/slider_model');
	}

	public function index() {

		$data['slides'] = $this -> slider_model -> GetAll();
		$data['slide_count']=$this -> db -> count_all('slider');
		$this -> load -> view('backend/slider/grid_view', $data);
	}

	function add() {
		
		if($this -> db -> count_all('slider')<4){
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			$this -> load -> view('backend/slider/add_view');
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
				$form_data = array('description' => set_value('description'), 'image' => $data['file_name'], 'category' => set_value('category'), 'url' => set_value('url'));
				if ($this -> slider_model -> save_slides($form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/slider');
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
					redirect('admin/slider/add');

				}
			} else {
				//Failed to upload file.
				$data['upload_error'] = $this -> upload -> display_errors();
				$this -> load -> view('backend/slider/add_view', $data);
			}

		}
	  }else{
	    $this -> ci_alerts -> set('success', "You can't add more slides.");
	  	redirect('admin/slider');
	  }
	}

	function edit($id) {
		
		$this -> form_validation -> set_rules('category', 'Category', 'required|trim|xss_clean');
		if ($this -> form_validation -> run() == FALSE)// validation hasn't been passed
		{
			// $data['collections']=$this->collections_model->get_all_collection_names();
			$data['slider'] = $this -> slider_model -> GetOne($id);
			$this -> load -> view('backend/slider/edit_view', $data);
		} else// passed validation proceed to post success logic
		{
			// build array for the model
			$fileUpload = $_FILES['userfile']['name'];
			if (strlen($fileUpload) > 0) {
				$config['upload_path'] = './uploads/';
				$config['allowed_types'] = 'gif|jpg|png';
				$config['max_size'] = '500';
				$config['encrypt_name'] = TRUE;
				$this -> load -> library('upload', $config);

				if ($this -> upload -> do_upload()) {
					$data = $this -> upload -> data();
					$form_data = array('description' => $this -> input -> post('description'), 'image' => $data['file_name'], 'category' => set_value('category'), 'url' => set_value('url'));

					// print_r($form_data) ;

					if ($this -> slider_model -> UpdateSlides($id, $form_data) == TRUE) {
						$this -> ci_alerts -> set('success', 'Saved Successfully');
						redirect('admin/slider/edit/' . $id);
						// or whatever logic needs to occur
					} else {
						$this -> ci_alerts -> set('success', 'An error occurred saving your information. Please try again later');
						redirect('admin/slider/edit/' . $id);

					}

				} else {
					//Failed to upload file.
					$data['upload_error'] = $this -> upload -> display_errors();
					$data['slider'] = $this -> slider_model -> GetOne($id);
					//$data['collections']=$this->collections_model->get_all_collection_names();
					$this -> load -> view('backend/slider/edit_view', $data);
				}

			} else {

				$form_data = array('description' => $this -> input -> post('description'), 'category' => set_value('category'), 'url' => set_value('url'));

				//print_r($form_data);

				if ($this -> slider_model -> UpdateSlides($id, $form_data) == TRUE)// the information has therefore been successfully saved in the db
				{
					$this -> ci_alerts -> set('success', 'Saved Successfully');
					redirect('admin/slider/edit/' . $id);
					// or whatever logic needs to occur
				} else {
					$this -> ci_alerts -> set('success', 'Nothing to change');
					redirect('admin/slider/edit/' . $id);

				}

			}
		}
	}

	function delete($id = null,$filename = null) {
		
		if ($id == '' || $id == null) {
			redirect('admin/slider/');
		} else {
			$this -> db -> delete('slider', array('id' => $id));
			if($filename!=null){
				$full_path='./uploads/'.$filename;
				echo $full_path;
				unlink($full_path);
			}
			
			$this -> ci_alerts -> set('success', 'Slide deleted successfully');
			redirect('admin/slider/');
		}

	}

}
/* End of file slider.php */