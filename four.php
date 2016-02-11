<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="ourapp" ng-controller="mydata">
Full Name: <input type="text" ng-model="fullname"> 
Full Address: <input type="text" ng-model="fulladd">
<br>
Full Details: {{ fullname  + "   "+ fulladd | uppercase }}  
</div>
<script>
var our_app = angular.module('ourapp',[]);
our_app.controller("mydata",function($scope)
{
	$scope.fullname = "Ganesh Babu";
	$scope.fulladd = "hyderabad";	
});
</script>
