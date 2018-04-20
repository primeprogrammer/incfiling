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
            <?php echo $this->Form->create('User',array('controller'=>'users','action'=>'colors', 'admin'=>true)); ?>
                <div class="form-group">
                    <label><h4 class="page-title">Color Name</h4></label>
                   <?php echo $this->Form->input('title',array('label'=>false,'div'=>false, 'value'=>isset($this->request->data['Color']['title']) ? $this->request->data['Color']['title']:'', 'class'=>'form-control span2','required'=>true)); 
				   if(!empty($this->request->data)) echo $this->Form->hidden('id',array('value'=>$this->request->data['Color']['id']));
				   ?>		
					
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
		<?php foreach($colors as $color): ?>	
	<tr>
	   <td><?php echo $count; ?>.</td><td><?php echo $color['Color']['title']; ?></td>
	   
	   <td><?php echo $this->Time->niceShort($color['Color']['created']); ?></td>
	   <td colspan="2"><?php echo $this->Html->link(    "Edit",   array('controller'=>'users','action'=>'colors', $color['Color']['id']) ); ?> | 
			<?php
				echo $this->Html->link("Delete", array('controller'=>'users','action'=>'colordeletion', $color['Color']['id'], 'admin' => true));
			?></td>
	 </tr>
	<?php $count++; endforeach; ?>
	<tr><td colspan="5" align="center"><ul class="pagination pagination-lg"> <li><a href="#">&laquo;</a></li> <li class="active"><a href="#">1</a></li> <li class="disabled"><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li><a href="#">&raquo;</a></li> </ul></td></tr>
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
