<!DOCTYPE html>
<html lang="en">
  <head>

    @include('nurse.css')
  </head>
  <body>
    @include('nurse.banner')
 
      <!-- partial:partials/_sidebar.html -->
     @include('nurse.sidebar')

      <!-- partial -->
      @include('nurse.navbar')
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

                <form  action="{{url('editBedType',$bed_types->id)}} method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Bed Type</label>
                      <input type="text" class="form-control" style="color:black"  name="title" value="{{$bed_types->title}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label"> Description</label>
                      <textarea class="form-control" id="description" style="color:black"  name="description"  rows="7" value="{{$bed_types->description}}"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-dark">Update</button>
                  </form>
            </div>

        </div>
  
  <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>