@extends('layouts.authMaster')
@section('title', 'Reset Your Password')

@section('content')

		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<form method="POST" action="{{ route('password.update') }}">
						<div class="card w-[500px] space-y-3 bg-base-300 p-6 shadow-2xl">
								@csrf
							@method('put')
								<input type="hidden" name="token" value="{{ $request->route('token') }}">

								<div class="form-control w-full">
										<x-auth.label>email</x-auth.label>
										<x-auth.input type="email" name="email" place="email address" />
								</div>

								<div class="form-control w-full">
										<x-auth.label>password</x-auth.label>
										<x-auth.input type="password" name="password" place="password" />
								</div>

								<div class="form-control w-full">
										<x-auth.label>password confirmation</x-auth.label>
										<x-auth.input type="password" name="password_confirmation" place="password confirmation" />
								</div>

								<div class="form-control">
										<button class="btn-primary btn w-full">
												reset password
										</button>
								</div>
						</div>
				</form>
		</div>
@endsection
