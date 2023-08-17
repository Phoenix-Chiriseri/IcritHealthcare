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
                   
        <div class="form-group row">
            <label for="first_name" class="col-md-2 col-form-label">First Name</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="first_name" name="first_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-md-2 col-form-label">Last Name</label>
            <div class="col-md-10">
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Date</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="date" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Known Behaviours</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="date" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Totals</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Time</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="time" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Known Behaviour Reference</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Comments/ additional detail if needed</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <label for="injuries" class="col-md-2 col-form-label">Injuries sustained by anyone?</label>
                <select name="injuries" class = "form-control">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                    </select>
            </div>
        </div>
        
        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Initials Of Person Completing Entry</label>
            <div class="col-md-10">
                <!-- Day, Month, and Year selects go here -->
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>

        <!-- Known Behaviours Fieldset 1 -->
        <!-- Known Behaviours Fieldset 2 -->
        <button type="submit" class="btn btn-success">Submit</button>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
