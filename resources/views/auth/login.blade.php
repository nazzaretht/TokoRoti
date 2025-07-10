<!-- filepath: resources/views/auth/login.blade.php -->
@extends('layouts.guest')

@section('title', 'Login')
@section('desc', 'Masuk ke akun Anda untuk melanjutkan')

@section('content')
<x-auth-session-status class="mb-4" :status="session('status')" />

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full rounded-lg" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full rounded-lg" type="password" name="password" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex items-center justify-between">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
        @if (Route::has('password.request'))
            <a class="text-sm text-indigo-600 hover:underline" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
    </div>
    <div>
        <button type="submit" class="btn-auth">
            {{ __('Log in') }}
        </button>
    </div>
    <div class="text-center text-sm text-gray-500 mt-2">
        Belum punya akun?
        <a href="{{ route('register') }}" class="text-indigo-600 hover:underline font-semibold">Daftar</a>
    </div>
</form>
@endsection