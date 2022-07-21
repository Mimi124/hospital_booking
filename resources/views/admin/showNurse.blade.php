
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('admin.css')
  </head>
  <body>
   @include('admin.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('admin.sidebar')

      <!-- partial -->
      @include('admin.navbar')
 
        <!-- partial -->

        

        <div class="container-fluid page-body-wrapper">
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-info" id="button" href="/add_nurse_view">Add New Nurse</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nurse Name</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach ($nurse as $nurses)
                    <tr>
                      <th scope="row">{{ $nurses->id }}</th>
                      <td>{{ $nurses->name }}</td>
                      <td>{{ $nurses->phone }}</td>
                      <td><img height="100" width="100" src="{{ $nurses->image }}"</td>
                       <td>
                          <a class="badge badge-outline-primary" href="{{url('updateNurse',$nurses->id)}}">Update</a>
                        
                      </td>  <td>
                        <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('deleteNurse',$nurses->id)}}">Delete</a>
                      
                    </td>

                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
    
            </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>