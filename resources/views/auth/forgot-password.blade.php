{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


@extends('layouts.empty')

@push('styles')

@endpush

@section('content')


        <table style="width:100%;height:100vh">
            <tr>
                <td>
                    <div class="card card-style">
                        <div class="content mb-0">

                            <div class="custom-control scale-switch ios-switch" style="text-align: right;margin-right: unset;position: unset;padding-left: unset;">
                                <input data-toggle-theme="" type="checkbox" class="ios-input" id="switch-dark-mode">
                                <label class="custom-control-label" for="switch-dark-mode"></label>
                            </div>

                            <h1 class="text-center"><i class="fa fa-question-circle fa-3x color-highlight mt-3"></i></h1>
                            <h1 class="pt-3 mt-3 text-center font-900 font-40 text-uppercase">Forgot</h1>
                            <p class="text-center color-highlight font-11">Let's get you back into your account</p>
                            <div class="input-style has-icon validate-field">
                                <i class="fa fa-at"></i>
                                <input type="email" class="form-control validate-text" id="form2a" placeholder="Email">
                                <label for="form2a" class="color-highlight">Email</label>
                                <i class="fa fa-times disabled invalid color-red-dark"></i>
                                <i class="fa fa-check disabled valid color-green-dark"></i>
                                <em>(required)</em>
                            </div>
                                <a href="#" class="btn btn-m mt-4 mb-3 btn-full rounded-sm bg-highlight text-uppercase font-900">Send Reset Instructions</a>

                            <div class="divider"></div>

                            <p class="text-center">
                                <a href="login" class="color-theme opacity-50 font-12">Back to Login</a>
                            </p>
                            <br>
                        </div>
                    </div>
                </td>
            </tr>
        </table>


    
@endsection


@push('scripts')

@endpush


