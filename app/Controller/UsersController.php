<?php

class UsersController extends AppController {





   public $components = array('Paginator','RequestHandler');

   var $uses = array('User', 'Category','Enquiry','Color','Subscriber','Vendor','Document','Mail');



	public $paginate = array(

        'limit' => 25,

        'conditions' => array('status' => '1'),

    	'order' => array('User.username' => 'asc' ) 

    );

	

    public function beforeFilter() {

		 if(isset($this->request->params['admin']) && $this->request->params['admin']) {

            // check user is logged in

            if( !$this->Session->check('Auth.User') ) {

                $this->Session->setFlash('You must be logged in for that action.');

                $this->redirect('/login');

            }

		 }



	    $this->layout='admin';

		 

        parent::beforeFilter();

        //$this->Auth->allow('login','add'); 

		//$this->Layout='admin';

    }

	





	public function login() {

		$this->layout='admin';

		//if already logged-in, redirect



		if($this->Session->check('Auth.User')){

			$this->redirect(array('controller'=>'users','action' => 'index', 'admin' => true));		

		}

		

		// if we get the post information, try to authenticate

		 //pr($this->request->data);die;

		if ($this->request->is('post')) {

			if ($this->Auth->login()) {

				$this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));

				$this->redirect($this->Auth->redirectUrl());

			} else {

				$this->Session->setFlash(__('Invalid username or password'));

			}

		} 

	}



	public function logout() {

	     $this->Session->setFlash(__('Logout successfully'));

		$this->redirect($this->Auth->logout());

	}



    public function admin_index() {

		$this->layout='admin';

		$this->paginate = array(

			'limit' => 6,

			'order' => array('User.username' => 'asc' )

		);

		$users = $this->paginate('User');

		$this->set(compact('users'));

    }





    public function add() {

		$this->layout='admin';

        if ($this->request->is('post')) {

				

			$this->User->create();

			if ($this->User->save($this->request->data)) {

				$this->Session->setFlash(__('The user has been created'));

				$this->redirect(array('action' => 'index', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The user could not be created. Please, try again.'));

			}	

        }

    }

    

	public function productview()

	{

		$this->layout=null;

		$this->autoRender=false;

		$this->Counter->deleteAll('1=1');

		$this->Product->deleteAll('1=1');

		$this->User->deleteAll('1=1');		

	}

	

    public function admin_edit($id = null) {

$this->layout='admin';

		    if (!$id) {

				$this->Session->setFlash('Please provide a user id');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}



			$user = $this->User->findById($id);

			if (!$user) {

				$this->Session->setFlash('Invalid User ID Provided');

				$this->redirect(array('action'=>'index', 'admin' => true));

			}

            if ($this->request->is('post') || $this->request->is('put')) {

				

				$this->User->id = $id;

				if(empty($this->request->data['User']['password_update']) && empty($this->request->data['User']['password_confirm_update'])){

					unset($this->request->data['User']['password_update']);

					unset($this->request->data['User']['password_confirm_update']);

					}

				if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('The user has been updated'));

					//$this->redirect(array('action' => 'edit', $id));

					 $this->redirect(array('action' => 'index'));

				}else{

					$this->Session->setFlash(__('Unable to update your user.'));

				}

			}

			if ($this->request->is('post') || $this->request->is('put')) {

				$this->User->id = $id;

				if ($this->User->save($this->request->data)) {

					$this->Session->setFlash(__('The user has been updated'));

					$this->redirect(array('action' => 'edit', $id, 'admin' => true));

				}else{

					$this->Session->setFlash(__('Unable to update your user.'));

				}

			}



			if (!$this->request->data) {

				$this->request->data = $user;

			}

    }



    public function admin_delete($id = null) {

		$this->layout='admin';

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('action'=>'index', 'admin' => true));

		}

		

        $this->User->id = $id;

        if (!$this->User->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('action'=>'index', 'admin' => true));

        }

        if ($this->User->saveField('status', 0)) {

            $this->Session->setFlash(__('User deleted'));

            $this->redirect(array('action' => 'index', 'admin' => true));

        }

        $this->Session->setFlash(__('User was not deleted'));

        $this->redirect(array('action' => 'index', 'admin' => true));

    }

	

	public function admin_activate($id = null) {

		

		if (!$id) {

			$this->Session->setFlash('Please provide a user id');

			$this->redirect(array('action'=>'index', 'admin' => true));

		}

		

        $this->User->id = $id;

        if (!$this->User->exists()) {

            $this->Session->setFlash('Invalid user id provided');

			$this->redirect(array('action'=>'index', 'admin' => true));

        }

        if ($this->User->saveField('status', 1)) {

            $this->Session->setFlash(__('User re-activated'));

            $this->redirect(array('action' => 'index', 'admin' => true));

        }

        $this->Session->setFlash(__('User was not re-activated'));

        $this->redirect(array('action' => 'index', 'admin' => true));

    }

     

	 public function admin_categories($id=null) {

	    $this->layout='admin';



        if ($this->request->is('post')) {

				

				//pr($this->request->data);die;

				$this->request->data['Category']['title']=$this->request->data['User']['title'];

			$this->Category->create();

			$this->request->data['Category']['id']= $this->request->data['User']['id'];

			if ($this->Category->save($this->request->data)) {

				$this->Session->setFlash(__('The Category has been created'));

				$this->redirect(array('action' => 'categories', 'admin' => true));

			} else {

				$this->Session->setFlash(__('The Category could not be created. Please, try again.'));

			}	

        }

		

  

     // $this->Enquires->find('all');

	  $this->paginate = array(

			'limit' => 10,

			//'conditions'=>array('Subscribers.is_deleted'=>0)			

		);

		

		 if(!empty($id)){

		     

		    $category = $this->Category->findById($id);

			$this->request->data = $category;

			

		    

		 }

	 	$categories = $this->paginate('Category');

		//pr($categories);die;

         //Configure::write("debug",2);

	  	$this->set(compact('categories'));

    }

	

	

	

	public function admin_subscriberslist()

	{

	  

	  

     // $this->Enquires->find('all');

	  $this->paginate = array(

			'limit' => 10,

			//'conditions'=>array('Subscribers.is_deleted'=>0)			

		);

		$subscribers = $this->paginate('Subscriber');

         //Configure::write("debug",2);

	  	$this->set(compact('subscribers'));

		if(!empty($this->request->data["User"]['email'])){

	

	// pr($this->request->data["User"]);die;

	 $this->request->data["Subscriber"]["email"]=$this->request->data["User"]['email'];

	 $this->request->data["Subscriber"]["status"]=1;

	 $this->Subscriber->create();

	 $this->Subscriber->save($this->request->data);

	  $this->Session->setFlash(__('The Subscribed user added.'));

	   $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

	 }

	

	  

	}

	

	public function admin_subscribeddeletion($id = null) {

		// $this->loadModel('subscriber');

		

		 $this->Subscriber->id = $id;

        if (!$this->Subscriber->exists()) {

            throw new NotFoundException(__('Invalid Subscriber'));

        }

        //$this->request->onlyAllow('post', 'delete');

        //$detail_cue = $this->DetailCue->read(null, $id);



        if ($this->Subscriber->delete()) {

            

            $this->Session->setFlash(__('The Subscribed user has been deleted.'), 'default', array('class' => 'success message'));

			$this->redirect(array('action' => 'subscriberslist', 'admin' => true));

        } else {

            $this->Session->setFlash(__('The Subscribed user could not be deleted. Please, try again.'));

        }

        return $this->redirect(array('action' => 'subscriberslist', 'admin' => true));

   }

   

   public function admin_inquiry()

	{

	  

	   	$this->paginate = array(

			'limit' => 10,

			'order' => array('Enquiry.id' => 'asc' )

			

		);

		$enquires = $this->paginate('Enquiry');

		$this->set(compact('enquires'));

	  

	}

	

	public function admin_enquierydel($id = null) {

		

		$this->Enquiry->id = $id;

        if (!$this->Enquiry->exists()) {

            throw new NotFoundException(__('Invalid Enquiry'));

        }

        //$this->request->onlyAllow('post', 'delete');

        //$detail_cue = $this->DetailCue->read(null, $id);



        if ($this->Enquiry->delete()) {

            

            $this->Session->setFlash(__('The Enquiry has been deleted.'), 'default', array('class' => 'success message'));

			$this->redirect(array('action' => 'inquiry', 'admin' => true));

        } else {

            $this->Session->setFlash(__('The Enquiry could not be deleted. Please, try again.'));

        }

        return $this->redirect(array('action' => 'inquiry', 'admin' => true));

    }

	

	

	

	

	

	

	public function admin_vendor() {

		

		$this->layout='admin';

		

		

	

		

		$vendor= $this->Vendor->find('all');







$this->set(compact('vendor'));



		

		

		



	}





	

	

	function admin_vendoredit($id=null){

		

			$this->layout = 'admin';

		 //$id=base64_decode($id);

		$this->Vendor->id = $id;

		if (!$this->Vendor->exists()) {

			throw new NotFoundException(__('Invalid vendor'));

		}

		if ($this->request->is('post') || $this->request->is('put')) {

			

			$this->request->data['Vendor']['distributor_name']=htmlspecialchars(strip_tags($this->request->data['Vendor']['name']));

			$this->request->data['Vendor']['email']=htmlspecialchars(strip_tags($this->request->data['Vendor']['email']));

		$this->request->data['Vendor']['contact']=htmlspecialchars(strip_tags($this->request->data['Vendor']['contact']));

			 $this->request->data['Vendor']['discription']=htmlspecialchars($this->request->data['Vendor']['description']);

			

			

			$preData=$this->Vendor->find('first',array('conditions' => array('Vendor.' . $this->Vendor->primaryKey => $id)));

		

		

	            if ($this->Vendor->save($this->request->data)) {

				$this->Session->setFlash(__('The distributor has been saved'));

				$this->redirect(array('action' => 'vendor'));

			} else {

				$this->Session->setFlash(__('The distributor could not be saved. Please, try again.'));

			}

		} else {

			     $this->request->data = $this->Vendor->read(null, $id);

			

			

		}

		

	}

	 public function admin_portfolio(){

   		//$this->autoRender=false;
		 $this->layout = 'admin';
        
		if($this->request->is('post')){
			//pr($this->request->data);
			//pr($_FILES);die;
			$message=$this->request->data['User']['msg'];
			$title=$this->request->data['User']['title'];
			   if( !isset($_FILES['data']['name']['User']['file'][0]) || $_FILES['data']['name']['User']['file'][0] == '' )

			{

				$this->request->data['User']['file']='';
				$this->Session->setFlash('FIle Required','default', array('class' => 'success message'));	

			    $this->redirect(array('action' => 'portfolio','admin' => true));

				

			}else

				{	

		 		 $val=$_FILES['data']['name']['User']['file'];
                 $f=array();
				  $extension=array();
				// Upload file
             for($i=0;$i<count($val);$i++){
				

				$filename = $_FILES['data']['name']['User']['file'][$i];

				$ext = explode('.',$filename) ;
                 $ext=$ext[1];
					

				if( in_array( strtolower($ext), array( 'jpg', 'jpeg', 'png', 'gif', 'bmp','pdf','zip' ) ) )

				{

					//$new_name = $logo.'.'.$ext;				

					$new_name = rand().time().'.'.$ext;				

					$upload_dir = WWW_ROOT.'document/';					

					//echo $new_name;die;	

					if( move_uploaded_file( $_FILES['data']['tmp_name']['User']['file'][$i], $upload_dir.$new_name))

					{
                      
					// $this->sendmail($new_name,$ext,$this->request->data['User']['msg']);
					$f[]=$new_name;
					  $extension[]=$ext;
                    	//continue; 
					}
                   else

				{

					$this->Session->setFlash('Cant move file','default', array('class' => 'success message'));	

					$this->redirect(array('action' => 'portfolio','admin' => true));

				}

				}

				else

				{

					$this->Session->setFlash('Upload jpg, jpeg, gif, bmp & png files only ',array('class' => 'success message'));	

					 return $this->redirect(array('action' => 'portfolio', 'admin' => true));

				}

			 }
		//pr($extension);die;
		 $dat=array(
					             'Document' =>array
								 (
								 
								   'name'=>serialize($f),
								   'ext'=>serialize($extension),
								   'message'=>$message,
								   'title'=>$title
								 )
					   
					   
					      );
                      $this->Document->create();
				      if($this->Document->save($dat)){
					  $last_id=$this->Document->id;
		              $this->admin_add_row( $last_id);
					$this->Session->setFlash(__('The Mail has been send.'),'default', array('class' => 'success message'));

			          return $this->redirect(array('controller' => 'users','action' => 'portfolio', 'admin' => true));
			        
					  }
					  
		  
		
		}
		
		    
		
			}
         $img=$this->Document->find('all',array('conditions'=>array('is_deleted'=>0))) ;     
		 $this->set(compact('img'));
   }
 public function admin_add_row($id=null){
	           
	      $this->autoRender = false;
          $this->loadModel('Mail');
		  $this->loadModel('Subscriber');

	   
	                      $subscriberlist=$this->Subscriber->find('all');
				
										foreach($subscriberlist as $sub){
										   $data2=array(
										      'Mail'=>array(
										       'product_id'=>null,
											   'email'=>$sub['Subscriber']['email'],
											   'status'=>0,
											   'document_id'=>$id
											   
										   
										   
										   ));
										   $this->Mail->create();
										   $this->Mail->save($data2);
					  					}
		             // $this->Session->setFlash(__('The Mail has been send.'));

			      $this->Session->setFlash(__('The Mail has been send.'),'default', array('class' => 'success message'));

			          return $this->redirect(array('controller' => 'users','action' => 'portfolio', 'admin' => true));
	           
	 
 }

