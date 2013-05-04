<?php
/**
 * Slider_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Slider_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function save_slides($form_data) {

		$this -> db -> insert('slider', $form_data);

		if ($this -> db -> affected_rows() == '1') {

			return TRUE;

		}

		return FALSE;
	}

	function UpdateSlides($id,$form_data) {
			
		$this -> db ->where('id',$id);
		$this -> db -> update('slider', $form_data);

		if ($this -> db -> affected_rows() == '1') {

			return TRUE;

		}

		return FALSE;
	}

	function GetHomeSlider() {

		return $this -> db -> where('category', 'hm') -> limit(4) -> get('slider') -> result();

	}

	function GetAll() {

		return $this -> db -> get('slider') -> result();

	}

	function GetOne($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('slider') -> result();
		;

	}

}
/* End of file slider_model.php */ 