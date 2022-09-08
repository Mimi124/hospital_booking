<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('laboratorist.css')
  </head>
  <body>
   @include('laboratorist.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('laboratorist.sidebar')

      <!-- partial -->
      @include('laboratorist.navbar')
 
        <!-- partial -->

        

        <div class="container-fluid page-body-wrapper">
            <div class="container" style="padding:100px;">
            <div class="mb-3">
                <h3>
                    Lab Requests
                </h3>
        </div>
          

              <br><br>
<table class="table table-striped table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Patient Name</th>
        <th scope="col">Lab Request</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($diagnosis_categories as $diagnosis_categories)
      <tr>
        
        <td>{{$diagnosis_categories->patient->user->name}}</td>
        
        
        <td>{{ $diagnosis_categories->labrequest }}</td>
        <td>
            <a class="btn btn-outline-primary" href="{{url('updateDiagnosis',$diagnosis_categories->id)}}">Update</a>
          
        </td>  
        <td>
          <a onclick="return confirm('Are you sure you want to delete?')" class="btn btn-outline-danger" href="{{url('deleteDiagnosis',$diagnosis_categories->id)}}">Delete</a>
        
      </td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
    
</div>

<!-- container-scroller -->
<!-- plugins:js -->

<!-- End custom js for this page -->
@include('laboratorist.script')
</body>
</html>