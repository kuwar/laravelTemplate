@extends('admin.auth.authwrapper')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('password.email') }}" class="login-form">
        @csrf
        <div class="form-row form-email">
            <label for="email">E-Mail Address</label>
            <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                   name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-row form-submit">
            <input type="submit" value="SEND RESET PASSWORD LINK">
        </div>
        <div class="form-row form-email">
            <a href="/login" class="text-right text-white">Back to Login</a>
        </div>
    </form>
@endsection