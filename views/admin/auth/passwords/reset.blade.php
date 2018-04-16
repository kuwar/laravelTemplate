@extends('admin.auth.authwrapper')

@section('content')
    <form method="POST" action="{{ route('password.request') }}" class="login-form">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-row form-email">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email"
                   value="{{ $email or old('email') }}" required autofocus>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>
        <div class="form-row form-password">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>
        <div class="form-row form-password">
            <label for="password-confirm">Confirm Password</label>
            <input type="password" id="confirm-password"
                   class="form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                   name="password_confirmation" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-row form-submit">
            <input type="submit" value="Reset Password">
        </div>
    </form>
@endsection
