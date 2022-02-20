
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

      <!-- partial -->
      @include('admin.navbar')
 
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

        <div class="container" style="padding:100px;">

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
                    </tr>
                  </thead>
                  {{-- <tbody>
                      @foreach ($appointments as $appointment)
                    <tr>
                      <th scope="row">{{ $appointment->name }}</th>
                      <td>{{ $appointment->email }}</td>
                      <td>{{ $appointment->phone }}</td>
                      <td>{{ $appointment->doctor }}</td>
                      <td>{{ $appointment->date }}</td>
                      <td>{{ $appointment->message }}</td>
                      <td>{{ $appointment->status }}</td>
                      <td>
                          <a class="btn btn-primary" href="{{url('approved',$appointment->id)}}">Approve</a>

                      </td>
                      <a class="btn btn-secondary" href="{{url('canceled',$appointment->id)}}">Canceled</a>
                      <td>
                          
                    </td>
                    </tr>
                  </tbody> --}}
            </table>
        </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>