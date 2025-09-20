
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/auth.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="../../assets/css/cdn/finalbootstrap.min.css">
  
  <title>Login</title>
</head>
<body class="bg-linear-primary">
 <div class="auth-wrap">
    <img src="../../assets/images/logingirl.png" class="side-imgg" alt="Key">
  <div class="form-box bg-white">
    <div class="form-header">Login</div>
    <div class="form-body">
      <form action="../../app/RequestManager/RequestManager.php" method="post">
        <input type="hidden"  name="request-type" value="login">
        <div class="mb-3">
          <label>Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope text-primary"></i></span>
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
             <div class="invalid-feedback">
              Please enter a valid email.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label >Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock text-primary"></i></span>
            <input type="password" class="form-control" id="password" name="pass" placeholder="Enter password" minlength="4" required>
          </div>
        </div>
        <button type="submit" class="btn bg-linear-primary text-white w-100" ><a  href="../../views/layout/main.php">Login</a></button>
      </form>
      <div class="link-text mt-3 ">
        <p>Don't have an account? <a class="text text-primary" href="signup.php">Signup </a></p>
      </div>
    </div>
  </div>
    </div>
</body>
</html>




