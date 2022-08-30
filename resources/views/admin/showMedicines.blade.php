
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
                      <th scope="col">Medicine Name</th>
                      <th scope="col">Instruction</th>
                      <th scope="col">Category_Id</th>
                      <th scope="col">Purchase Price</th>
                      <th scope="col">Sale Price</th>
                      <th scope="col">Quantity</th>
                      <th scope="col">Company</th>
                      <th scope="col">Expiry Date</th>
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
