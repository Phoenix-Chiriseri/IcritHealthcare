@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    @if(Session::has('success'))
    <script type="text/javascript">
    function massge() {
    Swal.fire(
    'success',
    'Incident Report Added'
        );
        }
        window.onload = massge;
        </script>
@endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('postIncidentReport') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group">
                            <label for="patient_id">Patient Name</label>
                            <select name="patient_id" id="patient_id" class="form-control" required>
                                @foreach ($patients as $patient)
                                    <option value="{{ $patient->id }}">{{ $patient->patient_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="ref_number">Ref Number</label>
                            <input type="text" name="ref_number" id="ref_number" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="location">Location</label>
                            <input type="text" name="location" id="location" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="time">Time</label>
                            <input type="time" name="time" id="time" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="person_affected">Was the person affected</label>
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
                        <label for="initials">Initials of person causing harm/intimidation/damage or where known behaviors have changed:</label>
                        <input type="text" name="initials" id="initials" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="description">Please provide a full description of the incident (include any injuries or damage sustained)</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
                    <div class="col-md-12">
                        <label for="identified_causes">Were there any identified causes to this incident?</label>
                        <textarea name="identified_causes" id="identified_causes" class="form-control" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date_completed">Please identify any other forms that were completed with this Incident Report</label>
                        <select name="completed_forms" id="date_completed" class="form-select" required>
                            <option value="Body Map">Body Map</option>
                            <option value="Witness Statement">Witness Statement</option>
                            <option value="Falls Checklist">Falls Checklist</option>
                            <option value="Seizure Report">Seizure Report</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="name_of_person">Name Of Person Completing Form</label>
                        <input type="text" name="name_of_person" id="name_of_person" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="date_completed">Date Completed</label>
                        <input type="date" name="date_completed" id="date_completed" class="form-control" required>
                    </div>
                    <div class="col-md-12">
                        <label for="manager_on_call">Manager On Call</label>
                        <input type="text" name="manager_on_call" id="manager_on_call" class="form-control" required>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
