@extends('layouts.app')

@section('content')
<div style="max-width: 1280px; margin: 0 auto; padding: 1rem;">
    <div style="display: flex; justify-content: center;">
        <div style="flex: 1; max-width: 600px;">
            <div style="border: 1px solid #dee2e6; border-radius: 0.25rem; box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);">
                <div style="background-color: #f8f9fa; padding: 1rem 1.5rem; border-bottom: 1px solid #dee2e6;">
                    {{ __('Verify Your Email Address') }}
                </div>

                <div style="padding: 1.5rem;">
                    @if (session('resent'))
                        <div style="background-color: #d4edda; color: #155724; padding: 0.75rem 1.25rem; margin-bottom: 1rem; border: 1px solid #c3e6cb; border-radius: 0.25rem;">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form style="display: inline;" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" style="border: none; background: none; color: #007bff; padding: 0; margin: 0; font-size: 1rem; cursor: pointer; text-decoration: underline;">
                            {{ __('click here to request another') }}
                        </button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
