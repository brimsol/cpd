<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Admin Class 
 * @package Glenna Jean 
 * @subpackage Backend 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> library('session');
		$this -> load -> model('backend/admin_model');
	}
//Verify username and pass then redirect accordingly
	public function index() {
		if ($this -> session -> userdata('username') != '') {
			redirect(site_url('dashboard'));
		} 

		$this -> load -> library('form_validation');
		$this -> form_validation -> set_rules('username', 'Username', 'required');
		$this -> form_validation -> set_rules('password', 'Password', 'required|min_length[4]|trim');

		if ($this -> form_validation -> run() !== false) {
			// then validation passed. Get from db
			$res = $this -> admin_model -> verify_user($this -> input -> post('username'),$this -> input -> post('password'));

			if ($res !== false) {
				if ($res-> num_rows() > 0) {
					$row = $res -> row();

					$username = $row -> username;
					$usertype = $row -> user_type;
				}
				$newdata = array('username' => $username, 'usertype' => $usertype);

				$this -> session -> set_userdata($newdata);
				redirect(site_url('dashboard'));
			} else {
				$this -> ci_alerts -> set('error', 'Invalid username or password');
				redirect('admin');
			}

		}

		$this -> load -> view('backend/auth/login_view');
	}

	
	function change_password() {
			$this -> load -> library('form_validation');
	
			$this -> form_validation -> set_rules('oldpassword', 'Current Password', 'required|min_length[4]|xss_clean');
			$this -> form_validation -> set_rules('newpassword', 'New Password', 'required|min_length[4]|xss_clean');
			$this -> form_validation -> set_rules('confirmpassword', 'Confirm Password', 'required|min_length[4]|matches[newpassword]|xss_clean');
			if ($this -> form_validation -> run() == false) {
	
				$this -> load -> view('backend/auth/change_pass_view');
			} else {
				$oldpassword = sha1($this -> input -> post('oldpassword'));
				$q = $this -> admin_model -> get();
				if ($q -> num_rows() > 0) {
					foreach ($q->result() as $row) {
	
						$password = $row -> password;
					}
				}
	
				if ($password == $oldpassword) {
	
					$this -> admin_model -> changepass();
					$this -> ci_alerts -> set('success', 'Password updated successfully');
					redirect('admin/change_password');
				} else {
					echo $password;
					$this -> ci_alerts -> set('error', 'Current password invalid');
					redirect('admin/change_password');
	
				}
	
			}
		}
	

	/*
	function add_user() {
			$this -> load -> library('form_validation');
			$this -> form_validation -> set_rules('username', 'Username', 'required|min_length[4]|is_unique[users.username]');
			$this -> form_validation -> set_rules('newpassword', 'New Password', 'required|min_length[4]');
			$this -> form_validation -> set_rules('confirmpassword', 'Confirm Password', 'required|min_length[4]|matches[newpassword]');
			if ($this -> form_validation -> run() == false) {
	
				$this -> load -> view('auth/add_user');
			} else {
	
				$this -> admin_model -> addnewuser();
				$this -> ci_alerts -> set('success', 'User added successfully');
				redirect('admin/add_user');
	
			}
		}*/
	
//I need to go home bye bye
	public function logout() {
		$this -> session -> unset_userdata('username');
		$this -> session -> unset_userdata('usertype');
		$this -> load -> view('backend/auth/login_view');
	}

}
/* End of file admin.php */