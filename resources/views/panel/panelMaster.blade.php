@include('layouts.header')

<body class="debug-screens max-w-full px-0">

@section('menu')
 <i id="sidebarToggle" class="fas fa-bars text-2xl font-semibold cursor-pointer"></i>
@endsection

@include('layouts.nav')

<section class="relative flex min-h-screen flex-row">

	@include('panel.sidebar')

	<main class="p-5 w-full space-y-8">
			@yield('content')
	</main>

</section>
