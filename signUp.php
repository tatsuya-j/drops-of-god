<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Sign Up</title>
</head>
<body>
<div style="height: 100vh;">
     <div class="row h-100 m-0">
       <div class="card w-25 mx-auto my-auto">
         <div class="card-headwe text-primary">
           <hi class="card-title h3 mb-0">Create your account</hi>
         </div>
         <div class="card-body">
            <form action="" method="post">
              <label for="first_nanme" class="small">First Name</label>
              <input type="text" name="first_name" id="first_name" class="form-control mb-2" required autofocus>

              <label for="last_nanme" class="small">Last Name</label>
              <input type="text" name="last_name" id="last_name" class="form-control mb-2" required>

              <label for="post_coad" class="small">Post Coad</label>
              <input type="text" name="post_coad" id="post_coad" class="form-control mb-2" required>

              <label for="address" class="small">Address</label>
              <input type="text" name="address" id="address" class="form-control mb-2" required>

              <label for="phone_number" class="small">Phone_Number</label>
              <input type="text" name="phone_number" id="phone_number" class="form-control mb-2" required>

              <label for="email" class="small">Email</label>
              <input type="text" name="email" id="email" class="form-control mb-2" required>

              <label for="usernanme" class="small">UserName</label>
              <input type="text" name="username" id="username" class="form-control mb-2 font-weight-bold" maxlength="15" required>

              <label for="password" class="small">Password</label>
              <input type="password" name="password" id="password" class="form-control mb-2" required>

              <label for="confirm_password" class="small">Confirm_password</label>
              <input type="password" name="confirm_password" id="confirm_password" class="form-control mb-5">

              <button type="submit" class="btn btn-primary btn-block" name="btn_sign_up">Sign Up</button>

              <div class="text-center mt-3">
                  <p class="small">Already have an account? <a href="login.php">Log in.</a></p>
              </div>
               
            </form>   
         </div>
       </div>
     </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>