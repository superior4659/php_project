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

    <!--film section-->

    <section id="filmsection" class="p-5">
      <div class="container">
        <h2 class="text-center text-dark">Our Works</h2>
        <p class="lead text-center text-primary mb-5">
          The Short films and Cover songs we made.
        </p>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3">
            <div class="card text-light csize chanimco">
              <div class="card-body text-center">
                <img
                  src="img/newRejected.jpg"
                  class="img-fluid im w-8 dimage"
                />
                <h3 class="card-title mb-3 my-3">Rejected</h3>
                <p>
                  A short film about a love failure boy who struggles to lead
                  his life
                </p>
                <button class="btn btn-primary">
                  <a href="https://youtu.be/ze8-WbstoQ4" class="nav-link ytlink"
                    >Watch Now</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light csize lisize">
              <div class="card-body text-center">
                <img src="img/newvill.jpg" class="img-fluid im w-8 ligimage" />
                <h3 class="card-title mb-3 my-3">Villain</h3>
                <p>An unexpected clash makes Ram to take revenge on Arjun.</p>
                <button class="btn btn-primary">
                  <a href="https://youtu.be/FeKHXVrSSaM" class="nav-link ytlink"
                    >Watch Now</a
                  >
                </button>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="card chanimco text-light csize">
              <div class="card-body text-center">
                <img src="img/updateam.jpg" class="img-fluid im w-8 dimage" />
                <h3 class="card-title mb-3 my-3">Amrutha</h3>
                <p>
                  A cover song from SBSB movie with concept of two guys loving
                  same girl
                </p>
                <button class="btn btn-primary">
                  <a href="https://youtu.be/O2BwPuby5ls" class="nav-link ytlink"
                    >Watch Now</a
                  >
                </button>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="card bg-light csize lisize">
              <div class="card-body text-center">
                <img src="img/newyuva.jpg" class="img-fluid im w-8 ligimage" />
                <h3 class="card-title mb-3 my-3">Yuva</h3>
                <p>
                  Short Film related to Conflicts and a Message Oriented film
                  for teenagers.
                </p>
                <button class="btn btn-primary">
                  <a href="https://youtu.be/2tqCCXJ6FeA" class="nav-link ytlink"
                    >Watch Now
                  </a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--footer-->

    <footer class="p-5 bg-dark text-center text-white position-relative foottt">
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
