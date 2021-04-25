@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>เพิ่มข้อมูลลูกค้าใหม่</h2>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get in Touch Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog_main_inner">
                            <div class="blog_main_item">
                                <div class="blog_text">
                    <div class="col-lg-12">
                        <a href="{{ route('customers.index') }}" class="btn btn-primary">กลับ</a>
                    </div>
                    <div class="col-lg-12">
                        <form class="contact_us_form row" action="{{ route('customers.store') }}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf

                            <div class="form-group col-lg-6">
                                <label for="name">ชื่อ-นามสกุล</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="phone">โทรศัพท์</label>
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="เบอร์โทรศัพท์" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="rice">พันธุ์ข้าว</label>
                                <input id="rice" type="text" class="form-control @error('rice') is-invalid @enderror" name="rice" placeholder="ระบุพันธุ์ข้าว" required>
                                @error('rice')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="farm">จำนวน (ไร่)</label>
                                <input id="farm" type="number" step="any" class="form-control @error('farm') is-invalid @enderror" name="farm" placeholder="ตัวเลขจำนวนไร่" required>
                                @error('farm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="address">ที่อยู่</label>
                                <input id="address" type="text" class="form-control" name="address" placeholder="บ้านเลขที่ หมู่ที่ ตำบล" required autocomplete="บ้านเลขที่ หมู่ที่ ตำบล">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="amphur">อำเภอ</label>
                                <input id="amphur" type="text" class="form-control" name="amphur" required>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="province">จังหวัด</label>
                                <input id="province" type="text" class="form-control" name="province" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">ข้อมูลอื่นๆ</label>
                                <textarea class="form-control" name="description" id="description" rows="1" placeholder="ข้อมูลอื่นๆ เช่นอาชีพ กิจการการเกษตร"></textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">เพิ่มลูกค้า</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

</div>
</section>
        <!--================End Get in Touch Area =================-->

@endsection

