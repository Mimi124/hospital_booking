<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
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
                <th scope="col">Bed Types</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($bed_types as $bed_type)
                <tr>
                  <td>{{ $bed_type->id}}</td>
                  <td>{{ $bed_type->title}}</td>
                  <td>{{ $bed_type->description}}</td>
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