@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>ข้อมูลลูกค้า</h2>
                    <p> </p>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->

        @if ($message = Session::get('success'))
        <section class="blog_main_area">
            <div class="container">
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            </div>
        </section>
        @endif

        <!--================Blog Main Area =================-->
        <section class="blog_main_area p_100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ route('customers.index') }}" class="btn btn-primary">กลับ</a>
                    </div>
                    <div class="col-lg-9">
                        <div class="single_blog_inner">
                            <div class="blog_comment">
                                <h3>ประวัติการรับบริการ</h3>
                                <table id="Datatable" class="table table-striped">
                                    <thead>
                                      <tr>
                                        <th>วันที่</th>
                                        <th>บริการ</th>
                                        <th>ผู้ทำงาน</th>
                                        <th>รายละเอียด</th>
                                        <th></th>
                                      </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($customer_service as $data)
                                        <tr>
                                          <td>{{ thaidate('j M y',$data->servicedate) }}</td>
                                          <td>{{ $data->service }}</td>
                                          <td>{{ $data->servicename }}</td>
                                          <td>{{ $data->servicedescription }}</td>
                                          <td>
                                            <form action="{{ route('services.destroy', $data->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                                <button type="submit" class="btn btn-danger" onClick="return confirm('ยืนยันการลบรายการนี้');">ลบ</button>
                                            </form>                                          </td>
                                        </tr>
                                        @endforeach

                                      </tbody>
                                    </table>

                                {{-- @foreach ($customer_service as $data)
                                <div class="media">
                                    <img src="{{ URL('img/comment/icon-01.png') }}" alt="">
                                    <div class="d-flex">
                                        <h4>{{ $data->service }}</h4>
                                        <h5>{{ thaidate('j F Y',$data->servicedate) }}</h5>
                                    </div>
                                    <div class="media-body">
                                        <p>{{ $data->servicedescription }}</p>
                                        <p>({{ $data->servicename }})</p>
                                        <form action="{{ route('services.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                                            <button type="submit" class="btn btn-danger" onClick="return confirm('ยืนยันการลบรายการนี้');">ลบ</button>
                                        </form>
                                    </div>
                                </div>
                                @endforeach --}}

                            </div>

                            <div class="blog_comment_form">
                                <h3>เพิ่มข้อมูลการรับบริการ</h3>

                                <form class="contact_us_form row" action="{{ route('services.store') }}" method="POST" id="contactForm" novalidate="novalidate">
                                    @csrf

                                    <div class="form-group col-lg-6">
                                        <label for="servicename">ชื่อผู้รับงาน/ทำงาน</label>
                                        <input id="servicename" type="text" class="form-control @error('servicename') is-invalid @enderror" name="servicename" required>
                                        <input id="customer_id" type="hidden" class="form-control" name="customer_id" value="{{ $customer->id }}">
                                        @error('servicename')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="servicedate">วันที่</label>
                                        <input id="servicedate" type="date" class="form-control @error('servicedate') is-invalid @enderror" name="servicedate" required>
                                        @error('servicedate')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="service">บริการ</label>
                                        <input id="service" type="text" class="form-control @error('service') is-invalid @enderror" name="service" required>
                                        @error('service')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <label for="servicedescription">รายละเอียดการรับบริการ</label>
                                        <textarea class="form-control" name="servicedescription" id="servicedescription" rows="1" placeholder="ข้อมูลอื่นๆ เช่นให้บริการอะไร จำนวนกี่ไร่"></textarea>
                                    </div>

                                    <div class="form-group col-lg-12">
                                        <button type="submit" value="submit" class="btn submit_btn form-control">บันทึก</button>
                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="blog_right_sidebar">
                            <aside class="r_widget search_widget">
                                <div class="r_w_title">
                                    ลูกค้า : <br><a href="tel:{{ $customer->phone }}"><h4>{{ $customer->name }}</h4></a>
                                    <div class="blog_author">
                                        โทรศัพท์ : <a href="tel:{{ $customer->phone }}">{{ $customer->phone }}</a>
                                    </div>
                                    <p>ที่อยู่ : <b>{{ $customer->address }} {{ $customer->amphur }} {{ $customer->province }}</b></p>
                                    <p>พันธุ์ข้าว : <b>{{ $customer->rice }}</b></p>
                                    <p>จำนวนไร่ : <b>{{ $customer->farm }}</b></p>
                                    <p>ข้อมูลอื่นๆ : <b>{{ $customer->description }}</b></p>
                                </div>
                            </aside>
                            <aside class="r_widget tag_widget">
                                <div class="r_w_title">
                                    <h3>บริการ</h3>
                                </div>
                                <ul>
                                    <li><a href="#">รถเกี่ยว</a></li>
                                    <li><a href="#">รถดำนา</a></li>
                                    <li><a href="#">เมล็ดพันธุ์ข้าว</a></li>
                                    <li><a href="#">โซล่าเซล</a></li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Blog Main Area =================-->

@endsection

