<!DOCTYPE html>
<html lang="en">
<head>
	<title>@yield('title')</title>
</head>
<body>

	 @hasSection('content')
		@yield('content')
	@endif
	
</body>
</html>