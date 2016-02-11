<html>
<head>
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.min.js"></script>
<script src="//code.angularjs.org/1.4.0/angular.js"></script>
<!-- load ngmessages -->
<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.0/angular-messages.js"></script>
<script src="../app.js"></script>
</head>
<body ng-app="formapp">
<div ng-controller="expController">
	<form name="ourform">
		User Name:<input type="text" name="our_name" ng-model="our_name" ng-minlength="minlength" required> <br>
		Phone:<input type="number" name="out_phone" ng-model="our_phone.value" min="0" max="99" required> <br>
		Email: <input type="text" name="our_email" ng-model="our_email.text" required>
		<span class="error" ng-show="ourform.out_phone.$error.number">
      Not valid number!</span>
	  <span class="error" ng-show="ourform.our_email.$error.email">
        Not valid email!</span>
	</form>
	<pre>user = {{our_name | json}}</pre>
	<pre>phone = {{our_phone | json}}</pre>
	
	<hr>
    input valid? = <code>{{ourform.our_name.$valid}}</code><br>
    model = <code>{{our_name}}</code>
</div>

<script>
angular.module('formapp', [])
    .controller('expController', ['$scope', function($scope) {
	$scope.our_phone = { value: 12 };
	$scope.our_email = { text:'' };
	$scope.minlength = 3;
   $scope.master = {};    
   	
}]);
</script>
</body>
</html>