
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
    
                <table class="table table-striped table-primary">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Doctor Name</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Speciality</th>
                      <th scope="col">Room NO</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach ($doctor as $doctors)
                    <tr>
                      <th scope="row">{{ $doctors->id }}</th>
                      <td>{{ $doctors->name }}</td>
                      <td>{{ $doctors->phone }}</td>
                      <td>{{ $doctors->speciality }}</td>
                      <td>{{ $doctors->room }}</td>
                      <td><img height="100" width="100" src="{{ $doctors->image }}"</td>
                       <td>
                          <a class="btn btn-danger" href="{{url('updateDoctor',$doctors->id)}}">Update</a>
                        
                      </td>  <td>
                        <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-primary" href="{{url('deleteDoctor',$doctors->id)}}">Delete</a>
                      
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