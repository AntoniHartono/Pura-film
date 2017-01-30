<?php
 
class MasiaController extends AppController
{
 
  public $uses = array('Masia');
 
  function index()
  {
     	$conditions = array();


		if (!empty($this->params['url']['q']))
		{
			$conditions['or']['Masia.cast like'] = '%' . $this->params['url']['q'] . '%';
			$conditions['or']['Masia.judul like'] = '%' . $this->params['url']['q'] . '%';
				}
		
			$this->paginate = array(
				    'limit' => 6,
				    'conditions' => $conditions
		);
		$masias = $this->paginate('Masia');
		$this->set('masias', $masias);
		

  }

}
?>