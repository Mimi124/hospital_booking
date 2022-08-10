<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="admin/assets/images/faces/face15.jpg" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">Admin</h5>
              <span>R&H HOSPITAL</span>
            </div>
          </div>
          <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-onepassword  text-info"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
              </div>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-calendar-today text-success"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="#body">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#finance" aria-expanded="false" aria-controls="finance">
          <span class="menu-icon">
            <i class="mdi mdi-square-inc-cash  "></i>
          </span>
          <span class="menu-title">Finance</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="finance">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href='{{url('showAccountant')}}'>Accountants</a></li>
            <li class="nav-item"> <a class="nav-link" href='{{url('showInvoice')}}'>Invoices</a></li>
            <li class="nav-item"> <a class="nav-link" href='{{url('showExpense')}}'>Expenses</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showAppointment')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-calendar-multiple "></i>
          </span>
          <span class="menu-title">Appointments</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showDoctor')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-doctor "></i>
          </span>
          <span class="menu-title"> Doctors</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showNurse')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-account-multiple "></i>
          </span>
          <span class="menu-title"> Nurses</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showPharmacist')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-account-multiple "></i>
          </span>
          <span class="menu-title"> Pharmacists</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showReceptionist')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-account-multiple "></i>
          </span>
          <span class="menu-title">Receptionists</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-bed-empty"></i>
          </span>
          <span class="menu-title">Bed Management</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href='{{url('showBedTypes')}}'>Bed Types</a></li>
            <li class="nav-item"> <a class="nav-link" href='{{url('showBed')}}'>Beds</a></li>
            <li class="nav-item"> <a class="nav-link" href='{{url('showBedAssigned')}}'>Bed Assign</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showDiagnosis')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-book-multiple  "></i>
          </span>
          <span class="menu-title">Diagnosis</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showLabTest')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-file-lock "></i>
          </span>
          <span class="menu-title">Lab Reports</span>
        </a>
      </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" aria-expanded="false" aria-controls="showPatient" href="#showPatient">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple-outline"></i>
              </span>
              <span class="menu-title">Patients</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="showPatient">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href='{{url('showBedTypes')}}'>Cases</a></li>
                <li class="nav-item"> <a class="nav-link" href='{{url('showBed')}}'>Case Handlers</a></li>
                <li class="nav-item"> <a class="nav-link" href='{{url('showBedAssigned')}}'>Patient Admissions</a></li>
              </ul>
            </div>
          </li>
    

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showDocuments')}}">
              <span class="menu-icon">
                <i class=" mdi mdi-dropbox  "></i>
              </span>
              <span class="menu-title">Documents</span>
            </a>
          </li>

            <li class="nav-item menu-items">
              <a class="nav-link" href="{{url('showLiveConsultation')}}">
                <span class="menu-icon">
                  <i class=" mdi mdi-camcorder-off  "></i>
                </span>
                <span class="menu-title">Live Consultations</span>
              </a>
            </li>
    
              <li class="nav-item menu-items">
                <a class="nav-link" href="{{url('showEnquiries')}}">
                  <span class="menu-icon">
                    <i class=" mdi mdi-account-question "></i>
                  </span>
                  <span class="menu-title">Enquiries</span>
                </a>
              </li>

                <li class="nav-item menu-items">
                  <a class="nav-link" href="{{url('showCharges')}}">
                    <span class="menu-icon">
                      <i class=" mdi mdi-database-plus  "></i>
                    </span>
                    <span class="menu-title">Hospital Charges</span>
                  </a>
                </li>
        
             
                    <li class="nav-item menu-items">
                      <a class="nav-link" data-bs-toggle="collapse" href="#ui" aria-expanded="false" aria-controls="ui">
                        <span class="menu-icon">
                          <i class="mdi mdi-lock-plus "></i>
                        </span>
                        <span class="menu-title">Inventories</span>
                        <i class="menu-arrow"></i>
                      </a>
                      <div class="collapse" id="ui">
                        <ul class="nav flex-column sub-menu">
                          <li class="nav-item"> <a class="nav-link" href='{{url('showItem')}}'>Item</a></li>
                          <li class="nav-item"> <a class="nav-link" href='{{url('showItemStock')}}'>Item Stock</a></li>
                          <li class="nav-item"> <a class="nav-link" href='{{url('showIssuedItem')}}'>Issued Item</a></li>
                        </ul>
                      </div>
                    </li>

                    
                    <li class="nav-item menu-items">
                      <a class="nav-link" href="{{url('showMedicine')}}">
                        <span class="menu-icon">
                          <i class=" mdi mdi-pill "></i>
                        </span>
                        <span class="menu-title">Medicines</span>
                      </a>
                    </li>
                      
                      <li class="nav-item menu-items">
                        <a class="nav-link" href="{{url('showService')}}">
                          <span class="menu-icon">
                            <i class=" mdi mdi-stove  "></i>
                          </span>
                          <span class="menu-title">Services</span>
                        </a>
                      </li>
              
                        <li class="nav-item menu-items">
                          <a class="nav-link" href="{{url('showSms')}}">
                            <span class="menu-icon">
                              <i class=" mdi mdi-mailbox-up-outline "></i>
                            </span>
                            <span class="menu-title">SMS/Mail</span>
                          </a>
                        </li>
                
  



      
    </ul>
  </nav>