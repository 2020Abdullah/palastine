@extends('layouts.app')

@section('css')
    <link href="{{ asset('home/css/home.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="post">
    <div class="container text-center">
          <h3 class="heading">اشهر الأماكن في {{ $city->name }}</h3>
          <hr/>
          <div class="row">
          @foreach ($city->places as $place)
            @if ($loop->iteration % 2 == 0)
                <div class="container text-center post lpost">
                    <div class="row">
                        <div class="col">
                            <img src="{{ asset('images/place/' . $place->image) }}" alt="img-1">
                        </div>
                        <div class="col">
                            <h5>{{$place->name}}</h5>
                            <p>{{ $place->info }}</p>    
                        </div>
                    </div>
                </div>
            @else
                  <div class="container text-center post lpost">
                    <div class="row flex-row-reverse">
                        <div class="col">
                            <img src="{{ asset('images/place/' . $place->image) }}" alt="img-1">
                        </div>
                        <div class="col">
                            <h5>{{$place->name}}</h5>
                            <p>{{ $place->info }}</p>    
                        </div>
                    </div>
                </div>
            @endif
   
          @endforeach
      </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection