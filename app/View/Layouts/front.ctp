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

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="/css/front/front.css" rel="stylesheet" type="text/css"/>
</head>
<body>

	  

	 <!-- /navbar -->

		

            <?php echo $this->element('header'); ?>

			  
			   

			 

			<center><i style="color:red;"><?php echo $this->Session->flash(); ?></i></center>

<div class="contanier-fluid">

			<?php echo $this->fetch('content'); ?>

		
</div>
			  <?php echo $this->element('footer'); ?>

			

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

