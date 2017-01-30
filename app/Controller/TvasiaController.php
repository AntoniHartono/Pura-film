<?php
 
class TvasiaController extends AppController
{
 
  public $uses = array('Tvasia');
 
  function index()
  {
     	$conditions = array();


		if (!empty($this->params['url']['q']))
		{
			$conditions['or']['Tvasia.cast like'] = '%' . $this->params['url']['q'] . '%';
			$conditions['or']['Tvasia.judul like'] = '%' . $this->params['url']['q'] . '%';
				}
		
			$this->paginate = array(
				    'limit' => 6,
				    'conditions' => $conditions
		);
		$tvasias = $this->paginate('Tvasia');
		$this->set('tvasias', $tvasias);
		

  }

}
?>