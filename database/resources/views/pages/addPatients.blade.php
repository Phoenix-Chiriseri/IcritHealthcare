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
                    <img src="img/icritLogo.png" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                    </div>
                </div>
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            Add Patient
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
                'Patient Added Successfully'
                    );
                    }
                    window.onload = massge;
                 </script>
    @endif
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('savePatient') }}">
                        @csrf
                        <div class="form-group">
                            <label for="patient_name">Name</label>
                            <input type="text" name="patient_name" id="patient_name" class="form-control" required>
                        </div>
                        <h5 class="text-center">Select A House</h5>
                        <br>
                        <div class="form-group">
                            <select name="house" class="form-control">
                                <option value="hearten">hearten</option>
                                <option value="lorraine">lorraine</option>
                            </select>
                        </div>
                        {{-- Dropdown to select the associated user --}}
                        <div class="form-group">
                            <label for="Staff_Id">Staff Member</label>
                            <select name="Staff_Id" class="form-control" required>
                                @foreach ($users as $user)
                                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="id_number">Id Number</label>
                            <input type="text" name="id_number" id="id_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" name="phone_number" id="phone_number" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" class="form-control" required>
                        </div>
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Add Patient</button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection
