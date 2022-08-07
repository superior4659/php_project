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
  <?php include 'dbconnect.php'?>
  <?php
    session_start();
    echo '<body>
    <!--navbar-->
    <nav
      class="navbar navbar-expand-lg bg-dark navbar-dark py-2 fixed-top navbar-style"
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
              <a href="index.php" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
              <a href="About.php" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="Projects.php" class="nav-link">Projects</a>
            </li>
             <li class="nav-item">
              <a href="Cont.php" class="nav-link">Contact Us</a>
            </li>'?>
            <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
            echo'<button
              class="btn btn-primary"
              onclick=window.location.href="logout.php"
            >
             LogOut
            </button>
          </ul>
        </div>
      </div>
    </nav>';}
            else{
                echo'</ul>
                </div>
              </div>
            </nav>';
            }
  ?>
  <?php echo'

    <!--intro-->

    <section class="bg-dark text-light p-5 text-center text-sm-start introc">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>'?>
          <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
            echo '<h1>Welcome <span class="text-primary">'.($_SESSION['username']).'</span> To <span class="text-warning">Superior Films</span></h1>
            <p class="lead my-4">
              The place where you can make your scripts real by adding best
              cinematography and top notch editing .
            </p>';
          }
          else{
            echo '<h1>Welcome To <span class="text-warning">Superior Films</span></h1>
            <p class="lead my-4">
              The place where you can make your scripts real by adding best
              cinematography and top notch editing .
            </p>
            <button
              class="btn btn-primary butt"
              data-bs-toggle="modal"
              data-bs-target="#signupModal"
            >
              SignUp
            </button>
            <button
              class="btn btn-light mbutt"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
            >
              Login
            </button>';}?>
          <?php echo'</div>
          <img class="img-fluid w-50 d-none d-sm-block"
          src="img/undraw_fashion_photoshoot_mtq8.svg"
        </div>
      </div>
    </section>

    <!--services-->
    <section class="p-5">
      <div class="container">
        <div class="row text-center allcards">
          <div class="col-md each">
            <div class="card bg-dark text-light">
              <div class="card-body cardho text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-camera-reels"></i>
                </div>
                <h5 class="card-title mb-3">Great Visuals</h5>
              </div>
            </div>
          </div>
          <div class="col-md each">
            <div class="card bg-danger text-light">
              <div class="card-body cardho text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h5 class="card-title mb-3">Best Team</h5>
              </div>
            </div>
          </div>
          <div class="col-md each">
            <div class="card bg-dark text-light">
              <div class="card-body cardho text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h5 class="card-title mb-3">Top-Notch Editing</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-secondary text-light p-5">
      <div class="container">
        <div class="d-md-flex flex-column align-items-center">
        '?>

            <?php 
            if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
                echo '
          <h3 class=" mb-3 ms-auto text-center">
            Congrats on Joining the community! Check more visits and people now. Click the button below 
          </h3>
            <div class="input-group dibtn">
            <button
                class="btn btn-success btn-lg "
                type="button"
                
                
                id="button-addon2"
              >
              <a href="Profilehub.php" class="nav-link opbtn">View Community</a>
               
              </button>';
            }
            else{
            echo '
            <h3 class=" mb-3 ms-auto text-center">
            Are you an Actor or Cinematographer or Editor searching for
             oppurtunities? Then Dont get late.Click here and Share your Profile 
          </h3>
            <div class="input-group dibtn">
            <button
              class="btn btn-success btn-lg "
              type="button"
              
              
              id="button-addon2"
            >
            <a href="Profilehub.php" class="nav-link opbtn">Join Community</a>
             
            </button>'
            ;}?>
            <?php 
          echo '</div>
          </div>
        </div>
      </div>
    </section>

   

    

   

    <footer class="p-5 bg-dark text-center text-white position-relative foottt">
      <div class="container text-center">
        <p class="lead">Copyright&copy;2022Superior Films</p>
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
  ';
  include 'signup.php';
  include 'login.php';
  ?>
</html>
