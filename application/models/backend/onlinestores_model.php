<?php
/**
 * Onlinestores_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Onlinestores_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveStore()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */

	function SaveStore($form_data) {
		$this -> db -> insert('onlinestores', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateStore($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('onlinestores', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}


	function GetAll($filter = null) {
		if ($filter == null && $filter == '') {
			return $this -> db ->order_by('name','ASC') -> get('onlinestores') -> result();
		}else{
			//$filter[] = "'" . implode("','", $filter) . "'";
			//$category = $filter;
			return $this -> db->where_in('state', $filter)->order_by('name','ASC') -> get('onlinestores') -> result();
		}

	}

	
	function GetOne($id) {

		return $this -> db -> where('id', $id)->order_by('name','ASC') -> limit(1) -> get('onlinestores')->result();

	}

}
/* End of file onlinestore_model.php */ 