<?php
/**
 * Stores_model Class 
 * @package Glenna Jean 
 * @category Models 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Stores_model extends CI_Model {

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
		$this -> db -> insert('stores', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function UpdateStore($id, $form_data) {

		$this -> db -> where('id', $id);
		$this -> db -> update('stores', $form_data);

		if ($this -> db -> affected_rows() == '1') {
			return TRUE;
		}

		return FALSE;
	}

	function GetAll($offset=null,$limit=null) {
		
		if($offset != null){
		return $this -> db -> select('st.id as stid,st.name AS state,s.name as name,s.url as url,s.contact_no as contact_no,s.address as address,s.latitude as latitude,s.longitude as longitude,s.id as id') -> join('states st', 's.state = st.id', 'INNER')->order_by('name','ASC')-> limit($offset,$limit) -> get('stores s') -> result();
        }else{
        return $this -> db -> select('st.id as stid,st.name AS state,s.name as name,s.url as url,s.contact_no as contact_no,s.address as address,s.latitude as latitude,s.longitude as longitude,s.id as id') -> join('states st', 's.state = st.id', 'INNER')->order_by('name','ASC') -> get('stores s') -> result();	
		}	
	}

	function GetOne($id) {

		//return $this -> db -> where('id', $id) -> limit(1) -> get('stores')->result();
		return $this -> db -> select('st.id as stid,st.name AS state,s.name as name,s.url as url,s.contact_no as contact_no,s.address as address,s.latitude as latitude,s.longitude as longitude,s.id as id,s.state as state_id') -> join('states st', 's.state = st.id', 'INNER') -> where('s.id', $id)->order_by('name','ASC') -> limit(1) -> get('stores s') -> result();

	}

	function GetAllStates() {

		return $this -> db ->order_by('name','ASC') -> get('states') -> result();

	}

	function GetAllInState($id) {

		return $this -> db ->order_by('name','ASC') -> where('state', $id) -> get('stores') -> result();

	}

}
/* End of file stores_model.php */ 