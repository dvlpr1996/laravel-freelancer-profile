@extends('layouts.authMaster')
@section('html-bg', 'bg-base-200')
@section('py', 'py-4 sm:py-0')
@section('title', 'register')

@section('content')

		<div class="mx-auto flex min-h-screen max-w-5xl items-center justify-center">
				<div class="card w-[500px] bg-base-100 shadow-2xl">
					<form action="" method="post">
						@csrf
						<div class="card-body sm:space-y-2">

										<div class="flex flex-col items-center justify-between gap-3 sm:flex-row">
												<div class="form-control w-full">
														<x-auth.label>first name</x-auth.label>
														<x-auth.input type="text" name="fname" :old="old('fname')" />
												</div>

												<div class="form-control w-full">
														<x-auth.label>last name</x-auth.label>
														<x-auth.input type="text" name="lname" :old="old('lname')" />
												</div>
										</div>

										<div class="form-control w-full">
												<x-auth.label>email</x-auth.label>
												<x-auth.input type="email" name="email" :old="old('email')" />
										</div>

										<div class="form-control">
												<x-auth.label>Password</x-auth.label>
												<x-auth.input type="password" name="password" />
										</div>

										<div class="form-control">
												<x-auth.label>password confirmation</x-auth.label>
												<x-auth.input type="password" name="password_confirmation" />
										</div>

										<div class="form-control">
												<button class="btn-primary btn">
														<i class="fa-solid fa-user-plus mr-2"></i>register
												</button>
										</div>

										<div class="mt-3">
												<a href="#" class="link-hover label-text-alt link">
														Already have an account
												</a>
										</div>
									</div>
								</form>
				</div>
		</div>
@endsection
