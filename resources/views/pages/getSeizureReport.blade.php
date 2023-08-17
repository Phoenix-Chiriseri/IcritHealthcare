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
                           Seizure Report
                        </h5>
                       
                    </div>
                </div>
            </div>
        </div>
    </div><div id="alert">
        @include('components.alert')
    </div>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-entry') }}">
                    @csrf
                    <div class="form-group">
                        <label for="date">REF No:</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Name Of Person We Support</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Location</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Of Incident</label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Time Of Incident</label>
                        <input type="time" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="completed_forms" class="form-label">Please identify any other forms that were completed with this Incident Report</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Change of Mood" id="form_check_change_of_mood">
                            <label class="form-check-label" for="form_check_change_of_mood">Change of Mood</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Restlessness" id="form_check_restlessness">
                            <label class="form-check-label" for="form_check_restlessness">Restlessness</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Sensations" id="form_check_sensations">
                            <label class="form-check-label" for="form_check_sensations">Sensations</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Sound" id="form_check_sound">
                            <label class="form-check-label" for="form_check_sound">Sound</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Other" id="form_check_other">
                            <label class="form-check-label" for="form_check_other">Other</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="completed_forms" class="form-label">Please identify any other forms that were completed with this Incident Report</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Standing" id="form_check_standing">
                            <label class="form-check-label" for="form_check_standing">Standing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Sitting" id="form_check_sitting">
                            <label class="form-check-label" for="form_check_sitting">Sitting</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="In bed" id="form_check_in_bed">
                            <label class="form-check-label" for="form_check_in_bed">In bed</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Unobserved Seizure" id="form_check_unobserved_seizure">
                            <label class="form-check-label" for="form_check_unobserved_seizure">Unobserved Seizure</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="completed_forms[]" value="Other" id="form_check_other">
                            <label class="form-check-label" for="form_check_other">Other</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="did_fall" class="form-label">Did they fall?</label>
                        <select class="form-select" name="did_fall" id="did_fall">
                            <option value="Forward">Forward</option>
                            <option value="Backward">Backward</option>
                            <option value="N/A">N/A</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Initials of person causing harm/ intimidation/ damge or where known behaviours have changed:</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Please provide a full description of the incident (include any injuries or damage sustained)</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Were there any identified causes to this incident?</label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="other_forms" class="form-label">Please identify any other forms that were completed with this Incident Report.</label>
                        <select class="form-select" name="other_forms[]" id="other_forms">
                            <option value="Body Map">Body Map</option>
                            <option value="Witness Statement">Witness Statement</option>
                            <option value="Falls Checklist">Falls Checklist</option>
                            <option value="Seizure Report">Seizure Report</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>  
                    <div class="mb-3">
                        <label class="form-label">Did they stiffen?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="did_stiffen" id="did_stiffen_yes" value="Yes">
                            <label class="form-check-label" for="did_stiffen_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="did_stiffen" id="did_stiffen_no" value="No">
                            <label class="form-check-label" for="did_stiffen_no">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Was there loss of consciousness?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="loss_of_consciousness" id="loss_of_consciousness_yes" value="Yes">
                            <label class="form-check-label" for="loss_of_consciousness_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="loss_of_consciousness" id="loss_of_consciousness_no" value="No">
                            <label class="form-check-label" for="loss_of_consciousness_no">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Did their colour change?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="colour_change" id="colour_change_yes" value="Yes">
                            <label class="form-check-label" for="colour_change_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="colour_change" id="colour_change_no" value="No">
                            <label class="form-check-label" for="colour_change_no">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Was there movement?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="movement" id="movement_yes" value="Yes">
                            <label class="form-check-label" for="movement_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="movement" id="movement_no" value="No">
                            <label class="form-check-label" for="movement_no">No</label>
                        </div>
                    </div>    
                    <div class="mb-3">
                        <label class="form-label">Was there difficulty breathing?</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="breathing_difficulty" id="breathing_difficulty_yes" value="Yes">
                            <label class="form-check-label" for="breathing_difficulty_yes">Yes</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="breathing_difficulty" id="breathing_difficulty_no" value="No">
                            <label class="form-check-label" for="breathing_difficulty_no">No</label>
                        </div>
                    </div>
                    <!-- Parts of the body involved -->
