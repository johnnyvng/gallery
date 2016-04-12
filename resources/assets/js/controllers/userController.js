myApp.controller('userController', ['$scope', '$http', function($scope) {
	angular.extend($scope, {
		doLogin: function(loginForm) {
			// define the $http with headers object
			$http({
				headers: 
				{
					'Content-Type': 'application/json'
				},
				url: baseURL + 'auth',
				method: "POST",
				data: 
				{
					email: $scope.login.username,
					password: $scope.login.password
				}
			})
			// define object .success
			.success(function(reponse)
			{
				console.log(reponse);
			});
		}
	});
}]);