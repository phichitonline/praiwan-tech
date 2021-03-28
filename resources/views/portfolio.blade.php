@extends('layouts.theme')
@section('menu-active-portfolio','active')

@section('content')


        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>ผลงาน</h2>
                    <p>ผลงานที่ผ่านมาของเรา</p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        <!--================Portfolio Area =================-->
        <section class="portfolio_area">
            <div class="container">
                <div class="portfolio_filter">
                    <ul>
                        <li class="active" data-filter="*"><a href="#">ทั้งหมด</a></li>
                        <li data-filter=".service1"><a href="#">ดำนา</a></li>
                        <li data-filter=".service2"><a href="#">เกี่ยวข้าว</a></li>
                        <li data-filter=".seed"><a href="#">เมล็ดพันธุ์</a></li>
                        <li data-filter=".solacell"><a href="#">โซล่าเซล</a></li>
                    </ul>
                </div>
            </div>
            <div class="ms_portfolio_inner">
                <div class="ms_p_item wd_25 service1 seed solacell">
                    <img src="img/portfolio/ms-portfolio/ms-p-1.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed solacell">
                    <img src="img/portfolio/ms-portfolio/ms-p-2.jpg" alt="">
                </div>
                <div class="ms_p_item wd_50 service1">
                    <img src="img/portfolio/ms-portfolio/ms-p-3.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed solacell">
                    <img src="img/portfolio/ms-portfolio/ms-p-4.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed solacell">
                    <img src="img/portfolio/ms-portfolio/ms-p-5.jpg" alt="">
                </div>
                <div class="ms_p_item wd_50">
                    <img src="img/portfolio/ms-portfolio/ms-p-6.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/ms-portfolio/ms-p-7.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/ms-portfolio/ms-p-8.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/ms-portfolio/ms-p-9.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/ms-portfolio/ms-p-10.jpg" alt="">
                </div>
            </div>
        </section>
        <!--================End Portfolio Area =================-->

@endsection
