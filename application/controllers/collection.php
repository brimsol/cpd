<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Collection Class
 * @package Glenna Jean
 * @subpackage Front End
 * @category Controller
 * @author AMI
 * @link ami@bandyworks.com
 * */
class Collection extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this -> load -> model('backend/collections_model');
		$this -> load -> model('backend/products_model');
		$this -> load -> model('backend/swatches_model');

	}

	public function index() {

		$data['boys_list'] = $this -> collections_model -> GetAllCollectionNames('boys');
		$data['girls_list'] = $this -> collections_model -> GetAllCollectionNames('girls');
		$data['neutral_list'] = $this -> collections_model -> GetAllCollectionNames('neutral');
		$data['list_all'] = $this -> collections_model -> GetAllCollectionNames();
		$data['collections'] = $this -> collections_model -> GetAll();
		$this -> load -> view('collection_view', $data);

	}

	public function filter() {

		$filter = $this -> input -> post('filter');
		$data['collections'] = $this -> collections_model -> GetAll($filter);
		$this -> load -> view('collection_filter_ajax_view', $data);

	}

	public function view($id = null) {

		$data['boys_list'] = $this -> collections_model -> GetAllCollectionNames('boys');
		$data['girls_list'] = $this -> collections_model -> GetAllCollectionNames('girls');
		$data['neutral_list'] = $this -> collections_model -> GetAllCollectionNames('neutral');
		$data['list_all'] = $this -> collections_model -> GetAllCollectionNames();
		if ($id != '' && $id != null) {

			$data['collections'] = $this -> collections_model -> GetOne($id);
			$data['products'] = $this -> products_model -> GetAllInCollection($id);
			$data['swatches'] = $this -> swatches_model -> GetAllInCollection($id);
			$id_all = $this -> collections_model -> GetAllCollectionId();
			$array[] = '';
			foreach ($id_all->result() as $all) {
				$array[] .= $all -> id;
			}
			$current_key = array_search($id, $array);
			if (array_key_exists($current_key + 1, $array)) {
				$next = $array[$current_key + 1];
			} else {
				$next = '';
			}
			if (array_key_exists($current_key - 1, $array)) {
				$prev = $array[$current_key - 1];
			} else {
				$prev = '';
			}
			$data['next_id'] = $next;
			$data['prev_id'] = $prev;
			//$swatches = $this -> swatches_model -> GetAll($id);
			if (count($this -> collections_model -> GetOne($id) -> result())) {
				foreach ($this -> collections_model -> GetOne($id)->result() as $collection) {
					$data['similar'] = $this -> collections_model -> GetSimilar(unserialize($collection -> similar));
				}
			}
			$this -> load -> view('collection_details_view', $data);

		} else {

			$id = $this -> input -> post('id');
			$data['collections'] = $this -> collections_model -> GetOne($id);
			$data['products'] = $this -> products_model -> GetAllInCollection($id);
			$data['swatches'] = $this -> swatches_model -> GetAllInCollection($id);
			$id_all = $this -> collections_model -> GetAllCollectionId();
			$array[] = '';
			foreach ($id_all->result() as $all) {
				$array[] .= $all -> id;
			}
			$current_key = array_search($id, $array);
			if (array_key_exists($current_key + 1, $array)) {
				$next = $array[$current_key + 1];
			} else {
				$next = '';
			}
			if (array_key_exists($current_key - 1, $array)) {
				$prev = $array[$current_key - 1];
			} else {
				$prev = '';
			}
			$data['next_id'] = $next;
			$data['prev_id'] = $prev;
			//$swatches = $this -> swatches_model -> GetAll($id);
			if (count($this -> collections_model -> GetOne($id) -> result())) {
				foreach ($this -> collections_model -> GetOne($id)->result() as $collection) {
					$data['similar'] = $this -> collections_model -> GetSimilar(unserialize($collection -> similar));
				}
			}

			$this -> load -> view('collection_details_ajax_view', $data);

		}
	}

	public function test() {

		$id_all = $this -> collections_model -> GetAllCollectionId();
		$array[] = '';
		foreach ($id_all->result() as $all) {
			$array[] .= $all -> id;
		}
		$current_key = array_search('15', $array);
		if (array_key_exists($current_key + 1, $array)) {
			$next = $array[$current_key + 1];
		} else {
			$next = '';
		}
		if (array_key_exists($current_key - 1, $array)) {
			$prev = $array[$current_key - 1];
		} else {
			$prev = '';
		}

		echo $next;
		echo '<br/>';
		echo $prev;
		// print_r($current_key);
		//echo $current_key;
	}

}

/* End of file collection.php */
