@extends('panel.panelMaster')
@section('title', 'messages')

@section('content')
		<h1 class="text-center sm:text-left">your messages</h1>

		<section class="relative mx-auto sm:w-4/6 md:w-3/5">
				<form action="#" method="GET">
						@csrf
						<input type="text" name="q" class="block w-full py-2 px-3 my-2 appearance-none rounded-lg bg-base-300" placeholder="Search Your message" autocomplete="off"
								value="request()->query('q')">
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
				<div class="flex items-center gap-2">
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

				<div class="card w-full bg-base-300 shadow-xl">
						<div class="card-body">
								<div class="flex items-center gap-5">
										<h2 class="card-title">message from full name</h2>
										<div class="badge-primary badge badge-lg">created at time</div>
								</div>
								<p class="italic">message</p>
								<hr class="my-3">
								<div class="card-actions justify-between">
										<div class="space-x-3">
												<a href="">phone numbers</a>
												<a href="">email address</a>
										</div>
										<div>
												<a href="" class="text-error">delete msg</a>
										</div>
								</div>
						</div>
				</div>
		</section>

@endsection
