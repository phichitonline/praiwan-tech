@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>Register</h2>
                    <p>ลงทะเบียนสมาชิกใหม่</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-6">
                        <form class="contact_us_form row" action="{{ route('register') }}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf

                            <div class="form-group col-lg-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ชื่อผู้ใช้ User name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="รหัสผ่าน" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="ยืนยันรหัสผ่าน" required autocomplete="new-password">
                            </div>

                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">ลงทะเบียน</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6">
                        <div class="touch_details">
                            <div class="l_title">
                                <img src="img/icon/title-icon.png" alt="">
                                <h6>Say hello</h6>
                                <h2>Get in touch, send us an e-mail or call us</h2>
                            </div>
                            <p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.</p>
                            <a href="tel:+45237395593232"><h5>Call us now</h5></a>
                            <a href="tel:+45237395593232"><h4>+452373 95593 232</h4></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->

@endsection
