
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7">
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">PATIENT BOOKING FORM</h3>


            <form action="/patients"   method="POST">

            <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="patient_id">PatientId</label>
                    <input type="text"  id="patient_id"  name="patient_id"  class="form-control form-control-lg"/>
                  </div>
                </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <label class="form-label" for="firstName">First Name</label>
                    <input type="text"  id="fname"  name="fname"  class="form-control form-control-lg"/>
                  </div>
                </div>

                <div class="col-md-6 mb-4">
                  <div class="form-outline">                    
                    <label class="form-label" for="lastName">Last Name</label>
                    <input type="text"  id="lname"  name="lname"   class="form-control form-control-lg"/>
                  </div>
                </div>
              
              <div class="row">
                <div class="col-md-6 mb-4 d-flex align-items-center">
                  <div class="form-outline datepicker w-100">    
                    <label for="birthdayDate" class="form-label">Date Of Birth</label>
                    <input type="text"  id="birthdayDate"  name="dob"  class="form-control form-control-lg"/>
                  </div>
                </div>

              <div class="row">
                <div class="col-md-6 mb-4 pb-2">
                    <div class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="emailAddre"  name="email"  class="form-control form-control-lg" />                    
                </div>

              <div class="col-md-6 mb-4">
                <div class="form-outline">                    
                    <label class="form-label" for="address">Address</label>
                    <input type="text"  id="lname"  name="address"  class="form-control form-control-lg" />
                </div>

              <div class="col-md-6 mb-4 pb-2">
                <div class="form-outline">
                    <label class="form-label" for="phone">Phone Number</label>  
                    <input type="tel" id="phone" name="phone"  class="form-control form-control-lg" />                    
                </div>    

                <div class="col-md-6 mb-4">
                  <h6 class="mb-2 pb-1">Gender</h6>

                  <div class="form-check form-check-inline">                    
                    <label class="form-check-label" for="femaleGender">Female</label>
                    <input class="form-check-input"  type="radio"  name="famale"  id="femaleGender"  value="option1"/>
                  </div>

                  <div class="form-check form-check-inline">                    
                    <label class="form-check-label" for="maleGender">Male</label>
                    <input class="form-check-input"  type="radio"  name="male"  id="maleGender"  value="option2"/>
                  </div>

                  <div class="form-check form-check-inline">
                    <label class="form-check-label" for="otherGender">Other</label>
                    <input class="form-check-input"  type="radio"  name="other"  id="otherGender"  value="option1"/>
                  </div>
                </div>
                           
              <div class="col-md-6 mb-4 pb-2">
                 <div class="form-outline">
                    <label class="form-label" for="description">Description</label> 
                    <textarea class="form-control" rows="3" placeholder="Tell us what your problem is"></textarea>                
                 </div>
              </div>

              <div class="row">
                <div class="col-12">
                <label class="form-label select-label">Choose Doctor</label>
                  <select class="select form-control-lg">
                    <option value="1" disabled>Choose option</option>
                    <option value="2">Subject 1</option>
                    <option value="3">Subject 2</option>
                    <option value="4">Subject 3</option>
                  </select>
                </div>
              <div>             
              <div class="mt-4 pt-2">
                <input class="btn btn-primary btn-lg" type="submit" value="Book Appointment" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>