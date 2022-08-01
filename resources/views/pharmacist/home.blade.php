
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
 
        <!-- partial -->
       @include('pharmacist.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('pharmacist.script')
  </body>
</html>