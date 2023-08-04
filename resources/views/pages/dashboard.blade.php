@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-6 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h1 class="text-sm mb-0 text-uppercase font-weight-bold">Welcome {{$username}}</h1>
                                    
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-user bg-gradient-primary shadow-primary text-center rounded-circle">
                                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <h1 class="text-sm mb-0 text-uppercase font-weight-bold">Your House is {{$house}}</h1>
                                    <h5 class="font-weight-bolder">
                                    </h5>
                                </div>
                            </div>
                            <div class="col-4 text-end">
                                <div class="icon icon-s bg-building gradient-warning shadow-warning text-center rounded-circle">
                                    <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
<div class="container" style="margin-top:200px;">
    <h1 class="text-center">Daily Entry Results</h1>
    @if (empty($dailyEntries))
        <p>No daily entries found.</p>
    @else
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Staff Name</th>
                        <th>Patient Name</th>
                        <th>House</th>
                        <th>Assessment Date</th>
                        <th>Nhs Number</th>
                        <th>Username</th>
                        <th>Last Name</th>
                        <th>Address Street</th>
                        <th>Address Line 2</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip Code</th>
                        <th>Country</th>
                        <th>Phone Number</th>
                        <th>Comunication Language</th>
                        
                        <!-- Add more table headers for additional fields -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dailyEntries as $dailyEntry)
                    <tr>
                        <td>{{ $dailyEntry->staff_name }}</td>
                        <td>{{ $dailyEntry->patient_name }}</td>
                        <td>{{ $dailyEntry->house}}</td> 
                        <td>{{ $dailyEntry->assessment_date }}</td>
                        <td>{{ $dailyEntry->nhs_number }}</td>
                        <td>{{ $dailyEntry->user_name_first }}</td>
                        <td>{{ $dailyEntry->user_name_last }}</td>
                        <td>{{ $dailyEntry->address_street }}</td>
                        <td>{{ $dailyEntry->address_line_2 }}</td>
                        <td>{{ $dailyEntry->address_city }}</td>
                        <td>{{ $dailyEntry->address_state }}</td>
                        <td>{{ $dailyEntry->address_zip }}</td>
                        <td>{{ $dailyEntry->address_country }}</td>
                        <td>{{ $dailyEntry->phone}}</td>
                        <td>{{ $dailyEntry->communication_language}}</td>  
                           
                        <!-- Add more table cells for additional fields -->
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
@include('layouts.footers.auth.footer')
</div>
@endsection
@push('js')
    <script src="./assets/js/plugins/chartjs.min.js"></script>
    <script>
        var ctx1 = document.getElementById("chart-line").getContext("2d");

        var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

        gradientStroke1.addColorStop(1, 'rgba(251, 99, 64, 0.2)');
        gradientStroke1.addColorStop(0.2, 'rgba(251, 99, 64, 0.0)');
        gradientStroke1.addColorStop(0, 'rgba(251, 99, 64, 0)');
        new Chart(ctx1, {
            type: "line",
            data: {
                labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: "Mobile apps",
                    tension: 0.4,
                    borderWidth: 0,
                    pointRadius: 0,
                    borderColor: "#fb6340",
                    backgroundColor: gradientStroke1,
                    borderWidth: 3,
                    fill: true,
                    data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    maxBarThickness: 6

                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index',
                },
                scales: {
                    y: {
                        grid: {
                            drawBorder: false,
                            display: true,
                            drawOnChartArea: true,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            padding: 10,
                            color: '#fbfbfb',
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                    x: {
                        grid: {
                            drawBorder: false,
                            display: false,
                            drawOnChartArea: false,
                            drawTicks: false,
                            borderDash: [5, 5]
                        },
                        ticks: {
                            display: true,
                            color: '#ccc',
                            padding: 20,
                            font: {
                                size: 11,
                                family: "Open Sans",
                                style: 'normal',
                                lineHeight: 2
                            },
                        }
                    },
                },
            },
        });
    </script>
@endpush
