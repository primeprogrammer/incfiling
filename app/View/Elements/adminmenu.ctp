<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav" style="margin-left:100px;">
        <li class="<?php echo (!empty($this->params['action']) && ($this->params['action']=='index') )?'active' :'inactive' ?>"> <?php echo $this->Html->link('<i class="icon-dashboard"></i><span>Dashboard</span>',array('controller' => 'Users','action' => 'index','admin' => true),array('escape' => false));		?></li>
        
		  
			  
			
			 <li>
                
				
				<?php echo $this->Html->link('<i class="icon-picture"></i><span>Category</span>',array('controller' => 'categories','action' => 'categories','admin' => true),array('escape' => false));		?>
			
			
			</li>
			
			<li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-picture"></i>
					<span>Product</span>
					<b class="caret"></b>
				</a>
			<ul class="dropdown-menu">
			       <li><?php echo $this->Html->link("List",array('controller'=>'Products','action'=>'admin_productlist','admin'=>true));?></li>
			
			       <li><?php echo $this->Html->link("Add",array('controller'=>'Products','action'=>'addproduct','admin'=>true));?></li>
			
			</ul>
			
			
			</li>
			
			
			<li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-picture"></i>
					<span>Subscriber</span>
					<b class="caret"></b>
				</a>
			<ul class="dropdown-menu">
			       <li><?php echo $this->Html->link("List",array('controller'=>'subscribers','action'=>'subscriberslist','admin'=>true));?></li>
			
			       <li><?php echo $this->Html->link("Add",array('controller'=>'subscribers','action'=>'addsubscribers','admin'=>true));?></li>
				  
			
			</ul>
			
			
			</li>
			
			
			
			<li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
					<i class="icon-picture"></i>
					<span>Distributor</span>
					<b class="caret"></b>
				</a>
			<ul class="dropdown-menu">
			       <li><?php echo $this->Html->link("List",array('controller'=>'distributors','action'=>'distributorlist','admin'=>true));?></li>
			
			       <li><?php echo $this->Html->link("Add",array('controller'=>'distributors','action'=>'adddistributors','admin'=>true));?></li>
			
			</ul>
			
			
			</li>
			
			
			
			
			
			
			
			
			<li class="dropdown">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
					<i > <img src="/gs.jpg"  width="30px"  height="30px" style="margin-top:-5px"/></i>
					<span>Gallery</span>
					<b class="caret"></b>
				</a>
			<ul class="dropdown-menu">
			       <li><?php echo $this->Html->link("List",array('controller'=>'Galleries','action'=>'gallerylist','admin'=>true));?></li>
			
			       <li><?php echo $this->Html->link("Add Images",array('controller'=>'Galleries','action'=>'addpicture','admin'=>true));?></li>
			
			</ul>
			
			
			</li>
			
			
			
			
			
			
			
			
			
			<li>
              
				
				<?php echo $this->Html->link('<i class="icon-picture"></i><span>Vendor</span>',array('controller' => 'users','action' => 'vendor','admin' => true),array('escape' => false));		?>
			
			
			
			</li>
			
			
			


       <li> 
       
      
       
       
       
       <?php   echo $this->Form->postLink(__('<i class="icon-small icon-signout"></i><span>Logout</span>'), array(

'controller' => 'Users',

                 'action' => 'logout',

                 'admin'=>false

                

                ), array('escape' => false)); 
 ?></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->






<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>