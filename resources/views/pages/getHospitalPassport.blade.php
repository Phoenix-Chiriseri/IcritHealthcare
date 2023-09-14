@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <!-- Include country-select-js CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-select-js@2.0.0/css/countrySelect.min.css">
<!-- Include jQuery (required for country-select-js) -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include country-select-js JS -->
<script src="https://cdn.jsdelivr.net/npm/country-select-js@2.0.0/js/countrySelect.min.js"></script>
<script>
 <script>
        $(document).ready(function () {
            $("#country").countrySelect();
        });
    </script>
</script>
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
                          Hospital Passport
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
    'Hospital Passport Added'
        );
        }
        window.onload = massge;
        </script>
@endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('postHospitalPassport') }}">
                    @csrf    
                    <div class="form-group">
                        <label for="date">Assessment Date
                        </label>
                        <input type="date" name="assessment_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Staff Email
                        </label>
                        <input type="email" name="staff_email" class="form-control" required>
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
                        <label for="date">Likes To Be Known As
                        </label>
                        <input type="text" name="likes_to_be_known"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">NHS number:
                        </label>
                        <input type="text" name="nhs_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Of Birth
                        </label>
                        <input type="date" name="dob"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Address
                        </label>
                        <input type="text" name="address"class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">City
                        </label>
                        <input type="text" name="city" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">County
                        </label>
                        <input type="text" name="county"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Country
                        </label>
                        <input type="text" name="country"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Phone</label>
                        <input type="text" name="phone_number" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Email</label>
                        <input type="text" name="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">My Support Care Needs</label>
                        <textarea  name="my_support_care_needs" class="form-control" rows="5" required></textarea>
                    </div>
                     
                    <div class="form-group">
                        <label for="country">My Carer Speaks</label>
                        <textarea name="my_carer_speaks" class="form-control" rows="5" required></textarea>
                    </div>
                    <h4 class = "text-center">Things you must know about me</h4>
                    <!--<div class="form-group">
                        <label for="personal_care">Personal Care</label>
                        <select name="personal_care" id="personal_care" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>!-->   
                    <div class="form-group">
                        <label for="country">Religion</label>
                        <textarea name="things_to_know"  class="form-control" rows="5" required></textarea>
                    </div>     
                    <div class="form-group">
                        <label for="country">Religious/Spiritual Needs</label>
                        <textarea name="religious_needs"  class="form-control" rows="5" required></textarea>
                    </div> 
                    <div class="form-group">
                        <label for="country">Ethnicity</label>
                        <textarea name="ethnicity" class="form-control" rows="5" required></textarea>
                    </div>
                    <h4 class = "text-center">GP</h4>
                    <div class="form-group">
                        <label for="country">GP Name:</label>
                        <textarea name="gp_name"  class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">GP Address:</label>
                        <textarea name="gp_address" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">GP City</label>
                        <textarea name="gp_city" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">GP Country</label>
                        <textarea name="gp_county" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Other Services/profesionals involved with me</label>
                        <textarea name="gp_other_services" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Social Worker</label>
                        <textarea name="gp_social_worker" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Allergies</label>
                        <textarea name="gp_allergies" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Medical Interventions how to take my blood, give injections, BP etc:</label>
                        <textarea name="gp_medical_interventions" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Cardiovascular or respiratory issues</label>
                        <textarea name="gp_cardio_vascular" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Risk of choking, Dysphagia (eating, drinking and swallowing):s</label>
                        <textarea name="gp_risk_of_chocking" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Current medication</label>
                        <textarea name="gp_current_medication" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">My medical history and treatment plan:</label>
                        <textarea name="gp_mymedicalhistory" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">What to do if I am anxious</label>
                        <textarea name="gp_anxious" class="form-control" rows="5" required></textarea>
                    </div>
                    <!--next page!-->
                    <h4 class = "text-center">Things that are important to me:</h4>
                    <div class="form-group">
                        <label for="country">How to communicate with me</label>
                        <textarea name="how_to_comm" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">How I take medication:(whole tablets, crushed tablets, injections, syrup)</label>
                        <input type="text" name="how_i_medicate" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How you know I am in pain:</label>
                        <input type="text" name="how_you_know_pain" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Moving around: (Posture in bed, walking aids)</label>
                        <input type="text" name="moving_around" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Personal care: (Dressing, washing, etc.)</label>
                        <input type="text" name="person_care" class="form-control" required>
                    </div>
                    <!--next page!-->
                    <h4 class = "text-center">Things that are important to me:</h4>
                    <div class="form-group">
                        <label for="country">Seeing/Hearing: (Problems with sight or hearing)</label>
                        <input type="text" name="seeing_hearing"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How I eat: (Food cut up, pureed, risk of choking, help with eating)</label>
                        <input type="text" name="how_i_eat"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How I keep safe: (Bed rails, support with challenging behaviour)</label>
                        <input type="text" name="how_i_keep_safe"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How I use the toilet: (Continence aids, help to get to toilet)</label>
                        <input type="text" name="how_i_toilet"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">
                            Sleeping: (Sleep pattern/routine)</label>
                        <input type="text" name="sleeping_pattern"  class="form-control" required>
                    </div>
                    <!--next page!-->
                    <h4 class = "text-center">My likes and dislikes</h4>
                    <div class="form-group">
                        <label for="country">Things I Like</label>
                        <input type="text" name="likes"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Things I Dislike</label>
                        <input type="text" name="dislike"  class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Additional Information</label>
                        <input type="text" name="additional_info"  class="form-control" required>
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
