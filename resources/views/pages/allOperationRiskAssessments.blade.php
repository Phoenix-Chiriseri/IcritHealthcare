@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])
@section('content')
@include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.6/jspdf.plugin.autotable.min.js"></script>  
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">  
function generate() {  
    var doc = new jsPDF('p', 'pt', 'letter');  
    var htmlstring = '';  
    var tempVarToCheckPageHeight = 0;  
    var pageHeight = 0;  
    orientation: "landscape";
    unit: "in";
    format: [4, 2];
    pageHeight = doc.internal.pageSize.height;  
    specialElementHandlers = {  
        // element with id of "bypass" - jQuery style selector  
        '#bypassme': function(element, renderer) {  
            // true = "handled elsewhere, bypass text extraction"  
            return true  
        }  
    };  
    margins = {  
        top: 150,  
        bottom: 60,  
        left: 40,  
        right: 40,  
        width: 600  
    };  
    var y = 20;  
    doc.setLineWidth(2);  
    doc.text(200, y = y + 30, "Daily Entry");  
    doc.autoTable({  
        html: '#simple_table',  
        startY: 70,  
        theme: 'grid',  
        columnStyles: {  
            0: {  
                cellWidth: 250,  
            },  
            1: {  
                cellWidth: 250,  
            },  
            2: {  
                cellWidth: 250,  
            }  
        },  
        styles: {  
            minCellHeight: 80  
        }  
    })  
    doc.save('Daily Entry Reports.pdf');  
}  
</script>
<script>
  <script>
    $(document).ready(function () {
        $('.export-pdf-btn').click(function (e) {
            e.preventDefault();
            
            var entryId = $(this).data('entry-id');
            
            // Make an AJAX request to fetch data
            $.ajax({
                url: '/generate-pdf/' + entryId,
                method: 'GET',
                success: function (data) {
                    generatePDF(data);
                },
                error: function (xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });
        });
        
        function generatePDF(data) {
            var pdf = new jsPDF();
            
            pdf.text(10, 10, 'User: ' + data.user_name);
            pdf.text(10, 20, 'House: ' + data.house);
            // Add more fields as needed
            
            pdf.save('entry_' + data.entryId + '.pdf');
        }
    });
</script>
</script>   
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                               
                               <hr>
                              </div>
                          
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-user text-center rounded-circle">
                                <i class="ni ni-single-02 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-sm-6">
            <div class="card">
                <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                            <div class="numbers">
                              
                                <a href = "viewMyProfile" class = "btn btn-info">View Your Profile</a>
                                <a href = "viewMyPatients" class = "btn btn-danger">View Your Patients</a>
                                <h5 class="font-weight-bolder">
                                </h5>
                            </div>
                        </div>
                        <div class="col-4 text-end">
                            <div class="icon icon-s bg-building gradient-warning shadow-warning text-center rounded-circle">
                                <i class="ni ni-briefcase-24 text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <div class="col-xl-4 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                                <div class="numbers">
                                    <img src="./img/icritLogo.png" alt="main_logo" style="height:100px;">
                                </div>
                            </div>
                            <div class="col-4 text-end"> 
                                <a href="{{ route('allRecords') }}" class="btn btn-primary">View House Records</a>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/phpYC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <div class="container">
    <a class="navbar-brand" class = "btn btn-info">Dashboard</a>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center" style="size: 22px;">Operation Risk Assessment Reports</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Patient</th>
                                        <th>Assessment Date</th>
                                        <th>Assessor's Email</th>
                                        <th>What Could Cause Harm</th>
                                        <th>Where is the Hazard</th>
                                        <th>Who Might Be Harmed</th>
                                        <th>How Will They Be Harmed</th>
                                        <th>How Often Are They Exposed to This Hazard</th>
                                        <th>How Long Each Time Are They Exposed</th>
                                        <th>Disallowing Activity</th>
                                        <th>Comment</th>
                                        <th>Likelihood of Harm</th>
                                        <th>List of Control Measures</th>
                                        <th>Date When Control Measures Were Implemented</th>
                                        <th>Training Required to Reduce Risk</th>
                                        <th>Date When Training Was Specified</th>
                                        <th>Equipment to Reduce Risk</th>
                                        <th>Date Equipment Was Provided</th>
                                        <th>Likelihood of Harm (Radio)</th>
                                        <th>How Serious Could Be the Harm (Radio)</th>
                                        <th>Additional Control Measures</th>
                                        <th>Risk Assessment Drawn By</th>
                                        <th>Risk Assessment Date</th>
                                        <th>Assessment Taken Account of Mental Capacity Act</th>
                                        <th>Comment on Behaviors/Communication Preferences</th>
                                        <th>Possible Deprivation of Liberty Issue</th>
                                        <th>Best Interest Meeting Required</th>
                                        <th>Date of Review</th>
                                        <th>Changes Required</th>
                                        <th>Manager's Name</th>
                                        <th>Risk Assessment Activity Accessed</th>
                                        <th>Date of Assessment</th>
                                        <th>Signage Name</th>
                                        <th>Signage Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $assessment)
                                        <tr>
                                            <td>{{ $assessment->user_name }}</td>
                                            <td>{{ $assessment->patient_name }}</td>
                                            <td>{{ $assessment->assessment_date }}</td>
                                            <td>{{ $assessment->assessors_email }}</td>
                                            <td>{{ $assessment->what_causes_harm }}</td>
                                            <td>{{ $assessment->where_is_the_hazard }}</td>
                                            <td>{{ $assessment->who_might_be_harmed }}</td>
                                            <td>{{ $assessment->how_will_they_be_harmed }}</td>
                                            <td>{{ $assessment->how_often_are_exposed_hazard }}</td>
                                            <td>{{ $assessment->how_long_exposed_hazard }}</td>
                                            <td>{{ $assessment->disallowing_activity }}</td>
                                            <td>{{ $assessment->comment }}</td>
                                            <td>{{ $assessment->likelihood_harm }}</td>
                                            <td>{{ $assessment->list_of_control_measures }}</td>
                                            <td>{{ $assessment->date_when_control_measures_implemented }}</td>
                                            <td>{{ $assessment->identity_training_required_risk }}</td>
                                            <td>{{ $assessment->identity_training_was_specified }}</td>
                                            <td>{{ $assessment->entity_equipment_reduced_risk }}</td>
                                            <td>{{ $assessment->date_equipment_provided }}</td>
                                            <td>{{ $assessment->likelihood_radio_harm }}</td>
                                            <td>{{ $assessment->how_serious_harm_radio }}</td>
                                            <td>{{ $assessment->additional_control_measures }}</td>
                                            <td>{{ $assessment->risk_assessment_drawn_by }}</td>
                                            <td>{{ $assessment->risk_assessment_date }}</td>
                                            <td>{{ $assessment->assessment_taken_mental }}</td>
                                            <td>{{ $assessment->please_comment_any_behaviours }}</td>
                                            <td>{{ $assessment->positive_liberty_issue }}</td>
                                            <td>{{ $assessment->outcome_best_interest_radio }}</td>
                                            <td>{{ $assessment->date_of_review }}</td>
                                            <td>{{ $assessment->changes_required }}</td>
                                            <td>{{ $assessment->managers_name }}</td>
                                            <td>{{ $assessment->risk_assessment_Activity_accessed }}</td>
                                            <td>{{ $assessment->date_of_assessment }}</td>
                                            <td>{{ $assessment->signage_name }}</td>
                                            <td>{{ $assessment->signage_date }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $data->links() }} <!-- Pagination links -->                
                        </div>        
                    </div>
                </div>
            </div>
        </div>
    </div>
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
