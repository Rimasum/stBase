<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <section class="sticky-top">
      <?php require 'stcomponent/_nav.php';?>
    </section>
    <main class="container">
      <h1 class="text-center mt-5">Login Your Account!</h1>
      <div class="row d-flex justify-content-center mt-4">
        <div class="col-6 shadow-sm border p-3 rounded">
          <form action="/stbase/login.php" method="POST">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input
                type="text"
                class="form-control"
                id="username"
                name="username"
              />
            </div>
            <div class="mb-3">
              <label for="userpass" class="form-label">Password</label>
              <input
                type="password"
                class="form-control"
                id="userpass"
                name="userpass"
              />
            </div>
            <div class="d-grid gap-2">
              <button class="btn btn-primary" type="submit">Login</button>
            </div>
          </form>
        </div>
      </div>
    </main>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
