@extends('layouts.authMaster')
@section('title', 'Forgot password')

@section('content')

		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<div class="card w-[500px] bg-base-300 shadow-2xl">
						<form method="POST" action="{{ route('password.email') }}">
								@csrf
								<div class="card-body sm:space-y-2">
										<div class="mb-4 text-center text-sm text-info">
												Forgot your password? No problem. Just let us know your email address and we will email you a password reset
												link
												that will allow you to choose a new one.
										</div>
										
										<x-auth.auth-session-status class="mb-4" :status="session('status')" />

										<div class="form-control w-full">
												<x-auth.label>email</x-auth.label>
												<x-auth.input type="email" name="email" place="email address" />
										</div>

										<div class="form-control">
												<button class="btn-primary btn w-full">
														Email Password Reset Link
												</button>
										</div>
								</div>
						</form>
				</div>
		</div>

@endsection
