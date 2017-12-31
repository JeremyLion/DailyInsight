@extends('layouts.app')

@section('content')
<div class="ui middle aligned center aligned grid">
    <div class="column login-form">
        <div class="ui form">
            <div class="ui header">Login</div>
                <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="field">
                        <div class="ui left icon input{{ $errors->has('email') ? ' has-error' : '' }}">
                            <i class="sign in icon"></i>
                            <input id="email" type="email" placeholder="Email Address" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="ui left icon input{{ $errors->has('password') ? ' has-error' : '' }}">
                            <i class="lock icon"></i>
                            <input id="password" type="password" placeholder="Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <button type="submit" class="ui fluid button">
                            Login
                        </button>
                    </div>

                    <div class="field">
                        <div class="ui checkbox">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>


                    <div class="row">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
