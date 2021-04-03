@extends('layouts.theme')
@section('menu-active-about','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>เกี่ยวกับเรา</h2>
                    <p></p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Challange Area =================-->
        <section class="challange_area p_100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="challange_text_inner">
                            <div class="l_title">
                                <img src="{{ URL('img/icon/title-icon.png') }}" alt="">
                                <h6></h6>
                                <h2>รับปั่นนา ดำนา เกี่ยว ลาก ตาก คัด และจำหน่ายเมล็ดพันธุ์ข้าวปลูก</h2>
                            </div>
                            <p> </p>
                            <div>
                                <a target="_blank" href="https://www.facebook.com/narumon1205"><img src="{{ URL('img/icon/f-icon-2.png') }}" alt="">ติดตามเพจ Facebook</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 challange_img">
                        <div class="challange_img_inner">
                            <a target="_blank" href="https://www.facebook.com/narumon1205"><img class="img-fluid" src="{{ URL('img/popup-photo.jpg') }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Challange Area =================-->

        <!--================End We Are Company Area =================-->
        <section class="talk_area">
            <div class="container">
                <div class="talk_text">
                    <h4>เราพร้อมที่จะให้บริการ</h4>
                    <a href="https://www.facebook.com/narumon1205">เพชรพงศ์พันธุ์ข้าว</a>
                </div>
            </div>
        </section>
        <!--================End We Are Company Area =================-->

@endsection
