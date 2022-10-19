@include('layouts.header')
@section('title', 'Home')

<body class="mx-auto max-w-7xl px-4">
		<nav class="navbar justify-between rounded-lg bg-primary text-primary-content">
				<div class="flex items-center gap-2">
						<img src="{{ url('img/logo.png') }}" alt="logo" class="logo">
						<span class="hidden sm:block font-bold text-lg">Laravel Freelancer Profile</span>
				</div>

				<div class="flex items-center">
						@guest
								<a href="{{ route('login.create') }}" class="btn btn-ghost">login</a>
								<a href="{{ route('register.create') }}" class="btn btn-ghost">register</a>
						@endguest

						@auth
								<a href="{{ route('profile.show', auth()->user()->slug) }}" class="btn btn-ghost">
										<i class="ri-user-line mr-1 align-baseline"></i>profile
								</a>

								<a href="{{ route('logout') }}" class="btn btn-ghost">
										<i class="ri-logout-circle-line mr-1 align-baseline"></i>logout
								</a>
						@endauth
				</div>
		</nav>

		<main class="my-24 space-y-16">

				<section class="space-y-5 text-center">
						<h1>Laravel Freelancer Profile</h1>
						<a href="https://github.com/dvlpr1996/dvlpr1996" title="dvlpr1996 github account"
								class="btn mx-auto py-2 px-9 sm:w-1/6">
								<i class="ri-github-fill text-xl"></i>
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-10 text-center">
						<h2>description</h2>
						<p>
								this laravel project is a Laravel Freelancer Profile. in this project i Use
								Laravel Breeze Package For Implementing Authentication Features and for front-end i use alpine.js and
								tailwindCss.
						</p>
				</section>

				<section class="space-y-10 text-center">
						<h2>language and tools</h2>
						<div class="flex flex-wrap items-center justify-center gap-3">
								<img src="php.jpg" class="tools-img" alt="..." title="php">
								<img src="laravel.jpg" class="tools-img" alt="..." title="laravel">
								<img src="alpine.jpg" class="tools-img" alt="..." title="alpine">
								<img src="tailwind.png" class="tools-img" alt="..." title="tailwind">
								<img src="js.png" class="tools-img" alt="..." title="js">
								<img src="css.jpg" class="tools-img" alt="..." title="css">
								<img src="html.jpg" class="tools-img" alt="..." title="html5">
						</div>
				</section>
		</main>

		@include('layouts.footer')
