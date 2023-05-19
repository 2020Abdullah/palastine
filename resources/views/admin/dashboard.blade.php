@extends('layouts.dashboard')

@section('sidebar')
    @include('admin.layout.sidebar')
@endsection

@section('header')
    @include('admin.layout.header')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <h3 class="h3 mb-3">إحصائيات</h3>
        <div class="row text-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>عدد المدن</h3>
                        <p class="h2 pt-4">{{ $city_count }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>عدد الأماكن</h3>
                        <p class="h2 pt-4">{{ $place_count }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection