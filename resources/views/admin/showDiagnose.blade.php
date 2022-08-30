
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
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
 
              
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">

                  @if (session()->has('message'))
         
                  <div class="alert alert-primiary">
                    <button type="button" class="close" data-dismiss="alert"> x </button>
                    {{session()->get('message')}}
                  </div>
                  @endif
                <br><br>
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($diagnosis_categories as $diagnosis_categories)
                      <tr>
                        <th scope="row">{{ $diagnosis_categories->id }}</th>
                        <td>{{ $diagnosis_categories->name }}</td>
                        <td>{{ $diagnosis_categories->description }}</td>
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