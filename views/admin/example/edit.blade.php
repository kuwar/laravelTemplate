@extends('admin.layouts.app')

@section('title','Example')

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">
@endsection

@section('content')
    <main class="site-main edit-page">
        <div class="container-fluid">
            <div class="top-bar clearfix ">
                <h2>Example</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Template</a></li>
                    <li class="breadcrumb-item"><a href="/">Example</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit</a></li>
                </ol>
            </div>{{-- top-bar --}}
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card-default">
                        @include('admin.layouts.error')
                        <div class="card-header">Example</div>
                        <div class="card-body">
                            <form class="col-sm-12 form-horizontal" method="POST" name="course_form"
                                  action=""
                                  enctype="multipart/form-data">
                                @csrf
                                <input name="_method" type="hidden" value="PATCH">

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="name" class="col-form-label">Name</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="name" name="name"
                                               class="form-control edit-form-control{{ $errors->has('name')? ' is-invalid' : '' }}"
                                               type="text" name="name"
                                               value="{{$errors->has('name')?old('name'):'Example'}}"
                                               required="required"/>
                                        @if($errors->has('name'))
                                            <span class="invalid-feedback">
                                             <strong>{{$errors->first('name')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="heading" class="col-form-label">Heading:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input name="heading"
                                               class="form-control edit-form-control{{ $errors->has('heading')? ' is-invalid' : '' }}"
                                               type="text" name="heading"
                                               value="{{$errors->has('heading')?old('heading'):'Example'}}"
                                               required="required"/>
                                        @if($errors->has('heading'))
                                            <span class="invalid-feedback">
                                             <strong>{{$errors->first('heading')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="description" class="col-form-label">Description:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <textarea name="description"
                                                  class=" md-textarea form-control edit-form-control{{ $errors->has('description')? ' is-invalid' : '' }}"
                                                  type="text-box" name="description"
                                                  required="required">{{$errors->has('description')?old('description'):'Example'}}</textarea>
                                        @if($errors->has('description'))
                                            <span class="invalid-feedback">
                                             <strong>{{$errors->first('description')}}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="course_image" class=" col-form-label">Image:</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="course_image"
                                               class="form-control{{ $errors->has('image')? ' is-invalid' : '' }}"
                                               type="file" name="image" value="{{old('image')}}"/>
                                        @if($errors->has('image'))
                                            <span class="invalid-feedback">
                                   <strong>{{$errors->first('image')}}</strong>
                                 </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3 "></div>
                                    <div class="col-sm-7 add-btn float-right">
                                        <input class="btn btn-outline-primary waves-effect btn-md" type="submit"
                                               name="Update" value="Save"></div>
                                </div>
                            </form>
                        </div>{{-- card-body --}}
                    </div>{{-- card --}}
                </div>
            </div>
        </div>
    </main>
@endsection
@section('page-script')
    <script type="text/javascript">
        CKEDITOR.replace('description');
        CKEDITOR.replace('preview');
        CKEDITOR.replace('overview');
    </script>
@endsection


