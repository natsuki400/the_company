<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Log In</title>
</head>
<body class="bg-light">
  <div style="height: 100vh;">
    <div class="row h-100 m-0">
      <div class="card w-25 my-auto mx-auto">
        <div class="card-header bg-white border-0 py-3">
          <h1 class="text-center">LOGIN</h1>
        </div>
        <div class="card-body">
          <form action="../actions/login.php" method="post">
            <input type="text" name="username" class="form-control mb-2" placeholder="USERNAME" required autofocus>
            <input type="password" name="password" id="password" class="form-control mb-2" placeholder="PASSWORD">
            <button type="submit" class="btn btn-primary w-100">Log In</button>
          </form>

          <p class="text-center mt-3 small"><a href="register.php">Create Account</a></p>
        </div>
      </div>
    </div>
  </div>

  
</body>
</html>