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
                        <h2 class="fw-700 display1-size display2-md-size mb-4 mt-0 white-text text-grey-900">Đăng nhập vào
                            <br>tài khoản của bạn
                        </h2>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group icon-input mb-3">
                                <i class="font-sm ti-email text-grey-500 pe-0"></i>
                                <input type="email" name="email"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xsss fw-600"
                                    placeholder="Địa chỉ Email" required>
                            </div>
                            <div class="form-group icon-input mb-1">
                                <input type="password" name="password"
                                    class="style2-input ps-5 form-control text-grey-900 white-text font-xss ls-3"
                                    placeholder="Mật khẩu" required>
                                <i class="font-sm ti-lock text-grey-500 pe-0"></i>
                            </div>
                            <div class="form-check text-start mb-3">
                                <input type="checkbox" name="remember" class="form-check-input mt-2" id="exampleCheck5">
                                <label class="form-check-label font-xsss text-grey-500 white-text" for="exampleCheck5">Ghi
                                    nhớ tôi</label>
                                <a href="{{ route('password.request') }}"
                                    class="fw-600 font-xsss text-grey-700 white-text mt-1 float-right">Quên mật khẩu?</a>
                            </div>

                            <div class="col-sm-12 p-0 text-start">
                                <div class="form-group mb-1">
                                    <button type="submit"
                                        class="bg-current text-center style2-input text-white fw-600 border-0 p-0 btn-custom">Đăng
                                        nhập</button>
                                </div>

                                <h6 class="text-grey-500 font-xsss fw-500 mt-0 mb-0 lh-32">Chưa có tài khoản? <a
                                        href="{{ route('register') }}" class="fw-700 ms-1">Đăng ký</a></h6>
                            </div>
                            <div class="col-sm-12 p-0 text-center mt-2 mb-0">
                                <h6 class="mb-0 d-inline-block fw-500 font-xsss text-grey-500 mb-3">Hoặc, Đăng nhập bằng tài
                                    khoản xã hội</h6>
                                <div class="form-group mb-1">
                                    <a href="{{ route('login.google') }}"
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
