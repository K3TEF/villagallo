<!DOCTYPE html>
<html ng-app="Roster">
<head>
    <title></title>
    <meta charset="utf-8" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.css" rel="stylesheet" />
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
                <h1>
                    W3HZU Keystone VHF Club
                    <p class="lead">Members Admin Page</p>
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
    <div ng-controller="Controller.Grid as grid" class="container">
        <br /><br />
        <br style="clear:both" />
        <div class="container">
            <div class="row">
                    <div class="col-md-2"><button type="button" class="btn btn-primary" ng-click="grid.Save()">Save Changes</button></div>
                    <div class="col-md-3"><input type="search" class="form-control" id="searchBox" style="width:200px" ng-model="member.FirstName" />Search by FirstName</div>
                    <div class="col-md-3"><input type="search" class="form-control" id="searchBox" style="width:200px" ng-model="member.LastName" />Search by LastName</div>
                    <div class="col-md-3"><input type="search" class="form-control" id="searchBox" style="width:200px" ng-model="member.CallSign" />Search by Call Sign</div>
                </div>
            <h3>{{member.FirstName}}</h3><h3>{{member.LastName}}</h3><h3>{{member.CallSign}}</h3>
        </div>    
        <br style="clear:both" />
        <table cellpadding="6" cellspacing="6" class="table table-hover table-striped">
            <tr>
                <th>Editing</th>
                <th><a href="#" ng-click="members.changeSorting('FirstName')">First Name</a></th>
                <th><a href="#" ng-click="members.changeSorting('LastName')">Last Name</a></th>
                <th><a href="#" ng-click="members.changeSorting('CallSign')">CallSign</a></th>
                <th><a href="#" ng-click="members.changeSorting('ARRL')">ARRL</a></th>
                <th><a href="#" ng-click="members.changeSorting('Address')">Address</a></th>
                <th><a href="#" ng-click="members.changeSorting('Phone')">Phone</a></th>
                <th><a href="#" ng-click="members.changeSorting('Current')">Current</a></th>
            </tr>
            <tr ng-repeat="member in grid.Members">
                <td style="cursor:pointer" ng-click="member.IsEditing = !member.IsEditing;"><i class="fa" ng-class="{'fa-check': member.IsEditing, 'fa-pencil': !member.IsEditing}"> </i></td>
                <td><span ng-show="!member.IsEditing">{{member.FirstName}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.FirstName" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.LastName}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.LastName" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.CallSign}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.CallSign" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.ARRL}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.ARRL" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.Address}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.Address" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.Phone}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.Phone" class="form-control" /></span></td>
                <td><span ng-show="!member.IsEditing">{{member.Current}}</span><span ng-show="member.IsEditing"><input type="text" ng-model="member.Current" class="form-control" /></span></td>
            </tr>
        </table>
    </div>
    <br /><br /><br />
    <div><?php include('./partials/footer.html');?></div>
    <br /><br />
    
    <script src="scripts/jquery/jquery-1.11.3.js"></script>
    <script src="scripts/Bootstrap/bootstrap.js"></script>
    <script src="scripts/AngJs/angular.js"></script>
    <script src="scripts/AngJs/members.js"></script>
</body>
</html>
