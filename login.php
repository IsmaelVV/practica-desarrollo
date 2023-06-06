<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
</head>
<body>
  <header>
    <h1>Welcome to My Website</h1>
  </header>
  
  <div class="container">
    <div class="user-image-container">
      <img src="assets/img/user.png" alt="User Image">
    </div>
    <h2>Login</h2>
    <form action="functions/logearse.php" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="usuario" name="usuario" placeholder="Enter your username" required>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="clave" name="clave" placeholder="Enter your password" required>
        </div>
        <button type="submit">Entrar</button>
      </form>
  </div>

  <footer>
    <p>&copy; 2023 My Website. All rights reserved.</p>
  </footer>
</body>
</html>
