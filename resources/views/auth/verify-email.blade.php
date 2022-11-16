@extends('layouts.authMaster')
@section('body-class', 'py-4 sm:py-0')
@section('title', 'varify email address')

@section('content')

		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<div class="card w-[500px] space-y-5 bg-base-300 p-5 shadow-2xl">

						@if (session('status') == 'verification-link-sent')
								<div class="mb-4 rounded-lg p-4 text-center text-sm font-medium text-info">
										A new verification link has been sent to the email address you provided during registration.
										 <strong>you can now close this tab</strong>
								</div>
						@endif

						<h3 class="text-center">verify your email address</h3>

						<p class="text-center text-sm leading-6 tracking-wider">
								Thanks for signing up! Before getting started, could you verify your email address by clicking on the above
								button
						</p>

						<form class="space-y-4" method="POST" action="{{ route('verification.send') }}">
								@csrf
								<div>
										<button type="submit" class="btn-primary btn w-full">send Verification Email</button>
								</div>
						</form>

						<a href="{{ route('logout') }}" class="inline-block">logout</a>
				</div>
		</div>
@endsection
