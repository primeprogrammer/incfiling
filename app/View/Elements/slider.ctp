<!--start slider-->
<div class="col-sm-12" style="min-height:600px;background-image:url('/img/a1.jpg');"><br><br><br><br><br><br><br><br><br><br>
<div class="col-sm-6" style="min-height:60px;z-index:999;margin-left:25%;">
<div class="col-sm-12" style="min-height:60px;background:white;margin-top:50px;">
<div class="col-sm-4">
<?php echo $this->Form->create('Companydetail',array('url'=>$this->Html->url(array('controller'=>'pages', 'action'=>'companysearchrslt', 'admin'=>false))));

	echo  $this->Form->input('selectbuss', array(
                                      'type' => 'select',
									  'label'=>false,
                                      'options' => array('Company'=>'Company Name','cin'=>'CIN Number'),
									  'empty'=>'Start A Business',
									  'class'=>'selectpicker form-control',
									  'style'=>'margin-top:7%;background:#d7d7d7;border:none;'
                                     
                                  )
                  );
				  ?>
</div>
<div class="col-sm-5">
  
				  <?php
				  
				 echo $this->Form->input('searchitem', array(
                                      'type' => 'text',
									  'label'=>false,
									  'class'=>'form-control',
									  'style'=>'margin-top:4%;border:none;'
                                     
                                  )
                  );

	?>
</div>
<div class="col-sm-3">
<span style=" background:navy;margin-top:7%;color:white;" class="form-control"><a href="#" style="color:white;"><center>Start Now</center></a></span>
</div>

</div>
</div> 
</div>
</div>
<!--end slider-->
