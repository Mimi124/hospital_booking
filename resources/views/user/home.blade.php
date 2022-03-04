<!DOCTYPE html>
<html lang="en">
<head>
  @include('user.css')
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

 @include('user.header')

  @if (session()->has('message'))
         
          <div class="alert alert-sucess">
            <button type="button" class="close" data-dismiss="alert">x </button>
            {{session()->get('message')}}
          </div>
          @endif

  @include('user.body')

  <!-- .page-section -->
@include('user.banner')
   <!-- .bg-light -->
{{-- @php 
dump($doctor);
@endphp --}}
 @include('user.doctor')

 @include('user.news')
   <!-- .page-section -->

 @include('user.appointment')

 
  @include('user.footer')

@include('user.script')
  
</body>
</html>