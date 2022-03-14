
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
 
        <!-- partial -->
        <div class="container bg-danger page-body-wrapper">

          <div class="container">
            <table class="table table-striped table-primary">
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
                    <th scope="col">Send Mail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($appointments as $appointment)
                  <tr>
                    <tr>
                      <th scope="row">{{ $appointment->id }}</th>
                      <td>{{ $appointment->user_name }}</td>
                      <td>{{ $appointment->user_email }}</td>
                      <td>{{ $appointment->phone }}</td>
                      <td>{{ $appointment->doctor->name }}</td>
                      <td>{{ $appointment->date }}</td>
                      <td>{{ $appointment->message }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td>
                          <a class="btn btn-primary" href="{{url('approved',$appointment->id)}}">Approve</a>

                      </td>
                      
                      <td>
                          <a class="btn btn-secondary" href="{{url('canceled',$appointment->id)}}">Canceled</a>

                    </td>

                    <td>
                          <a class="btn btn-success" href="{{url('emailView',$appointment->id)}}">Send Mail</a>
                          
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
    @include('admin.script')
  </body>
</html>