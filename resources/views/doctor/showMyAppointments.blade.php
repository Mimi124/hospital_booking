
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
                        
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Message</th>
                        <th scope="col">Status</th>
                        {{-- <th scope="col">Send Email</th> --}}
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
                              <span class="btn btn-outline-success">Approved</span>
                          @elseif ($appointment->status === 'Canceled')
                              <span class="btn btn-outline-danger">Canceled</span>
                          @else
                              <span class="badge badge-outline-warning">Pending</span>
                          @endif
                          </td>
                        {{-- <td>
                          @unless($appointment->status === 'Approved')
                          <a class="btn btn-danger" onclick="hide"  onclick="return
                          confirm('Are you sure you want to approve?')" href="{{url('approved',$appointment->id)}}">Approve</a></td>     
                        @endunless
                        </td> --}}
                    
{{--                     
                    <td>
                      <a class="btn btn-success" href="{{url('emailView',$appointment->id)}}">Send Email</a>
                      
                    </td>  --}}
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        {{-- </div> --}}
      {{-- </div> --}}
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