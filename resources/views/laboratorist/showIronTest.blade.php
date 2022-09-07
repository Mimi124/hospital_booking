
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
              <a class="btn btn-info" id="button" href="/add_irontest_view">Add  Test</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Iron Level</th>
                            <th>RIBC/Transferrin Level</th>
                            <th>UIBC Level</th>
                            <th>Saturation Levels</th>
                            <th>Ferritin</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($irontest as $irontests)
                            <tr>
                                <th scope="row">{{ $irontests->id }}</th>
                                <td>{{$irontests->patient->name}}</td>
                                <td>{{$irontests->doctor->name}}</td>
                                <td>{{$irontests->iron}}</td>    
                                <td>{{$irontests->ribc}}</td>
                                <td>{{$irontests->uibc}}</td>
                                <td>{{$irontests->saturation}}</td>
                                <td>{{$irontests->ferritin}}</td>
                                
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_irontest',$irontests->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$irontests->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_irontest',$irontests->id)}}">Delete</a>
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