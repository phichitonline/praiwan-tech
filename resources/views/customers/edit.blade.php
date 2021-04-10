@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>แก้ไขข้อมูลลูกค้า</h2>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Get in Touch Area =================-->
        <section class="get_in_touch_area p_100">
            <div class="container">
                <div class="row get_touch_inner">
                    <div class="col-lg-12">
                        <a href="{{ route('customers.index') }}" class="btn btn-primary">กลับ</a>
                    </div>
                    <div class="col-lg-12">
                        <form class="contact_us_form row" action="{{ route('customers.update',$customer->id) }}" method="POST" id="contactForm" novalidate="novalidate">
                            @csrf
                            @method('PUT')

                            <div class="form-group col-lg-6">
                                <label for="name">ชื่อ-นามสกุล</label>
                                <input id="name" type="text" class="form-control" name="name" placeholder="ชื่อ-นามสกุล" value="{{ $customer->name }}" required autofocus>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="phone">โทรศัพท์</label>
                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $customer->phone }}" required>
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="address">ที่อยู่</label>
                                <input id="address" type="text" class="form-control" name="address" placeholder="บ้านเลขที่ หมู่ที่ ตำบล" value="{{ $customer->address }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="amphur">อำเภอ</label>
                                <input id="amphur" type="text" class="form-control" name="amphur" value="{{ $customer->amphur }}">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="province">จังหวัด</label>
                                <input id="province" type="text" class="form-control" name="province" value="{{ $customer->province }}">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="description">ข้อมูลอื่นๆ</label>
                                <textarea class="form-control" name="description" id="description" rows="1" placeholder="ข้อมูลอื่นๆ เช่นอาชีพ กิจการการเกษตร">{{ $customer->description }}</textarea>
                            </div>

                            <div class="form-group col-lg-12">
                                <button type="submit" value="submit" class="btn submit_btn form-control">บันทึก</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--================End Get in Touch Area =================-->

@endsection

