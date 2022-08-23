
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
                    <a class="btn btn-info" id="new-bedType" href="#"  style="margin-bottom:2%">New Bed Type</a>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Bed Types</th>
                        <th scope="col">Description</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bed_types as $bed_type)
                      <tr>
                        <td>{{ $bed_type->id}}</td>
                        <td>{{ $bed_type->title}}</td>
                        <td>{{ $bed_type->description}}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{url('updateBedType',$bed_type->id)}}">Update</a>                        
                        </td>  
                        <td>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" href="{{url('deleteBedType',$bed_type->id)}}">Delete</a>                     
                      </td>
                
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>


          <div class="modal fade" id="nurse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New BedType</h5>
                  <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form  action="{{url('upload_bedType')}}" method="post"  id="nurse-form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="title">Bed Type</label>
                      <input type="text" class="form-control" name="title" required>
                    </div>

                    <div class="form-group shadow-textarea">
                      <label for="description">Description</label>
                      <textarea class="form-control z-depth-1" id="desccription" name="description" rows="3" placeholder="Write something here..."></textarea>
                    </div>
                    
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" id="sub-nurse-btn" class="btn btn-outline-primary">Submit</button>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#new-bedType').click(function(){
        $('#nurse-modal').modal('show');
      });

      $('#sub-nurse-btn').click(function(){
        $('#nurse-form').submit();
      });
    });
  </script>