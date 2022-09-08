
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
              <a class="btn btn-info" id="button" href="/add_cbc_view">Add Cbc Test</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Red Blood Cell Count</th>
                            <th>White Blood Cell Count</th>
                            <th>Platelets</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($cbc as $cbcs)
                            <tr>
                                <th scope="row">{{ $cbcs->id }}</th>
                                <td>{{$cbcs->patient->user->name}}</td>
                                <td>{{$cbcs->doctor->name}}</td>    
                                <td>{{$cbcs->rbc}}</td>
                                <td>{{$cbcs->wbc}}</td>
                                <td>{{$cbcs->platelets}}</td>
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_cbc',$cbcs->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$cbcs->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_cbc',$cbcs->id)}}">Delete</a>
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