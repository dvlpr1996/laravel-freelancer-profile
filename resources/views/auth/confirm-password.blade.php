@extends('layouts.authMaster')
@section('body-class', 'py-4 sm:py-0')
@section('title', 'register')

@section('content')
		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<div class="card w-[500px] bg-base-300 shadow-2xl">
						<form method="POST" action="{{ route('password.confirm') }}">
								@csrf
								<div class="card-body sm:space-y-2">

										<div class="form-control w-full">
												<x-auth.label>password</x-auth.label>
												<x-auth.input type="password" name="password" />
										</div>

										<div class="form-control">
												<button class="btn-primary btn">confirm</button>
										</div>

								</div>
						</form>
				</div>
		</div>
@endsection
