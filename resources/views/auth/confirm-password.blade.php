<!-- filepath: resources/views/auth/confirm-password.blade.php -->
@extends('layouts.guest')

@section('title', 'Konfirmasi Password')
@section('desc', 'Masukkan password Anda untuk melanjutkan.')

@section('content')
<form method="POST" action="{{ route('password.confirm') }}">
    @csrf
    <div>
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input id="password" class="block mt-1 w-full rounded-lg" type="password" name="password" required autocomplete="current-password" />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>
    <div class="flex justify-end mt-4">
        <x-primary-button>
            {{ __('Confirm') }}
        </x-primary-button>
    </div>
</form>
@endsection