			

<<div class="main-inner">

	    <div class="container">
	
	      <div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">
	      			
	      			<div class="widget-content">
<div class="content">
       
        <div class="main-content">
		
                 <div class="panel panel-default">
        
        <div class="panel-body">
		              <div class="clearfix"></div>
           <div class="widget-content">
	  
    
<table class="table">
  <thead>
    <tr>
      <th>#</th>
	  <th>Name</th>
      <th>Contact Number</th>
	  <th>Email</th>
      <th>Message</th>
      <th>Send Date</th>
      <th style="width: 3.5em;"></th>
    </tr>
  </thead>
  <tbody>
  <?php $count=1; ?>
		<?php foreach($enquires as $enquiry): ?>	
    <tr>
      <td><?php echo $count; ?></td>
	  <td><?php echo $enquiry['Enquiry']['name']; ?></td>
	  <td><?php echo $enquiry['Enquiry']['email']; ?></td>
      <td><?php echo $enquiry['Enquiry']['contact_number']; ?></td>
      <td><div style="display:inline-table; overflow:scroll;"><?php echo $enquiry['Enquiry']['message']; ?></div>
	  </td>
      <td><?php echo $enquiry['Enquiry']['created']; ?></td>
      <td width="5%">
        
			<?php
				echo $this->Html->link("Delete", array('controller'=>'users','action'=>'enquierydel', $enquiry['Enquiry']['id'], 'admin' => true));
			?>
     
		  
      </td>
    </tr>
 	<?php $count++;
	 endforeach; ?>
		<?php unset($user); ?>
  </tbody>
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
	
	 <a data-target="#ConfirmDelete" role="button" data-toggle="modal" id="trigger"></a>
     <div class="modal fade" id="ConfirmDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Enquiry Deletion</h4>
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
       $("#ajax_button").html("<a href='<?php echo $this->base;?>/admin/users/enquierydel/"+ $(this).attr("data-id")+";?>' class='btn btn-danger'>Confirm</a>");
      $("#trigger").click();  
 });
</script>


          