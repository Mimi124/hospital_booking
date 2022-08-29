
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('admin.css')
  </head>
  <body>
  @include('admin.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

      <!-- partial -->
      @include('admin.navbar')
 
     
             
        <div class="row ">
          <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:50px"></h4>
                <div class="table-responsive" style="padding:40px">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        <th scope="col">Approve</th>
                        <th scope="col">Cancel Appointment</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($appointments as $appointment)
                      <tr>
                       
                        <th scope="row">{{ $appointment->id }}</th>
                        <td>{{ $appointment->user->name }}</td>
                        <td>{{ $appointment->user->email }}</td>
                        <td>{{ $appointment->phone }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ $appointment->date}}</td>
                        <td>{{ $appointment->message}}</td>
                        <td>
                          @if ($appointment->status === 'Approved')
                              <span class="badge badge-outline-success">Approved</span>
                          @elseif ($appointment->status === 'Canceled')
                              <span class="badge badge-outline-danger">Canceled</span>
                          @else
                              <span class="badge badge-outline-warning">Pending</span>
                          @endif
                          </td>
                         <td>
                          @unless($appointment->status === 'Approved')
                          <a class="badge badge-outline-success" onclick="hide" href="{{url('approved',$appointment->id)}}">Approve</a>      
                        @endunless
                        </td>

                        <td>
                          @unless($appointment->status === 'Canceled')
                          <a class="badge badge-outline-danger" onclick="hide" href="{{url('canceled',$appointment->id)}}">Cancel</a>      
                        @endunless
                        </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <script type="text/javascript">
      $("#status").click(function(){
        $("#approved").hide();
      });
      </script> --}}
  </body> 
</html>

                       





















          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>