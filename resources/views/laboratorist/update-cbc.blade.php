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
                
      
                      <form  action="{{url('editCbc')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="patient_id" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient_id"  style="color:black" id="patient_id">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option value="{{$patients->id}}" @if(isset($cbc)) {{$patients->id == $cbc->patient_id ? 'selected' : ''}} @endif>{{$patients->user->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor_id" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor_id"  style="color:black" id="doctor_id">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}" @if(isset($cbc)) {{$doctors->id == $cbc->doctor_id ? 'selected' : ''}} @endif>{{$doctors->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="rbc" class="form-label">Red Blood Cell Count</label>
                            <input class="form-control" style="color:black" type="number" name="rbc" id="rbc"
                            placeholder="Input RBC count" value="{{$cbc->rbc}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="wbc" class="form-label">White Blood Cell Count</label>
                            <input class="form-control" style="color:black" type="number" name="wbc" id="wbc"
                            placeholder="Input WBC count" value="{{$cbc->wbc}}"
                            >
                          </div>
                
                          <div class="mb-3">
                              <label for="platelets" class="form-label">Platelets</label>
                              <input id="platelets" class="form-control"  style="color:black" type="number" name="platelets"
                              value="{{$cbc->platelets}}">
                            </div>

                            <div class="mb-3">
                                <label for="mcv" class="form-label">Mean Corpuscular Volume</label>
                                <input id="mcv" class="form-control"  style="color:black" type="number" name="mcv"
                                value="{{$cbc->mcv}}">
                              </div>
                              <div class="mb-3">
                                <label for="mch" class="form-label">Mean Corpuscular Haemoglobin</label>
                                <input id="mch" class="form-control"  style="color:black" type="number" name="mch"
                                value="{{$cbc->mch}}">
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