

 <?php echo $this->element('slider'); ?>
<!--start content-->
<div class="col-sm-12" style="min-height:900px;background:black;">

<?php
foreach($searchdetail as $data){?>

<p>
Company Name: <?php echo $data['Companydetail']['company_name']; ?>
</p>
<p>
Company CIN Number: <?php echo $data['Companydetail']['cin']; ?>
</p>
<?php
	
}
?>


</div>
<div class="col-sm-12" style="min-height:400px;">

</div>
<!--end content-->
