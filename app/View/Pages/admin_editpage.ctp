
     
     <div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
<div class="content">
        <div class="header">
            
            <h1 class="page-title">Update Page Detail</h1>
            

        </div>
        <div class="main-content">
		
                 <div class="panel panel-default">
        
        <div class="panel-body">

	   
           <?php 
		 //  pr($pagedetail);
		   echo $this->Form->create('Pagedetail', array('url'=>array('controller'=>'pages','action'=>'editpage','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
		      <?php echo $this->Form->hidden('id',array('value'=>$pagedetail['Pagedetail']['id'])); ?>   
	
		          	     	 <div class="form-group"><br>
                    <label><b>Page Name</b></label>
                    
					 <?php echo $this->Form->input('pagename', array('type'=>'text','placeholder'=>'Update Page Name', 'value'=>$pagedetail['Pagedetail']['pagename'], 'class'=>'form-control span8','required'=>true,'label'=>false,
                                ));?>
					  </div>  
					  	
 <div class="form-group"><br>
                    <label><b>Page Detail</b></label>
                    
					<?php echo htmlspecialchars_decode(html_entity_decode($this->Tinymce->input('Pagedetail.pagedetail', array( 
           'label' => false,
		   'div'=>false,
		   'value'=>$pagedetail['Pagedetail']['pagedetail'],
		   'class'=>'form-control span8'
            ),array( 
                'language'=>'en' 
            ), 
            'full' 
        ))); ?>
                </div>
                 
		 
				
				 
			  <div class="form-group"><br>
			  <br>
                    <?php echo $this->Form->end(array('label' => __('Submit!', true), 'class' => 'btn btn-primary pull-center')); ?>
                   
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

	