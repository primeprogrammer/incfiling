<div class="main-inner">

	    <div class="container" style="float:right">
	
	      <div class="row">	      	
	      	
	      	<div class="span10">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
					<h3>Registered Company List</h3>
<div class="content">
       
        <div class="main-content">
		
                 <div class="panel panel-default">
        
        <div class="panel-body">
		   
<?php echo $this->Form->create('Companydetail', array('url'=>array('controller'=>'users','action'=>'regcompanylist','admin'=>true),"method"=>"post", "enctype"=>"multipart/form-data")); ?>
		
		
		<div class="form-group">
                
            
                    <label ><b><h4> Import</h4> </b></label>
					
					 <?php echo $this->Form->input('data',array('type'=>'file','class' => 'form-control', 'label' => false, 'placeholder' => 'csv upload')); ?>
        </div>
					
					<?php echo $this->Form->end(array('label' => __('Upload!', true), 'class' => 'btn btn-success pull-right','style'=>'margin-top:-40px;')); ?>   
					
                </div>
				
				
				
				
		              <div class="clearfix"></div>
           <div class="widget-content">
    
<table class="table" align="right">
  <thead>
    <tr>
      <th>#</th>
      
     
      <th>CIN</th>
	  <th>Company Name</th>
	  <th>Company Email</th>
	  <th>Company Status</th>
	  
      <th style="width:3.5em;"></th>
    </tr>
  </thead>
  <tbody>
  <?php $count=1; ?>
		<?php foreach($companylist as $company):?>	
    <tr>
      <td><?php echo $count;?>.</td>
	  
      
     
	<?php //echo $subscriber['Subscribers']['subscribers_name']  ?>    
      <td><?php echo $company['Companydetail']['cin']; ?></td>
	  <td><?php echo $company['Companydetail']['company_name']; ?></td>
	   <td><?php echo $company['Companydetail']['email']; ?></td>
	   <td><?php echo $company['Companydetail']['company_status']; ?></td>
	   <td><?php echo $company['Companydetail']['company_status']; ?></td>
     
    </tr>
	  
 	<?php $count++;
	 endforeach; ?>
		<?php unset($company); ?>
		
		<tr><td colspan="8" align="center" class="pagination pagination-lg"><ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	 
	
	</td></tr>
  </tbody>
</table>
 




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
    </div>
	
	