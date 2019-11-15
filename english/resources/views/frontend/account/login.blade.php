@extends ('frontend.layout.layout')
@section('title')
    Đăng nhập
@endsection
@section('content')
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Login</h2>
                            <p>Home<span>/</span>Login</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-8">
            <h3 class="mb-30">Login</h3>
            <form method="POST" action="{{ route('login') }}">
                @csrf
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
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''"
                           onblur="this.placeholder = 'Password'"
                           required class="single-input">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="mt-10">
                    <button  type="submit" class="genric-btn success radius">Login</button>
                </div>

            </form>
        </div>
    </div>
@endsection
