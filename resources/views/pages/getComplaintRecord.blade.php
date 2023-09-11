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
    @if(Session::has('success'))
                <script type="text/javascript">
                function massge() {
                Swal.fire(
                'Success',
                'Complaint Recorded Successfully'
                    );
                    }
                    window.onload = massge;
                    </script>
    @endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <form method="POST" action="{{ route('save-ComplaintRecord') }}">
                    @csrf
                        <div class="form-group row">
                            <label for="phone_number" class="col-md-2 col-form-label">Name Of Person</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="phone_number" name="person_name" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address" class="col-md-2 col-form-label">Phone Number</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label">Address</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="email" name="address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_address" class="col-md-2 col-form-label">Email</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_address" class="col-md-2 col-form-label">City</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="email" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_address" class="col-md-2 col-form-label">County</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control"  name="county" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="street_address" class="col-md-2 col-form-label">Street Address</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="street_address" name="street_address" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="city" class="col-md-2 col-form-label">City</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-2 col-form-label">Country</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="relativeStatus" class="col-md-2 col-form-label">Status Of Complaint</label>
                            <div class="col-md-12">
                                <select name="relativeStatus" id="relativeStatus" class="form-control">
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
                            <label for="detailsOfComplaint" class="col-md-2 col-form-label">Details Of Complainant</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="detailsOfComplaint" name="detailsOfComplaint" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complaintDescription" class="col-md-2 col-form-label">What description best fits the complaint/concern</label>
                            <div class="col-md-12">
                                <select name="complaintDescription" id="complaintDescription" class="form-control">
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
                            <label for="recordedBy" class="col-md-2 col-form-label">This complaint/concern was recorded by</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="recordedBy" name="recordedBy" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="complaintDate" class="col-md-2 col-form-label">Date</label>
                            <div class="col-md-12">
                                <input type="date" class="form-control" id="complaintDate" name="complaintDate" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="col-md-2 col-form-label">Position Held By</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" id="position" name="position" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
