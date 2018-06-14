angular.module('Roster', []).controller('Controller.Grid', function ($http) {
    return new function () {
        var obj = this;
        obj.Members =
            [{
                IsEditing: false,
                FirstName: 'Matt',
                LastName: 'Rineholt',
                CallSign: 'N3MATT',
                ARRL: 'Y',
                Address: '25 Cider Dr York, Pa 17402'  ,
                Phone: '(717) 650-1100',
                Current: '2015'
            },
            {
                IsEditing: false,
                FirstName: 'Todd',
                LastName: 'Horst',
                CallSign: 'K3TODD',
                ARRL: 'N',
                Address: '30 Stonebridge Rd York, Pa 17403',
                Phone: '(717) 650-2200',
                Current: '2015'
            },
            {
                IsEditing: false,
                FirstName: 'Bill',
                LastName: 'McCoy',
                CallSign: 'W3BILL',
                ARRL: 'Y',
                Address: '19 Cameron Ct York, Pa 17404',
                Phone: '(717) 650-3300',
                Current: '2015'
            }];
        console.log(obj.Members);

        obj.Save = function (Members) {
                $http({
                    method  : 'POST',
                    url     : 'scripts/PHP/membersService.php',
                    data    : Members,
                    headers: { 'Content-Type': 'application/json' }
                })                
      
        obj.changeSorting = function (Members) {
            if (obj.sortBy === '-' + Members)
                obj.sortBy = Members;
            else
                obj.sortBy = '-' + Members;
            Members();
            }
        };

    };
});

//$http.get('version.txt?' + new Date(), { cache: false }).then(function (e) {
//    var yourData = e.data;
//    console.log(yourData);
