
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
                      <th scope="col">Doctor Name</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Speciality</th>
                      <th scope="col">Room NO</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      {{-- <tbody>
                      @foreach ($doctor as $doctors)
                    <tr>
                      <th scope="row">{{ $doctors->name }}</th>
                      <td>{{ $doctors->phone }}</td>
                      <td>{{ $doctors->speciality }}</td>
                      <td>{{ $doctors->room }}</td>
                      <td><img height="100" width="100" src="{{ $doctors->image }}"</td>
                      <td>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-primary">href="{{url('deleteDoctor',$doctors->id)}}">Update</a>
                        
                      </td>
                       <td>
                          <a class="btn btn-danger">href="{{url('updateDoctor',$doctors->id)}}">Delete</a>
                        
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