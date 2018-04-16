<div class="modal fade" id="change_psw_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <div class="modal-content change-psw-model">
            <div class="modal-header">
                <p class="heading lead">Change Password</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>{{-- modal-header --}}
            <div class="modal-body">
                <form method="post" action="{{route('change_password')}}" id="change_password_form">
                    @csrf
                    <input type="hidden" name="user_id" value="{{$user->user_id}}">
                    <div class="form-group row md-form">
                        <label for="new_password"
                               class="col-md-12 col-form-label text-md-left">New Password
                        </label>
                        <input id="new_password" name="password" required="required"
                               class="form-control" type="password" pattern=".{6,}"
                               title="Password Must be 6 letters in minimum">
                    </div>

                    <div class="form-group row md-form">
                        <label for="password-confirm"
                               class="col-md-12 col-form-label text-md-left">Confirm Password
                        </label>
                        <input id="password-confirm" name="confirm_password" required="required"
                               class="form-control" type="password" pattern=".{6,}">
                    </div>
                    <input type="submit" style="display: none;" id="submit_change_password">
                </form>
                <div class="float-right btn-sm">
                    <a type="button" class="btn btn-outline-primary waves-effect btn-sm"
                       onclick="submit_change_password.click();">change password</a>
                </div>
            </div>{{-- modal-body --}}
        </div>{{-- modal-content --}}
    </div>{{-- modal-dialog --}}
</div><!-- Delete Modal-->