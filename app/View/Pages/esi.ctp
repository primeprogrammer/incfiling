<div class="col-sm-12" style="min-height:600px;background-image:url('/img/a3.jpg');" class="img-responsive"><br><br><br><br>
<div class="col-sm-12" style="min-height:400px;">
<div class="col-sm-9" style="min-height:400px;"><br><br><br>
<span style="color:white;font-size:25px;border-bottom:2px solid white;">ESI REGISTRATION</span><br><br>

<span style="color:white;font-size:25px;">ESI is a must for entities employing 20 or more persons. ESI contribution is required for employees earning less than Rs.21,000/- per month. INCFilings can help obtain ESI registration from Rs.7899/-

</span>
</div>
<div class="col-sm-3" style="min-height:400px;background-color:rgba(128,128,128,0.6);box-shadow:0px 0px 5px 5px black;"><br>
<div class="col-sm-12" style="min-height:50px;background:#66bb6a;;margin-left:-50px;">
<h4 style="color:white;padding-top:2%;">ESI Registration</h4>
</div>
<br><br><br><br>
<?php echo $this->Form->create('pages',array('url'=>'esi'))?>

 <div class="form-group">
 
    <label for="name" style="color:white;">Name:</label>
	<?php echo $this->Form->input('name',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Name')); ?>
	<?php echo $this->Form->input('type',array('type'=>'hidden','label'=>false,'div'=>false,'value'=>'esi')); ?>
                    
  </div>
  <div class="form-group">
    <label for="email" style="color:white;">Email:</label>
   
	<?php echo $this->Form->input('email',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Email')); ?>
  </div>
   <div class="form-group">
    <label for="mobile" style="color:white;">Mobile:</label>

	<?php echo $this->Form->input('mobile',array('class'=>'form-control','label'=>false,'div'=>false,'placeholder'=>'Mobile')); ?>
  </div>
  	<?php echo $this->Form->button('GET START',['type'=>'submit'],['class'=>'btn btn-success form-control',' style'=>'background:#66bb6a;border-style:none']);?>

<?php echo $this->Form->end(); ?>
</div>
</div>

</div>