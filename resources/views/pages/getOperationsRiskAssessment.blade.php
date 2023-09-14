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
                           Operation Risk Assessment
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
                <form method="POST" action="{{ route('postOperationRiskAssessment') }}">
                    @csrf
                    <div class="form-group">
                        <label for="date">Assessment Date</label>
                        <input type="date" name="assessment_date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Accessors Email</label>
                        <input type="date" name="assessment_date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Accessors Email</label>
                        <input type="date" name="assessment_date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="patient_id">Patient Name</label>
                        <select name="patient_id" id="patient_id" class="form-control" required>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->patient_name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="text">What could cause Harm?</label>
                        <input type="date" name="what_causes_harm" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Where is the Hazard?</label>
                        <input type="date" name="where_is_the_hazard" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Who might be Harmed?</label>
                        <input type="date" name="who_might_be_harmed" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">How will they be harmed</label>
                        <input type="date" name="how_will_they_be_harmed" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">How often are they exposed to this Hazard?</label>
                        <input type="date" name="how_often_are_exposed_hazard" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">How often are they exposed to this Hazard?</label>
                        <input type="date" name="how_often_are_exposed_hazard" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">For how long each time are they exposed to this hazard</label>
                        <input type="date" name="how_long_exposed_hazard" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Would disallowing this activity impact negatively on service user’s chosen lifestyle?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="disallowing_activity" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="disallowing_activity" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Comment</label>
                        <input type="date" name="comment" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">What is the likelihood that somebody would be harmed</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_harm" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Unlikely
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">No</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Very Likely</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">How serious could be the Harm</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">No Injury
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Minor Injury</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Major Injury</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Death</label>
                        </div>
                    </div>
                    <h4 class = "text-center">Control Measures Required</h4>
                    <div class="form-group">
                        <label for="date">List the control measures required to reduce the risk</label>
                        <input type="text" name="list_of_control_measures" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date when the control measures we implemented</label>
                        <input type="date" name="date_when_control_measures_implemented" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Identify Training required to reduce risk</label>
                        <input type="text" name="identity_training_required_risk id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date when training was specified.</label>
                        <input type="date" name="identity_training_was_specified  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Identify equipment that must be used to reduce risk
                            Date this equipment was provided 
                            </label>
                        <input type="date" name="identity_equipment_reduced_risk  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">
                            Date this equipment was provided 
                            </label>
                        <input type="date" name="identity_equipment_reduced_risk  class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Click on the following Risk Assessment Matrix to generate the calculated risk score after control measures are put in place.</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_radio_harm" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Unlikely</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_radio_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Likely</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="likelihood_radio_harm" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Very Likely</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">How serious could be the Harm</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm_radio" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">No Injury</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm_radio" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Minor Injury</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm_radio" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Major Injury</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="how_serious_harm_radio" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">Death</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Additional Control Measures</label>
                        <input type="date" name="additional_control_measures" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Completion Date</label>
                        <input type="date" name="completion_control_measures" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Risk Assessment Drawn By</label>
                        <input type="date" name="risk_assessment_drawn_by" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Date</label>
                        <input type="date" name="risk_assessment_date" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Has assessment taken account of mental capacity act?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="assessment_taken_mental" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="assessment_taken_mental" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Please comment on any known behaviors / communication preferences that justify the above decision (please provide specific details)</label>
                        <input type="date" name="please_comment_any_behaviours" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Is there possible Deprivation of Liberty issue</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="positive_liberty_issue" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="positive_liberty_issue" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Does the outcome of this assessment require a ‘best interest’ meeting to be held now?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outcome_best_interest_radio" value="Yes" id="consulted_yes">
                            <label class="form-check-label" for="consulted_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="outcome_best_interest_radio" value="No" id="consulted_no">
                            <label class="form-check-label" for="consulted_no">No</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Comment</label>
                        <input type="date" name="comment" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Date Of Review</label>
                        <input type="date" name="date_of_review" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Changes Required</label>
                        <input type="date" name="changes_required" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Managers Name</label>
                        <input type="date" name="managers_name" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Risk Assessment – Activity Assessed:</label>
                        <input type="date" name="risk_assessment_Activity_accessed" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Date Of Assessment</label>
                        <input type="date" name="date_of_assessment" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">All staff to sign here "By Typing their Name", to indicate that they have read, understood and will comply with this assessment.</label>
                        <input type="date" name="signage_name" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Date</label>
                        <input type="date" name="signage_date" id="date" class="form-control" required>
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
