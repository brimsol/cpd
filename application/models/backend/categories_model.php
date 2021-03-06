<?php
/**
 * Collections_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Categories_model extends CI_Model {

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

	function save($form_data) {
		$this -> db -> insert('categories', $form_data);
		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function update($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('categories', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function sort_order_update() {
		$sorting_order = $this -> input -> post("sort");
		$cid = $this -> input -> post("cid");
		foreach ($sorting_order as $p => $id) {
			//$this -> db -> query(" UPDATE c_pages SET sort = " . $p . " WHERE pid = " . $id . " ");
			$form_data = array('sort_order' => $cid . $p);
			$this -> db -> where('id', $id);
			$this -> db -> update('categories', $form_data);
		}

	}

	function get_all() {

		return $this -> db -> order_by('sort_order', 'ASC') -> get('categories');

	}

	
	function get_one($id) {

		return $this -> db -> where('id', $id) -> limit(1) -> get('categories');

	}

}

/* End of file collections_model.php */
