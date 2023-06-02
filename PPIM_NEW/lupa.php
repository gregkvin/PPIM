<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    
    <title>Login | PPIM Database</title>
<style>
    .text-center {
        text-decoration-color: 560000;
    }
    
    body {
        font-family: 'Lexend Light', 'SF Pro Display', -apple-system, BlinkMacSystemFont, "Helvetica Neue", 'Montserrat', 'Poppins';
    }
    </style>
    
     <nav class="navbar fixed-top navbar-expand-sm bg-danger navbar-danger" id="navbar" >
  <div class="container-fluid" >

  </div>
        </nav>
    
    </head>

    
<body>
    <div class="container">
        <br><br><br><br>
        <h1 class="display-3 text-secondary text-center"><span 
                                                               style="font-family: 'Lexend Semibold'">selamat </span>
            <span style="font-family: 'Lexend Thin'">datang.</span></h1>
        <p class="text-muted text-center">Forgotten your password already? <br>Please enter your registered email below! We'll help you recover your account.</p>
    </div>
    
        <?php 
	if(isset($_GET['msg'])){
		if($_GET['msg'] == "fail"){
			echo "<div class='text-danger text-center' style='margin-bottom: 30px; font-family:'Lexend Semibold';'>
                                        <b>Oops! Email is not registered yet!</b>
                                    </div>";
		}
	}
	?>
    
    
    <form method="post" action="handler.php">
    <div class="d-flex justify-content-center">
    <div class="form-row"> 
        <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-email">
             <svg xmlns="http://www.w3.org/2000/svg" width="18" height="24" fill="currentColor" class="bi bi-envelope" viewBox="-3 -2.5 20 20">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
</svg>
            </span>
            </div>
        <input type="email" name="email" class="form-control"   placeholder="Email" required>
        </div>
        
        <div class="text-center">
                    <br>
            <span> <button type = "submit" name = "submit" class="btn btn-danger" value="submit" >Submit</button>
            
            </span>
            </div>
        <br>
        <div class="text-center">
            <p class="text-muted">Don't have account? <a class="text-dark" href="register.php">Register here.</a></p>
        </div>
    </div>
    </div>
        </form>
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