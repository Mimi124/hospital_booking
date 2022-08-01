<!DOCTYPE html>
<html lang="en">
  <head>


  @include('accountant.css')
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
     @include('accountant.sidebar')

      <!-- partial -->
      @include('accountant.navbar')
 
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
                              Add Payment
                          </h3>
                  </div>
                
      
                      <form  action="{{url('upload_billing')}}"
                        method="POST"
                        enctype="multipart/form-data">
                          @csrf
                          <div class="mb-3">
                            <label for="patient_id" class="form-label">Patient ID</label>
                            <input id="patient_id" class="form-control"  style="color:black" type="number" name="patient_id"
                            placeholder="Patient ID" 
                           >
                          </div>
                      
                          <div class="mb-3">
                            <label for="bill_date" class="form-label">Bill Date</label>
                            <input id="bill_date" class="form-control"  style="color:black" type="date" name="bill_date"
                            placeholder="Bill Date" 
                           >
                          </div>
                        {{-- @endif --}}
                          
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount To Pay</label>
                            <input id="amount" class="form-control"  style="color:black" type="number" name="amount"
                            placeholder="Amount To Pay" 
                           >
                          </div>
                            
                          
                          <input type="submit" 
                          class="btn-lg btn-primary">
                   <input type="reset" class="btn-lg btn-danger" value="Cancel">
                        </form>
                      
      
      
      
                  </div>
      
              </div>
  <!-- begin:: Content -->
    <!-- container-scroller -->
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('accountant.script')
  </body>
</html>