<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ __('Welcome') }}</title>

	{{--
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://accounts.google.com/gsi/client" async defer></script>
	--}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-reboot.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
	<div id="app"></div>
	@vite('resources/js/app.js')
</body>
<script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}"></script>
{{--<script src="{{ asset('assets/js/jquery-ajax.js') }}"></script>--}}
<script src="{{ asset('assets/js/bootstrap.js') }}"></script>
{{--<script src="{{ asset('assets/js/bootstrap.esm.js') }}"></script>--}}
<script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
</html>
