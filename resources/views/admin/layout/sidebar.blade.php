<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
				<a class="sidebar-brand" href="index.html">
          <span class="align-middle">مرحباً بك {{ auth()->user()->name }}</span>
        </a>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						الصفحات
					</li>

					<li class="sidebar-item {{ Request::is('admin/dashboard') ? 'active' : ''}}">
						<a class="sidebar-link" href="{{route('admin.dashboard')}}">
							<i class="fa fa-home"></i>
             				<span class="align-middle">الرئيسية</span>
            			</a>
					</li>

					<li class="sidebar-item {{ Request::is('admin/city') ? 'active' : ''}}">
						<a class="sidebar-link" href="{{route('city.index')}}">
							<i class="fa-solid fa-city"></i>
							<span class="align-middle">المدن</span>
            			</a>
					</li>

					<li class="sidebar-item {{ Request::is('admin/places') ? 'active' : ''}}">
						<a class="sidebar-link" href="{{route('admin.place.index')}}">
							<i class="fa-solid fa-location-dot"></i>
              				<span class="align-middle">الأماكن</span>
            			</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
							<i class="fa-solid fa-right-from-bracket"></i>
							<span class="align-middle">تسجيل الخروج</span>
						</a>    
						<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
						</form>
					</li>
</nav>