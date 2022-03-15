
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
 
      {{-- <div class="container-fluid page-body-wrapper"> --}}

        <div class="container" style="padding:100px;">
            <table class="table table-striped table-primary">
              <thead>
                  <tr align="center">
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
                    {{-- <th scope="col">Send Email</th> --}}
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                    <tr align="center">
                      <th scope="row">{{ $appointment->id }}</th>
                      <td>{{ $appointment->user->name }}</td>
                      <td>{{ $appointment->user->email }}</td>
                      <td>{{ $appointment->phone }}</td>
                      <td>{{ $appointment->doctor->name }}</td>
                      <td>{{ $appointment->date }}</td>
                      <td>{{ $appointment->message }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td>
                          <a class="btn btn-primary" onclick="return confirm('Approve this appointment?')" href="{{url('approved',$appointment->id)}}">Approve</a>

                      </td>
                      
                      <td>
                          <a class="btn btn-danger" onclick="return confirm('Do you want to cancel this appointment?')" href="{{url('canceled',$appointment->id)}}">Cancel</a>

                    </td>

                    {{-- <td>
                          <a class="btn btn-success" href="{{url('emailView',$appointment->id)}}">Send Email</a>
                          
                    </td> --}}

                  </tr>
                  @endforeach
                </tbody>
            </table>
          </div>
        {{-- </div> --}}
       






































          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>