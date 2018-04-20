			
<?php echo $this->element('nav'); ?>
<div class="content">
  <center><?php echo $this->Session->flash(); ?></center>
        <div class="header">
            
            <h1 class="page-title">Distributors List</h1>
                  <!--  <ul class="breadcrumb">
            <li><a href="javascript:void();">Home</a> </li>
            <li class="active">Distributor</li>
        </ul>
-->
        </div>
        <div class="main-content">
    
<table class="table">
  <thead>
    <tr>
      <th>#</th>
      <th>Image</th>
      <th>Distributor Name</th>
      <th>Created</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
  <?php $count=1; ?>
		<?php foreach($distributors as $distributor): ?>	
    <tr>
      <td><?php echo $count; ?>.</td>
      <td><?php          echo '<img src="http://agarwaltc.com/files/'.$distributor['Distributor']['image'].'" width="100px" height="75px" />';  ?></td>
      <td><?php echo (htmlspecialchars_decode(html_entity_decode(($distributor['Distributor']['distributor_name'])))); ?></td>
      <td><?php echo $distributor['Distributor']['created']; ?></td>
      <td width="5%">
          <a href="/admin/distributors/edit/<?php echo base64_encode($distributor['Distributor']['id']); ?>"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;
		 
        
         
		   <?php
         echo $this->Html->link(
       '',
        "#",
        array("class"=>"fa fa-trash-o", "data-id"=>$distributor['Distributor']['id']) //$user['User']['id'];
        );
       ?>
      </td>
    </tr>
 	<?php $count++;
	 endforeach; ?>
		<?php unset($user); ?>
  </tbody>
</table>



<div style="color:#627190;" align="center">
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</div>

	<div class="paging" align="center" style="margin-left:0px;">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>


<a data-target="#ConfirmDelete" role="button" data-toggle="modal" id="trigger"></a>
     <div class="modal fade" id="ConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">User Deletion</h4>
              </div>
              <div class="modal-body">
                  Do you  really want  to delete this element?
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <div style="display:inline;" id="ajax_button"></div>
              </div>
          </div>
      </div>
  </div>
  <script type="text/javascript">
      $(".fa-trash-o").click(function(){
       $("#ajax_button").html("<a href='<?php echo $this->base;?>/admin/distributors/delete/"+ $(this).attr("data-id")+"' class='btn btn-danger'>Confirm</a>");
      $("#trigger").click();  
 });
</script>

            <footer>
                <hr>

                <!-- Purchase a site license to remove this link from the footer: http://www.portnine.com/bootstrap-themes -->
               
            </footer>
        </div>
    </div>