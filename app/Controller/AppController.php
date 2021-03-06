<?php



/**



 * Application level Controller



 *



 * This file is application-wide controller file. You can put all



 * application-wide controller-related methods here.



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







App::uses('Controller', 'Controller');







/**



 * Application Controller



 *



 * Add your application-wide methods in the class below, your controllers



 * will inherit them.



 *



 * @package		app.Controller



 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller



 */



class AppController extends Controller {



	// added the debug toolkit



	// sessions support



	// authorization for login and logut redirect



	public $components = array(



		'DebugKit.Toolbar',



		'Session',



        'Auth' => array(



		    'loginAction' => array('admin' => true,'controller' => 'users','action' => 'login'),



            'loginRedirect' => array('controller' => 'users', 'action' => 'index', 'admin'=>true),



            'logoutRedirect' => array('controller' => 'users', 'action' => 'login', 'admin'=>false),



			'authError' => 'You must be logged in to view this page.',



			'loginError' => 'Invalid Username or Password entered, please try again.',



			 'flash' => array(



				'element' => 'alert',



				'key' => 'auth',



				'params' => array(



					'plugin' => 'BoostCake',



					'class' => 'alert-error'



				)



			)



 



        ));



		public $helpers = array(



		//'Html' => array('className' => 'BoostCake.BoostCakeHtml'),



		'Session',



		'Html',



		



	//'Count.Count',



		//'Form' => array('className' => 'BoostCake.BoostCakeForm'),



		//'Paginator' => array('className' => 'BoostCake.BoostCakePaginator'),



	);







	public function isAuthorized($user) {



		// Here is where we should verify the role and give access based on role



		



		return true;



	}



	



	 public function beforeFilter() {



	     



        parent::beforeFilter();



         $this->Auth->allow('index','login','add','esi_regis','home','esi','annual','accounting','aduit','annualcom','closeone','closeprivate','closepublic','copyp','design','digital','fssai','prop','part','oneperson','liability','plc','pab','indi','nidh','procom',
		 'section','gstreg','forein','tem','profess','tanreg','pfreg','msme','import','fssai','trade','trademark','trademarkrecti','trademarkreg','companysearchrslt'); 







   





     



    }









   









	



}



