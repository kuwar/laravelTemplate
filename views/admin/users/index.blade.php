@extends('layouts.app')
@section('title','Users')
@section('page-css')
    <link rel="stylesheet" type="text/css" href="/css/custom.css">
@endsection
@section('content')
    <div style="display:none;" id="showUserTab" data-showtab="{{session('errors')}}"></div>
    <main class="site-main user-management main-content-mgmt">
        <div class="container-fluid">
            <div class="top-bar clearfix ">
                <h2>Users</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">CONNECTed</a></li>
                    <li class="breadcrumb-item"><a href="/user_management">Users</a></li>
                </ol>
            </div>
        </div>

        @include('users.add_user_modal')

        {{-- </div> --}}
        <div class="content-holder container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @include('layouts.error')
                        <div class="card-header">
                            <div class="row">
                                <div class="bottom-bar col-sm-12 col-md-6 float-left">
                                    <button type="button" class="btn btn-md add-btn" data-toggle="modal" id="add-user"
                                            data-target="#AddUser">ADD USER
                                    </button>
                                </div>


                                <div class="col-sm-12 col-md-6 text-right">
                                    <form id="form-search">
                                        <input type="search" placeholder="Search">
                                    </form>

                                </div>

                            </div>
                        </div>
                        <div class="card-body">

                            <table id="datatables_wrapper" class="table table-hover">
                                <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>Email</th>
                                    <!--  <th>COUNTRY</th>
                                      <th>Currency</th> -->
                                    <th>Client</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>
                                            @if($user->organisation()->first())
                                                @if($user->organisation()->first()->pivot->is_admin)
                                                    <img src="/images/client-admin.svg" class="user-type">
                                                    <span class="tool-tip">Admin</span>
                                                @else($user->organisation()->first()->pivot->is_member)
                                                    <img src="/images/user.svg" class="user-type">
                                                    <span class="tool-tip">Member</span>
                                                @endif
                                            @else
                                                <img src="/images/superadmin.svg" class="user-type">
                                                <span class="tool-tip">Super Admin</span>
                                            @endif


                                            <span class="partner-type">{{$user->name}}</span></td>
                                        <td><span>{{$user->email}}</span></td>
                                        <!-- <td>USA</td>
                                          <td>USD</td> -->
                                        <td>
                                            <a href="{{ $user->organisation()->first() ? route('organisation_management.show',$user->organisation()->first()->organisation_id) : '#' }}">
                                            {{$user->organisation()->first()->name OR 'ConnectedRMS'}}</td>
                                        </a>
                                        <td>
                                            @if($user->deleted_at)
                                                <span class="text-danger">Deleted</span>
                                            @else
                                                <span class="text-success">Active</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-sm btn-primary btn-sm dropdown-toggle"
                                                        type="button" data-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">Option
                                                </button>
                                                <div class="dropdown-menu">
                                                    @if($user->deleted_at)
                                                        <a class="dropdown-item"
                                                           href="{{route('user.restore',$user->user_id)}}">Restore</a>
                                                    @else
                                                        <a class="dropdown-item"
                                                           href="{{ route('user_management.show', $user->user_id) }}">View</a>
                                                        <a class="dropdown-item"
                                                           href="{{ route('user_management.login', $user->user_id) }}">Login</a>
                                                        <a class="dropdown-item"
                                                           href="{{ route('user_management.edit', $user->user_id) }}">Edit</a>

                                                        <a data-toggle="modal" data-target="#{{$user->user_id}}"
                                                           class="dropdown-item" href="#">Delete</a>

                                                    @endif
                                                </div>
                                        </td>
                                    </tr>
                                    @include('layouts.delete_modal',['id'=>$user->user_id,'name'=>'user'])
                                @endforeach
                                </tbody>
                            </table>

                            <nav class="my-4 float-right">
                                {{ $users->links() }}
                            </nav>
                            <div class="dataTables_length float-left" id="datatables_length">
                                <label>
                                    <!--Name-->
                                    <form action="" style="display: hidden">
                                        <input type="hidden" id="perPage" name="perPage" value="{{$users->perPage()}}">
                                    </form>
                                    Show</label>
                                <div class="opt-holder">
                                    <select class="mdb-select colorful-select dropdown-primary mt-2 hidden-md-down"
                                            onchange="$(perPage).val($(this).val()) && $(perPage).parent('form').submit();">
                                        <option value="" disabled></option>
                                        <option value="10" @if($users->perPage()==10) selected @endif>10</option>
                                        <option value="20" @if($users->perPage()==20) selected @endif>20</option>
                                        <option value="50" @if($users->perPage()==50) selected @endif>50</option>
                                        <option value="100" @if($users->perPage()==100) selected @endif>100</option>
                                    </select>
                                    <span>entries</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
@endsection
@section('page-script')
    <script type="text/javascript">
        var showTab = $("#showUserTab").attr("data-showtab");
        if (showTab) {
            $("#add-user").trigger("click");
        }
        $('#org_key').on('input', function () {
            var value = $(this).val();
            var client = $('#client [value="' + value + '"]').data('org');
            $('#client_key').val(client);
        });
        $('.user-flag input').on('click', function () {
            if ($(this).is("#is_admin") || $(this).is("#is_member")) {
                $(".add-select").addClass('add-select-visibility');
            }
            else {
                $(".add-select").removeClass('add-select-visibility');
            }

        });
    </script>
@endsection
