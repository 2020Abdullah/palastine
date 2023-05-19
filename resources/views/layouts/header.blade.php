<!-- header section starts  -->
    <header class="header">

        <a href="{{ url('/') }}" class="logo"> <img src="{{asset('images/Palestine.png')}}" alt="Palestine" width="40">فلسطين</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="{{url('/')}}">الرئيسية</a>
            <a href="{{route('map')}}">الخريطة</a>
            <a href="{{route('blogs')}}">أخبارنا</a>
            <a href="{{route('products')}}">المنتجات</a>
            <a href="{{route('contact')}}">اتصل بنا</a>
        </nav>
        @auth
            <div class="dropdown">
            <button class="btn btn-outline-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
            </button>
            <ul class="dropdown-menu">
                @php
                    $favs_count = App\Models\Fav::where('user_id', auth()->user()->id)->count();
                @endphp
                <li class="like">
                    <a class="dropdown-item" href="{{route('city.fav')}}">
                        <i class="fa fa-heart"></i>
                        <span>مفضلاتك</span>
                        <p class="count">{{ $favs_count }}</p>
                    </a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        <span class="align-middle">تسجيل الخروج</span>
                    </a>    
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
            </div>
        @endauth

        <div class="icons ml-3">
            <div id="menu-btn" class="fas fa-bars"></div>
            <!--<a href="#" class="fas fa-shopping-cart"></a>-->
            <div id="search-btn" class="fas fa-search"></div>
        </div>

    </header>
<div class="search-form">
    <div id="close-search" class="fas fa-times"></div>
    <form action="">
        <input type="search" name="" placeholder="search here..." id="search-box">
        <label for="search-box" class="fas fa-search"></label>
    </form>
</div>
<!-- ------scroller to top -->

<a href="#top" class="to-top">
  <i class="fas fa-chevron-up"></i>
</a>

<!-- header section ends -->  