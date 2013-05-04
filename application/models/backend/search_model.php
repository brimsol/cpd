<?php
/**
 * Search_model Class
 * @package Glenna Jean
 * @category Models
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Search_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	function search_collection($key) {

		return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('collections') -> result();

	}

	function search($cat, $key) {

		if ($cat == 'collection') {
			
			return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('collections') -> result();

		} elseif ($cat == 'products') {

			return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('products') -> result();

		} elseif ($cat == 'swatches') {

			return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('swatches') -> result();

		} elseif ($cat == 'stores') {

			return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('stores') -> result();

		} elseif ($cat == 'onlinestores') {

			return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('onlinestores') -> result();

		}

	}

	function search_products($key) {

		return $this -> db -> like('name', $key, 'after')->order_by('name','ASC') -> get('products') -> result();

	}

}

/* End of file search_model.php */
