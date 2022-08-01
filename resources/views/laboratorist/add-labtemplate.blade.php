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


  @include('laboratorist.css')
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
                Add Lab Template
            </h3>
    </div> 
        
                                <!--begin::Form-->
                                <form action="{{url('upload_labtemplate')}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                        @csrf
                                        {{-- @if(isset($category))
                                            @method('PUT')
                                        @endif --}}
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            
                                                <input id="name" class="form-control" style="color:black" type="text" name="name"
                                                       >
                                        
                                        </div>
                                        <div class="mb-3">
                                            <label for="template" class="form-label">Template</label>
                                                <input class="form-control" name="template" style="color:black"  type="text" id="template" cols="30"
                                                          rows="5" >
                                    
                                        
                                    </div>
                                    <input type="submit"
                          class="btn-lg btn-primary">
                   <input type="reset" class="btn-lg btn-danger" value="Cancel">
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