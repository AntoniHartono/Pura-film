    
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

    
     <div class="kotak">

     <?php foreach ($opens as $items) {
            # code...
                if($items['Open']['id']==$this->params['url']['idi']){

                
         ?>

<div class="kotakkecilo">
      
<div id="gambaro">
         <img src="<?php echo $items['Open']['filedir'].$items['Open']['filename'];?>">
    

</div>

<div id="keto">
    <div class="judul">
    
         <?php echo $items['Open']['judul']?>
        
    </div>
        
    <div class="tanggal">

                        <?php echo $items['Open']['tanggal']?>
        

    </div>
    <div class="cast">
                     Cast :   <?php echo $items['Open']['cast']?>
        
    </div>
    <div class="deskripsi">
                      Deskripsi :          <?php echo $items['Open']['deskripsi']?>
                
    </div>
</div>     
</div><?php }} ?> 

    </div>
    <div class="footer">
        
        
    </div>