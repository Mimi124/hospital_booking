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
                    <th scope="col">DATE/TIME</th>
                    <th scope="col">REPORT</th>
                 </tr>
        </thead>
        <tbody>
          @foreach($labreport as $labreports)
          <tr>       
            <th scope="row">{{ $labreports->id }}</th>
                        {{-- <td>{{ $lab_report->patients->name }}</td> --}}
                        <td>{{ $labreports->doctor->name}}</td>
                        <td>{{ $labreports->date.'/'.$labreports->time }}</td>
                        <td>{{ $labreports->report }}</td>
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
