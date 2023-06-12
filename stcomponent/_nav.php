<?php
$btnLogout = false;

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light navbar-light">
  <div class="container">
    <a class="navbar-brand fw-bold fs-3" href="/stbase/">stBase</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/stbase/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stbase/dashboard.php">Dashboard</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary" href="/stbase/login.php" role="button">Login</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary ms-2" href="/stbase/register.php" role="button">Register</a>
        </li>
        <li class="nav-item">
        <a class="btn btn-primary ms-2" href="#" role="button">Logout</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</body>
</html>
