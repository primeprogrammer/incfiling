<div class="main-inner">



	    <div class="container">

	

	      <div class="row">	      	

	      	

	      	<div class="span12">

	      		

	      		<div id="target-1" class="widget">

	      			

	      			<div class="widget-content">

	      				

			      		<h6>Users List</h6>

			      		

			      		 <!-- Table -->

  <table class="table">

    <thead><tr><td>#</td><td>Username</td><td>Email</td><td>Created</td><td>Action</td></tr></thead>

	<?php $count=1; ?>

		<?php foreach($users as $user): ?>	

	<tr>

	   <td><?php echo $count; ?></td><td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id'], 'admin' => true),array('escape' => false) );?>

	   </td>

	   <td><?php echo $user['User']['email']; ?></td>

	   <td><?php echo $this->Time->niceShort($user['User']['created']); ?></td>

	   <td colspan="2"><?php echo $this->Html->link(    "Edit",   array('action'=>'edit', $user['User']['id']) ); ?> | 

			<?php

				if( $user['User']['status'] != 0){ 

					echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id'], 'admin' => true));}else{

					echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id'], 'admin' => true));

					}

			?></td>

	 </tr>

	<?php endforeach; ?>

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

	    

