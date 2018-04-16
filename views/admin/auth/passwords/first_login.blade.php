@extends('admin.auth.authwrapper')

@section('content')
    <form method="POST" action="{{ route('first_login') }}" class="login-form">
        @csrf
        <div class="form-row form-password">
            <label for="password">Enter Password</label>
            <input type="password" id="password" class="form-control" name="password" required>

        </div>
        <div class="form-row form-password">
            <label for="password-confirm">RE- Enter Password</label>
            <input type="password" id="password-confirm"
                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation"
                   required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-row form-submit">
            <input type="submit" value="SAVE AND CONTINUE">
        </div>
    </form>
@endsection
