@extends('layouts.app')

@section('content')
    <div class="main-wrap min-vh-100">
        <div class="row min-vh-100">
            <div class="col-xl-5 d-none d-xl-block p-0 min-vh-100 bg-image-cover bg-image-bottomcenter bg-no-repeat posr"
                style="background-image: url('{{ asset('images/login-bg2.jpg') }}');"></div>
            <div class="col-xl-7 min-vh-100 align-items-center d-flex bg-dark-black rounded-3 overflow-hidden">
                <div
                    class="card shadow-lg border-0 ms-auto me-auto login-card mt-auto mb-auto zindex-100 rounded-10 theme-dark-bg">
                    <div class="card-body rounded-0 text-start p-4">
                        <h2 class="fw-700 display1-size display2-md-size mb-4 mt-0 white-text text-grey-900">Đăng ký
                            <br>tài khoản của bạn
                        </h2>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-user text-grey-500 pe-0"></i>
                                <input type="text" name="name"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('name') is-invalid @enderror"
                                    placeholder="Tên" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pe-0"></i>
                                <input type="email" name="email"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('email') is-invalid @enderror"
                                    placeholder="Địa chỉ Email" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-mobile text-grey-500 pe-0"></i>
                                <input type="text" name="phone"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600"
                                    placeholder="Số điện thoại">
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-calendar text-grey-500 pe-0"></i>
                                <input type="number" name="age"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('age') is-invalid @enderror"
                                    placeholder="Tuổi" min="1" max="120" required>
                                @error('age')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-info text-grey-500 pe-0"></i>
                                <select name="gender"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('gender') is-invalid @enderror"
                                    required>
                                    <option value="1">Nam</option>
                                    <option value="0">Nữ</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-ruler-alt-2 text-grey-500 pe-0"></i>
                                <input type="number" name="body_height" step="0.1"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('body_height') is-invalid @enderror"
                                    placeholder="Chiều cao (cm)" required>
                                @error('body_height')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-layout-tab text-grey-500 pe-0"></i>
                                <input type="number" name="body_weight" step="0.1"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600 @error('body_weight') is-invalid @enderror"
                                    placeholder="Cân nặng (kg)" required>
                                @error('body_weight')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                <input type="password" name="password"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xss ls-3 @error('password') is-invalid @enderror"
                                    placeholder="Mật khẩu" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                                <input type="password" name="password_confirmation"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xss ls-3"
                                    placeholder="Xác nhận mật khẩu" required>
                            </div>

                            <div class="col-sm-12 p-0 text-start">
                                <div class="form-group mb-1">
                                    <button type="submit"
                                        class="bg-current text-center style2-input text-white fw-600 border-0 p-0 btn-custom">Đăng
                                        ký</button>
                                </div>
                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Đã có tài khoản? <a
                                        href="{{ route('login') }}" class="fw-700 ms-1">Đăng nhập</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-2 mb-0">
                                <h6 class="mb-0 d-inline-block fw-500 font-xsss text-grey-500 mb-3">Hoặc, Đăng nhập bằng tài
                                    khoản xã hội</h6>
                                <div class="form-group mb-1">
                                    <a href="#"
                                        class="text-start style2-input text-grey-900 fw-600 bg-greylight border-0 p-0 mb-2">
                                        <img src="{{ asset('images/icon-1.png') }}" alt="icon"
                                            class="ms-2 w-40 mb-1 me-lg-5 me-3"> Đăng nhập bằng Google
                                    </a>
                                </div>
                                <div class="form-group mb-1">
                                    <a href="#"
                                        class="text-start style2-input text-white fw-600 bg-twiiter border-0 p-0">
                                        <img src="{{ asset('images/icon-3.png') }}" alt="icon"
                                            class="ms-2 w-40 mb-1 me-lg-5 me-3"> Đăng nhập bằng Facebook
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
