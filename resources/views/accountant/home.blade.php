
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('accountant.css')
  </head>
  <body>
    @include('accountant.banner') 
      <!-- partial:partials/_sidebar.html -->
     @include('accountant.sidebar')

      <!-- partial -->
      @include('accountant.navbar')
 
        <!-- partial -->
       @include('accountant.body')
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('accountant.script')
  </body>
</html>