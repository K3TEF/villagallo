<?php
##########################################################################
$password = "kvhf97*";  // Password : Max 10 Char.
##########################################################################
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Keystone VHF Club Member Directory</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/bootstrap-theme.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
</head>
<body>
<?php 
  print "<h2 align=\"center\">Keystone VHF Club Member Directory ***Authorized Access Only***</h2>";

// If correct password
if (isset($_POST["password"]) && ($_POST["password"]=="$password")) {
?>
 <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">KVHF Club</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://danielmelato.com">Home</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Members<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="http://danielmelato.com/members.php">Current Members</a></li>
                            <li><a href="http://danielmelato.com/membersAdmin.html">Members Admin</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Events</a></li>
                    <li><a href="#">Join</a></li>
                    <li><a href="#">Links</a></li>
                    <li><a href="#">Emergency Communications</a></li>
                    <li><a href="http://danielmelato.com/AdventureDays.html">Adventure Days</a></li>
                </ul>
            </div>
        </div>
    </nav> 
    <br /><br /><br /><br />
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <h1>
                    W3HZU Keystone VHF Club
                    <p class="lead">Current Members</p>
                </h1>
            </div>
            <div class="col-md-5">
                <div class="well well-lg">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="//placehold.it/180x100" class="img-responsive">
                        </div>
                        <div class="col-sm-6">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
  print "<form method=\"post\"><p align=\"center\">Please enter the password for access to the members directory page<br>";
  print "<input name=\"password\" type=\"password\" size=\"25\" maxlength=\"10\"><input value=\"Login\" type=\"submit\"></p></form>";
}
?>
<BR>
</body>
</html>
