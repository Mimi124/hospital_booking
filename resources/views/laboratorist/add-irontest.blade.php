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
                              Add Iron Test
                          </h3>
                  </div>
                
      
                      <form  action="{{url('upload_irontest')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="patient" class="form-label">Patient</label>
                            <select class="form-control" type="text" name="patient"  style="color:black" id="patient">
                              <option>Select Patient</option>
                              @foreach($patient as $patients)
                                  <option value="{{$patients->id}}">{{$patients->name}}</option>
                              @endforeach
                          </select>
                          </div>
                      
                          <div class="mb-3">
                            <label for="doctor" class="form-label">Doctor</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="doctor"  style="color:black" id="doctor">
                                <option>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}">{{$doctors->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="iron" class="form-label">Iron Level</label>
                            <input class="form-control" style="color:black" type="text" name="iron" id="iron"
                            placeholder="Input Iron Level" 
                            >
                          </div>
                          <div class="mb-3">
                            <label for="tibc" class="form-label">Transferrin/TIBC Level</label>
                            <input class="form-control" style="color:black" type="text" name="tibc" id="tibc"
                            placeholder="Input TIBC Level" 
                            >
                          </div>
                          <div class="mb-3">
                            <label for="uibc" class="form-label">UIBC</label>
                            <input class="form-control" style="color:black" type="text" name="uibc" id="uibc"
                            placeholder="Input UIBC Level" 
                            >
                          </div>
                
                          <div class="mb-3">
                              <label for="saturation" class="form-label">Saturation Levels</label>
                              <input id="saturation" class="form-control"  style="color:black" type="text" name="saturation"
                              >
                            </div>

                            
                            <div class="mb-3">
                                <label for="transferrin" class="form-label">Transferrin Levels</label>
                                <input id="transferrin" class="form-control"  style="color:black" type="text" name="transferrin"
                                >
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