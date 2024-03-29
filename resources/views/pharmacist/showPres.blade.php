
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('pharmacist.css')
  </head>
  <body>
  @include('pharmacist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('pharmacist.sidebar')

      <!-- partial -->
      @include('pharmacist.navbar')
 
     
             
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
                        <th scope="col">Prescription</th>
                        <th scope="col">Medicine Instruction</th>
                        <th scope="col">Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($prescriptions as $prescription)
                      <tr>
                        <td>{{ $prescription->id }}</td>
                        <td>{{$prescription->patient->name }}</td>
                        <td>{{ $prescription->doctor->name }}</td>                        
                        <td>{{$prescription->prescription}}</td>
                        <td>{{$prescription->medicine_instruction}}</td>
                        <td>{{$prescription->date}}</td>
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
    @include('pharmacist.script')
  </body>
</html>