<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Home Class 
 * @package Glenna Jean
 * @subpackage Front End 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//$this -> load -> library('session');
		
	}

	public function index() {

		$this -> load -> view('home_view');

	}

	public function about() {

		
		$data['page'] = $this -> pages_model -> GetOne(2) -> row();
		$this -> load -> view('about_view', $data);

	}

	public function contact() {

		$data['page'] = $this -> pages_model -> GetOne(3) -> row();
		$this -> load -> view('contact_view', $data);

	}

}
/* End of file home.php */