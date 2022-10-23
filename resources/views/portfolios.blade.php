@extends('layouts.master')
@section('title', 'portfolios')

@section('content')
		<main class="my-8 space-y-20">
				<section class="mx-auto flex flex-col items-start gap-6 md:flex-row lg:w-10/12">
						<div class="w-full lg:w-1/2">
								<img src="https://dummyimage.com/600x400/000/fff" alt=""
										class="transform cursor-pointer rounded-lg border border-slate-100 object-fill object-center p-2 duration-100 ease-in hover:scale-[1.05]">
						</div>

						<div class="w-full lg:w-1/2">
								<ul class="space-y-5">
										<li class="text-xl capitalize">
												<span class="font-bold">Tilte</span> :
												<span class="font-light">Lorem, ipsum.</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">author</span> :
												<span class="font-light">Lorem, ipsum.</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">skills</span> :
												<span>
													<div class="badge h-7 badge-primary font-light">primary</div>
													<div class="badge h-7 badge-primary font-light">primary</div>
													<div class="badge h-7 badge-primary font-light">primary</div>
													<div class="badge h-7 badge-primary font-light">primary</div>
												</span>
										</li>
										<li class="text-xl capitalize">
												<span class="font-bold">description</span> :
												<span class="font-light">
														Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam perspiciatis nesciunt totam? Labore ducimus
														repudiandae fugit accusamus delectus officiis libero!
												</span>
										</li>
										<li class="text-xl space-x-5">
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
						<section class="mt-5 grid grid-flow-row gap-5 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
								<div class="card card-compact mx-auto max-w-sm gap-2 bg-base-200 shadow-xl">
										<figure class="px-4 pt-4">
												<img src="https://dummyimage.com/600x400/000/fff" alt="" class="rounded-lg">
										</figure>
										<div class="card-body items-center justify-center gap-3 text-center">
												<h2 class="card-title">title</h2>
												<p>If a dog chews shoes whose shoes does he choose?</p>
												<button class="btn-primary btn h-[40px] min-h-[30px] w-full">
														Buy Now
												</button>
										</div>
								</div>

								<div class="card card-compact mx-auto max-w-sm gap-2 bg-base-200 shadow-xl">
										<figure class="px-4 pt-4">
												<img src="https://dummyimage.com/600x400/000/fff" alt="" class="rounded-lg">
										</figure>
										<div class="card-body items-center justify-center gap-3 text-center">
												<h2 class="card-title">title</h2>
												<p>If a dog chews shoes whose shoes does he choose?</p>
												<button class="btn-primary btn h-[40px] min-h-[30px] w-full">
														Buy Now
												</button>
										</div>
								</div>

								<div class="card card-compact mx-auto max-w-sm gap-2 bg-base-200 shadow-xl">
										<figure class="px-4 pt-4">
												<img src="https://dummyimage.com/600x400/000/fff" alt="" class="rounded-lg">
										</figure>
										<div class="card-body items-center justify-center gap-3 text-center">
												<h2 class="card-title">title</h2>
												<p>If a dog chews shoes whose shoes does he choose?</p>
												<button class="btn-primary btn h-[40px] min-h-[30px] w-full">
														Buy Now
												</button>
										</div>
								</div>

								<div class="card card-compact mx-auto max-w-sm gap-2 bg-base-200 shadow-xl">
										<figure class="px-4 pt-4">
												<img src="https://dummyimage.com/600x400/000/fff" alt="" class="rounded-lg">
										</figure>
										<div class="card-body items-center justify-center gap-3 text-center">
												<h2 class="card-title">title</h2>
												<p>If a dog chews shoes whose shoes does he choose?</p>
												<button class="btn-primary btn h-[40px] min-h-[30px] w-full">
														Buy Now
												</button>
										</div>
								</div>
						</section>
				</section>
		</main>
@endsection
