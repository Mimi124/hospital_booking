<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('user.header')
<div align="center" style="padding:70px">

  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Doctor Name</th>
        <th scope="col">Date</th>
        <th scope="col">Message</th>
        <th scope="col">Status</th>
        <th scope="col">Cancel Appointment</th>
     </tr>
    </thead>
    <tbody>
      @foreach ($appointments as $appointment)
      <tr>
        
        <th>{{$appointment->id}}</th>
        <td>{{$appointment->doctor}}</td>
        <td>{{$appointment->date}}</td>
        <td>{{$appointment->message}}</td>
        <td>{{$appointment->status}}</td>
        <td><a class="btn btn-danger" onclick="return confirm('Are you sure you want to cancel?')" href="{{url('cancel_appointment',$appointment->id)}}">Cancel</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>



</div>
 
@include('user.script')
  
</body>
</html>