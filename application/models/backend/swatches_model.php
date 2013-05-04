<?php
/**
 * Swatches_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Swatches_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// --------------------------------------------------------------------

	/**
	 * function SaveSwatche()
	 *
	 * insert form data
	 * @param $form_data - array
	 * @return Bool - TRUE or FALSE
	 */

	function SaveSwatche($form_data) {
		$this -> db -> insert('swatches', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateSwatche($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('swatches', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetAll($offset=null,$limit=null) {
		if ($offset != null) {
			
		    return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER')->order_by('pname','ASC')-> limit($offset,$limit) -> get('swatches p');
			
		} else {

			return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER')->order_by('pname','ASC') -> get('swatches p');
		}

	}

	function GetAllInCollection($id) {

		return $this -> db -> select('id,image,name,description') -> where('category', $id) -> get('swatches') -> result();

	}

	function GetAllInACollection($id) {

		return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER') -> where('p.category', $id) ->order_by('pname','ASC')-> get('swatches p');

	}

	function GetOne($id) {

		return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,p.description AS pdescription, c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER') -> where('p.id', $id)->order_by('pname','ASC') -> limit(1) -> get('swatches p');

	}

}

/* End of file swatches_model.php */
