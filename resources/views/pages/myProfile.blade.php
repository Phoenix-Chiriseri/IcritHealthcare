@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <div class="card shadow-lg mx-4 card-profile-bottom">
        <div class="card-body p-3">
            <div class="row gx-4">
                <div class="col-auto">
                    <div class="avatar avatar-xl position-relative">
                        <img src="/img/icritLogo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-auto my-auto">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">My Profile</h5>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted">Name: {{$user->username}}</h6>
                <h6 class="card-subtitle mb-2 text-muted">House: {{$user->house}}</h6>
                <hr>
                <h6 class="card-subtitle mb-2 text-muted">Profile Created: {{ date('Y-m-d', strtotime($user->created_at)) }}</h6>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
