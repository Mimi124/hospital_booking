
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
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
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-info" id="button" href="/add_malariatest_view">Add Malaria Test</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Red Blood Cell Count</th>
                            <th>Red Blood Cell Size</th>
                            <th>White Blood Cell Count</th>
                            <th>White Blood Cell Size</th>
                            <th>Red Blood Cell Count</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($malariatest as $malariatests)
                            <tr>
                                <th scope="row">{{ $malariatests->id }}</th>
                                <td>{{$malariatests->patient->name}}</td>
                                <td>{{$malariatests->doctor->name}}</td>    
                                <td>{{$malariatests->rbc}}</td>
                                <td>{{$malariatests->rbc_size}}</td>
                                <td>{{$malariatests->wbc}}</td>
                                <td>{{$malariatests->wbc_size}}</td>
                                <td>{{$malariatests->platelets}}</td>
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_malariatest',$malariatests->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$malariatests->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_malariatest',$malariatests->id)}}">Delete</a>
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
    @include('laboratorist.script')
  </body>
</html>