@extends('layouts.admin')

@section('title')
    <title>Trang chu</title>
@endsection

@section('custom_css')
    <link href="{{asset('admins/product/add/add.css')}}" rel="stylesheet"/>
@endsection
@section('custom_js')
    <script src="{{asset('admins/common.js')}}"></script>
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.partials.content-header', ['name'=>'Coupon-code', 'key'=>'Add'])
        <div class="row justify-content-center">
            <div class="col-md-9 rounded">
                @if(session('success'))
                    <div class="alert alert-success response_message ">
                        {{session('success')}}
                    </div>

                @elseif(session('failure'))
                    <div class="alert alert-danger response_message ">
                        {{session('failure')}}
                    </div>
                @endif
            </div>
        </div>
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-9 rounded bg-white px-3 p-3">
                        <form action="{{route('codes.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Mã coupon</label>
                                <input type="text"
                                       class="form-control @error('code') is-invalid @enderror"
                                       placeholder="Nhập mã coupon"
                                       name="code"
                                       value="{{old('code')}}"
                                >
                                @error('code')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Giảm giá</label>
                                <input type="text"
                                       class="form-control @error('discount') is-invalid @enderror"
                                       placeholder="Nhập phần trăm giảm giá"
                                       name="discount"
                                       value="{{old('discount')}}"
                                >
                                @error('discount')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <input type="text"
                                       class="form-control"
                                       placeholder="Nhập mô tả"
                                       name="description"
                                >
                            </div>
                            <div class="form-group">
                                <label>Trạng thái</label>
                                <select class="form-control @error('is_enable') is-invalid @enderror"
                                        name="is_enable">
                                    <option value="1">Enable</option>
                                    <option value="0">Disable</option>
                                </select>
                                @error('is_enable')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

