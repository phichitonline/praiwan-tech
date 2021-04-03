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
                {{-- <div class="ms_p_item wd_25 service1 seed solacell">
                    <img src="img/portfolio/praiwan/priwan-tech-001.jpg" alt="">
                </div> --}}
                {{-- <div class="ms_p_item wd_50 service1">
                    <img src="img/portfolio/ms-portfolio/ms-p-3.jpg" alt="">
                </div> --}}

                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-001.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-002.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-003.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-004.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-005.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-006.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-007.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-008.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-009.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-010.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-011.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-012.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-013.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-014.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-015.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-016.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-017.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-018.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-019.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-020.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-021.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-022.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-023.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2">
                    <img src="img/portfolio/praiwan/priwan-tech-024.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-025.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-026.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-027.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-028.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-029.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-030.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-031.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-032.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-033.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2">
                    <img src="img/portfolio/praiwan/priwan-tech-034.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2">
                    <img src="img/portfolio/praiwan/priwan-tech-035.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2">
                    <img src="img/portfolio/praiwan/priwan-tech-036.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service2">
                    <img src="img/portfolio/praiwan/priwan-tech-037.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 service1">
                    <img src="img/portfolio/praiwan/priwan-tech-038.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-039.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-040.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-041.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-042.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-043.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-044.jpg" alt="">
                </div>
                <div class="ms_p_item wd_25 seed">
                    <img src="img/portfolio/praiwan/priwan-tech-045.jpg" alt="">
                </div>

            </div>
        </section>
        <!--================End Portfolio Area =================-->

@endsection
