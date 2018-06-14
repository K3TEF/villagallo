<meta charset="utf-8" />
<?php
##########################################################################
$password = "kvhf97*";  // Password : Max 10 Char.
##########################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Keystone VHF Club Member Directory</title>
<meta http-equiv="Content-Type" content="text/html; meta charset="utf-8"> 
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
	<link href="css/custom.css" rel="stylesheet" />
</head>
<body>
<?php 
  print "<h2 align=\"center\">Keystone VHF Club Member Directory**Authorized Access Only***</h2>";

if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
<!--Include the NavBar-->
<div>
<?php include('./partials/navbar.html');
?>
</div>
<!--End NavBar-->
<!--Begin Page Title-->
    <br /><br />
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>
                    W3HZU Keystone VHF Club
                    <p class="lead">Current Members</p>
                </h1>
            </div>
            <div class="col-md-5">
				<div class="row">
					<div class="col-sm-6">
						<img src="http://danielmelato.com/images/w3hzu_logo.png" class="img-responsive">
					</div>
				</div>
            </div>
        </div>
    </div>
	<br /><br />
    <div class="container">
            <div class="row">
                    <div class="col-md-3"><input type="email" class="form-control" id="sFirstName" style="width:200px"/>Search by FirstName</div>
                    <div class="col-md-3"><input type="email" class="form-control" id="sLastName" style="width:200px"/>Search by LastName</div>
                    <div class="col-md-3"><input type="email" class="form-control" id="sCallSign" style="width:200px"/>Search by Call Sign</div>
                    <div class="col-md-3"><input type="email" class="form-control" id="sCurrentDate" style="width:200px"/>Search by Paid to Year</div>
                </div>
        </div>
    <div class="container">
        <br /><br />
        <br style="clear:both" />
    
    <table id="mTable" class="table table-hover">
        <thead>
            <tr>
                <th><a href="#" id="mFirstName">First Name</a></th>
                <th><a href="#" id="mLastName">Last Name</a></th>
                <th><a href="#" id="mCallSign">CallSign</a></th>
                <th><a href="#" id="mARRL">ARRL Member</a></th>
                <th><a href="#" id="mAddress">Address</a></th>
                <th><a href="#" id="mPhone">Phone</a></th>
                <th><a href="#" id="mCurrentDate">Membership Paid Year</a></th>
            </tr>
        </thead>
        <tbody id="mList">
        </tbody>
    </table>
    <script id="memberTemplate" type="text/x-jsrender">
        <tr class="pointer {{if hide || hide == "undefined"}}hide{{/if}}">
            <td>{{:FirstName}}</td>
            <td>{{:LastName}}</td>
            <td>{{:CallSign}}</td>
            <td>{{:ARRL}}</td>
            <td>{{:Address}}</td>
            <td>{{:Phone}}</td>
            <td>{{:Current}}</td>
        </tr>
    </script>
    <br style="clear:both" />
    <table cellpadding="6" cellspacing="6" class="table table-hover table-striped"></table>
    </div>
    <script type="text/javascript" src="scripts/jquery/jquery-1.11.3.js"></script>
    <script type="text/javascript" src="scripts/Bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="scripts/LoDash/lodash.min.js"></script>
    <script type="text/javascript" src="scripts/JSrender/jsrender.min.js"></script>
    <script type="text/javascript" src="scripts/Views/members.js"></script>
    <script type="text/javascript" src="scripts/Views/roster.js"></script>

<!-- END OF HIDDEN HTML -->
<?php 
}
else
{
// Wrong password or no password entered display this message
if (isset($_POST['password']) || $password == "") {
  print "<p align=\"center\"><font color=\"red\"><b>Incorrect Password</b><br>Please enter the correct password</font></p>";}
  print "<form method=\"post\"><p align=\"center\">Please enter the password<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
?>
<BR>
</body>
</html>
<!--charset=iso-8859-1">-->