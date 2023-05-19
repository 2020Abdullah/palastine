@extends('layouts.app')

@section('content')
<div class="fav" style="margin-top: 10rem;">
    <div class="container text-center">
          <h3 class="heading">مدنك المفضلة</h3>
          <hr/>
          <div class="row">
          @foreach ($favs as $fav)
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <img src="{{ asset('images/city/' . $fav->city->image) }}" alt="img-1">
                    </div>
                    <div class="col">
                        <h5>{{$fav->city->name}}</h5>
                        <p>{{ $fav->city->info }}</p>    
                    </div>
                </div>
            </div>
          @endforeach
      </div>
</div>
@endsection

@section('js')
    <script src="{{ asset('home/js/allscript.js') }}" defer></script>
@endsection