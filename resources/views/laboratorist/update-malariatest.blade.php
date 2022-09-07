<!DOCTYPE html>
<html lang="en">
  <head>


  @include('laboratorist.css')
</head>
<body>
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
                              Edit Lab Test
                          </h3>
                  </div>
                
      
                      <form  action="{{url('editMalariaTest')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="patient" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient"  style="color:black" id="patient">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option value="{{$patients->id}}" @if(isset($malariatest)) {{$patients->id == $malariatest->patient_id ? 'selected' : ''}} @endif>{{$patients->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor"  style="color:black" id="doctor">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}" @if(isset($malariatest)) {{$doctors->id == $malariatest->doctor_id ? 'selected' : ''}} @endif>{{$doctors->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="rbc" class="form-label">Red Blood Cell Count</label>
                            <input class="form-control" style="color:black" type="number" name="rbc" id="rbc"
                            placeholder="Input RBC count" value="{{$malariatest->rbc}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="rbc_size" class="form-label">Red Blood Cell Size</label>
                            <input class="form-control" style="color:black" type="text" name="rbc_size" id="rbc_size"
                            placeholder="Input RBC size" value="{{$malariatest->rbc_size}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="wbc" class="form-label">White Blood Cell Count</label>
                            <input class="form-control" style="color:black" type="number" name="wbc" id="wbc"
                            placeholder="Input WBC count" value="{{$malariatest->wbc}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="wbc_size" class="form-label">White Blood Cell Size</label>
                            <input class="form-control" style="color:black" type="text" name="wbc_size" id="wbc_size"
                            placeholder="Input WBC size" value="{{$malariatest->wbc_size}}"
                            >
                          </div>
                
                          <div class="mb-3">
                              <label for="platelets" class="form-label">Platelets</label>
                              <input id="platelets" class="form-control"  style="color:black" type="number" name="platelets"
                              value="{{$malariatest->platelets}}">
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