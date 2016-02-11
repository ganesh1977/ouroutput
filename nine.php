<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="myApp" ng-controller="customersCtrl"> 
<table>
  <tr ng-repeat="x in names">
    <td>{{ x.Name }}</td>
    <td>{{ x.Type }}</td>
  </tr>
</table>

</div>


<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) {
    $http.get("customers_mysql.php").then(function (response) { alert(response.name);$http.names = response.data.records;});
});
</script>
