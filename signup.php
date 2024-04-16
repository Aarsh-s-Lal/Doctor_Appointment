<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Form</title>
  <link rel="stylesheet" href="/css/signup.css">
</head>
<body>
  <div class="container">
    <h1>Sign Up</h1>
    <form id="signupForm" action="connection.php" method="post">
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" id="mail" name="mail" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="pass" name="pass" required>
      </div>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="profession">Profession</label>
        <input type="Text" id="profession" name="profession" required>
      </div>
      <div class="form-group">
        <button type="submit">Sign Up</button>
      </div>
    </form>
    
  </div>
</body>
</html>

