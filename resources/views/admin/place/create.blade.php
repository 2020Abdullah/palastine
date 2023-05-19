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
            <h3 class="h3 mb-3">إضافة مكان جديد</h3>
            <a class="btn btn-outline-info" href="{{ url()->previous() }}">رجوع</a>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <form method="POST" action="{{route('admin.place.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label class="col-form-label" for="name">اسم المكان</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="info">وصف المكان</label>
                                <textarea cols="5" rows="10" class="form-control" name="info" id="info"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="image">صورة المكان</label>
                                <input type="file" class="form-control" name="image" id="image">
                            </div>
                            <div class="mb-3">
                                <label class="col-form-label" for="city_id">المدينة التابع لها</label>
                                <select name="city_id" id="city_id" class="form-select">
                                    <option value="" disabled>...</option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-success" value="حفظ">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection