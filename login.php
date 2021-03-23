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
<title>Login</title>
</head>
<body>    
<div style="height: 100vh;">
     <div class="row h-100 m-0">
       <div class="card w-25 mx-auto my-auto">
         <div class="card-headwe text-primary">
           <hi class="card-title h3 mb-0">The Movie Geek</hi>
         </div>
         <div class="card-body">
            <form action="" method="post">
            <label for="usernanme" class="small">UserName</label>
              <input type="text" name="username" id="username" class="form-control mb-2 font-weight-bold" maxlength="15" required autofocus>
              
              <label for="password" class="small">Password</label>
              <input type="password" name="password" id="password" class="form-control mb-5" required>

              <button type="submit" class="btn btn-primary btn-block" name="btn_log_in">Log in</button>
            </form>

            <div class="text-center mt-4">
              <a href="signUp.php" class=""small>Create Account</a>

            </div>
         </div>
       </div>
     </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>