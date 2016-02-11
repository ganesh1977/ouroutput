<html ng-app="fetch">
    <head>
    <title>AngularJS GET request with PHP</title>
      <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.24/angular.min.js"></script>
    <script data-require="angular.js@1.1.5" data-semver="1.1.5" src="http://code.angularjs.org/1.1.5/angular.min.js"></script>
    <script data-require="angular-ui-bootstrap@0.3.0" data-semver="0.3.0" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js"></script>
    <script 
        src="//cdn.jsdelivr.net/script.js/0.1/script.js">
    </script>	
    </head>

    <body>
    <br>
      <div class="row">
        <div class="container">
          <h1>Angular $http GET Ajax Call</h1>
          <div ng-controller="dbCtrl">
          <input type="text" ng-model="searchFilter" class="form-control" placeholder="Search" style="width:200px" >
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="x in data">
                        <td>{{x.Name}}</td>
                        <td>{{x.Type}}</td>
                    </tr>
                </tbody>
            </table>
			<div data-pagination="" data-num-pages="numPages()" 
  data-current-page="currentPage" data-max-size="maxSize"  
  data-boundary-links="true">dddd</div>
          </div>
        </div>
      </div>
    </body>

    <script>
        var fetch = angular.module('fetch', []);
        fetch.controller('dbCtrl', ['$scope', '$http', function ($scope, $http) {
            $http.get("customers_mysql_view.php").success(function(data){
                    $scope.data = data;
                })
                .error(function() {
                    $scope.data = "error in fetching data";
                });
        }]);
		$scope.callRestService= function() {
  $http({method: 'GET', url: '/someUrl'}).
    success(function(data, status, headers, config) {
         $scope.results.push(data);  //retrieve results and add to existing results
    })
}
    </script>

    </html>