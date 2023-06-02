<?php
include 'dbconnect.php';
session_start();



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
      <link href='https://fonts.googleapis.com/css?family=Lexend' rel='stylesheet'>
    
    <title>Register | PPIM Database</title>    
    
<style>
.text-center {
        text-decoration-color: 560000;
    }
    
body {
         font-family:  'Lexend Light', 'SF Pro Display', -apple-system, BlinkMacSystemFont, "Helvetica Neue", 'Montserrat', 'Poppins';
    }

* {
  box-sizing: border-box;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  padding: 40px;
  width: 30%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>
    
         <nav class="navbar fixed-top navbar-expand-sm bg-danger navbar-danger" id="navbar" >
  <div class="container-fluid" >

  </div>
        </nav>
    
    </head>
    
<body>

<form id="regForm" method="post" action="/PPIM/register_proc.php">
  <h1 class="display-3 text-secondary text-center">register.</h1>
        <p class="text-muted text-center">Please enter your credentials below to proceed.</p>
  <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <p><input placeholder="Student ID" oninput="this.className = ''" name="student_id"></p>
    </div>
    
  <div class="tab">
    <p><input placeholder="First Name" oninput="this.className = ''" name="fname"></p>
    <p><input placeholder="Last Name" oninput="this.className = ''" name="lname"></p>
  </div>
  <div class="tab">
    <p><input placeholder="Passport No." oninput="this.className = ''" name="passport"></p>
    <p><input placeholder="iKad No." oninput="this.className = ''" name="ikad"></p>
  </div>
  <div class="tab">Date of Birth:
    <input type="date" id="dob" name="dob"
       min="1900-01-01" value="Date of Birth" max="<?php 
                                                   $today = date('Y-m-d');
                                                   $date = strtotime('today -17 year');
                                                   echo date('Y-m-d', $date); ?>">
      
      <br><br>
      <p><input placeholder="Phone Number" oninput="this.className = ''" name="phone"></p>
      
      <p><input placeholder="Address in Indonesia" oninput="this.className = ''" name="add_in"></p>
      
  </div>
  <div class="tab">   
    <p><select class="form-select" aria-label="Default select example" name="campus">Campus:
  <?php while($row1 = mysqli_fetch_array($res)):;?>
        <option><?php echo $row1[1];?></option>
        <?php endwhile;?>
</select></p>
      
      <p><input placeholder="Address in Malaysia" oninput="this.className = ''" name="add_my" ></p>
      
    
    <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="curr" name="curr">
  <label class="form-check-label" for="curr">Currently living in Malaysia</label>
</div>
      <script> 
      $('#curr').change(function(){
          if($(this).prop('checked')){
              $('#curr').val('Malaysia');
          } else
          {
              $('#curr').val('Indonesia');
          }
      });
      </script>
       <br>
      <br>
      
      </div>
    
    <div class="tab">Status Keanggotaan PPIM:
        <p><select class="form-select" aria-label="Default select example" name="statusku">
  <option selected value="Biasa">Biasa</option>
  <option value="Penuh">Penuh</option>
</select></p>
    </div>
        
    <div class="tab">
        <p><input class="form-control" placeholder="Email" oninput="this.className = ''" name="email" type="email"></p>
        
    <p><input placeholder="Password" oninput="this.className = ''" name="pwd" type="password"></p>
        <p><input placeholder="Confirm Password" oninput="this.className = ''" name="cpwd" type="password"></p>
        
    
    </div>
    
      

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" class="btn btn-primary"  onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" class="btn btn-danger" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
      <span class="step"></span>
       <span class="step"></span>
       <span class="step"></span>
  </div>
    
    <div class="text-center">
            <p class="text-muted">Already have account? <a class="text-dark" href="index.php">Login here.</a></p>
        </div>
</form>
    

    
<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
    
        //password and confirm password not the same
    if(y=x[6] &&
        document.getElementsByName("pwd").value !== document.getElementsByName("cpwd").value){
        document.getElementsByName("pwd").className += "invalid";
        document.getElementsByName("cpwd").className += "invalid";
        valid = false;
  }
    
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
    

</body>
    
       <footer>

     <nav class="navbar fixed-bottom navbar-expand-sm bg-danger navbar-danger" id="navbar2" >
  <div class="container-fluid">
      
           <span class="text-light text-center">Copyright © <script>document.write(new Date().getFullYear())</script> PUSDATIN PPIM | <span 
                                                               style="font-family: 'Lexend Semibold'"> All rights reserved.</span></span>
  </div>
        </nav>
        </footer>
</html>
