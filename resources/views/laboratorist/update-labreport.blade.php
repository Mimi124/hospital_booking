<!DOCTYPE html>
<html lang="en">
  <head>


  @include('laboratorist.css')
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
      <!-- partial:partials/_sidebar.html -->
     @include('laboratorist.sidebar')

      <!-- partial -->
      @include('laboratorist.navbar')
 
        <!-- partial -->
                 <!-- begin:: Content Container-->
                 <div class="container-fluid page-body-wrapper">


                  <div class="container" align="left" style="padding-top:100px;">
      
                @if (session()->has('message'))
               
                <div class="alert alert-sucess">
                  <button type="button" class="close" data-dismiss="alert">x </button>
                  {{session()->get('message')}}
                </div>
                @endif

                <div class="mb-3">
                          <h3>
                              Edit Lab Report
                          </h3>
                  </div>
                
      
                      <form  action="{{url('editLabReport')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" style="color:black" type="date" name="date" id="date"
                            placeholder="Select Date" value="{{$labreport->date}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" style="color:black" type="time" name="time" id="time"
                            placeholder="Choose Time" value="{{$labreport->time}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="patient" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient"  style="color:black" id="patient">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option value="{{$patients->id}}" @if(isset($labreport)) {{$patients->id == $labreport->patient_id ? 'selected' : ''}} @endif>{{$patients->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor"  style="color:black" id="doctor">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}" @if(isset($labreport)) {{$doctors->id == $labreport->doctor_id ? 'selected' : ''}} @endif>{{$doctors->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="template" class="form-label">Template</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="template"  style="color:black" id="template">
                                <option>Select Template</option>
                                @foreach($labtemplate as $labtemplates)
                                    <option value="{{$labtemplates->id}}" @if(isset($labreport)) {{$labtemplates->id == $labreport->template_id ? 'selected' : ''}} @endif>{{$labtemplates->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                
                          <div class="mb-3">
                              <label for="report" class="form-label">Report</label>
                              <input id="report" class="form-control"  style="color:black" type="text" name="report"
                              value="{{$labreport->report}}">
                            </div>
                            
                          
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                      
      
      
      
                  </div>
      
              </div>
  <!-- begin:: Content -->
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('laboratorist.script')
  </body>
</html>