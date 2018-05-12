
	<div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
			      		<h6>Page List</h6>
	      				
			      		
			      		 <!-- Table -->
  <table class="table table-responsive">
    <thead><tr><td>#</td><td>Page Name</td><td>Last Update</td><td>Action</td></tr></thead>
	<?php $count=1; ?>
		<?php foreach($pagelist as $page): ?>	
	<tr >
	   <td ><?php echo $count;  ?>.</td>
	   <td ><?php echo $page['Pagedetail']['pagename'];  ?></td>
	   
	   
	   
	   <td ><?php  echo $page['Pagedetail']['modified']; ?></td>
	      <?php $id=$page['Pagedetail']['id'];?>
	   
	   <td ><?php echo $this->html->link("Update",array('action'=>'editpage','admin'=>true,$id))?>
			
			</td>
	
	
	</tr>
	<?php $count++; endforeach; ?>
	<style>
	.current{
		color: #999999;
    cursor: default;
	}
	</style>
	
	<tr><td colspan="8" align="center" class="pagination pagination-lg"><ul class="pagination">
            <?php
                echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $this->Paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
	 
	
	</td></tr>
  </table>
                 
			
		      		</div> <!-- /widget-content -->
					
					<?php //echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
<?php //echo $this->Paginator->numbers(array(   'class' => 'numbers'     ));?>
<?php //echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
		      		
	      		</div> <!-- /widget -->
	      		
      		</div> <!-- /span12 -->
      		
      		
      		
      		
      		 	
	      	
	      	

	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
    
	</div> <!-- /main-inner -->
	    
