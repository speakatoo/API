<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>  
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
  <div class="form-wrapper">
    <h2 class="text-center">Sign In</h2>
    <form action="signInAction.php" method="POST" id="signInForm">
      <div class="mb-3 mt-3">
        <label for="email" class="mb-1">Username:</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username or email address" name="username">
      </div>
      <div class="mb-3">
        <label for="pwd" class="mb-1">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      </div>
      <button type="submit" class="btn btn-primary mt-2" name="submit">Submit</button>
    </form>
  </div>
</div>

</body>
</html>