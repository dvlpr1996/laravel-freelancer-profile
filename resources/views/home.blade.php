@section('title', 'Home')
@include('layouts.header')

		<nav class="navbar justify-between rounded-lg bg-primary text-primary-content">
				<div class="flex items-center gap-2">
						<img src="{{ asset('img/logo.png') }}" alt="logo" class="logo">
						<span class="hidden text-lg font-bold sm:block">Laravel Freelancer Profile</span>
				</div>

				<div class="flex items-center">
						@guest
								<a href="{{ route('login.create') }}" class="btn-ghost btn">
										<i class="fa-solid fa-right-to-bracket mr-2 align-baseline"></i>
										login
								</a>

								<a href="{{ route('register.create') }}" class="btn-ghost btn">
										<i class="fa-solid fa-user-plus mr-2 align-baseline"></i>
										register
								</a>
						@endguest

						@auth
								<a href="{{ route('panel.index', auth()->user()->slug) }}" class="btn-ghost btn">
										<i class="fa-solid fa-user mr-2 align-baseline"></i>profile
								</a>

								<a href="{{ route('logout') }}" class="btn-ghost btn">
										<i class="fa-solid fa-right-from-bracket mr-2 align-baseline"></i>logout
								</a>
						@endauth
				</div>
		</nav>

		<main class="my-24 space-y-16">

				<section class="space-y-5 text-center">
						<h1>Laravel Freelancer Profile</h1>
						<a href="https://github.com/dvlpr1996/dvlpr1996" title="dvlpr1996 github account"
								class="btn mx-auto py-2 px-9 w-3/6 sm:w-1/6">
								<i class="fa-brands fa-github text-2xl"></i>
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-8 text-center">
						<h2>description</h2>
						<p>
								this laravel project is a Laravel Freelancer Profile. in this project i Use
								Laravel Breeze Package For Implementing Authentication Features and for front-end section i use alpine.js ,tailwindCss and daisyui
						</p>
				</section>

				<section class="space-y-8 text-center">
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
