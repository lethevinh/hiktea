@extends('layouts.page')

@section('content')
<div class="container">
    <div id="content" class="col-sm-12 col-xs-12 col-md-12">
        <div class="row">
            <div class="col-sm-6">
                <div class="well">
                    <h2>Khách hàng mới</h2>
                    <p><strong>Đăng ký</strong></p>
                    <p>Bằng việc tạo tài khoản bạn có thể mua sắm nhanh hơn, theo dõi trạng thái đơn hàng, và theo dõi đơn hàng mà bạn đã đặt.</p>
                    <a href="/dang-ky.html" class="button btn-primary">Tiếp tục</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="well">
                    <h2>Khách hàng cũ</h2>
                    <p><strong>Tôi là khách hàng cũ</strong></p>
                    <form method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label class="control-label" for="input-email">Địa chỉ Email</label>
                            <input type="text" name="email" value="" placeholder="Địa chỉ Email" id="input-email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="input-password">Mật khẩu</label>
                            <input type="password" name="password" value="" placeholder="Mật khẩu" id="input-password" class="form-control">
                            <a href="/index.php?route=account/forgotten">Quên mật khẩu?</a></div>
                        <input type="submit" value="Đăng nhập" class="button btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
