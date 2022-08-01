
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <base href="/public">
    <!-- plugins:css -->
  @include('laboratorist.css')
  </head>
  <body>
   @include('laboratorist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('laboratorist.sidebar')

      <!-- partial -->
      @include('laboratorist.navbar')
 
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
                Edit Lab Template
            </h3>
    </div> 
        
                                <!--begin::Form-->
                                <form action="{{url('editLabTemplate',$labtemplate->id)}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                        @csrf
                                        {{-- @if(isset($category))
                                            @method('PUT')
                                        @endif --}}
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            
                                                <input id="name" class="form-control" style="color:black" type="text" name="name"
                                                value="{{$labtemplate->name}}" required >
                                        
                                        </div>
                                        <div class="mb-3">
                                            <label for="template" class="form-label">Template</label>
                                                <input class="form-control" name="template" style="color:black"  type="text" id="template" cols="30"
                                                value="{{$labtemplate->template}}" required  rows="5" >
                                    
                                        
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
    @include('laboratorist.script')
  </body>
</html>