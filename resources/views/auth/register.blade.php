@extends('layouts.dashboard')

@section('content')
<div class="reg w-100">
    <div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h2">هيا لنبدأ</h1>
							<p class="lead">
                               قم بإنشاء حساب جديد لتستمع بالمزايا
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<div class="text-center">
										<img src="{{ asset('images/Palestine.png') }}" alt="Palestine" class="img-fluid rounded-circle" width="132" height="132" />
									</div>
									<form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        @if (Request::is('admin/*'))
                                            <input type="hidden" value="1" name="type"/>
                                        @else
                                            <input type="hidden" value="0" name="type"/>
                                        @endif
                                        <div class="mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">الإسم بالكامل</label>
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        </div>
										<div class="mb-3">
											<label class="form-label">البريد الإلكتروني</label>
											<input class="form-control form-control-lg" type="text" name="email" placeholder="Enter your email" />
										</div>
										<div class="mb-3">
											<label class="form-label">كلمة المرور</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
										</div>

                                        <div class="mb-3">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">تأكيد كلمة المرور</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">إنشاء حساب</button>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
    </div>
</div>
@endsection


{{-- <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="row mb-3">
            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="row mb-3">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
</form> --}}