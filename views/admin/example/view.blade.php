@extends('admin.layouts.app')

@section('title','Example')

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">
@endsection

@section('content')
    <main class="site-main view main-content-mgmt view-course">
        <div class="container-fluid">
            <div class="top-bar clearfix ">
                <h2>Example</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Template</a></li>
                    <li class="breadcrumb-item"><a href="/">Example</a></li>
                    <li class="breadcrumb-item"><a href="#">View</a></li>
                </ol>
            </div>
        </div>
        @include('admin.layouts.error')

        <!-- Central Modal Medium Success-->
        <div class="content-holder container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-holder">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="profile-image">
                                            <img src="http://via.placeholder.com/350x200">
                                        </div>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="row">
                                            <div class="profile-info">
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 info-title">Name:</div>
                                                    <div class="col-md-7">Example</div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row float-right">
                                            <div class="btn-group">
                                                <a class="btn btn-outline-primary waves-effect btn-sm edit-btn"
                                                   href="">Edit
                                                    Course</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>{{-- profile-holder --}}
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            Modules
                        </div>{{-- card-header --}}
                        <div class="card-body">
                            <div class="col-sm-12 col-md-6 float-right text-right">
                                <form id="form-search">
                                    <input type="search" placeholder="Search">
                                </form>

                            </div>

                            <table id="datatables_wrapper" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>Descriptions</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(true)
                                    <tr>
                                        <td><span>Example</span></td>
                                        <td><span>Example</span></td>
                                        <td>
                                            <span class="text-danger">Deleted</span>
                                            <span class="text-success">Active</span>
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-primary btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Option
                                                </button>
                                                <div class="dropdown-menu">
                                                    {{--if only deleted show this--}}
                                                    <a href=""
                                                       class="dropdown-item">Restore</a>
                                                    {{------}}
                                                    <a class="dropdown-item" href="">View</a>
                                                    <a class="dropdown-item" href="">Edit</a>

                                                    <a data-toggle="modal" data-target=""
                                                       class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @else
                                    @include('layouts.norecord')
                                @endif
                                </tbody>
                            </table>
                            {{--{{ $courses->links() }}--}}
                            {{--<div class="dataTables_length" id="datatables_length">--}}
                            {{--<label>--}}
                            {{--<!--Name-->--}}
                            {{--<form action="" style="display: hidden">--}}
                            {{--<input type="hidden" id="perPage" name="perPage"--}}
                            {{--value="{{$courses->perPage()}}">--}}
                            {{--</form>--}}
                            {{--Show</label>--}}
                            {{--<div class="opt-holder">--}}
                            {{--<select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down"--}}
                            {{--onchange="$(perPage).val($(this).val()) && $(perPage).parent('form').submit();">--}}
                            {{--<option value="" disabled></option>--}}
                            {{--<option value="10" @if($courses->perPage()==10) selected @endif>10</option>--}}
                            {{--<option value="20" @if($courses->perPage()==20) selected @endif>20</option>--}}
                            {{--<option value="50" @if($courses->perPage()==50) selected @endif>50</option>--}}
                            {{--<option value="100" @if($courses->perPage()==100) selected @endif>100</option>--}}
                            {{--</select>--}}
                            {{--<span>entries</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}

                            <nav class="my-4 float-right pg-holder"></nav>
                        </div>
                    </div>

                </div>{{-- card-body --}}
            </div>{{-- card--}}
        </div>
    </main>
@endsection
