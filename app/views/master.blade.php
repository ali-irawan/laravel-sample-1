<!doctype html>
<html>
	<head>
		<title>@yield("title")</title>
		<link href="/bootstrap-3.2.0/css/bootstrap.min.css" rel="stylesheet" />
		<link href="/bootstrap-3.2.0/css/bootstrap-theme.min.css" rel="stylesheet" />
		<script src="/bootstrap-3.2.0/js/bootstrap.min.js"></script>
		
		<link href="/css/style.css" rel="stylesheet" />
	</head>
	<body>
		<div class="container">
			<img src="/images/logo.png" />
			
			<h2>@yield("title")</h2>
			<hr/>
			
			@yield("content")
		</div>
		
		
	</body>
</html>
