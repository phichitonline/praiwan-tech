@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>เพิ่มข้อมูลลูกค้าใหม่</h2>
                    <p> </p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-12">
                        <form class="contact_us_form row" action="{{ route('customers.store') }}" method="post" id="contactForm" novalidate="novalidate">
                            @csrf

                            <div class="form-group col-lg-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="ชื่อ" value="{{ old('name') }}" required autocomplete="ชื่อ" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" placeholder="นามสกุล" value="{{ old('surname') }}" required autocomplete="นามสกุล" autofocus>
                                @error('surname')
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
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="โทรศัพท์" required autocomplete="โทรศัพท์">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-6">
                                <input id="address" type="text" class="form-control" name="address" placeholder="ที่อยู่" required autocomplete="ที่อยู่">
                            </div>

                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">เพิ่มลูกค้า</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->

@endsection

