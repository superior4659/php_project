<div
      class="modal fade"
      id="signupModal"
      tabindex="-1"
      aria-labelledby="signupModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="signupModalLabel">
              Make an Account here
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action = "login_register.php" method = "post">
                <div class="mb-3">
                    <label for="username" class="form-label"
                      >Name</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="username" name="username" placeholder="Enter Your Name" required
                    />
                </div>
                <div class="mb-3">
                <label for="email" class="form-label"
                  >Email address</label
                >
                <input
                  type="email"  placeholder="Enter Your Email"
                  class="form-control"
                  id="email" name="email"
                  aria-describedby="emailHelp"
                />
                <div id="emailHelp" class="form-text">
                  We'll never share your email with anyone else.
                </div>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label"
                  >Password</label
                >
                <input
                  type="password"  placeholder="Enter Your Password"
                  class="form-control"
                  id="password" name="password" required
                />
              </div>
              <div class="mb-3">
                <label for="cpassword" class="form-label"
                  >Confirm Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="cpassword" name="cpassword"  placeholder="Confirm Your Password" required
                />
              </div>
              <div class="mb-3">
                    <label for="interest" class="form-label"
                      >Area of Interest</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="interest" name="interest" placeholder="Acting/Cinematography/Direction" required
                    />
                </div>
              <div class="mb-3">
                    <label for="number" class="form-label"
                      >Mobile Number</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="number" name="number"  placeholder="Enter Your Mobile Number" required
                    />
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label"
                      >Location</label
                    >
                    <input
                      type="text"
                      class="form-control"
                      id="location" name="location" placeholder="Enter Your Current Location" required
                    />
                </div>
                <div class="mb-3">
                    <label for="info" class="form-label"
                      >Tell Us About Yourself</label
                    >
                    <textarea
                      type="text"
                      class="form-control"  rows="3"
                      id="info" name="info" required 
                    ></textarea>
                </div>
              <br>
              <div class="g-recaptcha" data-sitekey = "6LeMPtwgAAAAANy5EUKhLTgAxVcsQgSX0emLSflx"></div><br>
              <button type="submit" name="register" class="btn btn-primary">
                Create Account
              </button>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>