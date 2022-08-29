
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('nurse.css')
  </head>
  <body>
  @include('nurse.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('nurse.sidebar')

      <!-- partial -->
      @include('nurse.navbar')
 
     
             
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">
                    <a class="btn btn-info" id="new-bed" href="#" style="margin-bottom:2%">New Bed </a>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Bed</th>
                        <th scope="col">Bed Type</th>
                        <th scope="col">Charge</th>
                        {{-- <th scope="col">Available </th> --}}
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($beds as $bed)
                      <tr>
                        <td>{{ $bed->id}}</td>
                        <td>{{ $bed->name}}</td>
                        <td>{{ $bed->bed_type}}</td>
                        <td>{{ $bed->charge}}</td>
                        {{-- <td>{{ $bed->is_available}}</td> --}}
                        <td>
                            <a class="btn btn-primary" href="{{url('updateBed',$bed->id)}}">Update</a>                        
                        </td>  
                        <td>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger" href="{{url('deleteBed',$bed->id)}}">Delete</a>                     
                      </td>
                
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <div class="modal fade " id="nurse-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Bed</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
          
                            <form  action="{{url('upload_bed')}}" method="POST" id="nurse-form" enctype="multipart/form-data">
                              @csrf
                              <div class="row mb-3">
                                  <label for="name" class="col-sm-2 col-form-label">Bed</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="name" name="name" placeholder="Bed" required>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="bedTypes" class="col-sm-2 col-form-label">Bed Type</label>
                                  <div class="col-sm-10">
                                    <select class="form-select form-select-sm" name="bed_type" aria-label=".form-select-sm example" >
                                      <option>--Select Bed Type--</option>
                                      @foreach($bedTypes as $bed_type)
                                      <option value="{{$bed_type->id}}" class="form-control">{{$bed_type->title}}</option>
                                      @endforeach
                                    </select>
                                  </div>
                              </div>
                              <div class="row mb-3">
                                <label for="number" class="col-sm-2 col-form-label">Charge</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="charge" name="charge" placeholder="Ghc" required>
                                </div>
                            </div>
                              
                          </form> 
          
          
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" id="sub-nurse-btn" class="btn btn-outline-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>


  </body> 
</html>

                       
      
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>

{{-- @section('customNurseScript') --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#new-bed').click(function(){
        $('#nurse-modal').modal('show');
      });

      $('#sub-nurse-btn').click(function(){
        $('#nurse-form').submit();
      });
    });
  </script>
{{-- @endsection --}}