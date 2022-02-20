<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    {{-- <style type="text/css">
        label {
            display: inline-block;
            width: 200px;

        }

        </style> --}}


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


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

                <form  action="{{url('upload_doctor')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Doctor Name</label>
                      <input type="text" class="form-control" style="color:black"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control"  style="color:black"  name="number" placeholder="Write the number" required >
                    </div>
                    
                   
                
                      <div class="mb-3">
                    <label for="speciality" class="form-label">Speciality</label>
                      <select class="form-select" name="speciality" required>
                        <option selected>Open this select menu</option>
                        <option value="eye">Eye Treatment</option>
                        <option value="ear">Ear Treatment</option>
                        <option value="pyschaitry ">pyschaitry </option>
                        <option value="physiotherapy ">physiotherapy </option>
                        <option value="surgeon ">Surgeon </option>
                      </select>
                      </div>

                      <div class="mb-3">
                        <label for="room" class="form-label">Room Number</label>
                        <input type="text" class="form-control"  style="color:black" name="room" placeholder="Write the room number" required>
                      </div>

                      <div class="mb-3">
                        <label for="image" class="form-label">Upload Picture</label>
                        <input type="file" class="form-control"  name="file" required >
                      </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                



            </div>

        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>