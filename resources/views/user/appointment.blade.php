@if ($errors->any())
<div class="alert alert-danger d-flex align-items-center" role="alert">
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

      <form class="main-form" action="{{url('appointment')}}" method="post" enctype="multipart/form">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="user_name" placeholder="Full name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" class="form-control" name="user_email" placeholder="Email address.." required>
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
