<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/cdn/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/css/auth.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <title>Signup</title>
</head>

<body class="bg-linear-primary">
    <div class="auth-wrap">
  <div class="form-box-signup bg-white">
    <div class="form-header">Signup</div>
    <div class="form-body">
      <form action="../../app/RequestManager/RequestManager.php" method="post">
        <input type="hidden"  name="request-type" value="signup">
        <div class="mb-3">
          <label>First name</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-user  text-primary"></i></span>
            <input type="text" class="form-control" placeholder="Enter first name" name="first_name" required>
          </div>
        </div>

        <div class="mb-3">
          <label>Last name</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-user  text-primary"></i></span>
            <input type="text" class="form-control" placeholder="Enter last name" name="last_name" required>
          </div>
        </div>

        <div class="mb-3">
          <label>Email</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-envelope  text-primary"></i></span>
            <input type="email" class="form-control" placeholder="Enter email" name="email" required>
          </div>
        </div>

        <div class="mb-3">
          <label>Password</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-lock  text-primary"></i></span>
            <input type="password" class="form-control" placeholder="Enter password" name="pass" required>
          </div>
        </div>

        <div class="mb-3">
          <label> Phone</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-phone  text-primary"></i></span>
            <input type="number" class="form-control" placeholder="Enter phone number" name="phone" required>
          </div>
        </div>


        <div class="mb-3">
          <label>Gender</label>
          <div class="input-group">
            <span class="input-group-text"><i class="fa-solid fa-venus-mars  text-primary"></i></span>
            <select class="form-control" name="gender" required>
              <option class=" text-primary" selected disabled>Select gender</option>
              <option class=" text-primary">Male</option>
              <option class=" text-primary">Female</option>
              <option class=" text-primary">Other</option>
            </select>
          </div>
        </div>

        <button type="submit" class="btn  bg-linear-primary text-white w-100">Signup</button>
      </form>

      <div class="link-text">
        <p>Already have an account? <a class=" text-primary" href="login.html">Login</a></p>
      </div>
    </div>
  </div>
</div>
  <div class="image-signup">
<img src="../../assets/images/signupgirl.png" class="side-img" alt="Signup figure">
 </div>
</body>

</html>