
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Patient Name</th>
                        <th scope="col">Bed</th>
                        <th scope="col">Assign Date</th>
                        <th scope="col">Discharge Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($bed_assigns as $bed_assign)
                      <tr>
                        <th scope="row">{{ $bed_assign->id }}</th>
                        <td>{{ $bed_assign->patient->name }}</td>
                        <td>{{ $bed_assign->bed->name }}</td>
                        <td>{{ $bed_assign->assign_date }}</td>
                        <td>{{ $bed_assign->discharge_date }}</td>
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
    @include('admin.script')
  </body>
</html>