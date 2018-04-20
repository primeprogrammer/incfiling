<div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
<div class="content">
       
        <div class="main-content">
		
                 <div class="panel panel-default">
        
        <div class="panel-body">
            <?php echo $this->Form->create('User',array('controller'=>'users','action'=>'subscriberslist', 'admin'=>true)); ?>
                <div class="form-group">
                    <label><h4 class="page-title">Email Id</h4></label>
                   <?php echo $this->Form->input('email',array('label'=>false,'div'=>false, 'class'=>'form-control span2','required'=>true)); ?>		
					
                </div>
               
                <div class="form-group">
                    <?php echo $this->Form->end(array('label' => __('Submit!', true), 'class' => 'btn btn-primary')); ?>
                   
                </div>
                    <div class="clearfix"></div>
           <div class="widget-content">
	      				
			      		<h6>List</h6>
			      		
			      		 <!-- Table -->
  <table class="table">
    <thead><tr><td>#</td><td>Name</td><td>Created</td><td>Action</td></tr></thead>
	<?php $count=1; ?>
		<?php foreach($subscribers as $subscriber): ?>	
	<tr>
	   <td><?php echo $count; ?>.</td><td><?php echo $subscriber['Subscriber']['email']; ?></td>
	   
	   <td><?php echo $this->Time->niceShort($subscriber['Subscriber']['created']); ?></td>
	   <td colspan="2">
			<?php
				echo $this->Html->link("Delete", array('controller'=>'users','action'=>'subscribeddeletion', $subscriber['Subscriber']['id'], 'admin' => true));
			?></td>
	 </tr>
	<?php $count++; endforeach; ?>
	
  </table>
                 <center><ul class="pagination pagination-lg"> <li><a href="#">&laquo;</a></li> <li class="active"><a href="#">1</a></li> <li class="disabled"><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul></center>
			
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
