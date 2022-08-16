
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  
    <!-- plugins:css -->
  @include('doctor.css')
  </head>
  <body>
  @include('doctor.banner')
      <!-- partial:partials/_sidebar.html -->
     @include('doctor.sidebar')

      <!-- partial -->
      @include('doctor.navbar')
 
     
             
        {{-- <div class="row "> --}}
          <div class="col-12 grid-margin">
            {{-- <div class="card"> --}}
              <div class="card-body">
                <h4 class="card-title" style ="padding-top:60px;margin:10px;"></h4>
                <div class="table-responsive" style="padding:50px;">
                  <table class="table table-striped table-hover">
                    <thead class="thead-dark">
                      <tr>
                        
                        <th scope="col">PAYROLL ID</th>
                        <th scope="col">MONTH</th>
                        <th scope="col">YEAR</th>
                        <th scope="col">BASIC SALARY</th>
                        <th scope="col">ALLOWANCE</th>
                        <th scope="col">DEDUCTIONS</th>
                        <th scope="col">NET SALARY</th>
                        <th scope="col">STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($payrolls as $payroll)
                      <tr>
                        <td>{{ $payroll->payroll_id }}</td>
                        <td>{{ $payroll->month }}</td>
                        <td>{{ $payroll->year }}</td>
                        <td>{{ $payroll->basic_salary}}</td>
                        <td>{{ $payroll->allowance }}</td>
                        <td>{{ $payroll->net_salary }}</td>
                        {{-- <td>{{ $payroll->status }}</td> --}}
                        <td>
                            @if ($appointment->status === 'Paid')
                                <span class="btn btn-outline-success">Paid</span>
                            @elseif ($appointment->status === 'Unpaid')
                                <span class="btn btn-outline-danger">Unpaid</span>
                            @else
                                <span class="badge badge-outline-warning">Pending</span>
                            @endif
                            </td>
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </body> 
</html>

                       






































          
      
    <!-- container-scroller -->
    
    <!-- plugins:js -->
   
    <!-- End custom js for this page -->
    @include('admin.script')
  </body>
</html>