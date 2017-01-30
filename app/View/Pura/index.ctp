     
<div class="header">
    
            <div class = "title">
            
                    <img src="img/log.jpg" alt="image">
            </div>


            <div id="navigation">
                <div class="dropdown"> <a href="index">Home</a></div>
                <div class="dropdown">List Film
                             <div class="dropdown-content">
                        <a href="masia">Movie Asia</a><br>
                        <a href="tvasia">Tv Series Asia</a><br>
                        <a href="mbarat">Movie Barat</a><br>
                        <a href="tvbarat">Tv series Barat</a><br>
                        
                          </div>


                </div>
                <div class="dropdown"><a href="order">Order</a></div>
                <div class="dropdown"><a href="faq">FAQ</a></div>
            </div>  
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

     <?php foreach ($puras as $items) {
            # code...
         ?>

<div class="kotakkecil">
      
<div id="gambar">
         <img src="<?php echo $items['Pura']['filedir'].$items['Pura']['filename'];?>">
    

</div>

<div id="ket">
    <div class="judul">
    
       
          <a  href="open?idi=<?php echo $items['Pura']['id']; ?>"><?php echo $items['Pura']['judul']?></a>
                 

       
    </div>
        
    <div class="tanggal">

                        <?php echo $items['Pura']['tanggal']?>
        

    </div>
    <div class="cast">
            cast :            <?php echo $items['Pura']['casthome']?>
        
    </div>
    <div class="deskripsi">
                                <?php echo $items['Pura']['deskripsihome']?>
                
    </div>
</div>     
</div><?php } ?> 
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