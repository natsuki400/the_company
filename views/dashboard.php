<?php
session_start();

require '../classes/User.php';

$user = new User;

// $user->getAllUsers() <--this returns a matrix
//a matrix is amulti dimensional array
//if the returned value is an aarray, automatic the receiver will become an array
//$all_users <-- is an array
$all_users = $user->getAllUsers();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="../assets/CSS/style.css">
  <title>Dashboard</title>
</head>
<body>
  <nav class="navbar navbar-expand navbar-dark bg-dark" style="margin-bottom: 80px;">
    <div class="container">
      <a href="dashboard.php" class="navbar-brand">
        <h1 class="h3">The Company</h1>
      </a>
      <dev class="navbar-nav">
        <span class="navbar-text"><?= $_SESSION['full_name'] ?></span>
        <form action="../actions/logout.php" class="d-flex ms-2" method="post">
          <button class="text-danger bg-transparent border-0" type="submit">Log Out</button>
        </form>
      </dev>
    </div>
  </nav>
<!-- This is sa sample changes -->
  <main class="row justify-content-center gx-0">
    <div class="col-6">
      <h2 class="text-center">USERS LIST</h2>
      <table class="table table-hover align-middle">
        <thead>
          <tr>
            <th><!--FOR PHOTO--></th>
             <th>ID</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Username</th>
             <th><!--FOR ACTION BUTTONS - EDIT AND DELETE--></th>
          </tr>
        </thead>
        <tbody>
          <?php
          while($user = $all_users->fetch_assoc()){
          
          ?>
          <tr>
            <td>
              <?php
              if($user['photo']){

              ?>
              <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>" class="d-block mx-auto dashboard-photo joe">
              <?php
              }else{
              ?>
              <i class="fa-solid fa-user text-secondary d-block text-cfenter dashboard-icon"></i>
              <?php
              }
              ?>
            </td>
            <td><?= $user['id'] ?></td>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['last_name'] ?></td>
            <td><?= $user['username'] ?></td>
            <td>
              <?php
              if($_SESSION['id'] == $user['id']){
              ?>
              <a href="edit-user.php" class="btn btn-outline-warning">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>

              <a href="delete-user.php" class="btn btn-outline-danger">
                <i class="faa-regular fa-trash-can"></i>
              </a>
              <?php
              }
              ?>
            </td>
          </tr>
          <?php
              }
              ?> 
        </tbody>
      </table>
    </div>
  </main>
</body>
</html>

