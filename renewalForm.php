<!DOCTYPE HTML> 
<meta charset="utf-8" />
<html>
<head>
	<title>Keystone VHF Club Membership Renewal Form</title>
<!-- define some style elements-->
	 <link href="css/bootstrap.css" rel="stylesheet" />
     <link href="css/bootstrap-theme.css" rel="stylesheet" />
     <link href="css/font-awesome.css" rel="stylesheet" />
	 <link href="css/custom.css" rel="stylesheet" />
<!-- vaidating the form-->
<script type="text/javascript" src="scripts/jquery/jquery-1.11.3.js"></script>

<script language="JavaScript" src="JS/gen_validatorv31.js" type="text/javascript"></script>
<script type="text/javascript">
$(function (){
	$('#famRenew').click(function () {
		$('#fam').removeClass("hide");
		$('#famRenew').addClass("hide");
	});	
});
</script>
</head>
<body>
<!--Include the NavBar-->
<div><?php include('./partials/navbar.html');?></div>
<!--End NavBar-->
<!--Begin Page Title-->
<br /><br /><br /><br />
<div class="container">
    <div class="row">
         <div class="col-md-7">
            <h1>W3HZU Keystone VHF Club<p class="lead">Membership Form</p></h1>
        </div>
        <div class="col-md-5">
			<div class="row">
				<div class="col-sm-6">
					<img src="http://danielmelato.com/images/w3hzu_logo.png" class="img-responsive">
				</div>
			</div>
		</div>
    </div>
<!--Input Data -->
	<form method="post" name="myemailform" action="emailSvc.php">
		<div class="col-lg-12">
			<div class="row">
				<div class="col-md-3">
					<label class="checkbox-inline"><input type="checkbox" name="renewal" value="Yes">Renewal</label>
					<label class="checkbox-inline"><input type="checkbox" name="newApp" value="Yes">New Applicant</label>
				</div>
			</div>
			<br /><br />
			<div class="row">
				<div class="col-md-3">
					<label class="checkbox-inline"><input type="checkbox" value="Yes" name="arrlCB"/>Check if an ARRL Member</label>
					<br /><br />
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<a href="#" id="famRenew" class="btn btn-danger">Add Family Member</a>
					<br /><br />
				</div>
			</div>
		</div>
		<br /><br />
		<div class="col-lg-12">
			<div class="row">
				<div>
					<div class="col-md-3">
						<div>First Name & Last Name</div></br>
						<input type="text" class="form-control" name="name"/> 
						</br>
					</div>
					<div class="col-md-3">
						<div>Callsign</div></br>
						<input type="text" class="form-control" name="callsign"/>
						</br>
					</div>
					<div class="col-md-3">
						<div>Email Address</div></br>
						<input type="text" class="form-control" name="email"/>
						</br>
					</div>
					<div class="col-md-3">
						<div>Phone Number</div></br>
						<input type="text" class="form-control" name="phone"/>
						</br>
					</div>
				</div>
			</div>
			<div class="row">
				<div>
					<div class="col-md-3">
						<div>License Class</div></br>
						<input type="text" class="form-control" name="license" style="width:200px"/>
						</br>
					</div>
					<div class="col-md-3">
						<div>Licence Expiration Year</div></br>
						<input type="text" class="form-control" name="LicenseExp" style="width:200px"/>
						</br>
					</div>
						<div class="col-md-6">
						<div>Physical Address</div></br>
						<input type="text" class="form-control" name="address" style="width:500px"/>
						</br>
					</div>
				</div>
			</div>
			<div class="row hide" id="fam">
				<div>
					<div class="col-md-3">
						<div>Family Member First Name & Last Name</div></br>
						<input type="text" class="form-control" name="fam_name"/> 
						</br>
					</div>
					<div class="col-md-3">
						<div>Family Member Callsign</div></br>
						<input type="text" class="form-control" name="fam_callsign"/>
						</br>
					</div>
					<div class="col-md-3">
						<div>Family Member Phone Number</div></br>
						<input type="text" class="form-control" name="fam_phone"/>
						</br>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12">
			</br>
			<h3>Ham Radio Hobby Interest</h3>
			<h4>Check all that apply</h4>
			<div class="row">
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="DX">DX</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="AM">AM</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]"value="FM">FM</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="SSB">SSB</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="CW">CW</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Digital Data">Digital Data</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Digital Voice">Digital Voice</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Antenna Building">Antenna Building</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="HF">HF</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="QRP">QRP</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Contesting">Contesting</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Satellites">Satellites</label>
					</div>
				</div>
			</div>
			<div class="row">
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="SSTV">SSTV</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="ATV">ATV</label>
					</div>
				</div>
				<div class = "col-sm-2">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="UHF/Microwave">UHF/Microwave</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="VHF">VHF</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="SWL">SWL</label>
					</div>	
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Tower Climbing">Tower Climbing</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="LF">LF</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="DSP">DSP</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Astronomy">Astronomy</label>
					</div>
				</div>
				<div class = "col-sm-1">
					<div class="checkbox">
					<label><input type="checkbox" name="Interest[]" value="Photagraphy">Photography</label>
					</div>
				</div>
			</div>
		</div>	
		</br>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6">Added Notes</div></br>
				<input type="text" class="form-control" name="notes" style="width:500px"/>
				</br>
			</div>
			<div class="row">
				<div class=".col-md-6"><input type="submit" name='submit' value="submit"></div>	
			</div>
		</div>
		<div class="col-md-12">
		<br /><br />
		</div>
	</form>
	<br /><br /><br />
	<div><?php include('./partials/footer.html');?></div>
</div>

		
<!--Javascript imported code -->
<script language="JavaScript">
// Code for validating the form
// http://www.javascript-coder.com/html-form/javascript-form-validation.phtml
var frmvalidator  = new Validator("myemailform");
frmvalidator.addValidation("name","req","Please provide your name"); 
frmvalidator.addValidation("email","req","Please provide your email"); 
frmvalidator.addValidation("email","email","Please enter a valid email address"); 
</script>
<!-- JavaScript librearies and fram work -->
<script type="text/javascript" src="scripts/jquery/jquery-1.11.3.js"></script>
<script type="text/javascript" src="scripts/Bootstrap/bootstrap.js"></script>
<!--<a href="scripts/PHP/emailSvc.php"></a>-->

</body>
</html>