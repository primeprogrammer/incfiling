<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="css/hover.css" rel="stylesheet" type="text/css"/>
</head>
<style>
.dropdown-menu {
	min-width: 200px;
}
.dropdown-menu.columns-2 {
	min-width: 400px;
}
.dropdown-menu.columns-3 {
	min-width: 600px;
}
.dropdown-menu li a {
	padding: 5px 15px;
	font-weight: 300;
}
.multi-column-dropdown {
	list-style: none;
  margin: 0px;
  padding: 0px;
}
.multi-column-dropdown li a {
	display: block;
	clear: both;
	line-height: 1.428571429;
	color: #333;
	white-space: normal;
}
.multi-column-dropdown li a:hover {
	text-decoration: none;
	color: #262626;
	background-color:#e7e7e7;
}
 
@media (max-width: 767px) {
	.dropdown-menu.multi-column {
		min-width: 240px !important;
		overflow-x: hidden;
	}
}
li.dropdown:hover > .dropdown-menu {
    display: block;
}.navbar-default .navbar-nav > li.dropdown:hover > a, 
.navbar-default .navbar-nav > li.dropdown:hover > a:hover,
.navbar-default .navbar-nav > li.dropdown:hover > a:focus {
    background-color: rgb(231, 231, 231);
    color: rgb(85, 85, 85);
}
</style>
<body>
<div class="contanier-fluid">
<div class="col-sm-12" style="min-height:80px;background:black;">
<div class="col-sm-2" style="min-height:80px;">
<img src="img/ll.png" class="img-responsive"/>
</div>
<div class="col-sm-10" style="min-height:80px;"><br>
<nav class="navbar navbar-inverse" style="background:black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" style="margin-left:19%;">
        <li><a href="#" style="color:white;">Learning Center</a></li>
        <li><a href="#" style="color:white;">Become GST Ready</a></li>
		  <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color:white;">LEDGERS GST Software
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#" >LEDGERS Signup</a></li>
          <li><a href="#">LEDGERS Login</a></li>
          <li><a href="#">Enterprise Solution</a></li>
        </ul>
      </li>
        <li><a href="#" style="color:white;">iCFO Account</a></li> 
        <li><a href="#" style="color:white;">Nearest.Expert</a></li> 
	
      </ul>
      <ul class="nav navbar-nav navbar-right">
      </ul>
    </div>
  </div>
