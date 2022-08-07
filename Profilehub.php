<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
    />
    <link rel="icon" href="favicon1.png" type="image/x-icon" />
    <link rel="stylesheet" href="style.css" />
    <title>Superior Films</title>
  </head>
  <body>
    <!--navbar-->
    <nav
      class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top navbar-style"
    >
      <div class="container">
        <a href="" class="navbar-brand">Superior Films</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon vew"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="index.php" class="nav-link">Go Back To Home Page</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="text-center my-4">Verified Profiles</h1>
        <hr />
        <?php include 'dbconnect.php'?>
        <div class="row">
        <?php 
        session_start();
      if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
        $sql ="SELECT * FROM `users` WHERE is_verified = 1"; 
        $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['username'];
        $email = $row['email'];
        $interest = $row['interest'];
        $mobile = $row['number'];
        $location = $row['location'];
        $info = $row['info'];
      echo'<div class="col-md-4">
      <div class="card mx-4 my-3" style="width: 18rem;">
      <img class="card-img-top" src="https://www.nicepng.com/png/detail/136-1366211_group-of-10-guys-login-user-icon-png.png" style="height:165px;" alt="Card image cap">
      <div class="card-body">
        <h3 class="card-title">'.$name.'</h3>
        <h4 class="card-text">'.$interest.'</h4>
        <h5 class="card-text">'.$location.'</h5>
        <p class="card-text">'.$info.'</p>
        <a class="btn btn-primary" href="mailto:'.$email.'">Mail Now</a>
        <a class="btn btn-primary" href="tel:'.$mobile.'">Call Now</a>
      </div>
    </div>
    </div><br>';}
      }
      else{
        echo '<div class="container belogin">
        <div class="belogintext">
          <p class="lead">SignUp Now to join Community</p>
          <a
          class="btn btn-primary" href="index.php">
          SignUp
        </a>
        </div>
      </div>';}?>
  </div>
    </div>
    <!--footer-->


    <footer
      class="p-5 bg-dark text-center text-white position-relative mb-0 foottt"
    >
      <div class="container">
        <p class="lead">Copyright &copy; 2022 Superior Films</p>
        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
