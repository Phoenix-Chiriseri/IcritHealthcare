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
                <form method="POST" action="{{ route('save-ComplaintRecord') }}">
                    @csrf
                    <div class="form-group row">
                        <label for="first_name" class="col-md-2 col-form-label">First Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="first_name" name="first_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="last_name" class="col-md-2 col-form-label">Last Name</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Phone Number</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Address</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="date" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Email</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="email" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Street Address</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">City</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Country</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    
                      
        <div class="form-group row">
            <label for="category" class="col-md-2 col-form-label">Status Of Relative</label>
            <div class="col-md-12">
                <select name="category" id="category" class="form-control">
                    <option value="Parent/Relative">Parent/Relative</option>
                    <option value="Person we Support">Person We Support</option>
                    <option value="Social Worker">Social Worker</option>
                    <option value="Neighbour">Neighbour</option>
                    <option value="Advocate/Friend">Advocate/Friend</option>
                    <option value="Other">Other (Please Specify)</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="date" class="col-md-2 col-form-label">Details Of Complainant</label>
            <div class="col-md-12">
                <!-- Day, Month, and Year selects go here -->
                <input type="text" class="form-control" id="last_name" name="last_name" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="action" class="col-md-2 col-form-label">What description best fits the complaint/ concern</label>
            <div class="col-md-12">
                <select name="action" id="action" class="form-control">
                    <option value="Staff Action">Staff Action</option>
                    <option value="Tenant/Resident's Action">Tenant/Resident's Action</option>
                    <option value="Both">Both</option>
                    <option value="A Disputed Decision">A Disputed Decision</option>
                    <option value="An Oversight">An Oversight</option>
                    <option value="A Misunderstanding">A Misunderstanding</option>
                    <option value="Violence">Violence</option>
                    <option value="Theft">Theft</option>
                    <option value="Verbal Insults">Verbal Insults</option>
                    <option value="Personal Upset">Personal Upset</option>
                    <option value="Other">Other (Specify)</option>
                </select>
            </div>
        </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">This complaint/ concern was recorded by</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <label for="injuries" class="col-md-2 col-form-label">Injuries sustained by anyone?</label>
                            <select name="injuries" class = "form-control">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                                </select>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Date</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="date" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="date" class="col-md-2 col-form-label">Position</label>
                        <div class="col-md-12">
                            <!-- Day, Month, and Year selects go here -->
                            <input type="text" class="form-control" id="last_name" name="last_name" required>
                        </div>
                    </div>
                    <!-- Known Behaviours Fieldset 1 -->
                    <!-- Known Behaviours Fieldset 2 -->
                    <button type="submit" class="btn btn-success">Submit</button>
                        </form>

          
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
