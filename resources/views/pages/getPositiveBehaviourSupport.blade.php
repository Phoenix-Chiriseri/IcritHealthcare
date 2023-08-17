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
                           Positive Behaviour Support
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
                    <div class="form-group">
                        <label for="shift">Staff Name</label>
                        <select id = "Staff_Id"  name = "Staff_Id" class = "form-control" required>
                            <option value = "" select disabled>Select Staff Member</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->username}}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Todays Date</label>
                        <input type="date" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Review Date</label>
                        <input type="date" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Home/Location</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Street Address</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">City</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">County</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Completed By</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">What I do when I am happy or angry (BEHAVIORS)</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">What Makes me unhappy or angry? (TRIGGERS)</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Actions NEVER to take when supporting me</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Behaviour- How I look when I am Calm relaxed</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Support Strategies The things staff can do to keep me in the green</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Behaviour- How I look when I am becoming anxious or aroused</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Support Strategies The things staff can say or do to manage the situation and prevent unnecessary distress, injury and destruction.</label>
                        <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                    </div>
                    <h6 for="date" class="text-center">Recovery Period
                        Please ensure this section is maintained up to date and is accurately reflected across the support & Risk Management Plan</h6>
                        <div class="form-group">
                            <label for="personal_care">Support Strategies The things staff can say or do to manage the situation and prevent unnecessary distress, injury and destruction.</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Behaviour- How I look and behave when I am in crisis</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Name of Medicine:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Form(I.e. tablet/ liquid):</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Strength:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Route of Administration</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Dose & intervals to be administered:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Maximum dose in 24 hours:</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">I consulted a medical practitioner</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="consulted_medical_practitioner" value="Yes" id="consulted_yes">
                                <label class="form-check-label" for="consulted_yes">Yes</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="consulted_medical_practitioner" value="No" id="consulted_no">
                                <label class="form-check-label" for="consulted_no">No</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Special Instructions</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">*Reasons for Administration and When Should the Medication be Given(Required)s</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">Name Of Medicine</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Form(I.e. tablet/ liquid):</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Strength:</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                               Route of Administration</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                            Dose & intervals to be administered:</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Maximum dose in 24 hours:</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Is Medication:</label>
                            <select class="form-select" name="medication">
                                <option value="Prescribed">Prescribed</option>
                                <option value="Over The Counter">Over The Counter</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Reasons for Administration and When Should the Medication be Given(Required)</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Describe in as much detail as possible the condition being treated i.e. symptoms, indicators, behaviour/s, triggers, type of pain/s where? When ? Etc.</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                History of Previous Interventions and / or practice</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                List any documentation and evidence that informs this positive Behaviour Support Plan
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                How will future occurrences be recorded & managed into this positive Behaviour Support plan
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Views of Family / associates that have been considered as part of this assessment
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Views of the Person we support
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                Views of the Person we support
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Taking the attached information into consideration, have all the controls identified been agreed by all parties involved in consultation?</label>
                            <select class="form-select" name="controls_agreed">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                If No, please identify actions to be taken to support this agreement
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="personal_care">
                                If No, please identify actions to be taken to support this agreement
                            </label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Has Deprivation of Liberty Application been made?</label>
                            <select class="form-select" name="deprivation_of_liberty">
                                <option value="Yes">Yes</option>
                                <option value="No">No</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">If Yes, Date Made:</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">If No, Date Made:</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <h5 class = "text-center">This Positive Behaviour Support Plan has been agreed and acknowledged by</h5>
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Position/ Role</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Role</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Role</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">
                                Staff Email</label>
                            <textarea type="text" rows="5" class="form-control" id="last_name" name="last_name" required></textarea>
                        </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
