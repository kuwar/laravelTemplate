@extends('layouts.app')
@section('title','View User')
@section('page-css')
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
@endsection
@section('content')
    <main class="site-main view main-content-mgmt">
        <div class="container-fluid">
            <div class="top-bar clearfix ">
                <h2>Profile</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">CONNECTed</a></li>
                    <li class="breadcrumb-item"><a href="/user_management">Users</a></li>
                    <li class="breadcrumb-item"><a href="#">View Profile</a></li>
                </ol>
            </div>
        </div>
    @include('layouts.error')
    @include('organisation.add_client_modal')
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
                                            <strong>{{name_abbr($user->name)}}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-9 user-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="profile-info">
                                                    <div class="row">
                                                        <div class="col-md-3 info-title">Name:</div>
                                                        <div class="col-md-7">{{$user->name}}</div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-3 info-title">Email:</div>
                                                        <div class="col-md-7">{{$user->email}}</div>
                                                    </div>
                                                    @if($user->organisation()->first())
                                                        <div class="row">
                                                            <div class="col-md-3 info-title">Client:</div>
                                                            <div class="col-md-7">
                                                                {{$user->organisation()->first()->name}}
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="profile-info">
                                                    <div class="row">
                                                        <div class="col-md-4 info-title">Role:</div>
                                                        <div class="col-md-7">
                                                            @if($user->organisation()->first())
                                                                @if($user->organisation()->first()->pivot->is_admin)
                                                                    Admin
                                                                @else($user->organisation()->first()->pivot->is_member)
                                                                    Member
                                                                @endif
                                                            @else
                                                                Super Admin
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-4 info-title">Join Date:</div>
                                                        <div class="col-md-7">
                                                            <?php
                                                            $date = new \Carbon\Carbon($user->created_at);
                                                            $now = $date->now();
                                                            echo $date->diffForHumans($now);
                                                            ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row float-right">
                                            <div class="btn-group">
                                                <a data-toggle="modal" data-target="#change_psw_modal"
                                                   class="btn btn-outline-primary waves-effect btn-sm" href="#">Change
                                                    Password</a>
                                                <a class="btn btn-outline-primary waves-effect btn-sm edit-btn"
                                                   href="{{ route('user_management.edit', $user->user_id) }}">Edit
                                                    User</a>
                                            </div>
                                        </div>
                                        @include('users.change_psw')
                                    </div>
                                </div>
                            </div>{{-- profile-holder --}}
                        </div>{{-- card-body --}}
                    </div>{{-- card --}}
                </div>
            </div>
        </div>
    </main>
@endsection
