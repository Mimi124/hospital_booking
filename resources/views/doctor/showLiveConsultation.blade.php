
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
 
     
             
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">CONSULTATION TITLE</th>
                        <th scope="col">DATE</th>
                        <th scope="col">CREATED BY</th>
                        <th scope="col">CREATED FOR</th>
                        <th scope="col">PATIENT</th>
                        <th scope="col">STATUS</th>
                        <th scope="col">PASSWORD</th>
                        <th scope="col">ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($live_consultations as $live_consultation)
                      <tr>
                        <td>{{ $live_consultation->consultation_title }}</td>
                        <td>{{ $live_consultation->consultation_date }}</td>
                        <td>{{ $live_consultation->created_by }}</td>
                        <td>{{ $live_consultation->doctor->name}}</td>
                        <td>{{ $live_consultation->patient->patient_id }}</td>
                        <td>{{ $live_consultation->password }}</td>
                        <td>
                            @if ($appointment->status === 'Approved')
                                <span class="btn btn-outline-success">Approved</span>
                            @elseif ($appointment->status === 'Canceled')
                                <span class="btn btn-outline-danger">Canceled</span>
                            @else
                                <span class="badge badge-outline-warning">Pending</span>
                            @endif
                            </td>
                            <td>
                                <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" href="{{url('deleteLive_Consultation',$live_consultation->id)}}">Delete</a>
                              
                            </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </body> 
</html>

                       






































          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>