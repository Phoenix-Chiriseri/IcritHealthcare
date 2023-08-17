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
                           Incident Report
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

                    <div class="row">
                        <div class="col-md-6">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Ref Number</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Location</label>
                            <input type="text" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Date</label>
                            <input type="date" name="last_name" id="last_name" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="last_name" class="form-label">Time</label>
                            <input type="date" name="last_name" id="last_name" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="person_affected" class="form-label">Was the person affected</label>
                        <select name="person_affected" id="person_affected" class="form-select" required>
                            <option value="">Select an option</option>
                            <option value="A person we support">A person we support</option>
                            <option value="A staff member">A staff member</option>
                            <option value="Agency">Agency</option>
                            <option value="N/A">N/A</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>    
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Initials of person causing harm/ intimidation/ damge or where known behaviours have changed:</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>    
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Please provide a full description of the incident (include any injuries or damage sustained)</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>       
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Were there any identified causes to this incident?</label>
                        <input type="date" name="last_name" id="last_name" class="form-control" required>
                    </div>            
                    <div class="mb-3">
                        <label for="completed_forms" class="form-label">Please identify any other forms that were completed with this Incident Report</label>
                        <select name="completed_forms[]" id="completed_forms" class="form-select">
                            <option value="Body Map">Body Map</option>
                            <option value="Witness Statement">Witness Statement</option>
                            <option value="Falls Checklist">Falls Checklist</option>
                            <option value="Seizure Report">Seizure Report</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Name Of Person Completing Form</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>    
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Date Completed</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div> 
                    <div class="col-md-12">
                        <label for="last_name" class="form-label">Manager On Call</label>
                        <input type="text" name="last_name" id="last_name" class="form-control" required>
                    </div>      
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
