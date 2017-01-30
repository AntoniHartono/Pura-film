     
<div class="header">
    
   

          
</div>

   <div class="kotaksearch">
       
              <div id="kekanan">

<div id="kekiri">           <?php
                $url=array('controller'=>'Pura','action'=>'')+$this->request->params['pass'];
                echo $this->Form->create('', array('type' => 'get', 'url'=>$url));
                echo $this->Form->input('q' ,array('label'=> false,'value' => (!empty($this->params['url']['q']) ? $this->params['url']['q'] : '')));
                ?>
          </div>
          <div id="kekiri">
            <?php  
                echo $this->Form->end('Search');
            ?></div>
     </div>

   </div>

     <div class="kotak">
<table >
    <thead>
        <tr>
            <th>Judul Film</th>
            <th>Cast</th>
         
            <th>Action</th>
           
        </tr>
    </thead>
        <tbody>
        <?php foreach ($puras as $items) {
            # code...
         ?>
        <tr>
            <?php 
            ?>
            <td><?php echo $items['Pura']['judul']; ?></td>
            <td><?php echo $items['Pura']['cast']; ?></td>
       
            </td>
            <td>
        
                
                   <a  href="<?php echo $this->Html->url(array('controller'=>'pura','action'=>'ubah', $items['Pura']['id'])); ?>"> Edit</a>
                 | 
                    <?php echo $this->Form->postLink(' Delete', array('action'=>'hapus', $items['Pura']['id']), array('escape' => false, 'role' =>"menuitem", "tabindex"=>"-1",  'confirm'=>'Yakin Membuang?')
                    ) ?>
                    


             
            </td>
        </tr>
        <?php } ?>  
    </tbody>

</table>

<div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>    </div>