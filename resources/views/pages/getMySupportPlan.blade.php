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
                           Support Plan
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
    'Success',
    'Support Plan Added'
        );
        }
        window.onload = massge;
        </script>
    @endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('postMySupportPlan') }}">
                    @csrf
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="patient_id">Patient</label>
                        <select name="patient_id" id="patient_id" class="form-control" required>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->patient_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Communication Skills</label>
                        <textarea type="text" rows="5" name="comm_skills" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Friendships and Personal Relationships, in my friendship groups, family and with the people that supports me. To include sexuality and sexual relationships</label>
                        <textarea type="text" rows="5" name="friend_fam" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Mobility and dexterity</label>
                        <textarea type="text" rows="5" name="friend_fam" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Routines and Personal care (morning, afternoon, evening, and night)</label>
                        <textarea type="text" rows="5" name="routines_personal_care" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Needs around using the toilet and maintaining my personal hygiene</label>
                        <textarea type="text" rows="5" name="needs" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Emotions (what may upset me or me anxious.)</label>
                        <textarea type="text" rows="5" name="emotions" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Accessing the Community and daily living skills</label>
                        <textarea type="text" rows="5" name="daily_living_skills" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">My General Health Needs – you may need to include additional support plans for any specifically identified needs.</label>
                        <textarea type="text" rows="5" name="general_health_needs" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">My Medication Support</label>
                        <textarea type="text" rows="5" name="medication_support" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Recreation and relationt</label>
                        <textarea type="text" rows="5" name="recreation_and_relation" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Eating, Drinking and Nutrition</label>
                        <textarea type="text" rows="5" name="eating_drinking_nutrition" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Psychological Support and Mental Health Needs</label>
                        <textarea type="text" rows="5" name="physcological_support" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Finance (also ensure you put a financial passport in place for me)</label>
                        <textarea type="text" rows="5" name="finance" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="date">Staff Email</label>
                        <textarea type="text" rows="5" name="staff_email" id="date" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Support Plan</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
