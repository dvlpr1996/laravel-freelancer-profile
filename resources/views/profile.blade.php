@extends('layouts.master')
@section('title', 'profile')

@section('content')
		<div class="my-8 space-y-10">
				<header class="flex flex-col items-center gap-5 rounded-lg bg-base-300 p-10">
						<div class="avatar">
								<div class="mask mask-squircle h-36 w-36">
										<img src="{{ $user->gravatar() }}">
								</div>
						</div>

						<div class="space-y-4 text-center">
								<h2> {{ $user->fullName() ?? 'not defined' }}</h2>
								<p>freelancer</p>

								<div class="flex items-center justify-center gap-5">
										<a href="https://codepen.io/dvlpr1996" title="codepen">
												<i class="fa-brands fa-codepen text-3xl"></i>
										</a>
										<a href="https://instagram.com/nima_jahanbakhshian" title="instagram">
												<i class="fa-brands fa-instagram text-3xl"></i>
										</a>
										<a href="https://www.linkedin.com/in/nima-jahan-bakhshian" title="linkedin">
												<i class="fa-brands fa-linkedin text-3xl"></i>
										</a>
										<a href="https://t.me/nima96_j" title="telegram">
												<i class="fa-brands fa-telegram text-3xl"></i>
										</a>
								</div>

						</div>
				</header>

				<section class="flex flex-col items-start justify-between gap-3 px-4 sm:flex-row sm:gap-5">
						<div class="space-y-3 text-center sm:text-left">
								<h2>about me</h2>

								<p class="max-w-xl">
										{{ $user->bio ?? 'not defined' }}
								</p>

								@if (!is_null($user->cv))
								<a href="#" class="btn-primary btn md:w-60">
										<i class="fa-solid fa-download mr-2"></i>
										download resume
								</a>
								@endif
						</div>

						<div class="space-y-3 text-center sm:text-left">
								<h2>information</h2>
								<ul class="inline-block space-y-3">

										<li class="info-list-items truncate">
												<i class="fa-solid fa-envelope mr-1"></i>
												<span class="info-list-title">email</span>
												<a href="mailto:example@example.com" class="inline-block truncate">
														{{ $user->email ?? 'not defined' }}
												</a>
										</li>

										<li class="info-list-items truncate">
												<i class="fa-solid fa-phone-flip mr-1"></i>
												<span class="info-list-title">phone</span>
												<a href="tel:123-456-7890" class="inline-block truncate">
														{{ $user->tel ?? 'not defined' }}
												</a>
										</li>

										<li class="info-list-items truncate">
												<i class="fa-solid fa-location-dot mr-1"></i>
												<span class="info-list-title">address</span>
												<span class="inline-block truncate">
														{{ $user->address ?? 'not defined' }}
												</span>
										</li>

										<li class="info-list-items truncate">
												<i class="fa-solid fa-calendar mr-1"></i>
												<span class="info-list-title">age</span>
												<span class="inline-block">
														{{ $user->date_of_birth ?? 'not defined' }}
												</span>
										</li>

										<li class="info-list-items truncate">
												<i class="fa-solid fa-globe mr-1"></i>
												<span class="info-list-title">skills</span>
												<span class="inline-block">
													@foreach ($user->skills as $skill)
													 {{ $skill->name }}
											    @endforeach
												</span>
										</li>

								</ul>
						</div>
				</section>

				<section>
						<h2 class="text-center">my works</h2>
						<section class="mt-14 grid grid-flow-row gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

							@forelse($user->workSamples as $portfolio)
							<div class="custom-card bg-base-300">
									<img src="{{ $portfolio->ws_path }}" alt="{{ $portfolio->title }}" class="object-fill object-center h-56 shadow-lg rounded-xl">
								<div class="space-y-5 text-center">
										<h3 class="capitalize">
											{{ $portfolio->title }}
										</h3>
										<a href="{{ route('ws.index', Str::slug($portfolio->title)) }}" class="custom-btn btn-primary">
												see more details
										</a>
								</div>
						</div>

							@empty
							<div class="text-center">
									<p>no portfolio found</p>
							</div>
					   @endforelse

						</section>
				</section>
		</div>
@endsection
