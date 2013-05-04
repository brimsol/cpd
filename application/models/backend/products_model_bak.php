<?php
/**
 * Product_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
  * @link ami@bandyworks.com 
 * */
class Products_model extends CI_Model {

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

	function SaveProduct($form_data) {
		$this -> db -> insert('products', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateProduct($id,$form_data) {
			
		$this->db->where('id', $id);	
		$this -> db -> update('products', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetAll($offset=null,$limit=null) {
		
		if($offset != null){
			  return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER')->order_by('pname','ASC')-> limit($offset,$limit) -> get('products p');
		}else{
			return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER')->order_by('pname','ASC') -> get('products p');
		}

		

	}
	
	function GetAllInCollection($id) {

		return $this -> db -> select('id,image,name,description')->where('category',$id)->order_by('name','ASC') -> get('products') -> result();

	}
	
	function GetAllInACollection($id) {
		
		return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER')->where('p.category',$id)->order_by('pname','ASC') -> get('products p');
		
	}

	function GetOne($id) {

		return $this -> db -> select('p.id AS pid,p.name AS pname,p.image AS pimage,p.category AS pcategory,p.description AS pdescription, c.id AS cid,c.name AS cname') -> join('collections c', 'p.category = c.id', 'INNER') -> where('p.id', $id)->order_by('pname','ASC') -> limit(1) -> get('products p');

	}

}
/* End of file products_model.php */ 