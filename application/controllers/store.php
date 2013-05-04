<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
/**
 * Store Class 
 * @package Glenna Jean
 * @subpackage Front End 
 * @category Controller 
 * @author AMI 
 * @link ami@bandyworks.com 
 * */
class Store extends CI_Controller {

	public function __construct() {
		parent::__construct();
		
		$this -> load -> model('backend/collections_model');
		$this -> load -> model('backend/stores_model');
		$this -> load -> model('backend/onlinestores_model');
		
	}

	public function index() {

		$data['states'] = $this -> stores_model -> GetAllStates();
		$data['onlinestores'] = $this -> onlinestores_model -> GetAll();
		$this -> load -> view('store_view',$data);

	}

	public function filter() {

		
			$id = $this -> input -> post('id');
			$data['stores']=$this -> stores_model ->GetAllInState($id);
			$this -> load -> view('store_result_view', $data);

	}
	
	public function onlinestore() {

		
			$id = $this -> input -> post('id');
			$data['onlinestores']=$this -> onlinestores_model ->GetOne($id);
			$this -> load -> view('onlinestore_result_view', $data);

	}
	
	

	public function view($id=null) {

		$data['boys_list'] = $this -> collections_model -> GetAllCollectionNames('boys');
		$data['girls_list'] = $this -> collections_model -> GetAllCollectionNames('girls');
		$data['neutral_list'] = $this -> collections_model -> GetAllCollectionNames('neutral');
		$data['list_all'] = $this -> collections_model -> GetAllCollectionNames();
		if ($id != '' && $id != null) {
			
			$data['collections'] = $this -> collections_model -> GetOne($id);
			$data['products'] = $this -> products_model -> GetAllInCollection($id);
			$data['swatches'] = $this -> swatches_model -> GetAllInCollection($id);
			$data['next_id']=$this -> collections_model ->GetNextId($id);
			$data['prev_id']=$this -> collections_model ->GetPrevId($id);
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
			$data['next_id']=$this -> collections_model ->GetNextId($id);
			$data['prev_id']=$this -> collections_model ->GetPrevId($id);
			//$swatches = $this -> swatches_model -> GetAll($id);
			if (count($this -> collections_model -> GetOne($id) -> result())) {
				foreach ($this -> collections_model -> GetOne($id)->result() as $collection) {
					$data['similar'] = $this -> collections_model -> GetSimilar(unserialize($collection -> similar));
				}
			}
			
			$this -> load -> view('collection_details_ajax_view', $data);

		}
	
	}

}
/* End of file store.php */