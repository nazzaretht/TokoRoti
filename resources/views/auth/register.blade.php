<!-- filepath: resources/views/auth/register.blade.php -->
@extends('layouts.guest')

@section('title', 'Register')
@section('desc', 'Buat akun baru untuk mulai belanja')

@section('content')
<form method="POST" action="{{ route('register') }}">
    @csrf
    <div>
        <x-input-label for="name" :value="__('Name')" />
        <x-text-input id="name" class="block mt-1 w-full rounded-lg" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" class="block mt-1 w-full rounded-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full rounded-lg" type="password" name="password" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div>
        <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
        <x-text-input id="password_confirmation" class="block mt-1 w-full rounded-lg" type="password" name="password_confirmation" required autocomplete="new-password" />
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>
    <div>
        <button type="submit" class="btn-auth">
            {{ __('Register') }}
        </button>
    </div>
    <div class="text-center text-sm text-gray-500 mt-2">
        Sudah punya akun?
        <a href="{{ route('login') }}" class="text-indigo-600 hover:underline font-semibold">Login</a>
    </div>
</form>
@endsection