@extends('panel.panelMaster')
@section('title', 'portfolios')

@section('content')
		<h1 class="text-center sm:text-left">your portfolios</h1>

		<section class="relative mx-auto sm:w-4/6 md:w-3/5">
				<form action="#" method="GET">
						@csrf
						<input type="text" name="q" class="my-2 block w-full appearance-none rounded-lg bg-base-300 py-2 px-3"
								placeholder="Search Your message" autocomplete="off" value="request()->query('q')">
				</form>

				<button type="image" class="pointer-events-none absolute inset-y-0 right-2 flex items-center pl-3">
						<svg class="h-5 w-5 text-gray-500" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
								<path fill-rule="evenodd"
										d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
										clip-rule="evenodd"></path>
						</svg>
				</button>
		</section>

		<section class="space-y-5">
				<div class="flex flex-col justify-center gap-5 sm:flex-row sm:items-end sm:justify-between">
						<div class="order-2 flex items-center gap-2 sm:order-1">
								<p>Sort :</p>
								<a href="?sort=ascending">
										<i class="fas fa-sort-alpha-down ml-1"></i> AS
								</a>
								<a href="?sort=descending">
										<i class="fas fa-sort-alpha-down-alt ml-1"></i> DS
								</a>
								<a href="?sort=dueDate">
										<i class="fas fa-stopwatch ml-1"></i> newest
								</a>
						</div>

						<div class="order-1 sm:order-2">
								<label for="my-modal-4" class="modal-button btn w-full sm:w-max">
										add portfolios
								</label>

								<input type="checkbox" id="my-modal-4" class="modal-toggle">
								<label for="my-modal-4" class="modal cursor-pointer">
										<label class="modal-box relative" for="">
												<h3 class="text-lg font-bold">Congratulations random Internet user!</h3>
												<p class="py-4">
														You've been selected for a chance to get one year of subscription to use Wikipedia for free!
												</p>
										</label>
								</label>
						</div>
				</div>

				<div class="overflow-x-auto rounded-lg bg-base-300 p-4 shadow-lg">
						@if (count($portfolios) > 0)
								<table class="table-zebra table w-full">
										<thead>
												<tr class="hover">
														<th class="text-base font-bold">#</th>
														<th class="text-base font-bold">title</th>
														<th class="text-base font-bold">skills</th>
														<th class="text-base font-bold">likes</th>
														<th class="text-base font-bold">actions</th>
												</tr>
										</thead>
										<tbody>
												@foreach ($portfolios as $index => $portfolio)
														<tr class="hover">
																<td>{{ ++$index }}</td>
																<td>{{ $portfolio->title }}</td>
																<td>
																		@foreach ($portfolio->skills as $skill)
																				<span class="badge-primary badge">{{ $skill->name }}</span>
																		@endforeach
																</td>
																<td>
																		{{ $portfolio->like->like ?? 0 }}
																</td>
																<td class="flex gap-3">
																		<a href="#" onclick="return confirm('Are you sure?')">
																				<i class="fas fa-trash"></i>
																		</a>
																		<a href="#">
																				<i class="fas fa-edit" x-on:click="toggle()">
																				</i>
																		</a>
																</td>
														</tr>
												@endforeach
										</tbody>
								</table>
						@else
								<div class="text-center">
										<p>no portfolio found</p>
								</div>
						@endif
						{{ $portfolios->links('components.pagination') }}
				</div>
		</section>

		<section class="space-y-5">
				<h2>portfolios</h2>

				@forelse($portfolios as $portfolio)
						<div class="w-full rounded-lg bg-base-300 p-4 shadow-xl">
								<div class="flex flex-col items-center justify-center gap-5 sm:flex-row">
										<figure>
												<img src="{{ $portfolio->pic() }}" alt="{{ $portfolio->title }}" class="rounded-lg">
										</figure>
										<div class="space-y-3">
												<h2>{{ $portfolio->title }}</h2>

												<p>{{ $portfolio->des }}</p>

												<div>
														@foreach ($portfolio->skills as $skill)
																<span class="badge-primary badge">{{ $skill->name }}</span>
														@endforeach
												</div>

												<div class="card-actions justify-end">
														<a href="#" class="btn-primary btn h-2" onclick="return confirm('Are you sure?')">
																<i class="fas fa-trash"></i>
														</a>
														<a href="#"class="btn-primary btn h-2">
																<i class="fas fa-edit" x-on:click="toggle()">
																</i>
														</a>
												</div>
										</div>
								</div>
						</div>
				@empty
						<div class="text-center">
								<p>no portfolio found</p>
						</div>
				@endforelse
				{{ $portfolios->links('components.pagination') }}
		</section>

@endsection
