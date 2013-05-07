<?php
/**
 * Product_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Dishes_model extends CI_Model {

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
		$this -> db -> insert('dishes', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function update($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('dishes', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function get_all($offset = null, $limit = null) {

		if ($offset != null) {
			return $this -> db -> select('d.id AS did,d.name AS dname,d.image AS dimage,d.category AS dcategory,c.id AS cid,c.name AS cname') -> join('categories c', 'd.category = c.id', 'INNER') -> order_by('dname', 'ASC') -> limit($offset, $limit) -> get('dishes d');
		} else {
			return $this -> db -> select('d.id AS did,d.name AS dname,d.image AS dimage,d.category AS dcategory,c.id AS cid,c.name AS cname') -> join('categories c', 'd.category = c.id', 'INNER') -> order_by('dname', 'ASC') -> get('dishes d');
		}

	}

	function get_all_in_category($id) {

		return $this -> db -> select('id,image,name,description,sort_order') -> where('category', $id) -> order_by('sort_order', 'ASC') -> get('products') -> result();

	}

	function get_all_in_this_collection($id) {

		return $this -> db -> select('d.id AS did,d.name AS dname,d.image AS dimage,d.category AS dcategory,d.sort_order AS dsort,c.id AS cid,c.name AS cname') -> join('categories c', 'd.category = c.id', 'INNER') -> where('d.category', $id) -> order_by('dsort', 'ASC') -> get('dishes d');

	}

	function get_one($id) {

		return $this -> db -> select('d.id AS did,d.name AS dname,d.image AS dimage,d.category AS dcategory,d.description AS ddescription, c.id AS cid,c.name AS cname') -> join('categories c', 'd.category = c.id', 'INNER') -> where('d.id', $id)-> limit(1) -> get('dishes d');

	}

	function sort_order_update() {
		$sorting_order = $this -> input -> post("sort");
		$cid = $this -> input -> post("cid");
		foreach ($sorting_order as $p => $id) {
			//$this -> db -> query(" UPDATE c_pages SET sort = " . $p . " WHERE pid = " . $id . " ");
			$form_data = array('sort_order' => $cid . $p);
			$this -> db -> where('id', $id);
			$this -> db -> update('dishes', $form_data);
		}

	}

}

/* End of file products_model.php */
