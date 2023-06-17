@extends('layouts.admin')

@section('title')
    <title>Sliders</title>
@endsection


@section('custom_css')
    <link rel="stylesheet" href="{{asset('admins/slider/add/add.css')}}">
@endsection

@section('custom_js')
    <script src="{{asset('admins/slider/add/add.js')}}"></script>
    <script src="https://cdn.tiny.cloud/1/9pbznixxa9fqb12ltlgfqxnqlyzuoijyxuwlbm11xvpzehv2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{asset('admins/common.js')}}"></script>
    <script src="{{asset('admins/jquery.min.js')}}"></script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @include('admin.partials.content-header', ['name'=>'Slider', 'key'=>'Add'])
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
        <form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="type" value="1">
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-9 rounded bg-white px-3 mb-3">
                            @csrf
                            <div class="form-group">
                                <label>Content position</label>
                                <select class="form-control "
                                        name="content_position">
                                    <option value="">chooses content display position</option>
                                    <option value="left">left</option>
                                    <option value="middle">middle</option>
                                    <option value="right">right</option>
                                </select>
                                {{--                                @error('parent_id')--}}
                                {{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                @enderror--}}
                            </div>
                            <div class="form-group">
                                <div class="form-group ">
                                    <label>Title</label>
                                    <textarea id="tinymce-editor" name="title"
                                              class="form-control "
                                              rows="3">
                                    {{old('title')}}
                                </textarea>
                                    {{--                                @error('description')--}}
                                    {{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
                                    {{--                                @enderror--}}
                                </div>
                                {{--                                @error('name')--}}
                                {{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                @enderror--}}
                            </div>

                            <div class="form-group">
                                <label>Subtitle</label>
                                <input type="text"
                                       {{--                                       @error('name') is-invalid @enderror--}}
                                       class="form-control "
                                       placeholder="Enter slide subtitle"
                                       name="subtitle"
                                       value="{{old('subtitle')}}"
                                >
                                {{--                                @error('name')--}}
                                {{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
                                {{--                                @enderror--}}
                            </div>

                            <div class="form-group">
                                <label>Slide image</label>
                                <input type="file"
                                       id="fileupload"
                                       class="form-control-file"
                                       placeholder="Chooses a file"
                                       name="slider_image"
                                       onchange="readURL(this);"
                                />
                                <div class="row">
                                    <div class="col-4" id="dvPreview">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Product ID</label>
                                <input type="text"
                                       {{--                                       @error('name') is-invalid @enderror--}}
                                       class="form-control "
                                       placeholder="Enter product id"
                                       name="product_id"
                                       value="{{old('product_id')}}"
                                >
                            </div>

                            <div>
                                <div class="form-group ">
                                    <label>Description</label>
                                    <textarea id="tinymce-editor" name="description"
                                              class="form-control "
                                              rows="3">
                                    {{old('description')}}
                                </textarea>
                                    {{--                                @error('description')--}}
                                    {{--                                <div class="alert alert-danger">{{ $message }}</div>--}}
                                    {{--                                @enderror--}}
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>

                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </form>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection


