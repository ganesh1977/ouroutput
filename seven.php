<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<form ng-controller="PhpCtrl" name="f1">
	<input type="text" name="name">
	<input type="text" name="password">
	<span ng-model="codeStatus">{{codeStatus}}</span>
	<input type="submit" value="Submit">
</form>
<script>
function PhpCtrl($scope, $http, $templateCache) {
alert('Hai');
  var method = 'POST';
  var url = 'url.php';
  $scope.codeStatus = "";
  $scope.add = function() {
    var FormData = {
      'name' : document.f1.name.value,
      'password' : document.f1.password.value
    };
    $http({
      method: method,
      url: url,
      data: $.param({'data' : FormData}),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'},
      cache: $templateCache
    }).
    success(function(response) {
        $scope.codeStatus = response.data;
    }).
    error(function(response) {
        $scope.codeStatus = response || "Request failed";
    });
    return false;
  };
}
</script>