<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">


  @include('laboratorist.css')
</head>
<body>
  @include('laboratorist.banner')
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
                              Add Lab Report
                          </h3>
                  </div>
                
      
                      <form  action="{{url('upload_labreport')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="date" class="form-label">Date</label>
                            <input class="form-control" style="color:black" type="date" name="date" id="date"
                            placeholder="Select Date"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="time" class="form-label">Time</label>
                            <input class="form-control" style="color:black" type="time" name="time" id="time"
                            placeholder="Choose Time"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="patient" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient"  style="color:black" id="patient">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option  value="{{$patients->id}}">{{$patients->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor"  style="color:black" id="doctor">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    {{-- <option>{{$doctors->name}}</option> --}}
                                    <option value="{{$doctors->id}}" class="form-control">{{$doctors->name}}</option>
                                    
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
                                    <option value="{{$labtemplates->id}}">{{$labtemplates->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                
                          <div class="mb-3">
                              <label for="report" class="form-label">Report</label>

                              <input id="report" class="form-control"  style="color:black" type="text" name="report">

                              {{-- <input id="report" class="form-control"  style="color:black" type="file" name="report"> --}}

                            </div>
                            
                                               
                          <input type="submit" 
                          class="btn btn-outline-primary">
                   <input type="reset" class="btn btn-outline-danger" value="Cancel">
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