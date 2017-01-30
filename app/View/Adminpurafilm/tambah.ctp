
<?php if ($this->action == 'tambah'): ?>
  <h1>Buat Thread Film</h1>
<?php else: ?>
  <h1>Ubah Thread Film</h1>
<?php endif ?>
 
<?php
echo $this->Form->create('adminpurafilm',array('enctype'=>'multipart/form-data'));

echo $this->Form->input('judul');
echo $this->Form->input('tahun');
echo $this->Form->input('episode');
echo $this->Form->input('genre');
echo $this->Form->input('cast');

echo $this->Form->input('casthome');

echo $this->Form->input('deskripsi');

echo $this->Form->input('deskripsihome');

echo $this->Form->input('bahasa');
echo $this->Form->input('subtitle');


echo $this->Form->label('Type ');
$tipe = array('Movie Asia'=>'Movie Asia','Tv Series Asia'=>'Tv Series Asia','Movie Barat'=>'Movie Barat','Tv Series Barat'=>'Tv Series Barat'); 
 echo $this->Form->input('type', array(
                'options' => $tipe,
                'label' => false
               
         )
             );
 echo $this->Form->label('Tanggal ');
      echo $this->Form->input('tanggal', array(
    			'type' => 'date',
               'label' => false,
              'dateFormat' => 'DMY'
              ));
       echo $this->Form->input('file', array('type' => 'file',
                         
                          'div' => array('class' => 'col-md-4'),
                          'id' => 'uploadImage1',
                          'onchange' => 'PreviewImage(1);'
                      ));
      
     
        echo $this->Form->label(' ', ' '); 
    
            echo $this->Html->image('/img/udefault.png',
                        array('id' => 'uploadPreview1', 'width'=>'200px'));
         
echo $this->Form->end('Simpan');
?>