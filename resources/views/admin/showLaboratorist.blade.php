
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
              <a class="btn btn-info" id="button" href="/add_laboratories_view">Add New Laboratorist</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Laboratorist Name</th>
                      <th scope="col">Phone Number</th>
                      <th scope="col">Picture</th>
                      <th scope="col">Status</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach ($laboratorist as $laboratories)
                    <tr>
                      <th scope="row">{{ $laboratories->id }}</th>
                      <td>{{ $laboratories->name }}</td>
                      <td>{{ $laboratories->phone }}</td>
                      <td><img height="100" width="100" src="{{ $laboratories->image }}"></td>
                      <td>{{ $laboratories->status}}</td>

                       <td>
                          <a class="badge badge-outline-primary" href="{{url('updateLaboratories',$laboratories->id)}}">Update</a>
                        
                      </td>  <td>
                        <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('deleteLaboratories',$laboratories->id)}}">Delete</a> 
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