<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<form name="aaa" id="app" method="post" ng-app="ourappm" ng-controller="ourapp" novalidate>
User Name:<input type="text" name="user" ng-model="user" required>
<span style="color:red" ng-show="aaa.user.$dirty && aaa.user.$invalid">
<span ng-show="aaa.user.$error.required">Username is required.</span>
</span>
User Name:<input type="text" name="pass" ng-model="pass" required>
<span style="color:red" ng-show="aaa.pass.$dirty && aaa.pass.$invalid">
<span ng-show="aaa.pass.$error.required">Username is required.</span>
</span>
<p>
<input type="submit" value="submit" ng-disabled="aaa.user.$dirty && aaa.user.$invalid || aaa.pass.$dirty && aaa.pass.$invalid ">
</p>
</form>
<script>
var app = angular.module('ourappm', []);
app.controller('ourapp', function($scope) {
    $scope.user = '';    
});
</script>