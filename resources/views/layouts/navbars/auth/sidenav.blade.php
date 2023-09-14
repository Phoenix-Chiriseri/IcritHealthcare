<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-5 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
            <img src="{{ asset('img/beLogo.png') }}" alt="main_logo" style="height: 100px;">
    </div>
      
    <!--<hr class="horizontal dark mt-0">!-->
    <div class="" id="sidenav-collapse-main" style="margin-top:4px;">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="dashboard">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li> 
            <li class="nav-item mt-3 d-flex align-items-center">
                <div class="ps-4">
                    <i class="fab fa-users" style="color: #f4645f;"></i>
                </div>
                <h6 class="ms-2 text-uppercase text-xs font-weight-bolder opacity-6 mb-0">Select An Option</h6>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link" href="addPatients">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Patients</span>
                </a>
            </li>!--> 
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Abc Report</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                    <a class="dropdown-item" href="getAbcReport">Add Abc Report</a>
                    <a class="dropdown-item" href="viewAllAbcReports">View All Abc Reports</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Behavioural Monitor Chart</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getBehaviouralMonitorChart">Add Record</a>
                        <a class="dropdown-item" href="allBehaviourSupportPlans">View All Records</a>
                    </div>
                </a>
            </li>  
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Complaint Record (Part A)</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getComplaintRecord">Add Complaint Record</a>
                        <a class="dropdown-item" href="allComplaintRecords">View All Complaint Records</a>
                    </div>
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Daily Entry</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getEntry">Add Daily Entry</a>
                    </div>
                </a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Falls Checklist</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                    <a class="dropdown-item" href="getFallsChecklist">Add Falls Checklist</a>
                    <a class="dropdown-item" href="allFallsChecklists">View All Falls Checklists</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Hospital Passport</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                    <a class="dropdown-item" href="getHospitalPassport">Add Hospital Passport</a>
                    <a class="dropdown-item" href="viewAllHospitalPassports">View All Hospital Passports</a>
                </div>
            </li>  
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Incident Report</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getIncidentReport">Add Incident Report</a>
                        <a class="dropdown-item" href="getAllIncidentReports">View All Incindent Reports</a>
                    </div>
                </a>
            </li> 
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">My Support Plan</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                    <a class="dropdown-item" href="getMySupportPlan">Add Support Plan</a>
                    <a class="dropdown-item" href="allSupportPlans">View Support Plan</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div class="icon icon-shape icon-sm border-radius-md text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Medication Incident</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                    <a class="dropdown-item" href="getMedicationIncident">Add Medication Incident</a>
                    <a class="dropdown-item" href="viewAllMedicationIncident">View Medication Incident Reports</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Operation Risk Assessment</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getOperationsRiskAssessment">Add OS Risk Assessment</a>
                        <a class="dropdown-item" href="viewAllOperationRiskAssessments">View All Assessments</a>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Positive Behaviour Support Plan</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getPositiveBehaviourSupport">Add Positive Plan</a>
                        <a class="dropdown-item" href="viewAllPositiveBehaviourPlans">View All Plans</a>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Seizure  Report</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getSeizureReport">Add Seizure Report</a>
                        <a class="dropdown-item" href="viewAllSeizureReports">View All Reports</a>
                    </div>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Self Certification Form</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getSelfCertificationSickForm">Add Self Certification Form</a>
                        <a class="dropdown-item" href="viewSelfCertificationReports">View All Forms</a>
                    </div>
                </a>
            </li> 
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="getMySupportPlan" id="supportPlanDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Witness Statement</span>
                    <div class="dropdown-menu" aria-labelledby="supportPlanDropdown">
                        <a class="dropdown-item" href="getWitnessStatement">Add Witness Statement</a>
                        <a class="dropdown-item" href="viewAllWitnessStatements">View All Witness Statements</a>
                    </div>
                </a>
            </li>  
            <!--<li class="nav-item">
                <a class="nav-link" href="getStatistics">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-box-2 text-dark text-sm opacity-10"></i>
                    </div>medic
                    <span class="nav-link-text ms-1">Statistics</span>
                </a>
            </li>!-->
            <!--<li class="nav-item">
                <a class="nav-link " href="/addPatients">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ruler-pencil text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Admin</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/addPatients">
                    <div
                        class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ruler-pencil text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Add Patient</span>
                </a>
            </li>!-->
        </ul>
    </div>
</aside>
