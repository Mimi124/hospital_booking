
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
              <a class="btn btn-info" id="button" href="/add_labtemplate_view">Add New Lab Template</a>
              <br><br>

                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Name</th>
                            {{-- <th>Description</th> --}}
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($labtemplate as $labtemplates)
                            <tr>
                                <th scope="row">{{ $labtemplates->id }}</th>
                                <td>{{$labtemplates->name}}</td>
                                {{-- <td>{{$labtemplates->description}}</td> --}}

                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_labtemplate',$labtemplates->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labtemplate',$labtemplates->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                  <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_labtemplate',$labtemplates->id)}}">Delete</a>
                                
                              </td>"

                            </tr>
                        @endforeach
                        </tbody>

                    </table>
                    <!--end: Datatable -->
                </div>
            </div>
            <!-- end:: Portlet -->
        </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('laboratorist.script')
  </body>
</html>