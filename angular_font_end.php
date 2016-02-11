<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<div ng-app="myapp" controller="ourctrl"></div>

<table>
	<tr ng-repeat="x times">
		<td>{{ x.Name }}</td>
		<td>{{ x.country }}</td>
    </tr>
</table>

<script>
  var app = angular.module('myapp',[]);
  app.controller('ourctrl',function($scope,$http)
  {
	$http.get("angular_font_end_mysql.php").then(function (response){ $scope.names = response.data.records } );	 
  });
</script>