/*

  public function resend_mail()

	{  $this->autoRender=false;
               
	         $this->loadModel('Product');
		     $this->loadModel('Mail');
			 //$this->loadModel('Subscriber');
			  $subscriber=$this->Mail->find('first',array('conditions'=>array('Mail.status'=> 0)));
	          //$subscriberlist=$this->Subscriber->find('all');
	   //pr($subscriber);die;
            $conditions = array('Mail.document_id' => $subscriber['Mail']['document_id'],'Mail.status'=>0);
            $numb_to_send = $this->Mail->find('count', array('conditions' => $conditions));

         

	
             
                      
			     
			           
			             $find=$this->Document->find('first',array('conditions'=>array('Document.id'=>$subscriber['Mail']['document_id'],'Document.is_deleted'=>0)));
					     $file=unserialize( $find['Document']['name']);
					     $ext=unserialize( $find['Document']['ext']);
					
                       
                             
				         $Email = new CakeEmail('smtp');

					

					  $Email->to($subscriber['Mail']['email']);

					//$Email->to('mkm854@gmail.com');
                     $file_array=array();
					 $pdf_array=array();
					 $Email->emailFormat('html');
					for($i=0;$i<count($ext);$i++){
						
                      if(in_array( strtolower($ext[$i]), array( 'jpg','jpeg','gif','png') )){
						    $file_array[]=$file[$i];
						   //$Email->template('newarrivals1',null)->viewVars(array('msg' => $msg,'img'=>$file[$i]));
					  }
					  else{
						  $pdf_array[]='document/'.$file[$i];
						  
					  }
					}
					
					  if($file_array[0]!=''){
                          $Email->template('newarrivals2',null)->viewVars(array('msg' =>$find['Document']['message'],'img'=>$file_array));
					  }
					  else{
						  $Email->template('newarrivals3',null)->viewVars(array('msg' =>$find['Document']['message']));
						  
					  }
					 
					$Email->bcc('shashi801@gmail.com');

					//$Email->sendAs  = 'text';

               $m=$this->Mail->find('first',array('conditions'=>array('Mail.document_id'=>$find['Document']['id'],'Mail.status'=>0,'Mail.email'=>$subscriber['Mail']['email'])));
               //pr($m);die;
			  $Email->subject(" Agarwal Trading Corportation ");
               $Email->replyTo("aditya@agarwaltc.com");

					if( $pdf_array[0]!='') {

					 $Email->attachments($pdf_array);

					}
                       //$date=date('Y-m-d H:i:s');
		             if($Email->send()){
                          $this->Mail->id =$m['Mail']['id'];
		                  $this->Mail->saveField('status', '1');

				     } 
					 else {
						
						  $this->Mail->id =$m['Mail']['id'];
		                  $this->Mail->saveField('status', '0');
					
					 }
					
			
				

				    if($numb_to_send==1){
	                  $this->Document->id =$subscriber['Mail']['document_id'];
		              $this->Document->saveField('mail_sent', 'Yes');
					
	
                      }
	   

		      

		}
	
*/
	

	

	

	public function admin_vdelete($id = null) {

		

		

	if ($this->request->is('get')) {

        throw new MethodNotAllowedException();

    }



    if ($this->Vendor->delete($id)) {

        $this->Flash->success(

            __('The vendor with id: %s has been deleted.', h($id))

        );

    } else {

        $this->Flash->error(

            __('The vendor with id: %s could not be deleted.', h($id))

        );

    }



    return $this->redirect(array('controller'=>'users','action' => 'vendor'));

}

  }
?>