@extends('layouts.auth')
@section('judulHalaman', 'Auth')

@section('kontent')
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Buat Akun</h1>
                <input name="nama" type="text" placeholder="Nama" />
                <input name="nipnik" type="number" placeholder="NIK/NIP" />
                <input name="nohp" type="number" placeholder="Nomor HP/WA" />
                <input name="email" type="email" placeholder="Email" />
                <input name="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input id="password-confirm" type="password" class="form-control" placeholder="Konfirmasi Password" name="password_confirmation" required autocomplete="new-password">
                <button>Daftar</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <h1>Masuk</h1>
                <input name="email" type="email" placeholder="Email" @error('email') is-invalid @enderror"
                    value="{{ old('email') }}" required autocomplete="email" />
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <input name="password" type="password" placeholder="Password" @error('password') is-invalid @enderror"
                    required autocomplete="current-password" />
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
                <button>Masuk</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Untuk tetap terhubung dengan kami, silakan masuk dengan info pribadi Anda</p>
                    <div class="social-container">
                        <a href="/"><i class="fa-solid fa-angle-left" style="color: white"></i></a>
                        <button class="ghost" id="signIn">Masuk</button>
                    </div>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hallo, Teman!</h1>
                    <p>Masukkan detail pribadi Anda dan mulailah perjalanan bersama kami</p>
                    <div class="social-container">
                        <a href="/"><i class="fa-solid fa-angle-left" style="color: white"></i></a>
                        <button class="ghost" id="signUp">Daftar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
