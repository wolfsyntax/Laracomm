<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

@hasSection('content')
	@yield('content')
@endif

	<script src="{{ asset('js/jquery-3.3.1.slim.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}"></script>
	<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>