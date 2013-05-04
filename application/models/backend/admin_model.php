<?php
/**
 * Admin_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Admin_model extends CI_Model {
	function __construct() {

	}

	public function verify_user($username, $password) {
		$q = $this -> db -> where('username', $username) -> where('password', sha1($password)) -> limit(1) -> get('users');

		if ($q -> num_rows > 0) {
			// person has account with us
			return $q;
		}
		return false;
	}

	function changepass() {

		$newpassword = $this -> input -> post('newpassword');
		$username = $this -> input -> post('username');
		$data = array('password' => sha1($newpassword), );
		$this -> db -> update('users', $data);
		$this -> db -> where('username', $username);
	}

	function get() {
		$username = $this -> input -> post('username');
		$this -> db -> where('username', $username);
		return $this -> db -> get('users');
	}

	function addnewuser() {

		$username = $this -> input -> post('username');
		$newpassword = $this -> input -> post('newpassword');
		$usertype = $this -> input -> post('usertype');
		$data = array('username' => $username, 'password' => sha1($newpassword), 'user_type' => $usertype, );
		$this -> db -> insert('users', $data);

	}

	function listuser() {
		$this -> db -> where('user_type', 'M');
		return $this -> db -> get('users');
	}

}
/* End of file admin_model.php */ 