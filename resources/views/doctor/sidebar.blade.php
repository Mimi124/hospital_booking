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
              <h5 class="mb-0 font-weight-normal" style="color:white;">Doctor</h5>
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
        <a class="nav-link" href="">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showMyAppointments')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-calendar-multiple "></i>
          </span>
          <span class="menu-title">Appointments</span>
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
            <li class="nav-item"> <a class="nav-link" href='{{url('showBedAssign')}}'>Bed Assign</a></li>
          </ul>
        </div>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showDiagnosis')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-book-multiple"></i>
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
        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showVitals')}}">
            <span class="menu-icon">
              <i class=" mdi mdi-account-multiple "></i>
            </span>
            <span class="menu-title">Patients Vitals</span>
          </a>


        <li class="nav-item menu-items">
          <a class="nav-link" href="{{url('showPatients')}}">
            <span class="menu-icon">
              <i class=" mdi mdi-account-multiple "></i>
            </span>
            <span class="menu-title">Patients</span>
          </a>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showPrescriptions')}}">
              <span class="menu-icon">
                <i class="mdi mdi-needle"></i>
              </span>
              <span class="menu-title">Patients Prescriptions</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('showLiveConsultation')}}">
              <span class="menu-icon">
                <i class=" mdi mdi-camcorder-off"></i>
              </span>
              <span class="menu-title">Live Consultations</span>
            </a>
      </li>

      {{-- <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('showPayroll')}}">
          <span class="menu-icon">
            <i class=" mdi mdi-square-inc-cash"></i>
          </span>
          <span class="menu-title">My Payrolls</span>
        </a> --}}

      

      
    </ul>
  </nav>