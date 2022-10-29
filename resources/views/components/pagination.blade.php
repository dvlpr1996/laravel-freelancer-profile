@if ($paginator->hasPages())
		<nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-center">
				<div class="mt-16 flex flex-1 justify-between sm:hidden">
						@if ($paginator->onFirstPage())
								<span
										class="relative inline-flex cursor-default items-center rounded-lg bg-slate-800 p-2 text-sm font-medium leading-5">
										{!! __('pagination.previous') !!}
								</span>
						@else
								<a href="{{ $paginator->previousPageUrl() }}"
										class="relative inline-flex items-center rounded-lg bg-slate-800 p-2 text-sm font-medium leading-5 transition duration-150 ease-in-out">
										{!! __('pagination.previous') !!}
								</a>
						@endif

						@if ($paginator->hasMorePages())
								<a href="{{ $paginator->nextPageUrl() }}"
										class="relative ml-3 inline-flex items-center rounded-lg bg-slate-800 p-2 text-sm font-medium leading-5 transition duration-150 ease-in-out">
										{!! __('pagination.next') !!}
								</a>
						@else
								<span
										class="relative ml-3 inline-flex cursor-default items-center rounded-lg bg-slate-800 p-2 text-sm font-medium leading-5">
										{!! __('pagination.next') !!}
								</span>
						@endif
				</div>

				<div class="mt-5 hidden sm:flex sm:flex-1 sm:items-center sm:justify-center">
						<div>
								<span class="relative z-0 inline-flex shadow-sm gap-5">
										{{-- Pagination Elements --}}
										@foreach ($elements as $element)
												{{-- "Three Dots" Separator --}}
												@if (is_string($element))
														<span aria-disabled="true">
																<span
																		class="relative -ml-px inline-flex cursor-default items-center bg-slate-800 p-2 text-sm font-medium leading-5">
																		{{ $element }}
																</span>
														</span>
												@endif

												{{-- Array Of Links --}}
												@if (is_array($element))
														@foreach ($element as $page => $url)
																@if ($page == $paginator->currentPage())
																		<span aria-current="page">
																				<span
																						class="relative -ml-px inline-flex cursor-default items-center rounded-lg bg-slate-500 px-4 py-2 text-sm font-medium leading-5">
																						{{ $page }}
																				</span>
																		</span>
																@else
																		<a href="{{ $url }}"
																				class="relative -ml-px inline-flex cursor-pointer items-center rounded-lg bg-slate-800 px-4 py-2 text-sm font-medium leading-5 transition duration-150 ease-in-out hover:text-gray-500 active:text-gray-700"
																				aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
																				{{ $page }}
																		</a>
																@endif
														@endforeach
												@endif
										@endforeach
								</span>
						</div>
				</div>
		</nav>
@endif
