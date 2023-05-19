@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/map.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div id="top"></div>
    <div class="blur" style="background: url({{ asset('images/mainmap2.jpg') }});">
      <div class="align">
        <div class="main" style="background-image: url({{ asset('images/E04Ic2gWEAMJpAM.jfif') }})">
          <div class="jaffna">
            <a href="#"
              ><span data-toggle="tooltip" data-placement="top" title="Jaffna"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="kandy">
            <a href="#kandy"
              ><span data-toggle="tooltip" data-placement="top" title="Kandy"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="trinco">
            <a href="#"
              ><span
                data-toggle="tooltip"
                data-placement="top"
                title="Trincomalee"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="galle">
            <a href="#galle"
              ><span data-toggle="tooltip" data-placement="top" title="Galle"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="colombo">
            <a href="#colombo"
              ><span data-toggle="tooltip" data-placement="top" title="Colombo"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="katharagama">
            <a href="#"
              ><span
                data-toggle="tooltip"
                data-placement="top"
                title="Katharagama"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="nuwaraeliya">
            <a href="#"
              ><span
                data-toggle="tooltip"
                data-placement="top"
                title="Nuwara Eliya"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
          <div class="anuradhapura">
            <a href="#"
              ><span
                data-toggle="tooltip"
                data-placement="top"
                title="Anuradhapura"
                ><img src="./images/landmark.png" alt="" /></span
              >></a
            >
          </div>
        </div>
      </div>
    </div>

    <!--------------------- cards section starts -------------------------------->

    <section class="wrapper">
      <div class="container">
        <div class="row">
          <div class="col text-center mb-5">
            <h1 class="display-4">Best cities to visit in Palestine</h1>
            <p class="lead">
              Plan your travel itinerary with our list of the best places to
              visit in Palestine.
            </p>
          </div>
        </div>
      </div>
    </section>

@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection