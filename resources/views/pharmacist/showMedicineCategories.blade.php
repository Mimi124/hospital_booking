
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

        

        <div class="container-fluid page-body-wrapper">
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-info" id="button" href="/add_medicinecategory_view">Add New Medicine Category</a>
              <br><br>

                <div class="kt-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable kt_table_1">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Actions</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($medicineCategory as $medicineCategories)
                            <tr>
                                <th scope="row">{{ $medicineCategories->id }}</th>
                                <td>{{$medicineCategories->name}}</td>
                                <td>{{$medicineCategories->description}}</td>

                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_medicinecategory',$medicineCategories->id)}}">Update</a>
                                  
                                </td>  
                                <td>
                                  <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_medicinecategory',$medicineCategories->id)}}">Delete</a>
                                
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
    @include('pharmacist.script')
  </body>
</html>