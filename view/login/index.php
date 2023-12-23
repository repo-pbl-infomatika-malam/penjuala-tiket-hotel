<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">

  <link rel="stylesheet"
    type="text/css"
    href="style.css">

  <title>Login</title>
</head>

<body>
  <div class="container">
    <form action="../../controller/login.php"
      method="POST"
      class="login-email">
      <p class="login-text"
        style="font-size: 2rem; font-weight: 800;">Login</p>
      <div class="input-group">
        <input type="email"
          placeholder="Email"
          name="email"
          required>
      </div>
      <div class="input-group">
        <input type="password"
          placeholder="Password"
          name="password"
          required>
      </div>
      <div class="input-group">
        <button name="submit"
          class="btn">LOGIN</button>
      </div>
      <p class="login-register-text">Don't have an account yet? <a href="../register">Sign Up</a></p>
    </form>
  </div>
</body>

</html>