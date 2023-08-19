@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Your Profile'])
    <!-- Include country-select-js CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-select-js@2.0.0/css/countrySelect.min.css">
<!-- Include jQuery (required for country-select-js) -->
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
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-entry') }}">
                    @csrf
                    <div class="form-group">
                        <label for="date">Assessment Date
                        </label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Staff Email
                        </label>
                        <input type="email" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="personal_care">Personal Care</label>
                        <select name="personal_care" id="personal_care" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="shift">Service User Name</label>
                        <select name="shift" id="shift" class="form-control" required>
                            <option value="Early">Jeff</option>
                            <option value="Late">Toby</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">NHS number:
                        </label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Likes To Be Known As
                        </label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Date Of Birth
                        </label>
                        <input type="date" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">Address
                        </label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">City
                        </label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="date">County
                        </label>
                        <input type="text" name="date" id="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Phone</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How I communicate/What language I speak:</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">How I communicate/What language I speak:</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <h4 class = "text-center">Family contact person, carer or other support</h4>
                    <div class="form-group">
                        <label for="country">Name And LastName</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Address</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">City</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Phone</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Email</label>
                        <input type="text" name="country" id="country" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="country">My Support Care Needs</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">My Carer Speaks</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <h4 class = "text-center">Things you must know about me</h4>
                    <div class="form-group">
                        <label for="country">Religion</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Religious/Spritual Needs</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Ethnicity</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">GP Name:</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">GP Address:</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Street Address</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">City</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Other Services</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Social Worker</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="country">Allergies:</label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="shift">Staff Name</label>
                        <select name="shift" id="shift" class="form-control" required>
                            <option value="Early">Jeff</option>
                            <option value="Late">Toby</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">Medical Interventions how to take my blood, give injections, BP etc:</label>
                        <select name="medication_admin" id="medication_admin" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">Cardiovascular or respiratory issues</label>
                        <select name="medication_admin" id="medication_admin" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">Risk of choking, Dysphagia (eating, drinking and swallowing):
                        </label>
                        <select name="medication_admin" id="medication_admin" class="form-control" required>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">Current medication
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">My medical history and treatment plan:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">What to do if I am anxious:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    </div>
                    
                    <h4 class = "text-center">Things that are important to me:</h4>
                    <div class="form-group">
                        <label for="medication_admin">What to do if I am anxious:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">How I take medication: (whole tablets, crushed tablets, injections, syrup)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">How you know I am in pain:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Moving around: (Posture in bed, walking aids)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Personal care: (Dressing, washing, etc.)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <h4 class = "text-center">Things that are important to me:</h4>
                    <div class="form-group">
                        <label for="medication_admin">
                            Seeing/Hearing: (Problems with sight or hearing)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            How I eat: (Food cut up, pureed, risk of choking, help with eating)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            How I drink: (Drink small amounts, thickened fluids)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            How I keep safe: (Bed rails, support with challenging behaviour)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            How I use the toilet: (Continence aids, help to get to toilet)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Sleeping: (Sleep pattern/routine)
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Likes: for example - what makes me happy, things I like
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Things I like:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Things I dislike:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="medication_admin">
                            Additional Information:
                        </label>
                        <textarea name="country" id="country" class="form-control" rows="5" required></textarea>
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
