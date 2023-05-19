@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/swiper-bundle.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<!-- home section starts  -->
<section class="home" id="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">
         <!-- (#ffffff00, #000000a0) -->
            <div class="swiper-slide">
                <div class="box second" style="background: linear-gradient( #1c1a2521, #000000ab),url({{asset('images/home1.jpg')}}) center/cover no-repeat;"">
                    <div class="content">
                        <span style="color:white;">قم بزيارة</span>
                        <h3>فسلطين</h3>
                            <p style="color:white;">
                              تمتلك فلسطين ثروة من عوامل الجذب العالمية ،
                              ثقافي وديني
                              الأهمية التي هي
                              قرعة سياحية لا يمكن إنكارها.
                            </p>
                        <a href="#" class="hbtn">تعرف علي المزيد</a>
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box second" style="background: linear-gradient( #1c1a2521, #000000ab),url({{ asset('images/home2.jpg') }}) center/cover no-repeat ;">
                    <div class="content">
                        <span style="color:white;">مرحباً بك في</span>
                        <h3 class="h3">بيت المقدس</h3>
                        <p style="color:white;">
                          القدس هي قلب السياحة الفلسطينية وعاصمة فلسطين.
                          لا تزال هذه المدينة فخورة ويجب أن تواجه العديد من الصعوبات مع مرور الوقت. هذه المدينة مهمة لكل من المسيحيين والمسلمين. شهد تاريخ الأنبياء والقادة بكل طريق ومساجد وكنائس. تعتبر من أفضل المدن التي يمكن زيارتها في فلسطين. يعد الحرم الشريف مكانًا مقدسًا أصيلًا ويأسر الجمال المذهل السياح في جميع أنحاء العالم. في الحرم الشريف والقدس ، القبة الصخرية الذهبية هي
                          أكثر عرض لا يصدق. الآن هذه القبة الصخرية الذهبية ترمز إلى القدس دوليًا.
                        </p>
                        <a href="#" class="hbtn">تعرف علي المزيد</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>

</section>

<!-- home section ends -->

<!-- category/adventure section starts  -->
<section class="category adventure" id="adventure">

    <h1 class="heading">أشهر المدن في فلسطين</h1>

    <div class="box-container">

        @foreach ($cities as $city)
          <div class="box">
              <img src="{{ asset('images/city/' . $city->image) }}" alt="city">
              <h3>{{ $city->name }}</h3>
              <p>{{ $city->info }}</p>
              <a href="{{route('city.places', $city->name)}}" class="btn btn-outline-success">شاهد المدينة</a>
              @if (auth()->check())
                 <form method="POST" action="{{ route('city.like') }}" style="display: inline-block">
                  @csrf
                  <input type="hidden" value="{{ $city->id }}" name="city_id">
                  <button type="submit" class="btn btn-outline-success">
                    <i class="fa fa-thumbs-up" aria-hidden="true"></i>
                  </button>
                </form>
              @else
                  <a href="#" data-bs-toggle="modal" data-bs-target="#reg" class="btn btn-outline-success">سجل إعجابك</a>
              @endif
          </div>
        @endforeach
      @if (!auth()->check())
        <div class="modal fade" id="reg" tabindex="-1" aria-labelledby="reg" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="reg">تم تسجيل الإعجاب</h1> 
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="model-body">
                  <form method="POST" action="{{ route('login') }}">
                      <div class="modal-body">
                          @csrf
                          <div class="mb-3">
                            <label class="form-label">البريد الإلكتروني</label>
                            <input class="form-control form-control-lg" type="text" name="email" placeholder="Enter your email" />
                          </div>
                          <div class="mb-3">
                            <label class="form-label">كلمة المرور</label>
                            <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                          </div>
                          <div class="mb-3">
                            <a class="btn btn-outline-success" href="{{ route('register') }}">ليس لديك حساب ؟</a>
                          </div>
                      </div> 
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">إلغاء</button>
                        <button type="submit" class="btn btn-success text-white">تسجيل الدخول</button>
                      </div>
                  </form>
                </div>
            </div>
          </div>
        </div>
      @endif
    </div>

</section>
<!-- category/adventure section ends -->
<!-- map section starts  -->
<section class="map" id="map">
  
   <div class="image">
     <img src="./images/E04Ic2gWEAMJpAM.jfif" class="center" alt="" width="500" height="600">
    </div>
    

    <div class="content">
        <h3>اكتشف فلسطين</h3>
        <p>
          من زيارة الموقع الديني والأثري وتناول الفلافل وأطباق الحمص ، إلى الاستمتاع بالطعام الفلسطيني ذو النكهات المميزة ، أو مجرد اكتشاف ثقافتها وشعبها المذهلين ، يوجد في فلسطين مجموعة لا تنتهي من عوامل الجذب حتى للمسافرين الأكثر خبرة. إذا كانت هذه هي المرة الأولى التي تزور فيها هذا البلد الرائع ، فقم بزيارة مدونتنا لمعرفة أفضل الأشياء التي يمكنك القيام بها في فلسطين ، نصائح ومعلومات.
        </p>
        <p> سواء كنت مسافرا مع شريك حياتك أو تخطط لقضاء إجازة مع عائلتك ، فلن تخيب ظنك فلسطين!</p>
        <a href="#" class="btn btn-success">تعرف علي المزيد</a>
    </div>
</section>

<!-- map section ends -->
<!-- blogs section starts  -->

<section class="blogs" id="blogs">

    <h1 class="heading">أفضل الرحلات في فلسطين</h1>

    <div class="swiper blogs-slider">

        <div class="swiper-wrapper">

          @foreach ($places as $place)
            <div class="swiper-slide slide">
                <img src="{{ asset('images/place/' . $place->image) }}" alt="img">
                <div class="icons">
                    <a href="#"> 
                      <i class="fas fa-calendar"></i>
                       {{ $place->created_at->format('Y-M-d') }}
                    </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>{{ $place->name }}</h3>
                <p>
                  {{ Str::of($place->info)->words(30, '...') }}
                </p>
                <a href="#" class="btn btn-outline-info">اقرأ المزيد</a>
            </div>
          @endforeach

       
            {{-- <div class="swiper-slide slide">
                <img src="./images/jacobs-well.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Ramallah & Nablus Private Tour</h3>
                <p>Immerse in the de facto capital of Palestine, the city of Ramallah and visit the tomb of the ex Palestinian president Yasser Arrafat, visit the old city of Nablus, meet the Samaritan high prient, visit Mount Gerizim and enjoy the Palestinian local food.</p>
                <a href="blogs.html#lotus" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="./images/96.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Tour Jerusalem,Bethlehem, Ramallah & Jericho</h3>
                <p>Discover Palestine in three days Private tour. Walk around the old city of Jerusalem, visit the Nativity Church in Bethlehem, a Visit to the Ramallah and enjoy floating at the Dead Sea.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="./images/IMG_8553.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Hike Wadi Qelt Private Tour</h3>
                <p>Book your hiking tour in Wadi Qelt, one of the main hiking attractions in the wilderness of Palestine. You will enjoy the fresh water springs along the hike. The valley have diverse flora and fauna, ancient ruins, and Saint George Monastery and the ancient Roman aqueduct and palaces ending up in Jericho.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="./images/Dead-Sea.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Dead Sea Private Tour</h3>
                <p>Enjoy a mud bath and float at the Dead Sea, the lowest point on earth. Walk on the footsteps of Jesus and baptize in Jordan River where Jesus got baptized. Climb Mount of Temptation where Jesus was tempted and enjoy a panorama view of Jordan Valley. Visit Jericho, the oldest city in the world and walk over the biggest mosaic carpet in the Holy Land.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="./images/14124457_10208929191839856_8883185226535306538_o.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Bethlehem Walking Tour</h3>
                <p>Discover Bethlehem city on foot. Visit most of the memorable site at the old city of Bethlehem, walk the star street as the holly family and the three wise men did 2000 years ago. </p>
                <a href="#" class="btn">read more</a>
            </div>

            <div class="swiper-slide slide">
                <img src="./images/saint-catherine-church.jpg" alt="">
                <div class="icons">
                    <a href="#"> <i class="fas fa-calendar"></i> 25th Dec, 2023 </a>
                    <a href="#"> <i class="fas fa-user"></i> by admin </a>
                </div>
                <h3>Hebron & Bethlehem Private Tour</h3>
                <p>Walk around the old city of Hebron and visit the Ibrahimi Mosque. Visit the glass factory to watch how they blow the glass to shape it. Visit Bethlehem, the Church of the Nativity, Saint Catherine Church, Saint Jerome’s Caves, and Milk Grotto. Walk around the old city of Bethlehem and enjoy a local meal in one of the oldest restaurant in the city...</p>
                <a href="#" class="btn">read more</a>
            </div> --}}

        </div>

    </div>

</section>

<!-- blogs section ends -->

<!-- event home page section starts -->

<section class="event">
    <h1 class="heading1">Upcoming Events</h1>
    <div class="eventrow">
     
      <div class="example-2 card">
      <div class="wrapper" style="background: url({{ asset('images/madolduwa.jpg') }}) center cover no-repeat">
        <div class="head">
          <div class="date">
            <span class="day">05</span>
            <span class="month">Dec</span>
            <span class="year">2023</span>
          </div>
          <ul class="menu-content">
            <li>
              <a href="#" class="fa fa-bookmark-o"></a>
            </li>
            <li><a href="#" class="fa fa-heart-o" id="heart"><span>18</span></a></li>
            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="Econtent">
            <span class="author">Damitha Jayatharaka</span>
            <h1 class="title"><a href="#">Ramadan Kareem</a></h1>
            <p class="text1">Though not the highest mountain of Palestine, the striking pyramid of Adam's Peak (7,360 ft) is certainly the... </p>
            <a href="events.html#sripada" class="Ebutton">Read more</a>
          </div>
        </div>
      </div>
     </div>
  
  
  
     <div class="example-2 card">
      <div class="wrapper" style="background: linear-gradient(#ffffff00, #00000082), url({{ asset('images/96.jpg') }}) center/cover no-repeat;" >
        <div class="head">
          <div class="date">
            <span class="day">05</span>
            <span class="month">Dec</span>
            <span class="year">2023</span>
          </div>
          <ul class="menu-content">
            <li>
              <a href="#" class="fa fa-bookmark-o"></a>
            </li>
            <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="Econtent">
            <span class="author">Damitha Jayatharaka</span>
            <h1 class="title"><a href="#">November 23: Virtual Film Screening – “Gaza Fights for Freedom”</a></h1>
            <p class="text1">Join the Palestine Foundation for a virtual film screening of “Gaza Fights for Freedom” on Monday, November 23, 2020 at 6 pm (PST), including a Q&A with producer Mike Prysner!..</p>
            <a href="events.html#awurudu" class="Ebutton">Read more</a>
          </div>
        </div>
      </div>
    </div>
  
    <!--  -->
    
    <div class="example-2 card">
      <div class="wrapper" style="background: linear-gradient(#ffffff00, #00000082), url({{ asset('images/14124457_10208929191839856_8883185226535306538_o.jpg') }}) center/cover no-repeat;">
        <div class="head">
          <div class="date">
            <span class="day">05</span>
            <span class="month">Dec</span>
            <span class="year">2023</span>
          </div>
          <ul class="menu-content">
            <li>
              <a href="#" class="fa fa-bookmark-o"></a>
            </li>
            <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="Econtent">
            <span class="author">Damitha Jayatharaka</span>
            <h1 class="title"><a href="#">he Walk for Water in Palestine</a></h1>
            <p class="text1">Walk for Water in Palestine Saturday, March 26, 2022 at 9:30AM Mile Square Regional Park, 16801 Euclid St., Fountain Valley, CA </p>
            <a href="events.html#asala" class="Ebutton">Read more</a>
          </div>
        </div>
      </div>
    </div>
    
  
  
    <div class="example-2 card">
      <div class="wrapper" style="background: url({{ asset('images/jacobs-well.jpg') }}) center/cover no-repeat;">
        <div class="head">
          <div class="date">
            <span class="day">05</span>
            <span class="month">Dec</span>
            <span class="year">2023</span>
          </div>
          <ul class="menu-content">
            <li>
              <a href="#" class="fa fa-bookmark-o"></a>
            </li>
            <li><a href="#" class="fa fa-heart-o"><span>18</span></a></li>
            <li><a href="#" class="fa fa-comment-o"><span>3</span></a></li>
          </ul>
        </div>
        <div class="data">
          <div class="Econtent">
            <span class="author">Damitha Jayatharaka</span>
            <h1 class="title"><a href="#">Mawtini Choir Community Outreach</a></h1>
            <p class="text1">Mawtini Choir Community Outreach...</p>
            <a href="events.html#vesak" class="Ebutton">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  
  </section>

<!-- event home page section ends -->
<!-- Tradional Products section start -->

<section class="products">
    <h1 class="heading1">Tradional Products</h1>
<div class="wrapper">
  <!-- <div class="background"> -->
    <!-- <img src="bg.jpg" alt=""> -->
    <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132206/news-slider/background.webp" alt=""> -->
  <!-- </div> -->
  <div class="item-bg"></div>

  <div class="news-slider">
    <div class="news-slider__wrp swiper-wrapper">
      <div class="news-slider__item swiper-slide">
        <a href="products.html#mask" class="news__item">
          <!-- <div class="news-date">
            <span class="news-date__title">24</span>
            <span class="news-date__txt">May</span>
          </div> -->
          <div class="news__title">
            Food, Cookbooks, & Kitchenware
          </div>

          <p class="news__txt">
            We offer an award-winning, first press, extra virgin olive oil that is aromatic and flavourful.

          <div class="news__img">
            <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-2.webp" alt="news"> -->
            <img src="./images/1887.webp" alt="">
          </div>
        </a>
      </div>

      <div class="news-slider__item swiper-slide">
        <a href="products.html#spices" class="news__item">
          <!-- <div class="news-date">
            <span class="news-date__title">25</span>
            <span class="news-date__txt">May</span>
          </div> -->
          <div class="news__title">
            Home Décor
          </div>

          <p class="news__txt">
            Decoration is the beating heart of every home, an expression of culture, style, and joy and a warm invitation to any guest.
          </p>

          <div class="news__img">
            <img src="./images/home-decor.webp" alt="">
            <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-3.webp" alt="news"> -->
          </div>
        </a>
      </div>

      <div class="news-slider__item swiper-slide">
        <a href="products.html#food" class="news__item">
          <!-- <div class="news-date">
            <span class="news-date__title">26</span>
            <span class="news-date__txt">May</span>
          </div> -->
          <div class="news__title">
            Olive Wood
          </div>

          <p class="news__txt">
            The Holy Land Handicraft Cooperative is a certified fair trade cooperative based in Beit Sahour near Bethlehem working to alleviate poverty and assist artisans in the marketing of products.
          </p>

          <div class="news__img">
            <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-4.webp" alt="news"> -->
            <img src="./images/1878.webp" alt="">
          </div>
        </a>
      </div>



      <div class="news-slider__item swiper-slide">
        <a href="products.html#art" class="news__item">
          <!-- <div class="news-date">
            <span class="news-date__title">28</span>
            <span class="news-date__txt">May</span>
          </div> -->
          <div class="news__title">
            Palestine Solidarity
          </div>

          <p class="news__txt">
            Proudly wear your support for freedom, justice, and equality for Palestinians with keffiyehs, tshirts, “free Palestine” masks.
          </p>

          <div class="news__img">
            <!-- <img src="https://res.cloudinary.com/muhammederdem/image/upload/q_60/v1537132205/news-slider/item-5.webp" alt="news"> -->
            <img src="./images/solidarity.webp" alt="">
          </div>
        </a>
      </div>
    </div>

    <div class="news-slider__ctr">

      <div class="news-slider__arrows">
        <button class="news-slider__arrow news-slider-prev">
          <span class="icon-font">
            <svg class="picon icon-arrow-left"><use xlink:href="#icon-arrow-left"></use></svg>
          </span>
        </button>
        <button class="news-slider__arrow news-slider-next">
          <span class="icon-font">
            <svg class="picon icon-arrow-right"><use xlink:href="#icon-arrow-right"></use></svg>
          </span>
        </button>
      </div>

      <div class="news-slider__pagination"></div>

    </div>

  </div>

</div>

<svg hidden="hidden">
  <defs>
    <symbol id="icon-arrow-left" viewBox="0 0 32 32">
      <title>arrow-left</title>
      <path d="M0.704 17.696l9.856 9.856c0.896 0.896 2.432 0.896 3.328 0s0.896-2.432 0-3.328l-5.792-5.856h21.568c1.312 0 2.368-1.056 2.368-2.368s-1.056-2.368-2.368-2.368h-21.568l5.824-5.824c0.896-0.896 0.896-2.432 0-3.328-0.48-0.48-1.088-0.704-1.696-0.704s-1.216 0.224-1.696 0.704l-9.824 9.824c-0.448 0.448-0.704 1.056-0.704 1.696s0.224 1.248 0.704 1.696z"></path>
    </symbol>
    <symbol id="icon-arrow-right" viewBox="0 0 32 32">
      <title>arrow-right</title>
      <path d="M31.296 14.336l-9.888-9.888c-0.896-0.896-2.432-0.896-3.328 0s-0.896 2.432 0 3.328l5.824 5.856h-21.536c-1.312 0-2.368 1.056-2.368 2.368s1.056 2.368 2.368 2.368h21.568l-5.856 5.824c-0.896 0.896-0.896 2.432 0 3.328 0.48 0.48 1.088 0.704 1.696 0.704s1.216-0.224 1.696-0.704l9.824-9.824c0.448-0.448 0.704-1.056 0.704-1.696s-0.224-1.248-0.704-1.664z"></path>
    </symbol>
  </defs>
</svg>
<!-- partial -->
  
    
</section>

<!-- Tradional Products section end -->
<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <h1 class="heading">Tourist's reviews</h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide">
                <p class="text">Fantastic! Really great country with hospitable people who are excited to show you around. The places we went to were really varied...Palestine has everything...coasts, wildlife, mountains, culture, food....and so much more.</p>
                <div class="user">
                    <img src="./images/pic-1.png" alt="">
                    <div class="info">
                        <h3>David Thomsan</h3>
                        <span>United Kingdom</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">I have been to Palestine for 2 times now and I really love the country and the people there. We help some poor people there who are now close family! We travelled around the country with a great guide named Wicky.</p>
                <div class="user">
                    <img src="./images/pic-2.png" alt="">
                    <div class="info">
                        <h3>Simona Alixa</h3>
                        <span>New Zealand</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">If you want to explore the must-see sights of Palestine, but also enjoy your well-earned vacation from work, here are our suggestions on how to make the most of your days in the land of serendipity.</p>
                <div class="user">
                    <img src="./images/pic-3.png" alt="">
                    <div class="info">
                        <h3>Petra Marick</h3>
                        <span>London</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Palestine is known for its rich culture and history, with fascinating temples and tea plantations to explore. The country is home to amazing wildlife and exotic flora and fauna, and visitors can experience all of this in the beautiful national parks.</p>
                <div class="user">
                    <img src="./images/pic-4.png" alt="">
                    <div class="info">
                        <h3>Chloe Loues</h3>
                        <span>Korea</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Palestine (historically known as Ceylon) has been called “the gem of the Indian ocean” because of its shape and location. Sri Jayewardenepura Kotte is its legislative capital, and pal is its largest city and centre of commerce.</p>
                <div class="user">
                    <img src="./images/pic-5.png" alt="">
                    <div class="info">
                        <h3>john deo</h3>
                        <span>USA</span>
                    </div>
                </div>
            </div>

            <div class="swiper-slide slide">
                <p class="text">Palestine is a popular backpacker destination and known to be really cheap. We gathered a few tips for all the travelers who are really on a budget. </p>
                <div class="user">
                    <img src="./images/pic-6.png" alt="">
                    <div class="info">
                        <h3>Jing lee</h3>
                        <span>China</span>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- reviews section ends -->

<!-- newsletter section  -->

<section class="newsletter">

    <div class="content">
        <h1 class="heading">subscirbe now</h1>
        <p>Subscribe for our travel newsletter to receive exclusive deals, destination inspiration, and helpful tips for your next vacation. Stay informed and get the most out of your travels by subscribing to our email list today.</p>
        <form action="">
            <input type="email" name="" placeholder="enter your email" id="" class="email">
            <input type="submit" value="subscirbe" class="btn">
        </form>
    </div>

</section>

<section class="clients">

    <div class="swiper clients-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide silde"><img src="./images/client-logo-1.png" alt=""></div>
            <div class="swiper-slide silde"><img src="./images/client-logo-2.png" alt=""></div>
            <div class="swiper-slide silde"><img src="./images/client-logo-3.png" alt=""></div>
            <div class="swiper-slide silde"><img src="./images/client-logo-4.png" alt=""></div>
        </div>
    </div>

</section>

<!-- footer section starts  -->

<section class="footer" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url({{ asset('images/ftr2.jpg') }}) no-repeat;">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="{{url('/')}}">home</a>
            <a href="{{ route('map') }}">map</a>
            <a href="{{ route('blogs') }}">blogs</a>
            <a href="{{ route('products') }}">products</a>
            <a href="{{ route('contact') }}">contact us</a>
        </div>

        <div class="box">
            <h3>extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my wishlist</a>
            <a href="#">ask questions</a>
            <a href="#">terms of use</a>
            <a href="#">privacy policy</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
            <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
            <a href="#"> <i class="fas fa-envelope"></i> example@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Palestine</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#" target="_blank"><i class="fa fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit">Made with 🤍 in<span> Palestine</span> <br> Copyright ©️ 2023 - all rights reserved!</div>

</section>

<!-- footer section ends -->




<!-- ------scroller to top -->

<a href="#top" class="to-top">
  <i class="fas fa-chevron-up"></i>
</a>
@endsection


@section('js')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js'></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="{{ asset('home/js/script.js') }}"></script>
@endsection