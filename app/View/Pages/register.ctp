<?php echo $this->element('slider'); ?>
<!--start content-->
<div class="col-sm-12 popup" style="min-height:900px;background:black;">
<div class='cnt223' style="background-image:url('/img/a3.jpg'); margin-top:15px;">
	<span style="font-size:45px;"><a href='' onclick="myFunction()" class='close' style="font-size:45px;">&times;</a></span>
	<center>
		<h1 style="color: white;">Register</h1>
	<p style="color: white;">Please register to get access your activity.</p>
	</center>
		<div class="row">
			<div class="col-sm-12">
				<div class="col-sm-5">
					<img class="loginimg img-fluid" style="margin-top:125px; width: 210px; height: 120px; margin-left:-30px;" src="/img/login-box.png" alt="Login/Register">
				</div>
				<div class="col-sm-7" style=" background: white;">
					<section>
						<?php echo $this->Form->create('User', ['url'=>'newuser']); ?>
							<div class="form-group">
							<label for="name">Name: </label>
							<?=$this->Form->input('name', array('div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Enter your Name', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<label for="name">username: </label>
							<?=$this->Form->input('username', array('div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Enter your Username', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<label for="email">Email: </label>
							<?=$this->Form->input('email', array('div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Enter your Email', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<label for="phone">Phone: </label>
							<?=$this->Form->input('contact_number', array('div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Enter your Phone Number', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<label for="password">Password: </label>
							<?=$this->Form->input('password', array('type'=>'password','div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Password', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<label for="password">Confirm Password: </label>
							<?=$this->Form->input('confirm_password', array('type'=>'password','div'=>false,'label'=>false,'class' => 'form-control input-md','placeholder'=>'Confirm Password', 'required'=>true)); ?>
							</div>
							<div class="form-group">
							<?=$this->Form->button('Register', array('div'=>false, 'type'=>'submit','label'=>false,'class' => 'btn btn-info')); ?>
							</div>
						<?php echo $this->Form->end();?>
					</section>
				</div>
			</div>
		</div>
	</div>
<div class="col-sm-12" style="min-height:400px;">
<div class="col-sm-6" style="min-height:400px;"><br><br>
<span style="font-size:25px;color:white;">HELLO, WE ARE INDIAFILINGS</span>
<span style="font-size:20px;color:white;">________________________________</span>
<br><br><br>
<span style="color:white;">IndiaFilings is India's largest online business services platform dedicated to helping people easily start and grow their business, at an affordable cost. We were started in October 2013 with the mission of making it easier for Entrepreneurs to start their business. We have since helped start and operate thousands of businesses by offering a range of business services. Our aim is to help the entrepreneur on the legal and regulatory requirements, and be a partner throughout the business lifecycle, offering support at every stage to ensure the business remains compliant and continually growing.

In 2016, we launched specialized services for families to help them with a wide range of legal and regulatory issues. Now you can easily create a Will or avail a wide-range of services required to navigate the legal and regulatory landscape as a family, with ease.</span>
</div>
<div class="col-sm-6"><br><br>
<center>
<img src="img/s.jpg" class="img-responsive"/>
</center>
</div>
</div>
<center><span style="font-size:25px;color:white;">We make it easier for you to do business</span></center>
<center><span style="font-size:20px;color:white;">_________________________________________________________</span></center><br><br><br>

<div class="col-sm-3" style="min-height:300px;border:1px solid white;"><br>
<center><span style="color:white;font-size:20px;">Start a Business</span></center>
<center><span style="font-size:20px;color:white;">_____________________</span></center>
<br>
<center><span style="color:white;">Talk to our Experts and get help with everything from registering a private limited company to Nidhi Company.</span></center><br><br><br>
<center><button type="button" class="btn btn-info">KNOW MORE !</button></center>
</div>
<div class="col-sm-3" style="min-height:300px;border:1px solid white;margin-left:12%;"><br>
<center><span style="color:white;font-size:20px;">Protect a Brand</span></center>
<center><span style="font-size:20px;color:white;">_____________________</span></center>
<br>
<center><span style="color:white;">Talk to our Experts and get help with everything from trademark filing to patent registration in India.

</span></center><br><br><br>
<center><button type="button" class="btn btn-info">KNOW MORE !</button></center>
</div>
<div class="col-sm-3" style="min-height:300px;border:1px solid white;margin-left:12%;"><br>
<center><span style="color:white;font-size:20px;">File Tax Returns</span></center>
<center><span style="font-size:20px;color:white;">_____________________</span></center>
<br>
<center><span style="color:white;">Talk to our Experts and get help with everything from GST return filing to income tax return filing.

</span></center><br><br><br>
<center><button type="button" class="btn btn-info">KNOW MORE !</button></center>
</div>


</div>
<div class="col-sm-12" style="min-height:400px;">
<div class="row">
<div class="col-sm-3"  style="min-height:400px;background:#39B24B;">

            <!--Box 1-->

                <div class="text-box" style=""><br><br>
                    <center><i class="fa fa-paper-plane" style="color:white;font-size:25px;"></i></center>
                   <center> <h3 style="color:white;">Start a Business</h3></center>
				   <center><span style="color:white;font-size:20px;">_________________________</span></center><br><br>
                    <p style="color:white;">IndiaFilings is the leader in business incorporation services in India. We specialise in registering a wide range of business entities like Limited Liability Partnership, Private Limited Company, One Person Company, Limited Company, Nidhi Company, Trust, Society and Section 8 Company.</p>
                </div>
           
</div>
<div class="col-sm-3"  style="min-height:400px;background: #56B847;">
                <div class="text-box" style=""><br><br>
                  <center>  <i class="fa fa-rupee" style="color:white;font-size:25px;"></i></center>
                    <center><h3 style="color:white;">GST Services</h3></center>
					   <center><span style="color:white;font-size:20px;">_________________________</span></center><br><br>
                    <p style="color:white;">IndiaFilings provides end-to-end GST services from GST registration to GST return. You can easily create invoices, track expenses, manage inventory and file GST returns through our cloud-based LEDGERS GST software. Get in touch with our Experts for GST related advisory.</p>
                </div>
</div>
<div class="col-sm-3"  style="min-height:400px;background:#8bc73f;">
 <div class="text-box" style=""><br><br>
                   <center><i class="fa fa-trademark" style="color:white;font-size:25px;"></i></center>
                   <center> <h3 style="color:white;">Trademarks & Patent</h3></center>
					<center><span style="color:white;font-size:20px;">_________________________</span></center><br><br>
                    <p style="color:white;">IndiaFilings provides the entire range of services required to register and maintain protection for your intellectual property assets. We can help you register trademarks, copyrights, designs and patents. We can also help you with trademark objection or trademark opposition.</p>
                </div>
</div>
<div class="col-sm-3"  style="min-height:400px;background:#a3cf39;">
 <div class="text-box" style=""><br><br>
                   <center> <i class="fa fa-bank" style="color:white;"></i></center>
                    <center><h3 style="color:white;">Tax Compliance</h3></center>
					<center><span style="color:white;font-size:20px;">_________________________</span></center><br><br>
                    <p style="color:white;">IndiaFilings provides a range of compliance solutions from tax registration to tax return filing. Obtain tax registration or file returns with the income tax department, ESI department, PF department, Ministry of Corporate Affairs and more. Maintain your compliance online through IndiaFilings.</p>
                </div>
				
</div>
<div class="col-sm-12" style="min-height:500px;background:black;"><br><br>
<div class="col-sm-6" style="min-height:500px;"><br><br>
<center><img src="img/aaa.jpg" class="img-responsive"></center>
</div>
<div class="col-sm-6" style="min-height:500px;"><br>
<center><span style="color:white;font-size:25px;">ONLINE EASE LOCAL REACH</span></center>
					<center><span style="color:white;font-size:20px;">_______________________________</span></center><br><br>
					<span style="color:white;">We utilise a mix of technology and human touch to deliver quality business services, at scale across india. With a network of over 3000 professionals spread across over 170+ cities and towns, we have local reach while being highly accessible through the internet and smart phone.</span>
					<br><br><br>
					<i class="fa fa-3x fa-coffee" style="color:white;"></i>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-3x fa-briefcase" style="color:white;"></i>
					 
					
					  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-3x fa-location-arrow" style="color:white;"></i>
                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-3x fa-users" style="color:white;"></i>
                             <br>  <br> <span style="color:white;">400000</span><span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6000+</span><span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;180+</span><span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;400+</span>
							 <br><br>
				<span style="color:white;">Entrepreneurs</span>	<span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Professionals</span>	
<span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cities </span><span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Team </span>				
<br><br>
<span style="color:white;">Served</span>							
       <span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network</span>                            
       <span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Present</span>                            
       <span style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strength</span>                            
</div>
</div>
<div class="col-sm-12" style="min-height:200px;background:gray;"><br><br>
<span style="color:white;font-size:25px;">Want to know more about us?</span>
<br>
<span style="color:white;">INCFilings is India's largest cloud-based business services platform dedicated to helping Entrepreneurs easily start and grow </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-default" style="background:black;"><span style="font-size:25px;color:white;">Aboutus</span></button>
<br>
<span style="color:white;">their business, at an affordable cost.</span>
</div>
<div class="col-sm-12" style="min-height:500px;background:white;"><br>
<div class="col-sm-6" style="min-height:500px;">
<img src="img/ann.jpg" class="img-responsive"/>
</div>
<div class="col-sm-6" style="min-height:500px;"><br><br><br>
<span style="color:black;font-size:25px;">DOING BUSINESS IS EASY & FAST</span>
<span style="color:black;font-size:20px;">________________________________________</span>
<br><br><br>
<span style="color:black;">Easily chat with Business Experts, find answers to thousands of FAQs, read business articles, get statutory due date alerts, start a company or register a trademark through the IndiaFilings App. Download India's first mobile app for starting a company or registering a trademark today!</span>
<br><br><br><br><br><br>
<button type="button" class="btn btn-default" style="background:black;"><span style="color:white;font-size:25px;">Download</span></button>
</div>
</div>
</div>
<!--end content-->
