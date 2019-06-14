<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head> 
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title>{{ config('app.name') }}</title>
	<link href="/css/app.css" rel="stylesheet" type="text/css" />
	<script>
		window.Laravel = {!! json_encode([
		'csrfToken' => csrf_token(),
		]) !!};
	</script>
	<script src="/js/app.js"></script>
  </head>
  <body>
@yield('content')
  </body>
</html>