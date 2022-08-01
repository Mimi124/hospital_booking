
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
       @include('laboratorist.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('laboratorist.script')
  </body>
</html>