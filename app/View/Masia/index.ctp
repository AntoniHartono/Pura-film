<div class="header">
    
            <div class = "title">
            
                    <img src="img/log.jpg" alt="image">
            </div>


            <div id="navigation">
                <div class="dropdown"> <a href="localhost/pura">Home</a></div>
                <div class="dropdown">List Film
                             <div class="dropdown-content">
                        <a href="masia">Movie Asia</a>
                        <a href="tvasia">Tv Series Asia</a>
                        <a href="mbarat">Movie Barat</a>
                        <a href="tvbarat">Tv series Barat</a>
                        
                          </div>


                </div>
                <div class="dropdown"><a href="order">Order</a></div>
                <div class="dropdown"><a href="faq">FAQ</a></div>
            </div>  
</div>
   <div class="kotaksearch">
       
              <div id="kekanan">

<div id="kekiri">           <?php
                $url=array('controller'=>'Masia','action'=>'')+$this->request->params['pass'];
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
<div id="kotaksedang">
    
<table class="table table-bordered">
    <thead>
        <tr>
            <th>Judul Film</th>
            <th>Cast</th>
            <th>Genre</th>
            <th>Episode</th>
            <th>Tahun</th>
             <th>Subtitle</th>
        </tr>
    </thead>
        <tbody>
        <?php foreach ($masias as $items) {

            if($items['Masia']['judul'] == 'Movie Asia'){
            # code...
         ?>
        <tr>
            <?php 
            ?>
            <td><?php echo $items['Masia']['judul']; ?></td>
            <td><?php echo $items['Masia']['cast']; ?></td>
            <td><?php echo $items['Masia']['genre']; ?></td>
            <td><?php echo $items['Masia']['episode'];?>
            </td>
  <td><?php echo $items['Masia']['tahun']; ?></td>
            <td><?php echo $items['Masia']['subtitle'];?>
            </td>
        </tr>
        <?php }} ?>  
    </tbody>

</table>

<div class="pagin">
<div class="pagination pagination-large">
    <ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>
</div>
    </div>
    <div class="footer">
        
        
    </div>