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
                           Add A Daily Entry
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
            <div class="col-md-8">
            <div class="card">
            <form action="/saveEntry" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="assessment_date">Assessment Date</label>
                <input type="date" class="form-control" id="assessment_date" name="assessment_date" required>
            </div>
            <div class="form-group">
                <label for="patient_id">Select Patient</label>
                <select class="form-control @error('patient_id') is-invalid @enderror" id="patient_id" name="patient_id" required>
                    <option value="" disabled selected>Select a patient</option>
                    @foreach($patients as $patient)
                        <option value="{{ $patient->id }}">{{ $patient->patient_name }}</option>
                    @endforeach
                </select>
                @error('patient_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="nhs_number">NHS number</label>
                <input type="text" class="form-control" id="nhs_number" name="nhs_number" required>
            </div>

            <!-- User Information -->
            <div class="form-group">
                <label for="user_name_first">Name (First)</label>
                <input type="text" class="form-control" id="user_name_first" name="user_name_first" required>
            </div>

            <div class="form-group">
                <label for="user_name_last">Name (Last)</label>
                <input type="text" class="form-control" id="user_name_last" name="user_name_last" required>
            </div>

            <!-- Address -->
            <h3>Address</h3>
            <div class="form-group">
                <label for="address_street">Street Address</label>
                <input type="text" class="form-control" id="address_street" name="address_street" required>
            </div>

            <div class="form-group">
                <label for="address_line_2">Address Line 2</label>
                <input type="text" class="form-control" id="address_line_2" name="address_line_2">
            </div>

            <div class="form-group">
                <label for="address_city">City</label>
                <input type="text" class="form-control" id="address_city" name="address_city" required>
            </div>

            <div class="form-group">
                <label for="address_state">County / State</label>
                <input type="text" class="form-control" id="address_state" name="address_state" required>
            </div>

            <div class="form-group">
                <label for="address_zip">ZIP / Postal Code</label>
                <input type="text" class="form-control" id="address_zip" name="address_zip" required>
            </div>

            <div class="form-group">
                <label for="address_country">Country</label>
                <input type="text" class="form-control" id="address_country" name="address_country" required>
            </div>

            <!-- Phone -->
            <h3>Phone</h3>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>

            <!-- Communication and Language -->
            <h3>How I communicate/What language I speak:</h3>
            <div class="form-group">
                <label for="communication_language">Communication and Language</label>
                <input type="text" class="form-control" id="communication_language" name="communication_language" required>
            </div>
            <!-- Add more fields here based on the given requirements -->
            <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <img src="/img/76-1.jpg" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                        <div class="col-4 col-lg-4 order-lg-2">
                            <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                                <a href="javascript:;">
                                    <img src="/img/icritLogo.png"
                                        class="rounded-circle img-fluid border border-2 border-white">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
                        <div class="d-flex justify-content-between">
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-none d-lg-block">Connect</a>
                            <a href="javascript:;" class="btn btn-sm btn-info mb-0 d-block d-lg-none"><i
                                    class="ni ni-collection"></i></a>
                            <a href="javascript:;"
                                class="btn btn-sm btn-dark float-right mb-0 d-none d-lg-block">Message</a>
                            <a href="javascript:;" class="btn btn-sm btn-dark float-right mb-0 d-block d-lg-none"><i
                                    class="ni ni-email-83"></i></a>
                        </div>
                    </div>
                    <!--<div class="card-body pt-0">
                        <div class="row">
                            <div class="col">
                                <div class="d-flex justify-content-center">
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">22</span>
                                        <span class="text-sm opacity-8">Friends</span>
                                    </div>
                                    <div class="d-grid text-center mx-4">
                                        <span class="text-lg font-weight-bolder">10</span>
                                        <span class="text-sm opacity-8">Photos</span>
                                    </div>
                                    <div class="d-grid text-center">
                                        <span class="text-lg font-weight-bolder">89</span>
                                        <span class="text-sm opacity-8">Comments</span>
                                    </div>
                                </div>
                            </div>
                        </div>!-->
                        <!--<div class="text-center mt-4">
                            <h5>
                                Mark Davis<span class="font-weight-light">, 35</span>
                            </h5>
                            <div class="h6 font-weight-300">
                                <i class="ni location_pin mr-2"></i>Bucharest, Romania
                            </div>
                            <div class="h6 mt-4">
                                <i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer
                            </div>
                            <div>
                                <i class="ni education_hat mr-2"></i>University of Computer Science
                            </div>
                        </div>!-->
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
