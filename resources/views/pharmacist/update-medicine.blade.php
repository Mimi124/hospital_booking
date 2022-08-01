
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <base href="/public">
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


            <div class="container" align="left" style="padding-top:100px;">

          @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif
          <div class="mb-3">
            <h3>
                Edit Medicine 
            </h3>
    </div> 
        
                                <!--begin::Form-->
                                <form action="{{url('editMedicine',$medicine->id)}}"
                                      method="POST"
                                      enctype="multipart/form-data">
                                        @csrf
                                        {{-- @if(isset($category))
                                            @method('PUT')
                                        @endif --}}
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            
                                                <input id="name" class="form-control" style="color:black" type="text" name="name"
                                                value="{{$medicine->name}}" required >
                                        
                                        </div>
                                        <div class="mb-3">
                                            <label for="instruction" class="form-label">Instruction</label>
                                            <input class="form-control"  type="text"  style="color:black" name="instruction" id="instruction" cols="30"
                                            rows="5" value="{{$medicine->instruction}}">
                                          </div>
                                          <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            {{-- @if(isset($medicineCategory)) --}}
                                            <select class="form-control" type="text" name="category"  style="color:black" id="category">
                                                <option>Select Category</option>
                                                @foreach($medicineCategory as $medicineCategories)
                                                    <option
                                                        value="{{$medicineCategories->id}}" @if(isset($medicine)) {{$medicineCategories->id == $medicine->category_id ? 'selected' : ''}} @endif>{{$medicineCategories->name}}</option>
                                                @endforeach
                                            </select>
                                        {{-- @endif --}}
                                          </div>
                                          <div class="mb-3">
                                            <label for="purchase_price" class="form-label">Purchase Price</label>
                                            <input id="purchase_price" class="form-control"  style="color:black" type="number" name="purchase_price"
                                            value="{{$medicine->purchase_price}}">
                                          </div>
                                          <div class="mb-3">
                                            <label for="sale_price" class="form-label">Sale Price</label>
                                            <input id="sale_price" class="form-control"   style="color:black" type="number" name="sale_price"
                                            value="{{$medicine->sale_price}}">
                                          </div>
                                          <div class="mb-3">
                                            <label for="quantity" class="form-label">Quantity</label>
                                            <input id="quantity" class="form-control" style="color:black" type="number" name="quantity"
                                            value="{{$medicine->quantity}}">
                                          </div>
                                          
                      
                                            <div class="mb-3">
                                              <label for="company" class="form-label">Company</label>
                                              <input id="company" class="form-control" style="color:black" type="text" name="company"
                                              value="{{$medicine->company}}">
                                            </div>
                                            <div class="mb-3">
                                              <label for="expire_date" class="form-label">Expire Date</label>
                                              <input class="form-control" style="color:black" type="date" name="expire_date" id="expire_date"
                                              placeholder="Select Date"
                                               value="{{$medicine->expire_date}}">
                                            </div>
                                          
                                            <button type="submit" class="btn btn-primary">Update</button>
                                        </form>
                                      
                                <!--end::Form-->
                            </div>
                            <!--end::Portlet-->
                        </div>
                    </div>
                </div>
      <!-- end:: Content Container-->
    @include('pharmacist.script')
  </body>
</html>