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

								@forelse($userWorkSamples as $portfolio)
										<div class="custom-card bg-base-300">
												<img src="{{ $portfolio->ws_path }}" alt="{{ $portfolio->title }}"
														class="h-56 rounded-xl object-fill object-center shadow-lg">
												<div class="space-y-5 text-center">
														<h3 class="capitalize">
																{{ $portfolio->title }}
														</h3>
														<a href="{{ route('ws.index', $portfolio->id) }}" class="custom-btn btn-primary">
																see more details
														</a>
												</div>
										</div>

								@empty
										<div class="col-span-12 rounded-lg bg-base-300 p-5 text-center">
												<p>no portfolio found</p>
										</div>
								@endforelse
						</section>
						<div class="text-center">
								{{ $userWorkSamples->links('components.pagination') }}
						</div>
				</section>

				<section class="my-16">
						<h2 class="text-center">get in touch</h2>
						<div class="mx-auto mt-10 w-11/12 rounded-lg bg-base-300 p-5 sm:w-9/12 md:w-6/12">
								<form class="space-y-3" method="POST" action="{{ route('contact.store', $user->slug) }}">
										@csrf
										<div class="flex flex-col items-center gap-5 sm:flex-row">
												<div class="form-control w-full">
														<x-auth.label>first name</x-auth.label>
														<x-auth.input type="text" name="fname" place="firstName" :old="old('fname')" />
												</div>

												<div class="w-full">
														<x-auth.label>last name</x-auth.label>
														<x-auth.input type="text" name="lname" place="lastName" :old="old('lname')" />
												</div>
										</div>

										<div class="form-control w-full">
												<x-auth.label>phone numbers</x-auth.label>
												<x-auth.input type="tel" name="tel" place="phone numbers" :old="old('tel')" />
										</div>

										<div class="form-control w-full">
												<x-auth.label>email address</x-auth.label>
												<x-auth.input type="email" name="email" place="email address" :old="old('email')" />
										</div>

										<div class="form-control w-full">
												<x-auth.label>your message</x-auth.label>
												<textarea class="input-bordered textarea w-full" cols="30" rows="5" name="msg"
												  value="{{ old('msg') }}" onclick="this.value=''">
												</textarea>
												<x-auth.input-error :messages="$errors->get('msg')" class="mt-2" />
										</div>

										<button type="submit" class="btn w-full">send your message</button>

								</form>
						</div>
				</section>
		</div>
@endsection
