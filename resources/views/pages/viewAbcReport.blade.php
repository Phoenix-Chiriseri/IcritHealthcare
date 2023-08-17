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
                          ABC Report
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
                        <label class="form-label">Initials of person causing harm/ intimidation/ damage:</label>
                        <input type="text" class="form-control" name="date" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Date:</label>
                <input type="date" class="form-control" name="date" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Start Time</label>
                <input type="time" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">End Time</label>
                <input type="time" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Influencing factors or known trigger for behaviours? (Consider up to 48hrs prior)</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Whats was happening immediately before the incident? (Include who was there and what was happening)</label>
                <input type="text" class="form-control" name="location" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Behaviours exhibited/what happened?</label><br>
                <input type="checkbox" name="behaviors[]" value="Physical">
                <label class="form-check-label">Physical</label><br>
                <input type="checkbox" name="behaviors[]" value="Verbal">
                <label class="form-check-label">Verbal</label><br>
                <input type="checkbox" name="behaviors[]" value="Damage">
                <label class="form-check-label">Damage</label><br>
                <input type="checkbox" name="behaviors[]" value="Other">
                <label class="form-check-label">Other</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Whats was happening immediately before the incident? (Include who was there and what was happening)</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Immediate actions taken.</label>
                <input type="text" class="form-control" name="location" required>
            </div>
            <div class="mb-3">
                <label class="form-label">On reflection, is there anything that could have been done differently or ideas to prevent future adverse incidents?</label>
                <input type="text" class="form-control" name="location" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Were PROACT SCIPr interventions used?</label><br>
                <input type="checkbox" name="behaviors[]" value="Physical">
                <label class="form-check-label">Yes</label><br>
                <input type="checkbox" name="behaviors[]" value="Verbal">
                <label class="form-check-label">No</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Was medication administered in accodance with individual protocols?</label><br>
                <input type="checkbox" name="behaviors[]" value="Physical">
                <label class="form-check-label">Yes</label><br>
                <input type="checkbox" name="behaviors[]" value="Verbal">
                <label class="form-check-label">No</label><br>
            </div>
            <div class="mb-3">
                <label class="form-label">Was there physical contact/ injury or intimidation on anyone else (no matter how minor)?</label><br>
                <input type="checkbox" name="behaviors[]" value="Physical">
                <label class="form-check-label">Yes</label><br>
                <input type="checkbox" name="behaviors[]" value="Verbal">
                <label class="form-check-label">No</label><br>
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
