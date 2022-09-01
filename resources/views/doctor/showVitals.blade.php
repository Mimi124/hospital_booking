
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
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Temperature</th>
                            <th>Blood Pressure</th>
                            <th>Body Weight</th>
                            <th>Date</th>
                        </tr>
                        </thead>

                        <tbody>
                          {{-- <pre>@json($errors->all())</pre> --}}
                        @foreach($receptionists as $receptionist)
                            <tr>
                                <th scope="row">{{ $receptionist->id }}</th>
                                <td>{{$receptionist->patient->user->name}}</td>
                                <td>{{$receptionist->doctor->name}}</td>    
                                <td>{{$receptionist->temperature}}</td>
                                <td>{{$receptionist->body_weight}}</td>
                                <td>{{$receptionist->blood_pressure}}</td>
                                <td>{{$receptionist->date}}</td>
                                <td>
                            </tr>
                        @endforeach

                  </tbody>
                </table>
              </div>
            </div>
          </div>
        {{-- </div> --}}
      {{-- </div> --}}
      {{-- <script type="text/javascript">
      $("#status").click(function(){
        $("#approved").hide();
      });
      </script> --}}
  </body> 
</html>

                       






































          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>