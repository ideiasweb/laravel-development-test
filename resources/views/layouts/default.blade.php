<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>

	<base href="{{ route('home')  }}/"/>

	<title>Laravel Development Test - Ideiasweb</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport'/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"/>

	{{--CSS Files--}}
	<link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="assets/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet"/>
	{{--CSS Files--}}
</head>

<body>
<div class="wrapper">
	@include('elements.' . 'sidebar')
	<div class="main-panel">
		@yield('conteudo')
	</div>
</div>
</body>

{{--Core JS Files--}}
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>

{{--Plugins--}}
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<script src="assets/js/plugins/chartist.min.js"></script>
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.1" type="text/javascript"></script>
<script src="assets/js/demo.js"></script>
</html>