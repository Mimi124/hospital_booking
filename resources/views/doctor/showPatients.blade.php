
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
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
                        <th scope="col">Doctor Name</th>
                        <th scope="col">Date Registered</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($appointments as $appointment)
                      <tr>
                        <th scope="row">{{ $appointment->id }}</th>
                        <td>{{ $appointment->user->name }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ $appointment->date}}</td>
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