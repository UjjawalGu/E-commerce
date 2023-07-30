<?php
session_start();

//include database connection 
include 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    header('Location: login.php');
    exit;
  }

  // Check if connection is still open
  if (!mysqli_ping($conn)) {
    die("Connection lost");
  }

  $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header('location: ../index.php');

    exit;
  } else {

    $_SESSION['error'] = 'Invalid username or password';

    header('Location: login.php');
    exit;
  }
} else if (isset($_POST['logout'])) {
  session_destroy();
  header('Location: login.php');
  exit;
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Login Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!--- Awesome Font link --->
  <script src="https://kit.fontawesome.com/1711676806.js" crossorigin="anonymous"></script>


</head>

<body>

  <main>
    <section class="vh-100 mt-sm-0">
      <div class="container py-5  h-100">
        <div class="row d-flex justify-content-center align-items-center mt-5 ">
          <div class="col col-xl-10">
            <div class="card">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img src="https://i.pinimg.com/736x/77/9a/a2/779aa206f2d860cb79e3c0b2e5dfdbe6.jpg" alt="side image here" class="img-fluid rounded-2" />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">

                    <form method="POST" action="login.php" class="form-group ">

                      <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="https://www.linkpicture.com/q/log_5.png" alt="logo here" class="mx-auto">
                      </div>



                      <h4 class="text-center  fw-normal mb-3 pb-3 align-items-center fw-bold">
                        Sign into your account
                      </h4>


                      <div class="form-outline mb-4">
                        <label class="form-label fw-bold">User Id</label>
                        <input type="email" name="username" class="form-control form-control-lg" />
                      </div>

                      <div class="form-outline mb-4">
                        <label class="form-label fw-bold">Password</label>
                        <input type="password" name="password" class="form-control form-control-lg" />

                      </div>

                      <div class="pt-1 mb-4 text-center">
                        <button class="btn btn-light  btn-lg btn-outline-primary border-5" type="submit" name="submit">Login</button>
                      </div>



                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>