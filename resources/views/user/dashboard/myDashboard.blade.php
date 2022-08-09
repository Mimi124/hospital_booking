<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    @include('user.dashboard.css')
</head>
<body>
    <!-- partial:partials/_sidebar.html -->
   @include('user.dashboard.sidebar')

    <!-- partial -->
    @include('user.dashboard.navbar')


  <!-- container-scroller -->
  <!-- plugins:js -->
 
  <!-- End custom js for this page -->
  @include('user.dashboard.script')
    
</body>
</html>
