<?php
$showAlert = false;
$showErr = false;
// echo $_SERVER['REQUEST_METHOD'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'stcomponent/_db.php';
  $username = $_POST["username"];
  $email = $_POST["useremail"];
  $password = $_POST["userpass"];
  $cpassword = $_POST["cuserpass"];
  $exist = false;
  if (($password == $cpassword) && $exist == false) {
    $sql = "INSERT INTO `users` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $showAlert = true;
    }
  } else {
    $showErr = "Password Do Not Match!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Register</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
</head>

<body>
  <section class="sticky-top">
    <?php require 'stcomponent/_nav.php'; ?>
    <!-- <?php
          if ($check) {
            echo '<div
                  class="alert alert-success alert-dismissible fade show p-1 m-1"
                  role="alert"
                >
                  <strong>Database Connect Successfully!</strong>
                  <button
                    type="button"
                    class="btn-close p-1 m-1"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button>
                </div>';
          } else {
            '<div
                  class="alert alert-success alert-dismissible fade show p-1 m-1"
                  role="alert"
                >
                  <strong>Database Connect Error!</strong>
                  <button
                    type="button"
                    class="btn-close p-1 m-1"
                    data-bs-dismiss="alert"
                    aria-label="Close"
                  ></button>
                </div>';
          };
          ?> -->
    <?php
    if ($showAlert) {
      echo ' <div
        class="alert alert-success alert-dismissible fade show p-1 m-1"
        role="alert"
      >
        <strong>Success!</strong> Your Account is Created Successfully! You Can
        <a href="/stbase/login.php" class="link-primary">Login</a> Now.
        <button
          type="button"
          class="btn-close p-1 m-1"
          data-bs-dismiss="alert"
          aria-label="Close"
        ></button>
      </div>';
    }
    if ($showErr) {
      echo ' <div
        class="alert alert-danger alert-dismissible fade show p-1 m-1"
        role="alert" id="showErr"
      >
        <strong>Error! </strong>' . $showErr . '
        <button
          type="button"
          class="btn-close p-1 m-1"
          data-bs-dismiss="alert"
          aria-label="Close"
        ></button>
      </div>';
    }
    ?>
  </section>
  <main class="container">
    <h1 class="text-center mt-3">Register an Account!</h1>
    <div class="row d-flex justify-content-center mt-4">
      <div class="col-6 shadow-sm p-3 border rounded">
        <form action="/stbase/register.php" method="post">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" />
          </div>
          <div class="mb-3">
            <label for="useremail" class="form-label">Email address</label>
            <input type="email" class="form-control" id="useremail" name="useremail" aria-describedby="emailHelp" />
          </div>
          <div class="mb-3">
            <label for="userpass" class="form-label">Password</label>
            <input type="password" class="form-control" id="userpass" name="userpass" />
          </div>
          <div class="mb-3">
            <label for="cuserpass" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="cuserpass" name="cuserpass" />
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-primary" type="submit">Register</button>
          </div>
        </form>
      </div>
    </div>
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <script src="./js/alert.js"></script>
</body>

</html>