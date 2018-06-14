(function () {
    var app = angular.module("aprsViewer", []);

    var MainController = function ($scope, $http) {

        var onCallSignComplete = function (response) {
            $scope.aprs = response.data;
        };
        var onError = function (reason) {
            $scope.error = "could not retrieve data";
        };
        var config = {
            headers: {

                'User-Agent': 'aprsViewer/1.0 (+http://http://kb3jsv.com/aprs.html)'       
            }
        };
        console.log(config);

        $http.get("http://api.aprs.fi/api/get?name=KB3JSV-9&what=loc&apikey=24393.2URoZUH04nfGY&format=json", config)
        .then(onCallSignComplete, onError);

    };

    app.controller("MainController", ["$scope", "$http", MainController]);

}());