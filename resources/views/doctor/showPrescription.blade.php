
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
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
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-info" id="button" href="/add_prescription_view">Add Prescription</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
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
                        @foreach($prescription as $prescriptions)
                            <tr>
                                <th scope="row">{{ $prescriptions->id }}</th>
                                <td>{{$prescriptions->patient->name}}</td>
                                <td>{{$prescriptions->doctor->name}}</td>    
                                <td>{{$prescriptions->diagnosis}}</td>
                                <td>{{$prescriptions->prescription}}</td>
                                <td>{{$prescriptions->medicine_instruction}}</td>
                                <td>{{$prescriptions->date}}</td>
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
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('doctor.script')
  </body>
</html>