
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
                {{-- <a class="btn btn-info" id="button" href="/add_labTest_view">Add New LabTest</a> --}}
                <br><br>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">LAB REPORT ID</th>
                        <th scope="col">PATIENT NAME</th>
                        <th scope="col">DOCTOR NAME</th>
                        <th scope="col">DATE/TIME</th>
                        <th scope="col">REPORT</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($lab_reports as $lab_report)
                      <tr>
                        {{-- <th scope="row">{{ $lab_report->lab_reports_id }}</th> --}}
                        <th scope="row">{{ $lab_report->id }}</th>
                        <td>{{ $lab_report->patients->name }}</td>
                        <td>{{ $lab_report->doctor->name}}</td>
                        <td>{{ $lab_report->date.'/'.$lab_report->time }}</td>
                        <td>{{ $lab_report->report }}</td>
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