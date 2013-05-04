<?php
/**
 * Pages_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Pages_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveForm()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */

	function SavePage($form_data) {
		$this -> db -> insert('pages', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdatePage($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('pages', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetAllTitles() {

		return $this -> db -> select('id,title,created_at') -> get('pages');

	}

	function GetAll() {

		return $this -> db -> get('pages');

	}

	function GetOne($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('pages');

	}

}
/* End of file pages_model.php */ 