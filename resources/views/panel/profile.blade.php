@extends('panel.panelMaster')
@section('title', 'profile')

@section('content')
		<h1 class="text-center sm:text-left">your profile info</h1>
		<section
				class="mt-20 flex w-[initial] flex-col items-center gap-2 rounded-lg bg-base-300 p-4 sm:flex-row sm:items-start md:gap-8 lg:w-max">

				<div class="text-center">
						<img src="{{ $user->gravatar() }}" alt="{{ $user->defaultImg() }}" class="mx-auto block h-44 w-44 rounded-full"
								id="profile">
						<div>
								<x-auth.label>change profile pic</x-auth.label>
								<input type="file" class="hidden" accept="image/*" id="input-profile" name="userAvatar" form="profile-form"
										value="">
						</div>
				</div>

				<div class="w-full sm:w-9/12">
						<form class="space-y-5" action="#" method="POST" enctype="multipart/form-data" id="profile-form">
								@method('put')
								@csrf
								<div class="flex flex-col items-center gap-2 sm:flex-row">
										<div class="form-control w-full">
												<x-auth.label>first name</x-auth.label>
												<x-auth.input type="text" name="fname" place="firstName" :value="$user->fname ?? 'not defined'" />
										</div>

										<div class="form-control w-full">
												<x-auth.label>last name</x-auth.label>
												<x-auth.input type="text" name="lname" place="last name" :value="$user->lname ?? 'not defined'" />
										</div>
								</div>

								<div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
										<div class="form-control w-full">
												<x-auth.label>phone</x-auth.label>
												<x-auth.input type="tel" name="tel" place="phone number" :value="$user->tel ?? 'not defined'" />
										</div>

										<div class="form-control w-full">
												<x-auth.label>age</x-auth.label>
												<x-auth.input type="date" name="date_of_birth" place="date of birth" :value="date('Y-m-d', strtotime($user->dateOfBirth))" />
										</div>
								</div>

								<div class="flex flex-col items-center gap-2 sm:flex-row">
										<div class="form-control w-full">
												<x-auth.label>email</x-auth.label>
												<x-auth.input type="email" name="email" place="email" :value="$user->email ?? 'not defined'" />
										</div>

										<div class="form-control w-full">
												<x-auth.label>skills</x-auth.label>
												<x-auth.input type="text" name="skill" place="seperated by comma" :value="$user->skill ?? 'not defined'" />
										</div>
								</div>

								<div class="form-control w-full">
										<x-auth.label>address</x-auth.label>
										<x-auth.input type="text" name="address" place="city, street" :value="$user->address ?? 'not defined'" />
								</div>

								<div class="form-control w-full">
										<x-auth.label>bio</x-auth.label>
										<textarea name="msg" class="textarea w-full" minlength="3" maxlength="1024" onclick="this.value=''">
											{{ $user->bio ?? 'not defined' }}
										</textarea>
								</div>

								<div class="flex items-center justify-between gap-2">
										<button type="submit" class="btn-primary btn h-5 w-full sm:w-max" name="update-btn">
												update changes
										</button>
								</div>
						</form>
				</div>

		</section>

		<section>
				<div class="card w-full bg-base-300 shadow-xl">
						<div class="card-body space-y-3">
								<h3>delete your account</h3>
								<hr>
								<p class="text-center sm:text-left">Once you delete your account, there
										is no going back. Please be certain.</p>
								<a href="" onclick="return confirm('are you sure?');"
										class="btn h-3 w-full bg-error-content py-2 text-base hover:bg-error-content sm:w-max">
										Delete your account
								</a>
						</div>
				</div>
		</section>

		<section>
				<div class="card w-full bg-base-300 shadow-xl">
						<div class="card-body space-y-3">
								<h3>upload your cv</h3>
								<hr>
								<p class="text-center sm:text-left">
										your cv file type must be .pdf
								</p>
								<form class="space-y-5" action="#" method="POST" enctype="multipart/form-data" id="profile-form">

										@method('put')
										@csrf

										<div class="flex flex-col gap-2 sm:flex-row">
												<div class="form-control">
														<input type="file" class="hidden" id="cv" accept="application/pdf, application/msword"
																name="cv">
														<label for="cv" class="inline-block cursor-pointer p-2 align-sub">
																click here to add resume file
														</label>
												</div>

												<div class="form-control">
														<button type="submit" class="btn-primary btn h-5 w-full sm:w-max" name="update-btn">
																update cv
														</button>
												</div>
										</div>
								</form>
						</div>
				</div>
				</div>
		</section>
@endsection
