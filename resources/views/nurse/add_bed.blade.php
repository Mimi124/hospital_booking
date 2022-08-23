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
         {{-- <div class="container-fluid page-body-wrapper">


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif
                  <form  action="{{url('upload_bed')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Bed</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Bed" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Bed Type</label>
                        <div class="col-sm-10">
                          <select class="form-select form-select-sm" aria-label=".form-select-sm example" >
                            <option>--Select Bed Type--</option>
                            @foreach($bed_types as $bed_type)
                            <option value="{{$bed_type->id}}" class="form-control">{{$bed_type->title}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label for="name" class="col-sm-2 col-form-label">Charge</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" id="charge" name="charge" placeholder="Ghc" required>
                      </div>
                  </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </form> 

            </div>

        </div> --}}
      
        {{-- @if (session()->has('message'))
         
        <div class="alert alert-sucess">
          <button type="button" class="close" data-dismiss="alert">x </button>
          {{session()->get('message')}}
        </div>
        @endif --}}

{{--         
<div class="modal fade" id="nurse-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Bed</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

                  <form  action="{{url('upload_bed')}}" method="POST"  enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label">Bed</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Bed" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Bed Type</label>
                        <div class="col-sm-10">
                          <select class="form-select form-select-sm" aria-label=".form-select-sm example" >
                            <option>--Select Bed Type--</option>
                            @foreach($bed_types as $bed_type)
                            <option value="{{$bed_type->id}}" class="form-control">{{$bed_type->title}}</option>
                            @endforeach
                          </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                      <label for="name" class="col-sm-2 col-form-label">Charge</label>
                      <div class="col-sm-10">
                          <input type="number" class="form-control" id="charge" name="charge" placeholder="Ghc" required>
                      </div>
                  </div>
                    <div class="row">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </div>
                    </div>
                </form> 


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div> --}}

    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>