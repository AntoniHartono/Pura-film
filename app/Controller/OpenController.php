<?php
class OpenController extends AppController {
	  public $uses = array('Open');
	function index(){
  	$conditions = array();

		$opens = $this->Open->find('all',
             					array(
                					'conditions'=> array( 'OR' => array(
                								'Open.id LIKE' =>'%'.$this->params['url']['idi'].'%'
                					)),
               
            				));
		$opens = $this->paginate('Open');
		$this->set('opens', $opens);
		
	}

}