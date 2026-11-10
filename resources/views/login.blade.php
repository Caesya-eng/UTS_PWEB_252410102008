@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="login-container">

    <div class="login-card">

        <div class="login-logo">
            <span>🐰</span>
            <h1>RabyPudding</h1>
            <p>Pudding Management System</p>
        </div>

        <div class="login-heading">
            <h2>Welcome Back!</h2>
            <p>Silakan masuk ke akun pengelolaanmu.</p>
        </div>

        <form action="{{ route('dashboard') }}" method="GET">

            <div class="form-group">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    placeholder="Masukkan username"
                    required
                >

            </div>

            <button type="submit" class="btn-primary">
                Login →
            </button>

        </form>

        <p class="login-note">
            Manage your pudding business with love ♡
        </p>

    </div>

</div>

@endsection