<?php

/**

 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)

 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 *

 * Licensed under The MIT License

 * For full copyright and license information, please see the LICENSE.txt

 * Redistributions of files must retain the above copyright notice.

 *

 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)

 * @link          http://cakephp.org CakePHP(tm) Project

 * @package       app.View.Layouts

 * @since         CakePHP(tm) v 0.10.0.1076

 * @license       http://www.opensource.org/licenses/mit-license.php MIT License

 */



//$cakeDescription = __d('cake_dev', 'JMD Enterprises');

$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())

?>

<!DOCTYPE html>

<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="apple-mobile-web-app-capable" content="yes"> 

    

	<?php echo $this->Html->charset(); ?>

	<title>

		<?php //echo $cakeDescription ?>:

		<?php echo $this->fetch('title'); ?>

	</title>

	<?php

		echo $this->Html->meta('icon');



		echo $this->Html->css(array('admin/bootstrap.min','admin/bootstrap-responsive.min','admin/font-awesome','admin/style','admin/pages/signin'));



		echo $this->fetch('meta');

		echo $this->fetch('css');

		echo $this->fetch('script');

		

	?>

	

	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	

</head>

<body>

	  

	 <!-- /navbar -->

		

            <?php echo $this->element('nav'); ?>

			   <?php if($this->Session->check('Auth.User')){ 

			   echo $this->element('adminmenu');

			   } ?>

			   

			 

			<center><i style="color:red;"><?php echo $this->Session->flash(); ?></i></center>



			<?php echo $this->fetch('content'); ?>

		

			

			<?php echo $this->Html->script(array('bootstrap','signin')); ?>

			 <noscript><center><span style="color:#FF0000; text-align:center;">You don't have javascript enabled. Due to this some of features will not work. To enable <a href="http://www.enable-javascript.com/" target="_blank">click here!</a></span></center></noscript>

	<script type="text/javascript">

	       // $(document).bind('contextmenu', function (e) {

  						//e.preventDefault();

 						//alert('Right Click is not allowed');
//
			//});

			

			

            setTimeout(function() {

                $('.message').fadeOut();

                $('.message').val('')

            }, 8000);

            setTimeout(function() {

                $('.success').fadeOut();

                $('.success').val('')

            }, 8000);



        </script>

<script src="/js/bootstrap-datepicker.js"></script>

       	



	<?php echo $this->element('sql_dump'); ?>

</body>

</html>

