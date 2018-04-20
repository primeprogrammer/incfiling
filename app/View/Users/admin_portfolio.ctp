

<div class="content">

        

        <div class="main-content">

		

                 <div class="panel panel-default">

        <p class="panel-heading no-collapse">Add New Portfolio</p>

        <div class="panel-body">

           
		            <?php echo $this->Form->create(null,array('type' => 'file', 'class' => 'classname', 'url'=>array('controller'=>'users','action'=>'portfolio','admin'=>true) ) ); ?>

					

                    <label>Enter Campaign name</label>

					<center>
					<div class="row">

                        <div class="col-xs-6">
                         <div class="form-group">
                        	
                        <?php echo $this->Form->input('title',array('label'=>false,'div'=>false, 'class'=>'form-control span12','required'=>true)); ?>	
						</div></div></div><br><br>
						<p class="pull-left"><label >Enter message</label></p>
						<div class="clearfix"></div>
						<div class="row">
						
                           <div class="col-xs-6">
						   
                             <div class="form-group">
                       <?php echo $this->Form->textarea('msg',array('label'=>false,'div'=>false, 'class'=>'form-control span12','required'=>true)); ?>		

						</div></div>
						

						</div><br><br>
						<p class="pull-left"><label >Upload File</label></p>
						<div class="clearfix"></div>
						<div class="row">
						
                           <div class="col-xs-6">
						   
                             <div class="form-group">
                        <?php echo $this->Form->input('file.',array('type'=>'file','label'=>false,'div'=>false, 'class'=>'form-control span12','multiple','required'=>true)); ?>		

						</div></div>
						<div class="form-group">

                    <?php echo $this->Form->end(array('label' => __('Send', true), 'class' => 'btn btn-primary pull-center')); ?>

                   

                 </div>

						</div>	
                   </center>
								

                  

				   

				  

                    <div class="clearfix"></div>
					<br><br>
<hr>

				  <?php if(!empty($img)){?>
				<table class="table" id="sampleTable" style="">
					<thead>
						<tr>
							<th>S.No</th>
							<th>Campaign</th>
							<th>message</th>
							<th>Document Name</th>
							<th>Mail Created Date</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
					
					<?php 
					//$file=unserialize($row['Document']['name']);
							   

					$count=1;
					foreach ($img as $row){
						$ext=unserialize($row['Document']['ext']);
						$file=unserialize($row['Document']['name']);
						//pr($file);die;
						?>
					<tr>
					<td><?php echo $count++;?></td>
					<td><?php echo $row['Document']['title'];?></td>
					<td><?php echo $row['Document']['message'];?></td>
					  <td><p>
					  <?php for($i=0;$i<count($file);$i++){
					  
					 if( in_array( strtolower($ext[$i]), array( 'pdf','zip'))){ 
						if($ext[$i]=='pdf'){?>
					 <a href="<?php echo '/document/'.$file[$i];?>" target="_blank"><img src="/img/pdf.png" style="width:50px;height:50px" alt="" /></a>
						<?php } else {?>
					  <a href="<?php echo '/document/'.$file[$i];?>" target="_blank" ><img src="/img/zip.jpg" style="width:50px;height:50px" alt="" /></a>
					 <?php }} 
					  else{?>
				<a href="<?php echo '/document/'.$file[$i];?>" target="_blank" > <img src="<?php echo '/document/'.$file[$i];?>" style="width:50px;height:50px;display:inline-block" alt="" /></a>
					
					  <?php }}?>
					  </p></td>
					 <td><?php echo  date('M j, Y',strtotime($row['Document']['created']));?></td>
				<td><?php echo $this->Form->postLink('Resend', array('controller'=>'users','action' => 'add_row',$row['Document']['id'],'admin'=>true), array('class' => 'btn btn-primary'));?>|
				<?php echo $this->Form->postLink('Delete', array('controller'=>'users','action' => 'mail_delete',$row['Document']['id'],'admin'=>true), array('class' => 'btn btn-primary'),__('Are you sure you want to delete'));?></td>
					</tr>
					<?php } ?>
					
					</tbody>
				</table>
				 <?php }?>

 

            

           

        </div>

    </div>

        </div>

    </div>

