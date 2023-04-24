<?php include 'header.php'; ?>


<div class="container mt-3">
  <h3>Registration Form</h3>
  <p>Please complete and submit the form</p>
    
  <form name="register" action="registerAction.php" class="was-validated">
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
    <div class="mb-3">
      <label for="pwd" class="form-label">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
      
    <div class="mb-3">
      <label for="dob" class="form-label">Date of Birth:</label>
      <input type="text" class="form-control" id="dob" placeholder="Enter your date of birth" name="DoBirth" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
      <div class="mb-3">
      <label for="fn" class="form-label">First Name:</label>
      <input type="text" class="form-control" id="fn" placeholder="Enter your first name" name="fname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
       <div class="mb-3">
      <label for="ln" class="form-label">Last Name:</label>
      <input type="text" class="form-control" id="ln" placeholder="Enter your last name" name="lname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    
      
      
       
       
    </div>
      
      
    </div>
    <div class="form-check mb-3">
      <input class="form-check-input" type="checkbox" id="myCheck"  name="remember">
      <label class="form-check-label" for="myCheck">Yes, I would like to receive emails</label>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  
</div>

</body>
</html>