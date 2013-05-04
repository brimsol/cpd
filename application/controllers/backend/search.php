<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Search Class 
 * @package Glenna Jean 
 * @subpackage Backend 
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
				$this -> load -> view('backend/search/search_view');
			
		} else
		{
			    
			    $key=$this->input->post('key');
				$cat=$this->input->post('cat');
				$data['search_result'] = $this -> search_model -> search($cat,$key);
				$data['key'] = $key;
				$data['cat']= $cat;
				$this -> load -> view('backend/search/search_view', $data);
				
		}

	}

}
/* End of file search.php */