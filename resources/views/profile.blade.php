@extends('layouts.app')

@section('title', 'Profile')

@section('content')

<div class="page-container">

    <div class="page-heading">

        <div>
            <p class="subtitle">Account Information</p>

            <h1>Profile Saya 🐰</h1>

            <p>Informasi akun pengelola RabyPudding.</p>
        </div>

    </div>


    <div class="profile-card">

        <div class="profile-avatar">
            🐰
        </div>

        <h2>{{ $username }}</h2>

        <p class="profile-role">{{ $profile['jabatan'] }}</p>


        <div class="profile-information">

            <div class="profile-row">
                <span>Username</span>
                <strong>{{ $username }}</strong>
            </div>

            <div class="profile-row">
                <span>Nama Brand</span>
                <strong>{{ $profile['brand'] }}</strong>
            </div>

            <div class="profile-row">
                <span>Email</span>
                <strong>{{ $profile['email'] }}</strong>
            </div>

            <div class="profile-row">
                <span>Bidang Usaha</span>
                <strong>{{ $profile['usaha'] }}</strong>
            </div>

        </div>

    </div>

</div>

@endsection