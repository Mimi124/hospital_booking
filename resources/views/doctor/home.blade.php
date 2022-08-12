
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
 
        <!-- partial -->
       @include('doctor.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('doctor.script')
  </body>
</html>