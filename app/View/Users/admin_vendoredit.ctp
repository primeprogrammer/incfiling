


<div class="main-inner">

	    <div class="container ">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content"style ="margin-left:50px;">
					<h3>Vendor edit</h3>
<div class="content">
       
        <div class="main-content">
		
                 <div class="panel panel-default">
        
        <div class="panel-body">
		              <div class="clearfix"></div>
           <div class="widget-content">





 <?php echo $this->Form->create('Vendor', array( 'url'=>array('controller'=>'users','action'=>'vendoredit','admin'=>true),"method"=>"post")); ?>
		<?php   echo $this->Form->hidden('id', array('value' => $this->data['Vendor']['id'])); ?>
						
						 <?php echo $this->Form->input('name', array('type'=>'text','placeholder'=>'Enter name', 'class'=>'form-control span4','required'=>true,'label'=>false,
                                ));?>
						
						 <?php echo $this->Form->input('email', array('type'=>'text','placeholder'=>'Enter  email', 'class'=>'form-control span4','required'=>true,'label'=>false,
                                ));?>
						
						<?php echo $this->Form->input('contact', array('type'=>'text','placeholder'=>'Enter  contact', 'class'=>'form-control span4','required'=>true,'label'=>false,
                                ));?>
								<?php echo $this->Form->input('description', array('type'=>'text','placeholder'=>'Enter  description', 'class'=>'form-control span4','required'=>true,'label'=>false,
                                ));?>
						
						 <?php echo $this->Form->end(array('label' => __('Save!', true), 'class' => 'btn btn-primary pull-center', 'style'=>'width:50%')); ?>
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 
						 </div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	
	

          
        </div>
    
						