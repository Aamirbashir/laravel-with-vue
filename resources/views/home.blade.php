<html>
<head>
	<title>Person</title>
	
        <meta id="token" name="token" value="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="css/app.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<body>
	
<div class="container">
	

<div id="app">
	<person></person>
	
</div>
</div>
	<script src="js/app.js"></script>
		<script src="{{URL::asset('js/bootstrap.js')}}"></script>
</body>
</html>