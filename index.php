<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="register.php">
</head>

<body>

  <div class="container">
    <div class="form-box">
      <h1>Register</h1>
      <form action="register.php" method="POST">
        <div class="input-group">
          <div class="input-field">
            <input type="text" name="first-name" id="first-name" required>
            <label for="first-name">First Name</label>
          </div>
          <div class="input-field">
            <input type="text" name="last-name" id="last-name" required>
            <label for="last-name">Last Name</label>
          </div>
        </div>
        <div class="input-field">
          <input type="email" name="email" id="email" required>
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="password" name="password" id="password" required>
          <label for="password">Password</label>
        </div>
        <div class="input-field">
          <input type="password" name="confirm-password" id="confirm-password" required>
          <label for="confirm-password">Confirm Password</label>
        </div>
        <button type="submit">Sign Up</button>
        <p class="login-link">Already have an account? <a href="#">Log in here</a></p>
      </form>

    </div>
  </div>



</body>

</html>