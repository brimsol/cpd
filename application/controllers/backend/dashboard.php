<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Dashboard Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		if ($this -> session -> userdata('username') == '') {
			redirect('admin');
		}
	}

	public function index() {

		$this -> load -> view('backend/dashboard/dashboard_view');
	}

}
/* End of file dashboard.php */