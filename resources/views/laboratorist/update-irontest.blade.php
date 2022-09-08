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
                
      
                      <form  action="{{url('editIronTest')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="patient_id" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient_id"  style="color:black" id="patient_id">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option value="{{$patients->id}}" @if(isset($irontest)) {{$patients->id == $irontest->patient_id ? 'selected' : ''}} @endif>{{$patients->user->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor_id" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor_id"  style="color:black" id="doctor_id">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}" @if(isset($irontest)) {{$doctors->id == $irontest->doctor_id ? 'selected' : ''}} @endif>{{$doctors->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="iron" class="form-label">Iron Level</label>
                            <input class="form-control" style="color:black" type="text" name="iron" id="iron"
                            placeholder="Input Iron Level" value="{{$irontest->iron}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="tibc" class="form-label">Transferrin/TIBC Level</label>
                            <input class="form-control" style="color:black" type="text" name="tibc" id="tibc"
                            placeholder="Input " value="{{$irontest->tibc}}"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="uibc" class="form-label">UIBC</label>
                            <input class="form-control" style="color:black" type="text" name="uibc" id="uibc"
                            placeholder="Input UIBC Level" value="{{$irontest->uibc}}"
                            >
                          </div>
                
                          <div class="mb-3">
                              <label for="saturation" class="form-label">Saturation Levels</label>
                              <input id="saturation" class="form-control"  style="color:black" type="text" name="saturation"
                              value="{{$irontest->saturation}}">
                            </div>

                            
                            <div class="mb-3">
                                <label for="ferritin" class="form-label">Transferrin Levels</label>
                                <input id="ferritin" class="form-control"  style="color:black" type="text" name="ferritin"
                                value="{{$irontest->ferritin}}">
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