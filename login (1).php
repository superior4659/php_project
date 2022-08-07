<div
      class="modal fade"
      id="loginModal"
      tabindex="-1"
      aria-labelledby="loginModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="loginModalLabel">
              Login to Superior Films
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form action="login_register.php" method="post">
              <div class="mb-3">
                <label for="email_username" class="form-label"
                  >Email address/UserName</label
                >
                <input
                  type="email"
                  class="form-control"
                  id="email_username" name="email_username"
                  aria-describedby="emailHelp"
                />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label"
                  >Password</label
                >
                <input
                  type="password"
                  class="form-control"
                  id="password" name="password"
                />
              </div><br>
    <div class="g-recaptcha" data-sitekey = "6LeMPtwgAAAAANy5EUKhLTgAxVcsQgSX0emLSflx"></div><br>
            <button type="submit" name="login" class="btn btn-primary">Login</button>
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
</form>
        </div>
      </div>
    </div>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
