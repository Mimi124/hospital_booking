
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
                        <td>{{ $bed_assign->patient->name }}</td>
                        <td>{{ $bed_assign->bed }}</td>
                        <td>{{ $bed_assign->assign_date }}</td>
                        <td>{{ $bed_assign->discharge_date }}</td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>     
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>