@extends('layouts.master')
@section('title', 'portfolios')

@section('content')
		<main class="my-8 space-y-20">
				<section class="mx-auto flex flex-col items-start gap-6 md:flex-row lg:w-10/12">
						<div class="w-full lg:w-1/2">
								<img src="{{ $workSample->ws_path }}" alt="{{ $workSample->title }}" loading="lazy"
										class="transform cursor-pointer rounded-lg border border-slate-100 object-fill object-center p-2 duration-100 ease-in hover:scale-[1.05] w-full h-80">
						</div>

						<div class="w-full lg:w-1/2">
								<ul class="space-y-5">
										<li class="text-xl capitalize">
												<span class="font-bold">Tilte</span> :
												<span class="font-light">{{ $workSample->title }}</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">author</span> :
												<span class="font-light">{{ $workSample->user->fullName() }}</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">skills</span> :
												<span>
														@forelse ($workSample->skills as $skill)
														<div class="badge-primary badge h-7 font-light">
															{{ $skill->name }}
													</div>
														@empty
															not defined
														@endforelse ()
												</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">description</span> :
												<p class="font-light">
														{{ $workSample->des }}
												</p>
										</li>
										<li class="space-x-5 text-xl">
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
										</li>
								</ul>
						</div>
				</section>

				<section>
						<h2 class="text-center sm:text-left">other portfolios</h2>
						<section class="mt-14 grid grid-flow-row gap-5 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">

								@forelse($relatedWorkSample as $portfolio)
										<div class="custom-card bg-base-300">
												<img src="{{ $portfolio->ws_path }}" alt="{{ $portfolio->title }}"
														class="h-56 rounded-xl object-fill object-center shadow-lg" loading="lazy">
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
								<div class="text-center col-span-12 bg-base-300 rounded-lg p-5">
												<p>no portfolio found</p>
										</div>
								@endforelse
						</section>

						<div class="text-center">
							{{ $relatedWorkSample->links('components.pagination') }}
						</div>

				</section>
		</main>
@endsection
