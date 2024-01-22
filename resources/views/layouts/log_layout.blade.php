<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title> CCMPOA.org | Sign in</title>
	<link rel="icon" sizes="any" type="image/svg+xml" href="{{ asset('assets/img/logo/logo.svg') }}" />
	<!-- Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
	<!-- Core CSS -->
	<link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/core.css') }}">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.6/dist/sweetalert2.min.css">

</head>

<body>

	<!-- Pageloader -->
 <div class="pageloader"></div>
	<div class="infraloader is-active"></div>
	<div class="signup-wrapper"> 

	<!--Fake navigation-->
	<div class="fake-nav">
		<a href="/" class="logo">
			<img class="light-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28" alt="">
			<img class="dark-image" src="{{ asset('assets/img/logo/logo.svg') }}" width="112" height="28" alt="">
		</a>
	</div>
	@yield('content')


	<!-- Concatenated js plugins and jQuery -->
	<script src="{{ asset('assets/js/app.js') }}"></script>
	{{-- <script src="https://js.stripe.com/v3/"></script> --}}
	<script src="{{ asset('assets/data/tipuedrop_content.js') }}"></script>

	<!-- Core js -->
	<script src="{{ asset('assets/js/global.js') }}"></script>

	<!-- Navigation options js -->
	<script src="{{ asset('assets/js/navbar-v1.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-v2.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-mobile.js') }}"></script>
	<script src="{{ asset('assets/js/navbar-options.js') }}"></script>
	<script src="{{ asset('assets/js/sidebar-v1.js') }}"></script>

	<!-- Core instance js -->
	<script src="{{ asset('assets/js/main.js') }}"></script>
	<script src="{{ asset('assets/js/chat.js') }}"></script>
	<script src="{{ asset('assets/js/touch.js') }}"></script>
	<script src="{{ asset('assets/js/tour.js') }}"></script>

	<!-- Components js -->
	<script src="{{ asset('assets/js/explorer.js') }}"></script>
	<script src="{{ asset('assets/js/widgets.js') }}"></script>
	<script src="{{ asset('assets/js/modal-uploader.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-users.js') }}"></script>
	<script src="{{ asset('assets/js/popovers-pages.js') }}"></script>
	<script src="{{ asset('assets/js/lightbox.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.6.6/dist/sweetalert2.all.min.js"></script>
	@yield('loginScript')
	@include('sweetalert::alert')
	<script>
	function show() {
			$(".pageloader").toggleClass("is-active");
			document.querySelector('.submitBtn').disabled = true;
		}
	</script>

	<!-- Landing page js -->

	<!-- Signup page js -->

	<!-- Feed pages js -->

	<!-- profile js -->

	<!-- stories js -->

	<!-- friends js -->

	<!-- questions js -->

	<!-- video js -->

	<!-- events js -->

	<!-- news js -->

	<!-- shop js -->

	<!-- inbox js -->

	<!-- settings js -->

	<!-- map page js -->

	<!-- elements page js -->

</body>

</html>
