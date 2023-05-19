@extends('layouts.dashboard')

@section('sidebar')
    @include('admin.layout.sidebar')
@endsection

@section('header')
    @include('admin.layout.header')
@endsection

@section('content')
    <div class="container-fluid p-0">
        <div class="table-action">
            <h3 class="h3 mb-3">أشهر الأماكن في المدن</h3>
            <a href="{{ route('admin.place.create') }}" class="btn btn-success">إضافة مكان جديد</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                         <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>المكان</td>
                                    <td>وصف المكان</td>
                                    <td>صورة المكان</td>
                                    <td>المدينة</td>
                                </tr>
                                @forelse ($places as $place)
                                    <tr>
                                        <td>{{ $place->name }}</td>
                                        <td>{{ $place->info }}</td>
                                        <td><img src="{{ asset('images/place/' . $place->image) }}" alt="img"></td>
                                        <td>{{ $place->city->name }}</td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="4">لا يوجد مدينة مضافة حتي الآن</td>
                                    </tr>
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection