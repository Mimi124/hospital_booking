<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- plugins:css -->
@include('admin.css')
  </head>
  <body>
@include('admin.banner')
      <!-- partial:partials/_sidebar.html -->
@include('admin.sidebar')

      <!-- partial -->
@include('admin.navbar')


<div class="col-12 grid-margin">
      <div class="card-body">
        <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
        <div class="table-responsive" style="padding:50px;">
          <table class="table table-bordered">
            <thead class="thead-dark">
              <tr>
                
                <th scope="col">#</th>
                <th scope="col">Bed</th>
                <th scope="col">Bed Type</th>
                <th scope="col">Charge</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($beds as $bed)
              <tr>
                <td>{{ $bed->id}}</td>
                <td>{{ $bed->name}}</td>
                <td>{{ $bed->bed_type}}</td>
                <td>{{ $bed->charge}}</td>
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
    @include('admin.script')
  </body>
</html>