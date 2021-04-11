@extends('layouts.theme')
@section('menu-active-user','active')

@section('content')

        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h2>รายชื่อลูกค้า</h2>
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
                                    <div class="mb-3">
                                        <a href="{{ route('customers.create') }}" class="btn btn-success">เพิ่มลูกค้า</a>
                                    </div>

                                    <table id="Datatable" class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>ชื่อ - นามสกุล</th>
                                            <th>ที่อยู่</th>
                                            <th>เบอร์โทรศัพท์</th>
                                            <th>ข้อมูลอื่นๆ</th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>

                                          @foreach ($customer as $data)
                                          <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->address }} {{ $data->amphur }} {{ $data->province }}</td>
                                            <td>{{ $data->phone }}</td>
                                            <td>{{ $data->description }}</td>
                                            <td>
                                                <form action="{{ route('customers.destroy', $data->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a href="{{ route('customers.show', $data->id) }}" class="btn btn-primary">ข้อมูล</a>
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
                                                    <h4 class="modal-title">{{ $data->name }}</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        {{ $data->name }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->address }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->amphur }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->province }}
                                                    </div>
                                                    <div class="modal-body">
                                                        {{ $data->phone }}
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
