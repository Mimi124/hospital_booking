
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('receptionist.css')
  </head>
  <body>
    @include('receptionist.banner') 
      <!-- partial:partials/_sidebar.html -->
     @include('receptionist.sidebar')

      <!-- partial -->
      @include('receptionist.navbar')
 
        <!-- partial -->
       @include('receptionist.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('receptionist.script')
  </body>
</html>