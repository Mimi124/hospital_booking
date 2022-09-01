
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

        <!-- partial -->



        <div class="container-fluid page-body-wrapper">


            <div class="container" style="padding:100px;">
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient Name</th>
                            <th>Doctor Name</th>
                            <th>Template Name</th>
                            <th>Date / Time</th>
                            <th>Reports</th>
                        </tr>
                        </thead>

                        <tbody>
                              @foreach($labreport as $labreports)
                              <tr>
                                  <th scope="row">{{ $labreports->id }}</th>
                                  <td>{{$labreports->patient->name}}</td>
                                  <td>{{$labreports->doctor->name}}</td>    
                                  <td>{{$labreports->template->name}}</td>
                                  <td>{{$labreports->date.'/'.$labreports->time}}</td>
                                  <td>{{$labreports->report}}</td>

                            </tr>
                        @endforeach
                        </tbody>

                </table>
            </div>

            </div>

    <!-- container-scroller -->
    <!-- plugins:js -->

    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>
