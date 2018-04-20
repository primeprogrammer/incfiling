

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
            <?php echo $this->Form->create('User',array('url'=>array('controller'=>'users','action'=>'categories', 'admin'=>true))); ?>
                <div class="form-group">
                    <label><h4 class="page-title">Course List</h4></label>
                   <?php echo $this->Form->input('title',array('label'=>false,'div'=>false, 'value'=>isset($this->request->data['Category']['title']) ? $this->request->data['Category']['title']:'', 'class'=>'form-control span2','required'=>true));
				   if(!empty($this->request->data)) echo $this->Form->hidden('id',array('value'=>$this->request->data['Category']['id'])); ?>		
					
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
		<?php foreach($categories as $category): ?>	
	<tr>
	   <td><?php echo $count; ?>.</td><td><?php echo $category['Category']['title']; ?></td>
	   
	   <td><?php echo $this->Time->niceShort($category['Category']['created']); ?></td>
	   <td colspan="2"><?php echo $this->Html->link(    "Edit",   array('controller'=>'users','action'=>'categories', $category['Category']['id'], 'admin' => true) ); ?> | 
			<?php
				echo $this->Html->link("Delete", array('action'=>'delete', $category['Category']['id'], 'admin' => true));
			?></td>
	 </tr>
	<?php $count++; endforeach; ?>
	<tr><td colspan="8" align="center" class="pagination pagination-lg"><ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	 
	
	</td></tr>
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
