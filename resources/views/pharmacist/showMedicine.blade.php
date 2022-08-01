
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
              <a class="btn btn-info" id="button" href="/add_medicine_view">Add New Medicine</a>
              <br><br>
                <table class="table table-striped table-primary">
                    <thead>
                      <tr>
                      <th scope="col">#</th>
                      <th scope="col">Medicine Name</th>
                      <th scope="col">Instruction</th>
                      <th scope="col">Category_Id</th>
                      <th scope="col">Purchase Price</th>
                      <th scope="col">Sale Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Company</th>
                      <th scope="col">Expiry Date</th>
                      <th scope="col">Update</th>
                      <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                           @foreach ($medicine as $medicines)
                    <tr>
                      <th scope="row">{{ $medicines->id }}</th>
                      <td>{{ $medicines->name }}</td>
                      <td>{{ $medicines->instruction }}</td>
                      <td>{{ $medicines->category_id }}</td>
                      <td>{{ $medicines->purchase_price}}</td>
                      <td>{{ $medicines->sale_price}}</td>
                      <td>{{ $medicines->quantity}}</td>
                      <td>{{ $medicines->company}}</td>
                      <td>{{ $medicines->expire_date}}</td>

                       <td>
                          <a class="badge badge-outline-primary" href="{{url('update_medicine',$medicines->id)}}">Update</a>
                        
                      </td>  <td>
                        <a onclick="return confirm('Are you sure you want to delete?')" class="badge badge-outline-danger" href="{{url('delete_medicine',$medicines->id)}}">Delete</a> 
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
    @include('pharmacist.script')
  </body>
</html>