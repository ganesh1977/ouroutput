<!DOCTYPE html>
<html >
<style>
table, th , td  {
  border: 1px solid grey;
  border-collapse: collapse;
  padding: 5px;
}
table tr:nth-child(odd) {
  background-color: #f1f1f1;
}
table tr:nth-child(even) {
  background-color: #ffffff;
}
</style>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body> 
<div ng-app="myApp" ng-controller="customersCtrl">
<table border="1">
  <tr ng-repeat="x in names">
    <td>{{ x.name }}</td>
    <td>{{ x.type }}</td>
  </tr>
</table> 
</div> 
<script>
var app = angular.module('myApp', []);
app.controller('customersCtrl', function($scope, $http) 
{
   alert("Hhai"+$scope);
   $scope.get("./customers_mysql.php").success(function (response) { 
   alert(response.Name);
   });
});
</script> 
</body>
</html>