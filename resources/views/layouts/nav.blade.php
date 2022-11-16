<nav class="navbar justify-between rounded-lg bg-primary p-3 font-medium text-primary-content">
		<div class="space-x-3">
				@yield('menu', '')
				<x-logo />
				<a href="{{ route('home.index') }}" class="hover:text-white">home</a>
		</div>


		@auth
				<div class="flex items-center gap-4">
						<div x-data="dropdown" x-on:click.away="away()" class="relative">
								<button x-on:click="toggle()" class="hover:text-white">
										<i class="fa-solid fa-caret-down mr-2 align-middle"></i>
										{{ auth()->user()->fullName() }}
								</button>
								<div x-show="open" x-transition.duration.500ms
										class="border-1 absolute top-8 right-0 z-20 hidden min-w-[170px] space-y-3 rounded-lg border-slate-600 bg-base-100 p-2"
										x-bind:class="{ 'hidden': !open }">

										<a href="{{ route('profile.index', auth()->user()->slug) }}" class="m-2 block text-left text-primary-content">
												<i class="fa-solid fa-user mr-1 align-middle"></i>
												profile
										</a>

										<a href="{{ route('panel.profile.index', auth()->user()->slug) }}"
												class="m-2 block text-left text-primary-content">
												<i class="fa-solid fa-gear mr-1 align-middle"></i>
												dashboard
										</a>

										<div>
												<label for="my-modal-4" class="cursor-pointer">
														<i class="fa-solid fa-key mr-1 align-middle"></i>
														change password
												</label>

												<input type="checkbox" id="my-modal-4" class="modal-toggle">

												<label for="my-modal-4" class="modal cursor-pointer">
														<label class="modal-box relative">
																<h3 class="text-lg font-bold">
																		change your password
																</h3>

																<form action="{{ route('update.password', auth()->user()->id) }}" method="POST">
																		@csrf
																		@method('put')
																		<div class="form-control w-full">
																				<x-auth.label>current password</x-auth.label>
																				<x-auth.input type="password" name="oldPassword" place="current password" />
																		</div>

																		<div class="form-control w-full">
																				<x-auth.label>new password</x-auth.label>
																				<x-auth.input type="password" name="newPassword" place="password" />
																		</div>

																		<div class="form-control w-full">
																				<x-auth.label>confirm password</x-auth.label>
																				<x-auth.input type="password" name="newPassword_confirmation" place="confirm password" />
																		</div>

																		<div class="form-control mt-5 w-full">
																				<button type="submit" class="btn-primary btn w-full">
																						change password
																				</button>
																		</div>
																</form>
														</label>
												</label>
										</div>

										<hr>

										<a href="{{ route('logout') }}" class="m-2 block text-left text-primary-content">
												<i class="fa-solid fa-right-from-bracket mr-1 align-middle"></i>
												Logout
										</a>

								</div>
						</div>
						<img src="{{ auth()->user()->gravatar() }}" alt="" class="h-11 w-11 rounded-full" loading="lazy">
				</div>
		@endauth
</nav>
