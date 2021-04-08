@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>รายชื่อลูกค้า</h2>
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
                        <div class="blog_main_inner">
                            <div class="blog_main_item">
                                <div class="blog_text">
                                    <h4>รายชื่อ</h4>
                                    <div class="blog_author">
                                        <a href="{{ route('customers.create') }}" class="btn btn-success">เพิ่มชื่อ</a>
                                    </div>

                                    <table id="Datatable" class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>ลำดับที่</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ที่อยู่</th>
                                            <th>เบอรโทรศัพท์</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          @foreach ($customers as $data)
                                          <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}  {{ $data->surname }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>
                                                <form action="{{ route('customers.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="#{{ $data->id }}" class="btn btn-primary" data-toggle="modal" data-target="#myModal{{ $data->id }}">ข้อมูล</a>
                                                    {{-- <a href="{{ route('customers.show', $data->id) }}" class="btn btn-primary">ข้อมูล</a> --}}
                                                    <a href="{{ route('customers.edit', $data->id) }}" class="btn btn-secondary">แก้ไข</a>
                                                    <button type="submit" class="btn btn-danger" onClick="return confirm('ยืนยันการลบรายการนี้');">ลบ</button>
                                                </form>
                                            </td>
                                          </tr>

                                            <!-- The Modal Customer Info-->
                                            <div class="modal fade" id="myModal{{ $data->id }}">
                                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <h4 class="modal-title">{{ $data->name }}  {{ $data->surname }}</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        {{ $data->name }}  {{ $data->surname }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->surname }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->address }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->phone }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->name }}
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                    <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
                                                    </div>

                                                </div>
                                                </div>
                                            </div>
                                            <!-- The Modal -->

                                          @endforeach

                                        </tbody>
                                      </table>

                                    {{-- <a class="more_btn" href="#">Read More</a> --}}
                                    <script>
                                    $(document).ready( function () {
                                        $('#Datatable').DataTable();
                                    } );
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--================End Blog Main Area =================-->

@endsection
