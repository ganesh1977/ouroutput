<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<div ng-app="ourapp" ng-controller="con_tro">
	Username <input type="text" name="username" ng-model="ourname"><br />
	Email <input type="text" name="useremail" ng-model="ouremail"><br />
	Phone <input type="text" name="userphone" ng-model="ourphone">
</div>
<script>
var our_app = angular.module('ourapp',[]);
our_app.controller("con_tro",function($scope)
{
    $http.get("newdata.php").success(function (response) { 
    alert(response); $scope.ourname = response.records;});
});
</script>


