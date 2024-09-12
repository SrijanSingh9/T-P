@extends('layouts.app')

@section('content')
<div style="max-width: 1280px; margin: 0 auto;">
    <div style="display: flex; justify-content: center;">
        <div style="width: 100%; max-width: 700px;">
            <div style="border: 1px solid #ddd; border-radius: 4px; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);">
                <div style="background-color: #f8f9fa; padding: 1rem; border-bottom: 1px solid #ddd;">{{ __('Register') }}</div>

                <div style="padding: 1.5rem;">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div style="margin-bottom: 1rem;">
                            <label for="name" style="display: block; margin-bottom: 0.5rem;">{{ __('Name') }}</label>
                            <div>
                                <input id="name" type="text" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span style="color: #e3342f; font-size: 0.875rem;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="email" style="display: block; margin-bottom: 0.5rem;">{{ __('Email Address') }}</label>
                            <div>
                                <input id="email" type="email" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span style="color: #e3342f; font-size: 0.875rem;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="password" style="display: block; margin-bottom: 0.5rem;">{{ __('Password') }}</label>
                            <div>
                                <input id="password" type="password" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;" class="@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span style="color: #e3342f; font-size: 0.875rem;" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <label for="password-confirm" style="display: block; margin-bottom: 0.5rem;">{{ __('Confirm Password') }}</label>
                            <div>
                                <input id="password-confirm" type="password" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div style="text-align: center;">
                                <button type="submit" style="padding: 0.5rem 1rem; background-color: #3490dc; color: #fff; border: none; border-radius: 4px; cursor: pointer;">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
