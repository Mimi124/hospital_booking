
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
   @include('doctor.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('doctor.sidebar')

      <!-- partial -->
      @include('doctor.navbar')
 
        <!-- partial -->

        

        <div class="container-fluid page-body-wrapper">
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-outline-info" id="prescription" href="#">Add Prescription</a>
              <br><br>
                <table class="table table-striped table-hover">
                  <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Diagnosis</th>
                            <th>Prescription</th>
                            <th>Medicine Instruction</th>
                            <th>Date</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($prescriptions as $prescription)
                            <tr>
                                <th scope="row">{{ $prescription->id }}</th>
                                <td>{{$prescription->patient->name}}</td>
                                <td>{{$prescription->doctor->name}}</td>    
                                <td>{{$prescription->diagnosis}}</td>
                                <td>{{$prescription->prescription}}</td>
                                <td>{{$prescription->medicine_instruction}}</td>
                                <td>{{$prescription->date}}</td>
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_prescription',$prescriptions->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_prescription',$prescriptions->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_prescription',$prescriptions->id)}}">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                </table>
            </div>
    
            </div>



            <div class="modal fade" id="prescription-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Prescription</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <form  action="{{url('upload_prescription')}}" method="POST" id="prescription-form" enctype="multipart/form-data">
                      @csrf
                      <div class="row mb-3">
                        <label for="patient" class="col-sm-2 col-form-label">Patient</label>
                        <div class="col-sm-10">
                          <select class="form-select form-select-sm" id="patient" name="patient" aria-label=".form-select-sm example" >
                            <option>--Select Patient--</option>
                            @foreach($patients as $patient)
                            <option value="{{$patient->id}}" class="form-control">{{$patient->name}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label for="patient" class="col-sm-2 col-form-label">Doctor</label>
                      <div class="col-sm-10">
                        <select class="form-select form-select-sm" id="patient" name="patient" aria-label=".form-select-sm example" >
                          <option>--Select Doctor--</option>
                          @foreach($doctors as $doctor)
                          <option value="{{$doctor->id}}" class="form-control">{{$doctor->name}}</option>
                          @endforeach
                        </select>
                      </div>
                  </div>
                    <div class="row mb-3">
                      <label for="diagnosis" class="col-sm-2 col-form-label">Diagnosis</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control" id="diagnosis" name="diagnosis" required>
                      </div>
                  </div>
                  <div class="row mb-3">
                    <label for="prescription" class="col-sm-2 col-form-label">Prescription</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prescription" name="prescription" required>
                    </div>
                </div>
                <div class="row mb-3">
                  <label for="date" class="col-sm-2 col-form-label">Date</label>
                  <div class="col-sm-10">
                      <input type="date" class="form-control" id="date" name="date" required>
                  </div>
              </div>
                      <div class="mb-3">
                        <label for="medicine_instruction" class="form-label">Medicine Instruction </label>
                        <textarea class="form-control" id="medicine_instruction" style="color:black"  name="medicine_instruction"  rows="7"></textarea>
                      </div>
                      
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                    <button type="button" id="prescription-sub" class="btn btn-outline-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('doctor.script')
  </body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#prescription').click(function(){
      $('#prescription-modal').modal('show');
    });

    $('#prescription-sub').click(function(){
      $('#prescription-form').submit();
    });
  });
</script>  