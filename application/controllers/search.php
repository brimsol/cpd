<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Search Class 
 * @package Glenna Jean
 * @subpackage Front End 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Search extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('backend/search_model');
		
	}

	public function index() {

		$this -> form_validation -> set_rules('key', 'Keyword', 'required|trim|xss_clean|max_length[100]');
		
		if ($this -> form_validation -> run() == FALSE)
		{
			$this -> load -> view('search_view');
			
		} else
		{
			    $key=$this->input->post('key');
				$data['collection_result'] = $this -> search_model -> search_collection($key);
				$data['products_result'] = $this -> search_model -> search_products($key);
				$data['keyword'] = $key;
				$this -> load -> view('search_view', $data);
		}

	}

}
/* End of file search.php */