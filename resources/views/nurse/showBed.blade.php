
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
                    <a class="btn btn-info" id="button" href="/add_bed_view" style="margin-bottom:2%">New Bed </a>
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
                        <td>{{ $bed->bed_type->title}}</td>
                        <td>{{ $bed->charge}}</td>
                        {{-- <td>{{ $bed->is_available}}</td> --}}
                        <td>
                            <a class="btn btn-outline-primary" href="{{url('updateBed',$bed->id)}}">Update</a>                        
                        </td>  
                        <td>
                          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" href="{{url('deleteBed',$bed->id)}}">Delete</a>                     
                      </td>
                
                      </tr>
                      @endforeach
                  </tbody>
                </table>
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