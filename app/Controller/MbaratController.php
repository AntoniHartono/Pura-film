<?php
 
class MbaratController extends AppController
{
 
  public $uses = array('Mbarat');
 
  function index()
  {
     	$conditions = array();


		if (!empty($this->params['url']['q']))
		{
			$conditions['or']['Mbarat.cast like'] = '%' . $this->params['url']['q'] . '%';
			$conditions['or']['Mbarat.judul like'] = '%' . $this->params['url']['q'] . '%';
				}
		
			$this->paginate = array(
				    'limit' => 6,
				    'conditions' => $conditions
		);
		$mbarats = $this->paginate('Mbarat');
		$this->set('mbarats', $mbarats);
		

  }

}
?>