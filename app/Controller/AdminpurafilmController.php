<?php
 
class AdminpurafilmController extends AppController
{
 
  public $uses = array('Adminpurafilm');
 
  function index()
  {
     	$conditions = array();


		if (!empty($this->params['url']['q']))
		{
			$conditions['or']['Adminpurafilm.cast like'] = '%' . $this->params['url']['q'] . '%';
			$conditions['or']['Adminpurafilm.judul like'] = '%' . $this->params['url']['q'] . '%';
				}
		
			$this->paginate = array(
				    'limit' => 6,
				    'conditions' => $conditions
		);
		$puras = $this->paginate('Adminpurafilm');
		$this->set('puras', $puras);
		

  }
  function tambah()
  {

    //jika form sudah disubmit
    if ($this->request->is('post') || $this->request->is('put'))
    {
      //simpan data baru dengan isi dari form
 	if (!empty($this->request->data['Adminpurafilm']['file']['tmp_name'])) {
				$file = $this->request->data['Adminpurafilm']['file'];
				$ext = substr(strtolower(strrchr($file['name'], '.')), 1);
				$fullfilename = md5($this->request->data['Adminpurafilm']['judul']) . '.' . $ext;
				$hasilupload = $this->__uploadfile($file, $ext, $fullfilename);

				if ($hasilupload) {
					$this->request->data['Adminpurafilm']['filename'] =
						$hasilupload;
					$this->request->data['Adminpurafilm']['filedir'] =
					   'uploads/pp/';
	
				}
			}

      if ($this->Adminpurafilm->save($this->request->data))
      {
        //beri keterangan "Data telah disimpan."
        $this->Session->setFlash('Data telah disimpan.');

        //alihkan ke function index()
        $this->redirect(array('action' => 'index'));
      }
    }
  }
 function hapus($id=null){
			$this->request->onlyAllow('post');
			try {
				$this->Adminpurafilm->delete($id);
			} catch (PDOException $e) {
				
			}
			$this->redirect(array('action'=>'index'));
	}
function ubah($id)
{
  $this->Adminpurafilm->id = $id;
 
  //tambahkan kode sama seperti kode yang ada di dalam tambah()
  if ($this->request->is('post') || $this->request->is('put') )
  {
  	if (!empty($this->request->data['Adminpurafilm']['file']['tmp_name'])) {
				$file = $this->request->data['Adminpurafilm']['file'];
				$ext = substr(strtolower(strrchr($file['name'], '.')), 1);
				$fullfilename = md5($this->request->data['Adminpurafilm']['judul']) . '.' . $ext;
				$hasilupload = $this->__uploadfile($file, $ext, $fullfilename);

				if ($hasilupload) {
					$this->request->data['Adminpurafilm']['filename'] =
						$hasilupload;
					$this->request->data['Adminpurafilm']['filedir'] =
					   'uploads/pp/';
	
				}
			}
    if ($this->Adminpurafilm->save($this->request->data))
    {
      $this->Session->setFlash('Data telah disimpan.');
      $this->redirect(array('action' => 'index'));
    }
  }
 
  $this->request->data = $this->Adminpurafilm->read();
  $this->render('tambah');
}

	private function __uploadfile($file, $ext, $fullname = null) {
		$arr_ext = array('jpg', 'jpeg', 'gif', 'png');

		if(in_array($ext, $arr_ext)) {
			$nmfile = $file['name'];
			if ($fullname) $nmfile = $fullname;

			$fullpath = APP . '/webroot/uploads/pp/' . $nmfile;
			move_uploaded_file($file['tmp_name'], $fullpath);

	

			$urlImg = $this->Image;
			$cropPathDest = APP . '/webroot/uploads/pp/' . $nmfile;
			$cropPathSrc = APP . '/webroot/' . $urlImg;
			rename($cropPathSrc, $cropPathDest);

			return $nmfile;

		} else {
			return false;
		}
	}

}