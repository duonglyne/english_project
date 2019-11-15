@extends ('frontend.layout.layout')
@section('title')
    Đăng ký tài khoản
@endsection
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Register</h2>
                            <p>Home<span>/</span>Register</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <div class="row justify-content-center">
    <div class="col-lg-8 col-md-8">
        <h3 class="mb-30">Register</h3>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-10">
                <input type="text" name="name" placeholder="First Name" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Name'"
                       required class="single-input">
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="mt-10">
                <input type="text" name="email" placeholder="Email" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Email'"
                       required class="single-input">
                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="mt-10">
                <input type="password" name="password" placeholder="Last Name" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Password'"
                       required class="single-input">
                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
            </div>
            <div class="mt-10">
                <input type="password" name="password_confirmation" placeholder="Email address" onfocus="this.placeholder = ''"
                       onblur="this.placeholder = 'Confim Password'"
                       required class="single-input">
            </div>
            <div class="mt-10">
                <button  type="submit" class="genric-btn success radius">Register</button>
            </div>

    </form>
    </div>
    </div>
@endsection
