
<!--start header-->
<div class="col-sm-12" style="min-height:80px;background:black;">
<div class="col-sm-2" style="min-height:80px;">
<img src="/img/ll.png" class="img-responsive"/>
</div>
<div class="col-sm-10" style="min-height:80px;"><br>
<nav class="navbar navbar-inverse" style="background:black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-left:19%;">
        <li><a href="#" style="color:white;">Login/Register</a></li>
        <li><a href="#" style="color:white;">Need Help</a></li>
		 
        <li><a href="#" style="color:white;">Become An Associate</a></li> 
        
	
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
</div>
<div class="row">
<div class="col-sm-12" style="min-height:60px;background:gray;"><br>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
        </button>
        
    </div>
    <!--/.navbar-header-->
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		<li><!--<a href="/">Home</a>-->
		<?php echo $this->Html->link('Home', array('controller'=>'pages', 'action'=>'index','admin'=>false), array('escape'=>false)); ?>
								
		</li>
		
		<li class="dropdown">

	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Start A Business<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h6>&nbsp;&nbsp;&nbsp;FOR INDIAN OWNERS</h6>
							<li>
							<?php echo $this->Html->link('Proprietorship', array('controller'=>'pages', 'action'=>'prop','2','admin'=>false), array('escape'=>false)); ?>
					            </li>
								<li>
								<?php echo $this->Html->link('Partnership', array('controller'=>'pages', 'action'=>'part','3','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
							   <li>
								<?php echo $this->Html->link('One Person Company', array('controller'=>'pages', 'action'=>'oneperson','4','admin'=>false), array('escape'=>false)); ?>
					           </li>
					      
							   <li>
								<?php echo $this->Html->link('Limited Liability Partnership', array('controller'=>'pages', 'action'=>'liability','5','admin'=>false), array('escape'=>false)); ?>
					           </li>
					         <li>
								<?php echo $this->Html->link('Private Limited Company', array('controller'=>'pages', 'action'=>'plc','6','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Public Limited Company', array('controller'=>'pages', 'action'=>'pab','7','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            
					           
					            <li><a href="#">Check Company or LLP Name Availability</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h6>&nbsp;&nbsp;FOR FOREIGN OWNERS</h6>
							 <li>
								<?php echo $this->Html->link('Indian Subsidiary', array('controller'=>'pages', 'action'=>'indi','8','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           
								<h6>&nbsp;&nbsp;SPECIAL ENTITIES</h6>
								 <li>
								<?php echo $this->Html->link('Nidhi Company', array('controller'=>'pages', 'action'=>'nidh','1','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            <li>
								<?php echo $this->Html->link('Producer Company', array('controller'=>'pages', 'action'=>'procom','9','admin'=>false), array('escape'=>false)); ?>
					           </li>
					              <li>
								<?php echo $this->Html->link('Section 8 Company', array('controller'=>'pages', 'action'=>'section','10','admin'=>false), array('escape'=>false)); ?>
					           </li>
					          
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
			 <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrations<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;TAX REGISTRATIONS</h5>
							<li>
								<?php echo $this->Html->link('GST Registration', array('controller'=>'pages', 'action'=>'gstreg','11','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           <li>
								<?php echo $this->Html->link('GST Registration for Foreigners', array('controller'=>'pages', 'action'=>'forein','12','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            <li>
								<?php echo $this->Html->link('Temporary GST Registration', array('controller'=>'pages', 'action'=>'tem','13','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           
			                    <li>
								<?php echo $this->Html->link('Professional Tax', array('controller'=>'pages', 'action'=>'profess','14','admin'=>false), array('escape'=>false)); ?>
					           </li>
                                <li>
								<?php echo $this->Html->link('TAN Registration', array('controller'=>'pages', 'action'=>'tanreg','15','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            <li>
								<?php echo $this->Html->link('PF Registration', array('controller'=>'pages', 'action'=>'pfreg','16','admin'=>false), array('escape'=>false)); ?>
					           </li>
		
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>OTHER REGISTRATION<h5>
							<li>
								<?php echo $this->Html->link('ESI Registration', array('controller'=>'pages', 'action'=>'esi','17','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           	<li>
								<?php echo $this->Html->link('MSME Registration', array('controller'=>'pages', 'action'=>'msme','18','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
							   	<li>
								<?php echo $this->Html->link('Import Export Code', array('controller'=>'pages', 'action'=>'import','19','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           
					            	<li>
								<?php echo $this->Html->link('FSSAI Registration', array('controller'=>'pages', 'action'=>'fssai','20','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            
					            	<li>
								<?php echo $this->Html->link('Digital Signature', array('controller'=>'pages', 'action'=>'digital','21','admin'=>false), array('escape'=>false)); ?>
					           </li>
				               <li>
								<?php echo $this->Html->link('Trade License', array('controller'=>'pages', 'action'=>'trade','22','admin'=>false), array('escape'=>false)); ?>
					           </li>
					         
					           
								
								<li>
								<?php echo $this->Html->link('Find GST Rate for Goods & Services', array('controller'=>'pages', 'action'=>'trade','23','admin'=>false), array('escape'=>false)); ?>
					           </li>

				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	       
		   
		    <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Intellectual Property<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;Trademark</h5>
							 <li>
								<?php echo $this->Html->link('Trademark Registration', array('controller'=>'pages', 'action'=>'trademarkreg','24','admin'=>false), array('escape'=>false)); ?>
					           </li>
							 
								<li>
								<?php echo $this->Html->link('Trademark Rectification', array('controller'=>'pages', 'action'=>'trademark','25','admin'=>false), array('escape'=>false)); ?>
					           </li>
					   <li>
								<?php echo $this->Html->link('Trademark Objection', array('controller'=>'pages', 'action'=>'trademarkrecti','26','admin'=>false), array('escape'=>false)); ?>
					           </li>
					      
					           
								 <li>
								<?php echo $this->Html->link('Trademark Opposition', array('controller'=>'pages', 'action'=>'trademarkrecti','27','admin'=>false), array('escape'=>false)); ?>
					           </li>
					           
								 <li>
								<?php echo $this->Html->link('Trademark Renewal', array('controller'=>'pages', 'action'=>'trademarkrecti','','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;others<h5>
							    <li>
								<?php echo $this->Html->link('Logo Designing', array('controller'=>'pages', 'action'=>'trademarkrecti','28','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Copyright Registration', array('controller'=>'pages', 'action'=>'trademarkrecti','29','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Design Registration', array('controller'=>'pages', 'action'=>'trademarkrecti','30','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Provisional Patent', array('controller'=>'pages', 'action'=>'trademarkrecti','31','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Patent Registration', array('controller'=>'pages', 'action'=>'trademarkrecti','32','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Find trademark class for over 8000 goods and services', array('controller'=>'pages','33', 'action'=>'trademarkrecti','34','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	       
		       <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Your Business<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row" style="width:834px;">
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;Annual Compliances</h5>
							   <li>
								<?php echo $this->Html->link('Annual Compliances for Pvt Ltd', array('controller'=>'pages', 'action'=>'annual','34','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('Annual Compliances for LLP', array('controller'=>'pages', 'action'=>'annualcom','35','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('ROC Annual Filing', array('controller'=>'pages', 'action'=>'trademarkrecti','36','admin'=>false), array('escape'=>false)); ?>
					           </li>
					            
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Close Company<h5>
							
							 <li>
								<?php echo $this->Html->link('Close One Person Company', array('controller'=>'pages', 'action'=>'trademarkrecti','37','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('Close Private Limited Company', array('controller'=>'pages', 'action'=>'trademarkrecti','38','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('Close Public Limited Company', array('controller'=>'pages', 'action'=>'trademarkrecti','39','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
							   <li>
								<?php echo $this->Html->link('Close Limited Liability Partnership', array('controller'=>'pages', 'action'=>'trademarkrecti','40','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
					            
				            </ul>
			            </div>
						  <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Change in Company<h5>
					           
								
								 <li>
								<?php echo $this->Html->link('Change Company Name', array('controller'=>'pages', 'action'=>'trademarkrecti','41','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('Change of Place of the Company', array('controller'=>'pages', 'action'=>'trademarkrecti','42','admin'=>false), array('escape'=>false)); ?>
					           </li>
							    <li>
								<?php echo $this->Html->link('Increase in Authorized Capital', array('controller'=>'pages', 'action'=>'trademarkrecti','43','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
							   <li>
								<?php echo $this->Html->link('Change of Object of the Company', array('controller'=>'pages', 'action'=>'trademarkrecti','44','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
							    <li>
								<?php echo $this->Html->link('Removal And Addition Of Directors/Partner', array('controller'=>'pages', 'action'=>'trademarkrecti','45','admin'=>false), array('escape'=>false)); ?>
					           </li>
								
								
				            </ul>
			            </div>
						 <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Change in LLP<h5>
					            
							   <li>
								<?php echo $this->Html->link('Change in LLP Agreements', array('controller'=>'pages', 'action'=>'trademarkrecti','46','admin'=>false), array('escape'=>false)); ?>
					           </li>
								<h6>&nbsp;&nbsp;&nbsp;Others</h6>
					           
								<li>
								<?php echo $this->Html->link('Accounting and Book Keeping', array('controller'=>'pages', 'action'=>'trademarkrecti','47','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('Audit of the Business', array('controller'=>'pages', 'action'=>'trademarkrecti','48','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('TDS Return', array('controller'=>'pages', 'action'=>'trademarkrecti','49','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('XBRL Filing', array('controller'=>'pages', 'action'=>'trademarkrecti','50','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   <li>
								<?php echo $this->Html->link('GST Return Filing', array('controller'=>'pages', 'action'=>'trademarkrecti','51','admin'=>false), array('escape'=>false)); ?>
					           </li>
							   
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>    
        </ul>
    </div>
    <!--/.navbar-collapse-->
</nav>
<!--/.navbar-->
</div>
</div>
</div>
<!--end header-->
