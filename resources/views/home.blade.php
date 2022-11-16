@section('title', 'Home')
@include('layouts.header')

<body class="mx-auto max-w-7xl px-4">

		<nav class="navbar justify-between rounded-lg bg-primary text-primary-content">
				<div class="flex items-center gap-2">
						<img src="{{ asset('img/logo.png') }}" alt="logo" class="logo" loading="lazy">
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
								<a href="{{ route('panel.profile.index', auth()->user()->slug) }}" class="btn-ghost btn">
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
								class="btn mx-auto w-3/6 py-2 px-9 sm:w-1/6">
								<i class="fa-brands fa-github text-2xl"></i>
						</a>
				</section>

				<section class="mx-auto max-w-5xl space-y-8 text-center">
						<h2>description</h2>
						<p>
								this laravel project is a Laravel Freelancer Profile. in this project i Use
								Laravel Breeze Package For Implementing Authentication Features and for front-end section i use alpine.js
								,tailwindCss and daisyui
						</p>
				</section>

				<section class="space-y-8 text-center">
						<h2>language and tools</h2>
						<div class="flex flex-wrap items-center justify-center gap-3">
								<img src="php.jpg" alt="php" title="php" loading="lazy">
								<img src="laravel.jpg" alt="laravel" title="laravel" loading="lazy">
								<img src="alpine.jpg" alt="alpine" title="alpine" loading="lazy">
								<img src="tailwind.png" alt="tailwind" title="tailwind" loading="lazy">
								<img src="js.png" alt="js" title="js" loading="lazy">
								<img src="css.jpg" alt="css" title="css" loading="lazy">
								<img src="html.jpg" alt="html" title="html5" loading="lazy">
						</div>
				</section>

				<section class="space-y-8 text-center">
						<h2>Our Freelancers</h2>
						<div class="flex flex-wrap items-center justify-center gap-5">
								@forelse ($users as $user)
										<figure>
												<img src="{{ $user->gravatar() }}" alt="{{ $user->slug }}" class="mx-auto block rounded-full"
														title="php" loading="lazy">
												<figcaption class="mt-3 text-lg capitalize">
														<a href="{{ route('profile.index', $user->slug) }}">
																{{ str_replace('-', ' ', $user->slug) }}
														</a>
												</figcaption>
										</figure>
								@empty
										<p class="text-center text-lg text-primary">
												there is no freelancer sign up yet
										</p>
								@endforelse
						</div>
				</section>
		</main>

		@include('layouts.footer')
