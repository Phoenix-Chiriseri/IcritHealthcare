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
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                           Behavioural Monitor Chart
                        </h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-entry') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" name="date" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Last Name</label>
                <input type="text" class="form-control" name="date" required>
    </div>
            
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Known Behaviours</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Totals</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Time</label>
                <input type="time" class="form-control" name="location" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Known Behaviour</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Comments</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Injuries</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Initials</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <!-- Add more sections for the remaining points in the template -->
            <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
