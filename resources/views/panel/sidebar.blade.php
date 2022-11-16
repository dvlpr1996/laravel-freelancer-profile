<aside id="sidebar">
		<ul class="mt-1 space-y-5">
				<li class="aside-items">
						<i class="fas fa-tachometer-alt mr-1"></i>
						<a href="{{ route('panel.profile.index', auth()->user()->slug) }}">account info</a>
				</li>

				<li class="aside-items">
						<i class="fas fa-inbox mr-1"></i>
						<a href="{{ route('panel.portfolios.index', auth()->user()->slug) }}">portfolios</a>
				</li>

				<li class="aside-items">
						<i class="fas fa-calendar-week mr-1"></i>
						<a href="{{ route('panel.notification.index', auth()->user()->slug) }}">messages</a>
				</li>
		</ul>
</aside>
