@extends('layouts.authMaster')
@section('title', 'login')

@section('content')
		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<div class="hero-content flex-col lg:flex-row-reverse lg:gap-8">

						<div class="text-center lg:text-left">
								<h1 class="text-5xl font-bold">Login now!</h1>
								<p class="py-6">
										Log in and display your portfolio and skills and connect with employers and be seen
								</p>
						</div>

						<div class="card w-full max-w-sm flex-shrink-0 bg-base-100 shadow-2xl">
								<form action="{{ route('login.store') }}" method="POST">
										@csrf
										<div class="card-body">
												<div class="form-control">
														<x-auth.label>Email</x-auth.label>
														<x-auth.input type="email" name="email" :old="old('email')" />
												</div>

												<div class="form-control">
														<x-auth.label>Password</x-auth.label>
														<x-auth.input type="password" name="password" :old="old('password')" />
												</div>

												<div class="form-control flex-row items-center gap-2">
														<input type="checkbox" class="checkbox-primary checkbox checkbox-sm" />
														<x-auth.label class="cursor-pointer">Remember me</x-auth.label>
												</div>

												<div class="form-control mt-4">
														<button class="btn-primary btn">
																<i class="fa-solid fa-right-to-bracket mr-2"></i>Login
														</button>
												</div>

												<div class="mt-3 flex items-center justify-between">
														<a href="#" class="link-hover label-text-alt link">
																Forgot password?
														</a>
														<a href="{{ route('register.create') }}" class="link-hover label-text-alt link">
																Already have an account
														</a>
												</div>
										</div>
								</form>
						</div>
				</div>
		</div>
@endsection
