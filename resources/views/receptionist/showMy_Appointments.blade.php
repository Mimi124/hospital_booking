
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- plugins:css -->
  @include('receptionist.css')
  </head>
  <body>
  @include('receptionist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('receptionist.sidebar')

      <!-- partial -->
      @include('receptionist.navbar')
 
     
             
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
                                <span class="btn btn-outline-warning">Pending</span>
                            @endif
                            </td>
        
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
             
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('receptionist.script')
  </body>
</html>