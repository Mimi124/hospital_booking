
@extends('layout.master')

@section('page_title', 'Patients|DoctorSelected List)

@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">PatientId</th>
      <th scope="col">FirstName</th>
      <th scope="col">lastName</th>
      <th scope="col">Date Of Birth</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
      <th scope="col">Gender</th>
      <th scope="col">Description</th>
      <th scope="col">DoctorSelected</th>
      

    </tr>
  </thead>
  
  <tbody>
  @foreach($patients as $patient)  
       
    <tr class="table-primary">
      <th scope="row"></th>
      <td>{{$patient->patient_id}}</td>
      <td>{{$patient->fname}}</td>
      <td>{{$patient->lname}}</td>
      <td>{{$patient->dob}}</td>
      <td>{{$patient->email}}</td>
      <td>{{$patient->address}}</td>
      <td>{{$patient->phone}}</td>
      <td>{{$patient->gender}}</td>
      <td>{{$patient->description}}</td>
      <td>{{$patient->doctor}}</td>            
    </tr>    
  @endforeach  
  </tbody>
</table>