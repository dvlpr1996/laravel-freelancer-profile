@include('layouts.header')

<body class="debug-screens max-w-full px-0">

		@section('menu')
				<i id="sidebarToggle" class="fas fa-bars cursor-pointer text-2xl font-semibold"></i>
		@endsection

		@include('layouts.nav')

		<section class="relative flex min-h-screen flex-row">

				@include('panel.sidebar')

				<main class="w-full space-y-8 p-5">
						@yield('content')
				</main>

		</section>

		@include('sweetalert::alert')
</body>

</html>
