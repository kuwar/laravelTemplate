@extends('admin.layouts.app')

@section('title','Edit User')

@section('page-css')
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
@endsection

@section('content')
    <main class="site-main edit-page">
        <div class="container-fluid">

            <div class="top-bar clearfix ">
                <h2>Edit User</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">CONNECTed</a></li>
                    <li class="breadcrumb-item"><a href="/user_management">Users</a></li>
                    <li class="breadcrumb-item"><a href="#">Edit User</a></li>
                </ol>
            </div>{{-- top-bar --}}

            <div class="row justify-content-center">
                <div class="col-md-12">

                    <div class="card card-default">
                        <div class="card-header">Edit</div>
                        <div class="card-body">
                            <form class="form-horizontal" method="POST"
                                  action="{{ route('user_management.update', $user->user_id) }}">
                                @csrf

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="name" class="col-form-label">Name</label>
                                    </div>

                                    <div class="col-sm-7">
                                        <input id="name" type="text"
                                               class="form-control edit-form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ $user->name}}" required autofocus>
                                        <input name="_method" type="hidden" value="PATCH">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-3">
                                        <label for="email" class="col-form-label">E-Mail Address</label>
                                    </div>
                                    <div class="col-sm-7">
                                        <input id="email" type="email"
                                               class="form-control edit-form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                               name="email" value="{{ $user->email}}" required>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                        </div>
                    </div>{{-- card --}}

                </div>
            </div>{{-- row --}}
        </div>{{-- container-fluid --}}
    </main>
@endsection
