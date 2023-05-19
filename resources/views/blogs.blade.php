@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/blog.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="top"></div>

	<!-- ---------------------------banner -->
	<div class="banner-area" style="background-image:linear-gradient( #1c1a2521, #000000ab),url({{ asset('images/1024px-Dead_Sea_by_David_Shankbone.jpg') }}) "></div>




	<!-- ------------------blog html start--------------------------------------------- -->



	<section class="light">
		<div class="container py-2">
			<div class="h1 text-center text-dark pb-4 " id="pageHeaderTitle">Welcome To Our Blog</div>

			<article class="postcard light blue" id="lotus">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="./images/jacobs-well.jpg" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark" style="padding-right: 40px;">
					<h1 class="postcard__title blue"><a href="#">Ramallah & Nablus Private Tour</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2023-12-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Sun, December 25th 2023
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Meet in Bethlehem and drive toward Ramallah. W will start in the
						center of Ramallah, the administrative capital of the Palestinian Authority. You will walk
						around the city to see the daily life of Palestinians. Next your guide will take you to visit
						the Mausoleum and Museum of Yasser Arafat, the former president of the Palestinian Authority,
						where he was under siege by the Israeli military during the Second Intifada
						If allows, possible visit to Beir-Zeit, where you will visit the Shepherds Brewery and taste
						local Palestinian beer.

						After lunch, your guide will take you to Nablus. You will walk through the Old City of Nablus in
						the bazaar, see the local daily life, and try Kanafeh (a traditional Palestinian pastry). Next
						you will visit one of the oldest soap factories in the area where the soap is handmade using
						olive oil. From the old city, you will continue up to Mount Gerizim where a minority Samaritan
						community still lives. You will have the chance hear the history of the Samaritans from their
						high priest.

						Drive back to Bethlehem 300 Checkpoint where the tour will end and you will get back to
						Jerusalem by public transportation.</div>
					<ul class="postcard__tagbox">
						<li class="tag__item"><i class="fa fa-compass" aria-hidden="true"></i> Direction</li>
						<!-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play blue">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a> -->
						</li>
					</ul>
				</div>
			</article>


			<article class="postcard light red" id="museum">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="./images/Jerusalem.webp" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark" style="padding-left: 45px;">
					<h1 class="postcard__title red"><a href="#">Tour Jerusalem,Bethlehem, Ramallah & Jericho</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Sun, May 25th 2023
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Discover Palestine in three days Private tour. Walk around the old city of Jerusalem, visit the Nativity Church in Bethlehem, a Visit to the Ramallah and enjoy floating at the Dead Sea.
					</div>
					<ul class="postcard__tagbox">
						<li class="tag__item"><i class="fa fa-compass" aria-hidden="true"></i> Direction</li>
						<!-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play red">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li> -->
					</ul>
				</div>
			</article>


			<article class="postcard light green" id="gangarama">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="./images/IMG_4076.jpg" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark" style="padding-right: 40px;">
					<h1 class="postcard__title green"><a href="#">Hike Wadi Qelt Private Tour</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Sun, December 25th 2023
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">GBook your hiking tour in Wadi Qelt, one of the main hiking attractions in the wilderness of Palestine. You will enjoy the fresh water springs along the hike. The valley have diverse flora and fauna, ancient ruins, and Saint George Monastery and the ancient Roman aqueduct and palaces ending up in Jericho.</div>
					<ul class="postcard__tagbox">
						<li class="tag__item"><i class="fa fa-compass" aria-hidden="true"></i> Direction</li>
						<!-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play green">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li> -->
					</ul>
				</div>
			</article>


			<article class="postcard light yellow" id="square">
				<a class="postcard__img_link" href="#">
					<img class="postcard__img" src="./images/Dead-Sea.jpg" alt="Image Title" />
				</a>
				<div class="postcard__text t-dark" style="padding-left: 50px;">
					<h1 class="postcard__title yellow"><a href="#">Dead Sea Private Tour</a></h1>
					<div class="postcard__subtitle small">
						<time datetime="2020-05-25 12:00:00">
							<i class="fas fa-calendar-alt mr-2"></i>Sun, December 25th 2023
						</time>
					</div>
					<div class="postcard__bar"></div>
					<div class="postcard__preview-txt">Enjoy a mud bath and float at the Dead Sea, the lowest point on earth. Walk on the footsteps of Jesus and baptize in Jordan River where Jesus got baptized. Climb Mount of Temptation where Jesus was tempted and enjoy a panorama view of Jordan Valley. Visit Jericho, the oldest city in the world and walk over the biggest mosaic carpet in the Holy Land.</div>
					<ul class="postcard__tagbox">
						<li class="tag__item"><i class="fa fa-compass" aria-hidden="true"></i> Direction</li>
						<!-- <li class="tag__item"><i class="fas fa-clock mr-2"></i>55 mins.</li>
					<li class="tag__item play yellow">
						<a href="#"><i class="fas fa-play mr-2"></i>Play Episode</a>
					</li> -->
					</ul>
				</div>
			</article>


		</div>
	</section>
@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection