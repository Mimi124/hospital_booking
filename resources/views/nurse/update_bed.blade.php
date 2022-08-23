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

        <form  action="{{url('editBed',$beds->id)}} method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Bed </label>
                        <input type="text" class="form-control" style="color:black"  name="name" value="{{$beds->name}}" required>
                    </div>
                    <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
                        <select name="doctor_id" id="doctor_id"  class="custom-select" required>
                          <option>--Select Bed Type--</option>
                          @foreach($bed_types as $bed_type)
                          <option value="{{$bed_type->id}}" class="form-control" value="{{$bed_type->title}}">{{$bed_type->title}}</option>
                          @endforeach
                        </sele
                      <div class="mb-3">
                        <label for="charge" class="form-label">Charge</label>
                        <input type="number" class="form-control" style="color:black"  name="charge" required>
                      </div>
                    {{-- <div class="mb-3">
                      <label for="description" class="form-label"> Description</label>
                      <textarea class="form-control" id="description" style="color:black"  name="description"  rows="7"></textarea>
                    </div> --}}
                    
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