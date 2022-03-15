<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    <base href="/public">

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

                <form  action="{{url('sendemail',$appointment->id)}}" method="POST"  ">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Greetings</label>
                      <input type="text" class="form-control" style="color:black"  name="greeting" required>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Body</label>
                      <input type="text" class="form-control"  style="color:black"  name="body"  required >
                    </div>
                    
                    
                    <div class="mb-3">
                      <label for="room" class="form-label">Action Text</label>
                      <input type="text" class="form-control"  style="color:black" name="actionText"  required>
                    </div>

                      <div class="mb-3">
                        <label for="room" class="form-label">Action Url</label>
                        <input type="text" class="form-control"  style="color:black" name="actionUrl"  required>
                      </div>

                      <div class="mb-3">
                        <label for="room" class="form-label">End Part</label>
                        <input type="text" class="form-control"  style="color:black" name="endPart"  required>
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