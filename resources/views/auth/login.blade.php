@extends('layouts.app')

@section('content')
<div style="max-width: 1280px; margin: 0 auto;">
    <div style="display: flex; justify-content: center;">
        <div style="width: 66.666667%; max-width: 66.666667%;">
            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem;">
                <div style="padding: 0.75rem 1.25rem; background-color: #f8f9fa; border-bottom: 1px solid #dee2e6;">
                    {{ __('Login') }}
                </div>

                <div style="padding: 1.25rem;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div style="display: flex; margin-bottom: 1rem;">
                            <label for="email" style="width: 33.333333%; text-align: right; padding-right: 0.75rem;" class="col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div style="width: 50%;">
                                <input id="email" type="email" style="width: 100%; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span style="display: block; margin-top: 0.25rem; font-size: 0.875em; color: #dc3545;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="display: flex; margin-bottom: 1rem;">
                            <label for="password" style="width: 33.333333%; text-align: right; padding-right: 0.75rem;" class="col-form-label text-md-end">{{ __('Password') }}</label>

                            <div style="width: 50%;">
                                <input id="password" type="password" style="width: 100%; border: 1px solid #ced4da; border-radius: 0.25rem; padding: 0.375rem 0.75rem;" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span style="display: block; margin-top: 0.25rem; font-size: 0.875em; color: #dc3545;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="display: flex; margin-bottom: 1rem;">
                            <div style="width: 50%; margin-left: 33.333333%;">
                                <div style="display: flex; align-items: center;">
                                    <input style="margin-right: 0.5rem;" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label style="margin-bottom: 0;" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div style="display: flex; margin-bottom: 0;">
                            <div style="width: 66.666667%; margin-left: 33.333333%;">
                                <button type="submit" style="border: 1px solid #007bff; background-color: #007bff; color: white; padding: 0.375rem 0.75rem; border-radius: 0.25rem;">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a style="color: #007bff; text-decoration: none; margin-left: 0.5rem;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
