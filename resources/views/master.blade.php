<!DOCTYPE html>
<html ng-app="myApp">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Gallery Application in Angular JS</title>
	<link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
	<script> var baseURL = "{{url('/')}}/"</script>
</head>
<body>
	<div class="container">
		<div ng-view></div>
	</div>
	<script src="{{asset('bower_components/angular/angular.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{asset('bower_components/angular-route/angular-route.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{asset('bower_components/angular-cookies/angular-cookies.min.js')}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{url(elixir('js/app.js'))}}" type="text/javascript" charset="utf-8"></script>
	<script src="{{url(elixir('js/controllers.js'))}}" type="text/javascript" charset="utf-8"></script>

</body>
</html>