</nav>
</div>
</div>
<div class="col-sm-12" style="min-height:60px;background:gray;"><br>
<nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	    <span class="sr-only">Toggle navigation</span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
	    <span class="icon-bar"></span>
        </button>
        
    </div>
    <!--/.navbar-header-->
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
		<li><a href="home.html">Home</a></li>
		
		<li class="dropdown">

	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Start A Business<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h6>&nbsp;&nbsp;&nbsp;FOR INDIAN OWNERS</h6>
					            <li><a href="porp.html">Proprietorship</a></li>
					            <li><a href="part.html">Partnership</a></li>
					            <li><a href="oneperson.html">One Person Company</a></li>
					            <li><a href="limited.html">Limited Liability Partnership</a></li>

					            <li><a href="private.html">Private Limited Company</a></li>
					            <li><a href="public.html">Public Limited Company</a></li>
					           
					            <li><a href="#">Check Company or LLP Name Availability</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h6>&nbsp;&nbsp;FOR FOREIGN OWNERS</h6>
					            <li><a href="indian.html">Indian Subsidiary</a></li>
								<h6>&nbsp;&nbsp;SPECIAL ENTITIES</h6>
					            <li><a href="nidhi.html">Nidhi Company</a></li>
					            <li><a href="producer.html">Producer Company</a></li>
					            <li><a href="section.html">Section 8 Company</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
			 <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Registrations<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;TAX REGISTRATIONS</h5>
					            <li><a href="gstregistration.html">GST Registration</a></li>
					            <li><a href="gstforeigners">GST Registration for Foreigners</a></li>
					            <li><a href="tem.html">Temporary GST Registration</a></li>
					            <li><a href="professional.html">Professional Tax</a> </li>
					            <li><a href="tan.html">TAN Registration</a></li>
					            <li><a href="pf.html">PF Registration</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>OTHER REGISTRATION<h5>
					        <li><a href="esi.html">ESI Registration</a></li>
					            <li><a href="msme.html">MSME Registration</a></li>
					            <li><a href="import.html">Import Export Code</a></li>
					            <li><a href="fssai.html">FSSAI Registration</a></li>
					            <li><a href="digital.html">Digital Signature</a></li>
					            <li><a href="trade.html">Trade License</a></li>
					            <li><a href="#">Find GST Rate for Goods & Services</a></li>

				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	       
		   
		    <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Intellectual Property<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row">
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;Trademark</h5>
					           <li><a href="trademark.html">Trademark Registration</a></li>
					            <li><a href="trademark1.html">Trademark Rectification</a></li>
					            <li><a href="tradmark2.html">Trademark Objection</a></li>
					            <li><a href="trademark3.html">Trademark Opposition</a> </li>
					            <li><a href="trademark4.html">Trademark Renewal</a></li>
					            
				            </ul>
			            </div>
			            <div class="col-sm-6">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;others<h5>
					            <li><a href="#">Logo Designing</a></li>
					            <li><a href="#">Copyright Registration</a></li>
					            <li><a href="#">Design Registration</a></li>
					            <li><a href="#">Provisional Patent</a></li>
					            <li><a href="#">Patent Registration</a></li>
					            <li><a href="#">Find trademark class for over 8000 goods and services</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>
	       
		       <li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Manage Your Business<b class="caret"></b></a>
	            <ul class="dropdown-menu multi-column columns-3">
		            <div class="row" style="width:834px;">
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;&nbsp;Annual Compliances</h5>
					            <li><a href="annual.html">Annual Compliances for Pvt Ltd</a></li>
					            <li><a href="annualcom.html">Annual Compliances for LLP</a></li>
					            <li><a href="roc.html">ROC Annual Filing</a></li>
				            </ul>
			            </div>
			            <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Close Company<h5>
					            <li><a href="closeone.html">Close One Person Company</a></li>
					            <li><a href="closeprivate.html">Close Private Limited Company</a></li>
					            <li><a href="#">Close Public Limited Company</a></li>
					            <li><a href="#">Close Limited Liability Partnership</a></li>
				            </ul>
			            </div>
						  <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Change in Company<h5>
					            <li><a href="#">Change Company Name</a></li>
					            <li><a href="#">Change of Place of the Company</a></li>
					            <li><a href="#">Increase in Authorized Capital</a></li>
					            <li><a href="#">Change of Object of the Company</a></li>
					            <li><a href="#">Removal And Addition Of Directors / Partner</a></li>
				            </ul>
			            </div>
						 <div class="col-sm-3">
				            <ul class="multi-column-dropdown">
							<h5>&nbsp;&nbsp;Change in LLP<h5>
					            <li><a href="#">Change in LLP Agreements</a></li>
								<h6>&nbsp;&nbsp;&nbsp;Others</h6>
					            <li><a href="#">Accounting and Book Keeping</a></li>
					            <li><a href="#">Audit of the Business</a></li>
					            <li><a href="#">TDS Return</a></li>
					            <li><a href="#">XBRL Filing</a></li>
					            <li><a href="#">GST Return Filing</a></li>
				            </ul>
			            </div>
		            </div>
	            </ul>
	        </li>   
        </ul>
    </div>
    <!--/.navbar-collapse-->
</nav>
<!--/.navbar-->
</div>
<div class="col-sm-12" style="min-height:600px;background-image:url('img/a3.jpg');" class="img-responsive"><br><br><br><br>
<div class="col-sm-12" style="min-height:400px;">
<div class="col-sm-9" style="min-height:400px;"><br><br><br>
<span style="color:white;font-size:25px;border-bottom:2px solid white;">GST REGISTRATION</span><br><br>

<span style="color:white;font-size:25px;">GST registration is mandatory for all entities involved in the buying or selling or providing of services in India. INCFilings offers an easy online process to register for GST from Rs.2899/-

</span>
</div>
<div class="col-sm-3" style="min-height:400px;background-color:rgba(128,128,128,0.6);box-shadow:0px 0px 5px 5px black;"><br>
<div class="col-sm-12" style="min-height:50px;background:#66bb6a;;margin-left:-50px;">
<h4 style="color:white;padding-top:2%;">GST REGISTRATION</h4>
</div>
<br><br><br><br>
<form action="/action_page.php">

 <div class="form-group">
 
    <label for="name" style="color:white;">Name:</label>
    <input type="text" class="form-control" id="name">
  </div>
  <div class="form-group">
    <label for="email" style="color:white;">Email:</label>
    <input type="email" class="form-control" id="email">
  </div>
   <div class="form-group">
    <label for="mobile" style="color:white;">Mobile:</label>
    <input type="text" class="form-control" id="mobile">
  </div>
  <button type="submit" class="btn btn-default form-control" style="background:#66bb6a;border-style:none;"><span style="color:white;font-weight:bold;">GET START</span></button>
</form>
</div>
</div>
</div>
</body>
</html>