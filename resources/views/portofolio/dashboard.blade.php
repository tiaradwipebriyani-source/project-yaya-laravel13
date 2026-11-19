
<!-- memanggil file layout yang digunakan -->
@extends('layouts.app')

<!-- mengirimkan string dashboard ke variable title -->
@section('title', 'Dashboard')

<!-- isi konten yang disesuaikan kebutuhan -->
@section('content')

<h1>Selamat Datang, {{ auth()->user()->name }}!</h1>

<p>Email Anda: {{ auth()->user()->email }}</p>

<p>Anda berhasil masuk ke sistem menggunakan akun dari seeder.</p>

<form method="POST" action="{{ route('logout') }}">
    @csrf

    <button class="btn btn-primary" type="submit">
        Logout
    </button>
</form>

<!-- akhir tutup konten -->
@endsection
