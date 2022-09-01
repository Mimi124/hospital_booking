
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- plugins:css -->
  @include('nurse.css')
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
  @include('nurse.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('nurse.sidebar')

      <!-- partial -->
      @include('nurse.navbar')
 
     
             
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">
                  <a class="btn btn-info" id="assign-bed" href="#" style="margin-bottom:2%">Assign Bed </a>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Bed</th>
                        <th scope="col">Assign Date</th>
                        <th scope="col">Discharge Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Available</th>
                        <th scope="col">Occupied</th>
                      </tr>
                    </thead>
                    <tbody>
                       {{-- <pre>@json($errors->all())</pre> --}}
                      @foreach ($bed_assigns as $bed_assign)
                      <tr>
                        <th scope="row">{{ $bed_assign->id }}</th>
                        <td>{{ $bed_assign->patient->name }}</td>
                        <td>{{ $bed_assign->bed->name }}</td>
                        <td>{{ $bed_assign->assign_date }}</td>
                        <td>{{ $bed_assign->discharge_date }}</td>
                        <td>
                          @if ($bed_assign->status === 'Available')
                              <span class="btn btn-outline-success">Available</span>
                          @elseif ($bed_assign->status === 'Occupied')
                              <span class="btn btn-outline-danger">Occupied</span>
                           @else
                              <span class="badge badge-outline-warning">....</span> 
                          @endif
                          </td>
                         <td>
                          @unless($bed_assign->status === 'Available')
                          <a class="btn btn-outline-success" onclick="hide" href="{{url('available',$bed_assign->id)}}">Available</a>      
                        @endunless
                        </td>

                        <td>
                          @unless($bed_assign->status === 'Occupied')
                          <a class="btn btn-outline-danger" onclick="hide" href="{{url('occupied',$bed_assign->id)}}">Occupied</a>      
                        @endunless
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>   
          
          {{-- --}}




          <div class="modal fade " id="assign-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog"> {{--modal-dialog modal-lg--}}
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel"> Assign New Bed</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
          
                            <form action="{{url('upload_assignedbed')}}" method="Post" id="assign-form" enctype="multipart/form-data">
                              @csrf
                              <div class="row mb-3">
                                  <label for="user_id" class="col-sm-2 col-form-label">Patient Name</label>
                                  <div class="col-sm-10">
                                    <select class="form-select form-select-sm" id="patient_id" name="patient_id">
                                      <option>--Select Patient--</option>
                                      @foreach($patients as $id => $name)
                                          <option value="{{$id}}" class="form-control">{{$name}}</option>
                                      @endforeach
                                  </select>
                                  </div>
                              </div>

                              {{-- <div class="row mb-3">
                                <label for="patient_id" class="col-sm-2 col-form-label">Patient</label>
                                <div class="col-sm-10">
                                  <select class="form-select form-select-sm" id="patient_id" name="patient_id" aria-label=".form-select-sm example" >
                                    <option>--Select Patient--</option>
                                    @foreach($patients as $patient)
                                    <option value="{{$patient->id}}" class="form-control">{{$patient->name}}</option>
                                    @endforeach
                                  </select>
                                </div>
                            </div> --}}

                              <div class="row mb-3">
                                  <label for="bed_id" class="col-sm-2 col-form-label">Bed</label>
                                  <div class="col-sm-10">
                                    <select class="form-select form-select-sm" id="bed_id" name="bed_id" aria-label=".form-select-sm example" >
                                      <option>--Select Bed Type--</option>
                                      @foreach($beds as $bed)
                                      <option value="{{$bed->id}}" class="form-control">{{$bed->name}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label for="assign_date" class="col-sm-2 col-form-label">Assigned Date</label>
                                <div class="col-sm-10">
                                    <input type="date" class="form-control" id="assign_date" name="assign_date" placeholder="Assigned Date" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label for="discharge_date" class="col-sm-2 col-form-label">Discharged Date</label>
                              <div class="col-sm-10">
                                  <input type="date" class="form-control" id="discharge_date" name="discharge_date" placeholder="Discharged Date" >
                              </div>
                          </div>
                          </form> 
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="sub-assign-btn" class="btn btn-outline-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>



      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#assign-bed').click(function(){
        $('#assign-modal').modal('show');
      });

      $('#sub-assign-btn').click(function(){
        $('#assign-form').submit();
      });
    });
  </script>

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> 
  <script>
    $(document).ready(function(){
      $('#assign-bed').click(function(){
        $('#assign-modal').modal('show');
      });

      $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
    $('#sub-assign-btn').click(function(e){

        e.preventDefault();

        var patientId = $("#patient-id").val();
        var bedId = $("#bed-id").val();
        var assignedDate = $("#assigned_date").val();
        var dischargedDate = $("#discharged_date").val();

        $.ajax({
            type:'POST',
            url:"{{ route('upload_assignedbed') }}",
            data:{patientId:patientId, bedId:bedId, assignedDate:assignedDate,dischargedDate:dischargedDate},
            success:function(data){
              
            }
        });

        $('#assign-form').submit();

    });

      $('#sub-assign-btn').click(function(){
        $('#assign-form').submit();
      });

    });
  </script> --}}