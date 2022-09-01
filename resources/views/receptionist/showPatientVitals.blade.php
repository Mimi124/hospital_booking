
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- plugins:css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- plugins:css -->
  @include('doctor.css')
  <style type="text/css">
    .modal .modal-dialog{ 
    width: 42%; max-width:80%; height: 100%; margin:50;transform: translate(0); transition: transform .2s;
  }
.modal .modal-dialog .modal-content{ border:0; border-radius: 0;}
.modal .modal-dialog .modal-content .modal-body{ overflow-y: auto }
/* .modal.fixed-left .modal-dialog{ margin-left:auto;  transform: translateX(100%); }
.modal.fixed-right .modal-dialog{ margin-right:auto; transform: translateX(-100%); } */
.modal.show .modal-dialog{ transform: translateX(0);  }

.modal-header {
    background-color: #24a0ed;
    padding:9px 15px;
    color:#FFF;
    font-family:Verdana, sans-serif;
    border-bottom:1px solid #eee;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
 }

 .modal-body {
    /* background-color: #FF7171; */
    padding:9px 15px;
    color:#000;
    font-family:Verdana, sans-serif;
    border-bottom:4px solid #24a0ed;
 }
.modal-footer {
    /* background-color: #24a0ed; */
    /* color:#FFF; */
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
 } 
  </style>
  </head>
  <body>
   @include('receptionist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('receptionist.sidebar')

      <!-- partial -->
      @include('receptionist.navbar')
 
        <!-- partial -->

        

        <div class="container-fluid page-body-wrapper">
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-outline-info" id="receptionist" href="#">New Patient Vitals</a>
              <br><br>
                <table class="table table-striped table-hover">
                  <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Temperature</th>
                            <th>Blood Pressure</th>
                            <th>Body Weight</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                          {{-- <pre>@json($errors->all())</pre> --}}
                        @foreach($receptionists as $receptionist)
                            <tr>
                                <th scope="row">{{ $receptionist->id }}</th>
                                <td>{{$receptionist->patient->user->name}}</td>
                                <td>{{$receptionist->doctor->name}}</td>    
                                <td>{{$receptionist->temperature}}</td>
                                <td>{{$receptionist->body_weight}}</td>
                                <td>{{$receptionist->blood_pressure}}</td>
                                <td>{{$receptionist->date}}</td>
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_receptionist',$receptionist->id)}}">Update</a>   
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_receptionist',$receptionist->id)}}">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                </table>
            </div>
    
            </div>



            <div class="modal fade" id="receptionist-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Patient Vital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <form  action="{{url('upload_patientvitals')}}" method="POST" id="receptionist-form" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                        <label for="patient_id" class="col-sm-2 col-form-label">Patient</label>
                        <div class="col-sm-10">
                          <select class="form-select form-select-sm" id="patient_id" name="patient_id" aria-label=".form-select-sm example" >
                            <option>--Select Patient--</option>
                            @foreach($patients as $patient)
                            <option value="{{$patient->id}}" class="form-control">{{$patient->user->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
              
                    <div class="row mb-3">
                      <label for="doctor_id" class="col-sm-2 col-form-label">Doctor</label>
                      <div class="col-sm-10">
                        <select class="form-select form-select-sm" id="doctor_id" name="doctor_id" aria-label=".form-select-sm example" >
                          <option>--Select Doctor--</option>
                          @foreach($doctors as $doctor)
                          <option value="{{$doctor->id}}" class="form-control">{{$doctor->name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                    <div class="row mb-3">
                      <label for="temperature" class="col-sm-2 col-form-label">Temperature</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="temperature" name="temperature" required>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="blood_pressure" class="col-sm-2 col-form-label">Blood Pressure</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="blood_pressure" name="blood_pressure" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="body_weight" class="col-sm-2 col-form-label">Body Weight</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="body_weight" name="body_weight" required>
                </div>

                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" name="date" required>
                  </div>
              </div>            
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="receptionist-sub" class="btn btn-outline-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('receptionist.script')
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#receptionist').click(function(){
      $('#receptionist-modal').modal('show');
    });

    $('#receptionist-sub').click(function(){
      $('#receptionist-form').submit();
    });
  });
</script>  