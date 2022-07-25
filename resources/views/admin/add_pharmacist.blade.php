<!DOCTYPE html>
<html lang="en">
  <head>


  @include('admin.css')
  </head>
  <body>
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

                <form  action="{{url('upload_pharmacist')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Pharmacist Name</label>
                      <input type="text" class="form-control" style="color:black"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label for="number" class="form-label">Phone Number</label>
                      <input type="tel" class="form-control"  style="color:black"  name="number" placeholder="Write the number" required >
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