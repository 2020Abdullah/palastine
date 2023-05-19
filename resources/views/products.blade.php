@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/product.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="top"></div>

	<!-- ---------------------------banner -->
	<div class="banner-area" style="background-image:linear-gradient( #1c1a2521, #000000ab),url({{ asset('images/1024px-Dead_Sea_by_David_Shankbone.jpg') }}) "></div>


    <!-- -----------------------------------------------------product section starts ----------------------------->

    <div class="tabs horizontal-scroll-wrapper">
      <div class="tabs__head">
        <div class="tabs__toggle is-active">
          <span class="tabs__name">Palestine Solidarity</span>
        </div>
        <div class="tabs__toggle">
          <span class="tabs__name">Hebron Glass</span>
        </div>
        <div class="tabs__toggle">
          <span class="tabs__name">Food</span>
        </div>
        <div class="tabs__toggle">
          <span class="tabs__name">Industrial Goods</span>
        </div>
        <!-- <div class="tabs__toggle">
          <span class="tabs__name">Arts</span>
        </div> -->
      </div>

      <!-- ----------tab body html start -->

      <div class="tabs__body">
        <!-- --------------------------------------mask tab html start------------>
        <div class="tabs__content is-active">
          <h2 class="tabs__title" id="#mask">Palestine Solidarity</h2>

          <div class="container text-center">
            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Keffiyeh, Black and White</h5>
                <p>
                  Proudly wear your support for freedom, justice, and equality
                  for Palestinians with keffiyehs, tshirts, “free Palestine”
                  masks. Or glance through this selection of bumper stickers,
                  pins, water bottles, prints, books, and more.
                  <br />
                  Purchase Palestinian olive oil and give it as a gift to a
                  dinner party host. Support Palestinian artisans struggling to
                  maintain their traditions. Give the gift of solidarity!
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/solidarity.webp" alt="img-1" />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img src="./images/scr101A.webp" alt="img-1" />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Keffiyeh - Red and White</h5>
                <p>
                  100% cotton; authentic and manufactured at the last remaining
                  keffiyah factory in Palestine, the Herbawi Textile Factory.
                  Light soft fabric with white edging or fringe. Also available
                  in black and white .
                </p>
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Keffiyeh, Black and White</h5>
                <p>100% cotton; light soft fabric with knotted white fringe.</p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/scr100A.webp" alt="img-1" />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img src="./images/AGO119-2.avif" alt="img-1" />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Palestine Map Mask</h5>
                <p>
                  This mask is: Sizes : [One Size Fits Most] 100% Cotton Masks*
                  Washable, Reusable, & Breathable 3 Plys of Fabric These are
                  NOT Medical Grade Masks Made IN USA Custom printed at Alliance
                  Graphics, MECA's union shop.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- --------------------------------------mask tab html end------------>

        <!-- --------------------------------------spices tab html start------------>
        <div class="tabs__content">
          <h2 class="tabs__title" id="spices">Palestinen Hebron Glass</h2>

          <div class="container text-center">
            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Hebron Glass</h5>
                <p>
                  The city of Hebron is known worldwide for its glassblowers and
                  designers. Glass factories have been a feature of this city
                  since the Middle Ages. As you enter one of these factories,
                  the temperature rises dramatically because of the furnace
                  (al-furun) located in the center of the factory. The al furun
                  is surrounded by two to four glass blowers who, as though
                  playing a musical instrument, pull the glass out as
                  semi-liquid, and blow through a pipe to form an object. The
                  shaping process continues with a metal instrument (kammasha)
                  and the vessel is complete. Then the glass is put aside into a
                  small chamber adjacent to the furnace to cool down.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/IMG_6248_1.webp" alt="img-1" />
              </div>
            </div>
          </div>
        </div>

        <!-- --------------------------------------spices tab html end------------>

        <!-- --------------------------------------food tab html start------------>

        <div class="tabs__content">
          <h2 class="tabs__title" id="food">Palestinen Foods And Drinks</h2>

          <div class="container text-center">
            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Sun Dried Tomato Caper Spread</h5>
                <p>
                  Ingredients: Sun-dried tomatoes, organic capers and organic
                  olive oil.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img
                  src="./images/FDtomatocaper-2.webp"
                  class="rounded-5"
                  alt="img-1"
                />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img src="./images/sweet.jpg" class="rounded-5" alt="img-1" />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>New Year Sweets</h5>
                <p>
                  Sweet meats and special dishes are an essential facet of the
                  Sinhala and Hindu New Year. While they have come to be
                  identified with and annual festival, some of these food items
                  are also prepared to mark special occasions. Here are some
                  sweet meats and other foods prepared in Buddhist and Hindu
                  households this time around. Every Buddhist and Hindu
                  households have an elegant new year table adorned with
                  delicious sweets around this festival period.
                </p>
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>The Gaza Kitchen</h5>
                <p>
                  The Gaza Kitchen is a richly illustrated cookbook that
                  explores the distinctive cuisine and food heritage of the area
                  known prior to 1948 as the Gaza District—and that of the many
                  refugees from elsewhere in Palestine who came to Gaza in 1948
                  and have been forced to stay there ever since. In the summer
                  of 2010, authors Laila El-Haddad and Maggie Schmitt traveled
                  the length and breadth of the Gaza Strip to collect the
                  recipes presented in the book. They were also able to build on
                  the extensive knowledge that Laila, herself a Palestinian from
                  Gaza, had gained from family and friends throughout the years.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img
                  src="./images/Untitleddesign-2022-10-14T122516.308.webp"
                  class="rounded-5"
                  alt="img-1"
                />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img
                  src="./images/Untitleddesign-2022-10-14T122031.513.webp"
                  alt="img-1"
                  width="350px"
                />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Baladi: A Celebration of Food from Land and Sea</h5>
                <p>
                  This book goes to the heart of the relationship between food
                  and identity, and conveys a sense of belonging through
                  beautiful, compelling and, yes, joyous recipes. I just want to
                  eat everything in it.
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- --------------------------------------food tab html end------------>

        <!-- --------------------------------------Industrial goods tab html start------------>
        <div class="tabs__content">
          <h2 class="tabs__title" id="goods">Palestinen Industrial Goods</h2>

          <div class="container text-center">
            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Ceramics</h5>
                <p>
                  The Fakhourys are based in the old city of Hebron where
                  Israeli soldiers and settlers routinely physically and
                  verbally abuse Palestinians. Despite the difficulties, the
                  family is determined to keep their store open and their craft
                  alive. The Karakashian studio in Jerusalem continues the
                  family tradition that began in 1922 with their arrival in
                  Jerusalem to help renovate the Dome of the Rock.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/1817.webp" alt="img-1" />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img
                  src="./images/Giftsetcoffee2.webp"
                  class="rounded-5"
                  alt="img-1"
                />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Ceramic Coffee Server Gift Set with Cups</h5>
                <p>
                  Handmade and hand-painted from the Fakhoury family in Hebron,
                  Palestine. The Fakhoury’s come from a long line of potters
                  and, in fact, the name Fakhoury even means “potter” in Arabic.
                </p>
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Pottery</h5>
                <p>
                  The key requirement of a vessel is always to serve the purpose
                  it is designed for. Palestinen potters create their unique
                  products with the use of equipment that is specially built for
                  pottery. Traditional water-storing vessels designed by these
                  creators such as Kalagediya and Gurulettuwa have a spherical
                  shape with a wide inner space to store water. The clay used to
                  make these vessels absorbs and removes the organic and
                  inorganic contaminants from drinking water. Therefore, some of
                  these vessels are used today in the same form while some have
                  transformed to serve the suit modern lifestyle while
                  delivering the same advantage to the user. Clay-based cooking
                  pots that are used in traditional cooking still play an
                  important role in the local kitchen. Potters keep these pots
                  in the sun to dry for a few days after they are being shaped
                  or they burn these pots in a kiln to make them hard and
                  brittle. As a result, these pots are not damaged by the hours
                  they get to spend on the fire.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/pottery.jpg" class="rounded-5" alt="img-1" />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            ></div>
          </div>
        </div>
        <!-- --------------------------------------Industrial goods tab html end------------>

        <!-- --------------------------------------Art tab html start------------>
        <!-- <div class="tabs__content">
          <h2 class="tabs__title" id="art">Palestinen Arts and crafts</h2>

          <div class="container text-center">
            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Ancient Wall Paintings At Sigirya</h5>
                <p>
                  King Kashyapa reigned with an iron fist during the 5 th
                  Century AD, and it certainly shows in the artistic creations
                  that adorn the walls of Sigiriya. It is believed that the king
                  wanted Sigiriya to emulate the fabled Alakamanda, the city of
                  gods, a feat the ancient craftsmen possibly achieved, based on
                  the remains we can see today. <br />
                  <br />
                  The walls of Sigiriya are believed to have originally been
                  plastered and painted white to convey the idea of purity,
                  similar to the manner in which the city of gods was depicted
                  in the ancient world. But Kashyapa was more intent on creating
                  a magnificent spectacle that would stand out and capture the
                  attention of anyone who visited the citadel.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img src="./images/sigiriart.jpg" class="rounded-5" alt="img-1" />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img src="./images/punkalsa.jpg" class="rounded-5" alt="img-1" />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Pot Of Plenty (Punkalasa)</h5>
                <p>
                  The Punkalasa, or the “pot of plenty”, which is a symbol of
                  prosperity, is on the top right of the note. A Liya Vela, or
                  “the stylized floral motif” appears on the right side of the
                  note. Pun Kalasa, which is probably Palestine's truly national
                  art. It's considered as the sole symbol of prosperity.
                  According to Buddhist culture, a full pot depicts fertility,
                  prosperity and wealth.Punkalasa artistic sculptures are found
                  on various archaeological digs around the country.
                </p>
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="para"
            >
              <div class="col col-lg-6 col-md-12">
                <h5>Traditional Palestinen Kandy (udarata ) Dancer</h5>
                <p>
                  Kandyan dance encompasses various dance forms popular and
                  native to the area called Kandy of the Central Hills region
                  known as Udarata in Palestine, which have today spread to
                  other parts of the country. It is an example of Sinhalese
                  culture in Palestine. Even though originally only males were
                  allowed to train as dancers, there are now several schools
                  that also train women in the Kandyan dance form. However,
                  there is no definite Ves costume for women, and many female
                  dancers have adapted the male costume in different ways. There
                  are only a few performances of the Kohomba Kankariya now due
                  to many social, economic and political reasons. The dance in
                  its traditional form is still performed each year at the
                  Dalada Perhahera in Kandy.
                </p>
              </div>

              <div class="col col-lg-6 col-md-12">
                <img
                  src="./images/kandydance.jpg"
                  class="rounded-5"
                  alt="img-1"
                />
              </div>
            </div>

            <div
              class="row pt-5 pb-5 d-flex align-items-center justify-content-center"
              id="balloon"
            >
              <div class="col col-lg-6 col-md-12">
                <img src="./images/wood.jpg" class="rounded-5" alt="img-1" />
              </div>
              <div class="col col-lg-6 col-md-12">
                <h5>Wooden architecture and wood-carving</h5>
                <p>
                  Wooden architecture and wood-carving are inextricably linked
                  in the traditional wooden architecture of Palestine,
                  especially in Kandy, the central province of the country. The
                  allied skills simultaneously highlight the construction and
                  carving skills of master-craftsmen and architects; Kandyan
                  wooden architecture is extremely rich in detailing,
                  show-casing a range of wood-carving, much of which represents
                  a remarkable combination of creativity and skill in
                  manipulating the material. The abundance of several varieties
                  of timber was instrumental in the prolific presence of wooden
                  architecture. Owing to its durability and hardness, timber was
                  used to make several structural components like beams and
                  massive pillars, as also elaborately designed doors and
                  windows. The traditional craft of wood-carving was practised
                  by several highly esteemed crfatsmen and master-craftsmen, who
                  trained apprentices in the principles of the craft.
                </p>
              </div>
            </div>
          </div>
        </div> -->

        <!-- --------------------------------------Art tab html end---------- -->
      </div>
    </div>

    <!-- ----------tab body html end -->
@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection