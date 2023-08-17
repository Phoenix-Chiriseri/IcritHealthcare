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
                           Complaint Record
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
                        <label class="form-label">First Name:</label>
                        <input type="text" class="form-control" name="first_name" required>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Last Name:</label>
                        <input type="text" class="form-control" name="last_name" required>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Phone Number:</label>
                        <input type="tel" class="form-control" name="phone_number">
                    </div>
    
                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="email" class="form-control" name="email">
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Status Of Complainant:</label>
                        <select class="form-select" name="complainant_status">
                            <option value="Parent/Relative">Parent/Relative</option>
                            <option value="Person we Support">Person we Support</option>
                            <option value="Social Worker">Social Worker</option>
                            <option value="Neighbour">Neighbour</option>
                            <option value="Advocate/Friend">Advocate/Friend</option>
                            <option value="Other">Other (Please Specify)</option>
                        </select>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label">Details of the complaint/concern:</label>
                        <textarea class="form-control" name="complaint_details" rows="4" required></textarea>
                    </div>
        
                    <!-- Add more sections for "description of complaint", "staff/tenant actions", and "recorded by" -->
        
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
