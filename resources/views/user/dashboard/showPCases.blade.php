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
                    {{-- <th scope="col">PATIENT NAME</th> --}}
                    <th scope="col">DOCTOR NAME</th>
                    <th scope="col">DATE</th>
                    <th scope="col">Diagnosis</th>
                    <th scope="col">Symptoms</th>
                    <th scope="col">Advice</th>
                 </tr>
        </thead>
        <tbody>
          @foreach ($prescriptions as $prescription)
          <tr>       
            <th scope="row">{{ $prescription->id }}</th>
                        <td>{{ $prescription->doctor->name}}</td>
                        <td>{{ $prescription->date}}</td>
                        <td>{{ $prescription->diagnosis }}</td>
                        <td>{{ $prescription->symptoms }}</td>
                        <td>{{ $prescription->advice }}</td>
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
  @include('user.dashboard.script')
    
</body>
</html>
