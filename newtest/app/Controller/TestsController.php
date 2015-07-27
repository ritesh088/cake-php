<?php
class TestsController extends AppController {
	
    public $helpers = array('Html', 'Form', 'session');
	//var $helpers = array('Html','Ajax','Javascript');
	
	//for paginarion and sorting start
		public $components = array('Session', 'Paginator');
	
	
	
	public $paginate = array(	'limit' => 2);
	
 #_________________________find the total records__________________#
  public function index() 
 {
	 $this->Test->recursive=-1;
  $this->set('abc', $this->paginate());
  }
 #_____________________________add_________________________________#
  public function add()
      {
		  $this->loadModel('Plateform');
		  $info = $this->Plateform->find("all");
	$this->set('send',$info);
	//pr($this->data); die;
		  if(!empty($this->data)){
			  $data = $this->data;
			 // pr($_FILES); die;
				/*if(!empty($this->data['Tests']['img']['name']))
				{ 
					$file=$this->data['Tests']['img'];
                	move_uploaded_file($file['tmp_name'],HTTP_ROOT.'img/'.$file['name']);
					
					$this->data['Tests']['image']=$file['name'];
					$this->Tests->save($this->data);
				}*/
				 
        if ($this->request->is('post')) {
            	$data['Test']['platform']=$data['plate'];
			 if ($this->Test->save($data)) {
                $this->Session->setFlash(__('Your post has been saved.'));
                return $this->redirect(array('action' => 'index')); }
			$this->Session->setFlash(__('Unable to add your post.'));} 
	#-------image-----#
					
	}}
  #______________________Edit_____________________#
  
   public function edit($id = null) 
   {
    if (!$id)
	 {
        throw new NotFoundException(__('Invalid post'));
    }

    $post = $this->Test->findById($id);
    if (!$post) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('test', 'put'))) {
        $this->Test->id = $id;
        if ($this->Test->save($this->request->data)) {
            $this->Session->setFlash(__('Your test has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }
    if (!$this->request->data) {
        $this->request->data = $post;
    }
}

#_______________________________Delete________________________________#
public function delete($id) 
{
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

        $data=$this->Test->findById($id);
		$name=$data['Test']['testname'];
		if ($this->Test->delete($id)) {
        $this->Session->setFlash(__(' %s has been deleted.', h($name))
        );
    } else {
        $this->Session->setFlash(
            __('The post with id: %s could not be deleted.', h($id))
        );
    }

    return $this->redirect(array('action' => 'index'));
}
#______________________________ Search _________________________________#
function search()
{
	
 if(!empty($this->data))
 {
	 $info=$this->Test->find("all",array('conditions'=>array('Test.testname like' => $this->data['Search']['testname'] . '%')));  
 
  if($info>0)
  {
  	 $this->set('serch',$info);
  }
  else
  {
	 $this->Session->setFlash(__('no data found'));
  }
 }
}
#________________________ddl________________________#
public function reterive_data_ddl()
{
	
		  $this->loadModel('ddl');
		  $info = $this->Plateform->find("all");
	$this->set('send',$info);
}
}
?>