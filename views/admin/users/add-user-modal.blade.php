<!-- Central Modal Medium Success -->
<div class="modal fade" id="AddUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info modal-lg" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Add User</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
                <form class="col-md-12" method="POST" action="{{ route('user_management.store') }}">
                    @csrf
                    <div class="form-group row md-form">
                        <label for="name" class="col-md-12 col-form-label text-md-left">Name</label>
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif

                    </div>
                    <div class="form-group row md-form">
                        <label for="email" class="col-md-12 col-form-label text-md-left">E-Mail Address</label>
                        <input id="email" type="email"
                               class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>


                    <div class="form-group row md-form">

                        <label for="password" class="col-md-12 col-form-label text-md-left">Password</label>

                        <input id="password" type="password"
                               class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                               required>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback"><strong>{{ $errors->first('password') }}</strong></span>
                        @endif
                    </div>
                    <div class="form-group row md-form">

                        <label for="password-confirm" class="col-md-12 col-form-label text-md-left">Confirm
                            Password</label>


                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                               required>

                    </div>
                    <div class="row">
                        <div class="form-inline user-flag">
                            <div class="form-check">
                                <input class="form-check-input" value="super" name="user_flag" type="radio"
                                       id="is_superadmin" checked>
                                <label class="form-check-label grey-text" for="is_superadmin"><span class="blue-text">Super Admin</span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="admin" name="user_flag" type="radio"
                                       id="is_admin">
                                <label class="form-check-label grey-text" for="is_admin"><span
                                            class="blue-text">Admin</span></label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" value="member" name="user_flag" type="radio"
                                       id="is_member">
                                <label class="form-check-label grey-text" for="is_member"><span
                                            class="blue-text">Member</span></label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group add-select">
                        <input type="text" list="client" id="org_key"/>
                        <datalist id="client">
                            @foreach($organisations as $organisation)
                                <option data-org="{{$organisation->organisation_id}}"
                                        value="{{$organisation->name}}"></option>
                            @endforeach
                        </datalist>
                        <input type="hidden" id="client_key" name="client_key" value="">
                    </div>
                    @if($errors->first('client_key'))
                        <span class="invalid-feedbacks"><strong>{{ $errors->first('client_key') }}</strong></span>
                    @endif

                    <div class="form-group row float-right">
                        <div class="add-btn">
                            <button type="submit" class="btn btn-sm btn-outline-primary waves-effect">Submit</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/.Content-->
</div>
<!-- Central Modal Medium Success-->
