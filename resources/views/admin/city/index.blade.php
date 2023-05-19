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
            <h3 class="h3 mb-3">جميع المدن</h3>
            <a href="{{ route('city.create') }}" class="btn btn-success">إضافة مدينة جديدة</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td>المدينة</td>
                                    <td>وصف المدينة</td>
                                    <td>صورة المدينة</td>
                                </tr>
                                @forelse ($cities as $city)
                                    <tr>
                                        <td>{{ $city->name }}</td>
                                        <td>{{ $city->info }}</td>
                                        <td><img src="{{ asset('images/city/' . $city->image) }}" alt=""></td>
                                    </tr>
                                @empty
                                    <tr class="text-center">
                                        <td colspan="3">لا يوجد مدينة مضافة حتي الآن</td>
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