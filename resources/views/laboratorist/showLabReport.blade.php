
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
              <a class="btn btn-info" id="button" href="/add_labreport_view">Add Lab Report</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Template Name</th>
                            <th>Date / Time</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($labreport as $labreports)
                            <tr>
                                <th scope="row">{{ $labreports->id }}</th>
                                <td>{{$labreports->patient->first_name}}</td>
                                    
                                <td>{{$labreports->template->name}}</td>
                                <td>{{$labreports->date.'/'.$labreports->time}}</td>
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_labreport',$labreports->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$labreports->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_labreport',$labreports->id)}}">Delete</a>
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