<!-- filepath: resources/views/auth/verify-email.blade.php -->
@extends('layouts.guest')

@section('title', 'Verifikasi Email')
@section('desc', 'Silakan cek email Anda untuk verifikasi akun.')

@section('content')
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ __('Link verifikasi baru telah dikirim ke email Anda.') }}
    </div>
@endif

<div class="mb-4 text-sm text-gray-600">
    {{ __('Sebelum melanjutkan, silakan cek email Anda dan klik link verifikasi. Jika belum menerima email, klik tombol di bawah ini untuk mengirim ulang.') }}
</div>

<div class="mt-4 flex flex-col gap-3">
    <form method="POST" action="{{ route('verification.send') }}">
        @csrf
        <x-primary-button>
            {{ __('Kirim Ulang Email Verifikasi') }}
        </x-primary-button>
    </form>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            {{ __('Log Out') }}
        </button>
    </form>
</div>
@endsection