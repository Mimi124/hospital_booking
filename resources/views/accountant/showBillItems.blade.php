
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
              <a class="btn btn-info" id="button" href="/add_billitem_view">Add Bill Item</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Item Name</th>
                            <th>Billing ID</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Amount To Pay</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($billitem as $billitems)
                            <tr>
                                <th scope="row">{{ $billitems->id }}</th>
                                <td>{{$billitems->item_name}}</td>
                                <td>{{$billitems->billing_id}}</td>
                                <td>{{$billitems->qty}}</td>
                                <td>{{$billitems->price}}</td>
                                <td>{{$billitems->amount}}</td>
                                
                                <td>
                                    <a class="badge badge-outline-primary" href="{{url('update_billitem',$billitems->id)}}">Update</a>
                                    {{-- <a class="badge badge-outline-success" href="{{url('show_labreport',$billitems->id)}}">Display</a> --}}
                                  
                                </td>  
                                <td>
                                    <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_billitem',$billitems->id)}}">Delete</a>
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