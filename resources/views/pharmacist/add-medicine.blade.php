<!DOCTYPE html>
<html lang="en">
  <head>


  @include('pharmacist.css')
</head>
<body>
  <div class="container-scroller">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
          <div class="ps-lg-1">
            <div class="d-flex align-items-center justify-content-between">
              <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
              <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
            </div>
          </div>
          <div class="d-flex align-items-center justify-content-between">
            <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
            <button id="bannerClose" class="btn border-0 p-0">
              <i class="mdi mdi-close text-white me-0"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
      <!-- partial:partials/_sidebar.html -->
     @include('pharmacist.sidebar')

      <!-- partial -->
      @include('pharmacist.navbar')
 
        <!-- partial -->
                 <!-- begin:: Content Container-->
                 <div class="container-fluid page-body-wrapper">


                  <div class="container" align="left" style="padding-top:100px;">
      
                @if (session()->has('message'))
               
                <div class="alert alert-sucess">
                  <button type="button" class="close" data-dismiss="alert">x </button>
                  {{session()->get('message')}}
                </div>
                @endif

                <div class="mb-3">
                          <h3>
                              Add Medicine
                          </h3>
                  </div>
                
      
                      <form  action="{{url('upload_medicine')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" class="form-control" style="color:black" type="text" name="name"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="instruction" class="form-label">Instruction</label>
                            <input class="form-control"  type="text"  style="color:black" name="instruction" id="instruction" cols="30"
                            rows="5">
                          </div>
                          <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            {{-- @if(isset($categories)) --}}
                            <select class="form-control" type="text" name="category"  style="color:black" id="category">
                                <option>Select Category</option>
                                @foreach($medicineCategory as $medicineCategories)
                                    <option>{{$medicineCategories->name}}</option>
                                @endforeach
                            </select>
                        {{-- @endif --}}
                          </div>
                          <div class="mb-3">
                            <label for="purchase_price" class="form-label">Purchase Price</label>
                            <input id="purchase_price" class="form-control"  style="color:black" type="number" name="purchase_price"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="sale_price" class="form-label">Sale Price</label>
                            <input id="sale_price" class="form-control"   style="color:black" type="number" name="sale_price"
                            >
                          </div>
                          <div class="mb-3">
                            <label for="quantity" class="form-label">Quantity</label>
                            <input id="quantity" class="form-control" style="color:black" type="number" name="quantity"
                            >
                          </div>
                          
      
                            <div class="mb-3">
                              <label for="company" class="form-label">Company</label>
                              <input id="company" class="form-control"  style="color:black" type="text" name="company"
                             >
                            </div>
                            <div class="mb-3">
                              <label for="expire_date" class="form-label">Expire Date</label>
                              <input class="form-control" style="color:black" type="date" name="expire_date" id="expire_date"
                              placeholder="Select Date"
                              >
                            </div>
                          
                          <input type="submit" 
                          class="btn btn-outline-primary">
                   <input type="reset" class="btn btn-outline-danger" value="Cancel">
                        </form>
                      
      
      
      
                  </div>
      
              </div>
  <!-- begin:: Content -->
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('pharmacist.script')
  </body>
</html>