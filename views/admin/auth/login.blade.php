@extends('admin.auth.authwrapper')

@section('content')
    <form method="POST" action="{{ route('passport') }}" class="login-form">
        @csrf
        <div class="form-row form-email">
            <label for="email">Email Address</label>
            <input type="email" id="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }} " name="email"
                   value="{{ old('email') }}" required autofocus>
        </div>
        <div class="form-row form-password">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                   name="password" required autofocus>
            <a href="{{ route('password.request') }}" class="btn-forget-password">? <span>Forgot Password?</span></a>
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>
        @if ($errors->has('email'))
            <span class="error">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
        @endif


        <label class="remember-me">
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} >
            <span class="checkbox__icon"></span>
            Remember Me
        </label>


        <div class="form-row form-submit">
            <input type="submit" value="LOGIN">
        </div>
    </form>
@endsection
