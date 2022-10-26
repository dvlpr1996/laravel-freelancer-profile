@extends('panel.panelMaster')
@section('title', 'profile')

@section('content')
		<h1 class="text-center sm:text-left">your profile info</h1>
		<section
				class="mt-20 flex w-[initial] flex-col items-center gap-2 rounded-lg bg-base-300 p-4 sm:flex-row sm:items-start md:gap-8 lg:w-max">

				<div class="text-center">
						<img src="https://dummyimage.com/600x400/000/fff" alt="" class="mx-auto block h-44 w-44 rounded-full"
								id="profile">
						<div>
								<input type="file" class="hidden" accept="image/*" id="input-profile" name="userAvatar" form="profile-form"
										value="">
								<label for="input-profile" class="cursor-pointer">change profile pic</label>
						</div>
				</div>

				<div class="w-full sm:w-9/12">
						<form class="space-y-5" action="#" method="POST" enctype="multipart/form-data" id="profile-form">

								@method('put')
								@csrf
								<div class="flex flex-col items-center gap-2 sm:flex-row">
										<div class="form-control w-full">
												<label class="label">first name</label>
												<span class="text-sm text-rose-600">
														<i class="ri-asterisk"></i>
												</span>
												<input type="text" class="input-bordered input w-full" placeholder="first name" name="fname"
														maxlength="16" value="{{ $user->fname }}" onclick="this.value=''">
										</div>

										<div class="form-control w-full">
												<label class="label">last name</label>
												<span class="text-sm text-rose-600">
														<i class="ri-asterisk"></i>
												</span>
												<input type="text" placeholder="last name" class="input-bordered input w-full" name="lname"
														maxlength="32" value="{{ $user->lname }}" onclick="this.value=''">
										</div>
								</div>

								<div class="flex flex-col items-center justify-between gap-2 sm:flex-row">
										<div class="form-control w-full">
												<label class="label">
														phone
												</label>
												<span class="text-sm text-rose-600">
														<i class="ri-asterisk"></i>
												</span>
												<input type="tel" placeholder="phone number" class="input-bordered input w-full" name="phone"
														maxlength="11" value="{{ $user->tel }}" onclick="this.value=''">
										</div>

										<div class="form-control w-full">
												<label class="label">
														age
												</label>
												<input type="date" class="input-bordered input w-full" name="age"
												 value="{{ $user->age }}"
														onclick="this.value=''">
										</div>
								</div>

								<div class="flex flex-col items-center gap-2 sm:flex-row">
										<div class="form-control w-full">
												<label class="label">
														email
												</label>
												<span class="text-sm text-rose-600">
														<i class="ri-asterisk"></i>
												</span>
												<input type="email" placeholder="email address" class="input-bordered input w-full" name="email"
														value="{{ $user->email }}" onclick="this.value=''">
										</div>

										<div class="form-control w-full">
												<label class="label">
														skills
												</label>
												<input type="text" placeholder="seperated by comma" class="input-bordered input w-full" name="skill"
														minlength="2" maxlength="128" value="{{ $user->skill ?? '' }}" onclick="this.value=''">
										</div>
								</div>

								<div class="form-control w-full">
										<label class="label">
												address
										</label>
										<input type="text" placeholder="city, street" class="input-bordered input w-full" name="address"
												minlength="3" maxlength="512" value="{{ $user->address }}" onclick="this.value=''">
								</div>

								<div class="form-control w-full">
										<label class="label">bio</label>
										<textarea name="msg" class="textarea w-full" minlength="3" maxlength="1024" onclick="this.value=''">
											{{ $user->bio }}
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
