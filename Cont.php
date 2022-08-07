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

    <!--contact us-->
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="display-4 font-weight-bold my-4 text-center">
            CONTACT US
          </h1>
          <p class="lead text-center">
            Kindly fill up your details here to contact us
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h1><i class="bi bi-geo-alt"></i></h1>
          <h3>Location</h3>
          <p>Bhanugudi center,Kakinada</p>

          <h1><i class="bi bi-telephone"></i></h1>
          <h3>Call us</h3>
          <p>+91 9390 288625 ,+91 9705 945557</p>

          <h1><i class="bi bi-envelope"></i></h1>
          <h3>Email</h3>
          <p>SathishSuperior.4659@gmail.com</p>
        </div>

        <div class="col-md-8">
          <div class="container">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Name</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Email address</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label"
                >Mobile Number</label
              >
              <input
                type="email"
                class="form-control"
                id="exampleFormControlInput1"
                placeholder=""
              />
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label"
                >Message</label
              >
              <textarea
                class="form-control"
                id="exampleFormControlTextarea1"
                rows="3"
              ></textarea>
            </div>
            <button type="button" class="btn btn-info mb-3">Submit</button>
          </div>
        </div>
      </div>
    </div>

    <!--footer-->

    <footer class="p-5 bg-dark text-center text-white position-relative">
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