<div class="mb-3">
    <label class="form-label">Parts of the body involved</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Left" id="body_part_left">
        <label class="form-check-label" for="body_part_left">Left</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Right" id="body_part_right">
        <label class="form-check-label" for="body_part_right">Right</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Both sides" id="body_part_both">
        <label class="form-check-label" for="body_part_both">Both sides</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Arms" id="body_part_arms">
        <label class="form-check-label" for="body_part_arms">Arms</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Legs" id="body_part_legs">
        <label class="form-check-label" for="body_part_legs">Legs</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Picking/fumbling of clothes" id="body_part_clothes">
        <label class="form-check-label" for="body_part_clothes">Picking/fumbling of clothes</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Eyelid flutters/blinking" id="body_part_eyelid">
        <label class="form-check-label" for="body_part_eyelid">Eyelid flutters/blinking</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Spasmodic jerking of arms" id="body_part_jerking_arms">
        <label class="form-check-label" for="body_part_jerking_arms">Spasmodic jerking of arms</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Facial movements" id="body_part_facial">
        <label class="form-check-label" for="body_part_facial">Facial movements</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Eyes turning" id="body_part_eyes_turning">
        <label class="form-check-label" for="body_part_eyes_turning">Eyes turning</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Stiffening of arms" id="body_part_stiffening_arms">
        <label class="form-check-label" for="body_part_stiffening_arms">Stiffening of arms</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Stiffening of legs" id="body_part_stiffening_legs">
        <label class="form-check-label" for="body_part_stiffening_legs">Stiffening of legs</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Spasmodic jerking of legs" id="body_part_jerking_legs">
        <label class="form-check-label" for="body_part_jerking_legs">Spasmodic jerking of legs</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Blank stare/absence" id="body_part_blank_stare">
        <label class="form-check-label" for="body_part_blank_stare">Blank stare/absence</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Tremors" id="body_part_tremors">
        <label class="form-check-label" for="body_part_tremors">Tremors</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="body_parts[]" value="Other" id="body_part_other">
        <label class="form-check-label" for="body_part_other">Other</label>
    </div>
</div>              
<div class="form-group">
    <label for="date">How long did the seizure last?</label>
    <input type="text" name="date" id="date" class="form-control" required>
</div>
<div class="mb-3">
    <label class="form-label">Was there incontinence?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="incontinence" value="Yes" id="incontinence_yes">
        <label class="form-check-label" for="incontinence_yes">Yes</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="incontinence" value="No" id="incontinence_no">
        <label class="form-check-label" for="incontinence_no">No</label>
    </div>
</div>
<div class="mb-3">
    <label class="form-label">What was the person's condition after seizure?</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="condition_after_seizure[]" value="Confused" id="condition_confused">
        <label class="form-check-label" for="condition_confused">Confused</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="condition_after_seizure[]" value="Agitated" id="condition_agitated">
        <label class="form-check-label" for="condition_agitated">Agitated</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="condition_after_seizure[]" value="Other" id="condition_other">
        <label class="form-check-label" for="condition_other">Other</label>
    </div>
</div>
<div class="form-group">
    <label for="date">Length of Recovery</label>
    <input type="text" name="date" id="date" class="form-control" required>
</div>
<div class="mb-3">
    <label class="form-label">Did the person suffer any injury?</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="person_injury" value="Yes" id="injury_yes">
        <label class="form-check-label" for="injury_yes">Yes</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="person_injury" value="No" id="injury_no">
        <label class="form-check-label" for="injury_no">No</label>
    </div>
</div>
<div class="form-group">
    <label for="date">Treatment</label>
    <input type="text" name="date" id="date" class="form-control" required>
</div>
<div class="mb-3">
    <label class="form-label">Were there any triggers?</label>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="triggers[]" value="Stress" id="trigger_stress">
        <label class="form-check-label" for="trigger_stress">Stress</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="triggers[]" value="Illness" id="trigger_illness">
        <label class="form-check-label" for="trigger_illness">Illness</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="triggers[]" value="Unusual exercise/experience" id="trigger_unusual">
        <label class="form-check-label" for="trigger_unusual">Unusual exercise/experience</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="triggers[]" value="Medication" id="trigger_medication">
        <label class="form-check-label" for="trigger_medication">Medication</label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" name="triggers[]" value="Other" id="trigger_other">
        <label class="form-check-label" for="trigger_other">Other</label>
    </div>
</div>
<div class="form-group">
    <label for="date">Reported By</label>
    <input type="text" name="date" id="date" class="form-control" required>
</div>
<div class="form-group">
    <label for="date">Date</label>
    <input type="text" name="date" id="date" class="form-control" required>
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
