@if ($errors->any())
<div class="alert alert-danger d-flex align-items-center" role="alert">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
      <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </svg>
        <div>ERROR</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="post" >
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="hidden" class="form-control" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="hidden" class="form-control" name="user_id" >
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor_id" id="doctor_id"  class="custom-select" required>
              <option>--Select Doctor--</option>
              @foreach($doctor as $doctors)
              <option value="{{$doctors->id}}" class="form-control">{{$doctors->name}} | {{$doctors->speciality}}</option>
              @endforeach
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" class="form-control" name="number" placeholder="Number.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message"name="message" class="form-control" rows="6" placeholder="Enter message.." required></textarea>
          </div>
        </div>

        {{-- <button type="submit" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button> --}}
        <button class="btn btn-outline-dark" type="submit">Submit Request</button>

      </form>
    </div>
  </div> <!-- .page-section --> 
  
  {{-- value="{{$doctor->id}} --}}
