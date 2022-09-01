<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 @include('user.dashboard.css')
</head>
<body>
  @include('user.dashboard.banner')
    <!-- partial:partials/_sidebar.html -->
   @include('user.dashboard.sidebar')

    <!-- partial -->
    @include('user.dashboard.navbar')

    <div class="col-12 grid-margin">
        {{-- <div class="card"> --}}
          <div class="card-body">
            <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
            <div class="table-responsive" style="padding:50px;">
            <table class="table table-striped table-hover">
            <thead class="thead-dark">
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Doctor Name</th>
                      <th scope="col">Date</th>
                      <th scope="col">Diagnosis</th>
                      <th scope="col">Prescription</th>
                      {{-- <th scope="col">Medicine Instruction</th> --}}

                 </tr>
        </thead>
        <tbody>
          @foreach ($prescriptions as $prescription)
          <tr>       
            <th>{{$prescription->id}}</th>
            <td>{{$prescription->doctor->name}}</td>    
            <td>{{$prescription->diagnosis}}</td>
            <td>{{$prescription->prescription}}</td>
            <td>{{$prescription->medicine_instruction}}</td>
            {{-- <td>{{ $prescription->status }}</td> --}}

            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
    


  <!-- container-scroller -->
  <!-- plugins:js -->
 
  <!-- End custom js for this page -->
  @include('user.dashboard.script')
    
</body>
</html>
