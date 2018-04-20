			


<div class="main-inner">

	    <div class="container">

<div class="row">	      	
	      	
	      	<div class="span12">
	      		
	      		<div id="target-1" class="widget">



<div class="widget-content">
<div class="content">
  
        <div class="header">
            
            <h1 class="page-title">Vendor List</h1>
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
      <th>Vendor name</th>
      <th>Email</th>
      <th>Contact No</th>
      <th style="width: 3.5em;">Discription</th>
	  <th>Action</th>
	  
    </tr>
  </thead>
  <tbody>
  <tr>
 <?php $count=1; 
 //echo "<pre>";
 //print_r($products);die;
 
 ?>
		<?php foreach ($vendor as $van): ?>	
    <tr>
      <td><?php echo $count; ?>.</td>
	  
      <td>
	  <?php echo $van['Vendor']['name'];
	 
				         ?>  
		 </td>
		            <td><?php echo $van['Vendor']['email']; ?></td>
			
		
			

      <td><?php echo $van['Vendor']['contact']; ?></td>
	  <td><?php   echo $van['Vendor']['discription'];?></td>
 <td>
 
 
 
 <?php echo $this->Html->link("Edit",array('controller'=>'users','action'=>'vendoredit', $van['Vendor']['id'], 'admin' => true) ); ?> /
			<?php
				//echo $this->Form->postLink("Delete", array('action'=>'delete', $product['Product']['id'], 'admin' => true));
				
				
				
				echo $this->Form->postLink(__('Delete'), array(
                               'controller'=>'users',
                               'action' => 'vdelete',
                                 $van['Vendor']['id']),
                                null, 
                                __('Are you sure you want to delete # %s?', 
                                $van['Vendor']['id'])
 ); 
	  
	  
				
				
				
			?>
 
 
 
 
 
 </td>
 
 
 
 <?php 
   $count++;

 endforeach; ?>
		
 
 
 
 </tr>
 
 
  </tbody>
</table>




	
	</div>



   
  <script type="text/javascript">
      $(".fa-trash-o").click(function(){
       $("#ajax_button").html("<a href='<?php echo $this->base;?>/admin/distributors/delete/"+ $(this).attr("data-id")+"' class='btn btn-danger'>Confirm</a>");
      $("#trigger").click();  
 });
</script>

</div>
        </div>
    </div>
	</div>
</div>
</div>
</div>
</div>