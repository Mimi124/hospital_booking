<!DOCTYPE html>
<html lang="en">
  <head>

  @include('doctor.css')
  </head>
  <body>
    @include('doctor.banner')
 
      <!-- partial:partials/_sidebar.html -->
     @include('doctor.sidebar')

      <!-- partial -->
      @include('doctor.navbar')
 
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

                <form  action="{{url('editDiagnosis',$diagnosis_categories->id)}} method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Diagnosis Name</label>
                      <input type="text" class="form-control" style="color:black"  name="name" value="{{$diagnosis_categories->name}}" required>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label"> Description</label>
                      <textarea class="form-control" id="description" style="color:black"  name="description"  rows="7" value="{{$diagnosis_categories->description}}"></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-dark">Update</button>
                  </form>
                

            </div>

        </div>
  
    @include('doctor.script')
  </body>
</html>