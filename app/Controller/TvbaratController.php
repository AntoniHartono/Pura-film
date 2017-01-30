<?php
 
class TvbaratController extends AppController
{
 
  public $uses = array('Tvbarat');
 
  function index()
  {
     	$conditions = array();


		if (!empty($this->params['url']['q']))
		{
			$conditions['or']['Tvbarat.cast like'] = '%' . $this->params['url']['q'] . '%';
			$conditions['or']['Tvbarat.judul like'] = '%' . $this->params['url']['q'] . '%';
				}
		
			$this->paginate = array(
				    'limit' => 6,
				    'conditions' => $conditions
		);
		$tvbarats = $this->paginate('Tvbarat');
		$this->set('tvbarats', $tvbarats);
		

  }

}
?>