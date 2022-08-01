
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <base href="/public">
    <!-- plugins:css -->
  @include('pharmacist.css')
  </head>
  <body>
   @include('pharmacist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('pharmacist.sidebar')

      <!-- partial -->
      @include('pharmacist.navbar')
 
        <!-- partial -->
         <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif
          <div class="mb-3">
            <h3>
                Edit Medicine Category
            </h3>
    </div> 
        
                                <!--begin::Form-->
                                <form action="{{url('editMedicineCategory',$medicineCategory->id)}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                        @csrf
                                        {{-- @if(isset($category))
                                            @method('PUT')
                                        @endif --}}
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            
                                                <input id="name" class="form-control" style="color:black" type="text" name="name"
                                                value="{{$medicineCategory->name}}" required >
                                        
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                                <input class="form-control" name="description" style="color:black"  type="text" id="description" cols="30"
                                                value="{{$medicineCategory->description}}" required  rows="5" >
                                    
                                        
                                    </div>
                                    <button type="submit" class="btn btn-primary">Update</button>
                   
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                </div>
      <!-- end:: Content Container-->
    @include('pharmacist.script')
  </body>
</html>