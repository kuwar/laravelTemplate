@extends('admin.layouts.app')

@section('title','Example')

@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/custom.css') }}">
@endsection

@section('content')
    <main class="site-main course-management main-content-mgmt">
        <div class="container-fluid">
            <div class="top-bar clearfix ">
                <h2>Example</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Template</a></li>
                    <li class="breadcrumb-item"><a href="/">Example</a></li>
                </ol>
            </div>{{-- top-bar --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-default">
                        @include('admin.layouts.error')
                        <div class="card-header">
                            <div class="row">
                                <div class="bottom-bar col-sm-12 col-md-6 float-left">
                                    <button type="button" class="btn btn-md add-btn" data-toggle="modal" id="add_button"
                                            data-target="#addcourse">ADD Example
                                    </button>
                                </div>
                                @include('admin.example.add-example-modal')
                                <div class="col-sm-12 col-md-6 text-right float-right">
                                    <form id="form-search">
                                        <input type="search" placeholder="Search">
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Status</th>
                                <th>Actions</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="/images/from-sandbox.svg" class="user-type"><span
                                                class="tool-tip">Added from sandbox</span><span>Example name1</span>
                                    </td>
                                    <td><span>9843642827</span></td>
                                    @if(true)
                                        <td class="text-danger">Deleted</td>
                                    @else
                                        <td class="text-success">Active</td>
                                    @endif
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="btn btn-sm btn-primary btn-sm dropdown-toggle">Option
                                            </button>
                                            <div class="dropdown-menu" x-placement="top-start">
                                                @if(true)
                                                    <a href="#restore"
                                                       class="dropdown-item">Restore</a>
                                                @else
                                                    <a href=""
                                                       class="dropdown-item">View</a>
                                                    <a href=""
                                                       class="dropdown-item">Edit</a>
                                                    <a href=""
                                                       class="dropdown-item">Modules</a>
                                                    <a data-toggle="modal" data-target="#1"
                                                       class="dropdown-item">Delete</a>
                                                @endif
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @include('admin.layouts.delete-modal',['id'=>1,'name'=>'Example1'])
                                <tr>
                                    <td><img src="/images/from-sandbox.svg" class="user-type"><span
                                                class="tool-tip">Added from sandbox</span><span>Example name2</span>
                                    </td>
                                    <td><span>9843642827</span></td>
                                    @if(false)
                                        <td class="text-danger">Deleted</td>
                                    @else
                                        <td class="text-success">Active</td>
                                    @endif
                                    <td>
                                        <div class="btn-group">
                                            <button type="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"
                                                    class="btn btn-sm btn-primary btn-sm dropdown-toggle">Option
                                            </button>
                                            <div class="dropdown-menu" x-placement="top-start">
                                                @if(false)
                                                    <a href="#restore"
                                                       class="dropdown-item">Restore</a>
                                                @else
                                                    <a href=""
                                                       class="dropdown-item">View</a>
                                                    <a href=""
                                                       class="dropdown-item">Edit</a>
                                                    <a href=""
                                                       class="dropdown-item">Modules</a>
                                                    <a data-toggle="modal" data-target="#2"
                                                       class="dropdown-item">Delete</a>
                                                @endif
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @include('admin.layouts.delete-modal',['id'=>2,'name'=>'Example2'])
                                </tbody>
                            </table>
                            {{--{{ $examples->links() }}--}}
                            {{--<div class="dataTables_length" id="datatables_length">--}}
                            {{--<label>--}}
                            {{--<!--Name-->--}}
                            {{--<form action="" style="display: hidden">--}}
                            {{--<input type="hidden" id="perPage" name="perPage"--}}
                            {{--value="{{$examples->perPage()}}">--}}
                            {{--</form>--}}
                            {{--Show</label>--}}
                            {{--<div class="opt-holder">--}}
                            {{--<select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down"--}}
                            {{--onchange="$(perPage).val($(this).val()) && $(perPage).parent('form').submit();">--}}
                            {{--<option value="" disabled></option>--}}
                            {{--<option value="10" @if($examples->perPage()==10) selected @endif>10</option>--}}
                            {{--<option value="20" @if($examples->perPage()==20) selected @endif>20</option>--}}
                            {{--<option value="50" @if($examples->perPage()==50) selected @endif>50</option>--}}
                            {{--<option value="100" @if($examples->perPage()==100) selected @endif>100</option>--}}
                            {{--</select>--}}
                            {{--<span>entries</span>--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        </div>{{-- card-body --}}
                    </div>{{-- card --}}
                </div>
            </div>{{-- row --}}
        </div>{{-- container-fluid --}}
    </main>
@endsection

@section('page-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script type="text/javascript">

    </script>
@endsection
