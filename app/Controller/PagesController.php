<?php
/**
 * Static content controller.
 *
 * This file will render views from views/pages/
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('AppController', 'Controller');

/**
 * Static content controller
 *
 * Override this controller by placing a copy in controllers directory of an application
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController {

/**
 * This controller does not use a model
 *
 * @var array
 */
    public $components=array('Paginator','RequestHandler');
	public $uses = array('Registration','Companydetail','Pagedetail');
	public $helpers = array('Tinymce','Html','Form');

/**
 * Displays a view
 *
 * @return CakeResponse|null
 * @throws ForbiddenException When a directory traversal attempt.
 * @throws NotFoundException When the view file could not be found
 *   or MissingViewException in debug mode.
 */
	public function display() {
	
}

public function index(){
	$this->layout='front';
}


public function newuser(){
	$this->layout='front';
	$this->autoRender = false;
	$data = $this->request->data;
	//pr($data); die;
	if ($this->request->is('post')):
		$this->User->create();
		$this->User->set($this->request->data);
		if ($this->User->validates()):
			$this->User->saveAll($data);
			$this->Session->setFlash(__('The user has been created'));
			$this->redirect(array('controller'=>'Pages', 'action' => 'index'));
		else:
			$this->Session->setFlash(__('The user could not be created. Please, try again.'));
		endif;
	else:
		$errors = $this->User->validationErrors;
	endif;
}

public function companysearchrslt(){
	$this->layout='front';
	 if ($this->request->is('post')) {
		 
		 //pr($this->request->data);die;
		 
		 $this->Paginator->settings = array(



         'conditions' => array('OR'=>array('Companydetail.company_name LIKE' => "%".$this->request->data['Companydetail']['searchitem']."%")),

		//'fields' => array('Companydetail.id', 'Companydetail.company_name','Companydetail.cin','Companydetail.company_status'),            

		

        'limit' => 9 );



         $searchdetail = $this->Paginator->paginate('Companydetail');
		 $this->set(compact('searchdetail'));
		// pr($searchdetail);die;
	 }
}


	

	

	

	

	

	

public function admin_proprietorship(){
	$this->layout='admin';
}
public function prop($id=null){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}

public function part($id=null){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function oneperson(){
	$this->layout='front';
}
public function liability(){
	$this->layout='front';
}
public function plc(){
	$this->layout='front';
}
public function pab(){
	$this->layout='front';
}
public function indi(){
	$this->layout='front';
}

public function admin_pagelist() {

     $this->layout='admin';

			
	$this->Paginator->settings = array('limit' => 10);
	$pagelist = $this->Paginator->Paginate('Pagedetail');
	$this->set('pagelist',$pagelist);



	}



public function admin_editpage($id=null){
	$this->layout='admin';
	
	  if ($this->request->is('post') || $this->request->is('put')) {
		    
			               $this->request->data['Pagedetail']['pagename']=strip_tags($this->request->data['Pagedetail']['pagename']);
		  
		  				   if(!empty($this->request->data['Pagedetail']['pagedetail'])){

				            $this->request->data['Package']['itiniary']=htmlentities(htmlspecialchars($this->request->data['Pagedetail']['pagedetail']));

				   

				   }
		  
	 if ($this->Pagedetail->save($this->request->data)) {

                    // Set a session flash message and redirect.

                     $this->Session->setFlash('Page updated successfully!');

                     $this->redirect(array('action'=>'pagelist','admin'=>true));

                   }
      }
	
	$this->set('pagedetail', $this->Pagedetail->findById($id));
}

public function nidh($id=null){
	$this->layout='front';
	//pr($this->Pagedetail->findById($id));die;
	$this->set('pagedetail', $this->Pagedetail->findById($id));
}
public function procom($id=null){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function section($id=null){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function gstreg(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function forein(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function tem(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function profess(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function tanreg(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function pfreg(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function msme(){
	$this->layout='front';
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function import(){
	$this->layout='front';
}
	public function gstregistration() {
		 $this->layout='front';
	
}

public function esi(){
	$this->layout='front';
	/* if ($this->request->is('post'))
	{
		$this->Registration->create();
		$this->Registration->set($this->request->data);
		if($this->Registration->validates())
		{
			echo 'success';exit;
			$this->Registration->save($this->request->data);
		}
		else
		{
			echo 'error';exit;
			$errors=$this->Registration->validationErrors;
	}	
	} */
	
if ($this->request->is('post')) {

			$data = $this->request->data;
			//pr($data);die;

			$this->Registration->create();

			if (!empty($data)) {
				$this->Registration->save($data);
				//pr($data);die;
				$this->Session->setFlash(__('Data insertion has been successfully'));

				//$this->redirect(array('action' => 'login', 'admin' => false));

			} else {

				$this->Session->setFlash(__('The Registration could not be created. Please, try again.'));

			}	

        }
	
}

public function esi_regis()
{
	//$this->autoRender=false;
	 if ($this->request->is('post')) {

			$data = $this->request->data;
			//pr($data);die;

			$this->Registration->create();

			if ($this->Registration->save($data)) {

				$this->Session->setFlash(__('Upload has been successfully'));

				//$this->redirect(array('action' => 'login', 'admin' => false));

			} else {

				$this->Session->setFlash(__('The Registration could not be created. Please, try again.'));

			}	

        }
}
public function accounting(){
	$this->layout='front';
}
public function aduit(){
	$this->layout='front';
}
public function annual($id=null){
	$this->layout='front';
	//$this->set('pagedetail', $this->Pagedetail->findById($id));
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
}
public function annualcom($id=null){
	$this->layout='front';
	//$this->set('pagedetail', $this->Pagedetail->findById($id));
	$this->redirect(array("controller" => "pages", 
                      "action" => "nidh",
                     $id));
	//$this->render('pages/nidh');
}
public function closeone(){
	$this->layout='front';
}
public function closeprivate(){
	$this->layout='front';
}
public function closepublic(){
	$this->layout='front';
}
public function copyp(){
	$this->layout='front';
}
public function design(){
	$this->layout='front';
}
public function digital(){
	$this->layout='front';
}
public function fssai(){
	$this->layout='front';
}
public function trade(){
	$this->layout='front';
}
public function trademarkreg(){
	$this->layout='front';
}
public function trademark(){
	$this->layout='front';
}
public function trademarkrecti(){
	$this->layout='front';
}



}