
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('doctor.css')
  </head>
  <body>
  @include('doctor.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('doctor.sidebar')

      <!-- partial -->
      @include('doctor.navbar')
 
     
             
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">

                  @if (session()->has('message'))
         
                  <div class="alert alert-primiary">
                    <button type="button" class="close" data-dismiss="alert"> x </button>
                    {{session()->get('message')}}
                  </div>
                  @endif

                <a class="btn btn-outline-info" id="diagnosis" href="#">Add New Diagnosis</a>
                <br><br>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Update</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($diagnosis_categories as $diagnosis_categories)
                      <tr>
                        <th scope="row">{{ $diagnosis_categories->id }}</th>
                        <td>{{ $diagnosis_categories->name }}</td>
                        <td>{{ $diagnosis_categories->description }}</td>
                        <td>
                            <a class="btn btn-outline-primary" href="{{url('updateDiagnosis',$diagnosis_categories->id)}}">Update</a>
                          
                        </td>  
                        <td>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" href="{{url('deleteDiagnosis',$diagnosis_categories->id)}}">Delete</a>
                        
                      </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>



          <div class="modal fade" id="diagnosis-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">New Diagnosis</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <form  action="{{url('upload_diagnosis')}}" method="POST" id="diagnosis-form" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Diagnosis Name</label>
                      <input type="text" class="form-control" style="color:black"  name="name" required>
                    </div>
                    <div class="mb-3">
                      <label for="description" class="form-label"> Description</label>
                      <textarea class="form-control" id="description" style="color:black"  name="description"  rows="7"></textarea>
                    </div>
                    
                  </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                  <button type="button" id="diagnosis-sub" class="btn btn-outline-primary">Submit</button>
                </div>
              </div>
            </div>
          </div>



  </body> 
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $('#diagnosis').click(function(){
      $('#diagnosis-modal').modal('show');
    });

    $('#diagnosis-sub').click(function(){
      $('#diagnosis-form').submit();
    });
  });
</script>                      






































          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>