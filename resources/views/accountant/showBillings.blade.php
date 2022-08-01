
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

        

        <div class="container-fluid page-body-wrapper">
          

            <div class="container" style="padding:100px;">
              <a class="btn btn-info" id="button" href="/add_billing_view">Add Billing</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Patient ID</th>
                            <th>Bill Date</th>
                            <th>Amount Paid</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($billing as $billings)
                            <tr>
                                <th scope="row">{{ $billings->id }}</th>
                                <td>{{$billings->patient_id}}</td>
                                <td>{{$billings->bill_date}}</td>
                                <td>{{$billings->amount}}</td>
                                
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_billing',$billings->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$billings->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_billing',$billings->id)}}">Delete</a>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                </table>
            </div>
    
            </div>
       
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('accountant.script')
  </body>
</html>