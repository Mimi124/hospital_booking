
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('nurse.css')
  </head>
  <body>
    @include('nurse.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('nurse.sidebar')

      <!-- partial -->
      @include('nurse.navbar')
 
        <!-- partial -->
       @include('nurse.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('nurse.script')
  </body>
</html>