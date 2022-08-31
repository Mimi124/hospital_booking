<!DOCTYPE html>
<html lang="en">
  <head>


  @include('doctor.css')
  </head>
  <body>
    @include('doctor.banner')
 
      <!-- partial:partials/_sidebar.html -->
     @include('doctor.sidebar')

      <!-- partial -->
      @include('doctor.navbar')
 
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

                <form  action="{{url('upload_prescription')}}" method="POST"  enctype="multipart/form-data">
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
                        <select class="form-control" type="text" name="doctor"  style="color:black" id="doctor">
                          <option>Select Doctor</option>
                          @foreach($doctor as $doctors)
                              <option value="{{$doctors->id}}">{{$doctors->name}}</option>
                          @endforeach
                      </select>
                      </div>
                      <div class="mb-3">
                        <label for="name" class="form-label">Diagnosis</label>
                        <input type="text" class="form-control" style="color:black"  name="name" required>
                      </div>
                      <div class="mb-3">
                        <label for="prescription" class="form-label">Prescription</label>
                        <input type="text" class="form-control" style="color:black"  name="prescription"  required>
                      </div>
                    <div class="mb-3">
                      <label for="description" class="form-label">Medicine Instruction</label>
                      <textarea class="form-control" id="description" style="color:black"  name="description"  rows="7"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input class="form-control" style="color:black" type="date" name="date" id="date"
                        placeholder="Select Date" 
                        >
                      </div>
                    
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                  </form>

            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('doctor.script')
  </body>
</html>