<div class="modal fade" id="AddUser" tabindex="-1" aria-labelledby="AddUserLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content shadow-lg rounded-4 bg-dark text-light">
      <div class="modal-header border-0">
        <h5 class="modal-title d-flex align-items-center gap-2" id="AddUserLabel">
          <span class="emoji-fallback" aria-hidden="true">👤</span>
          User Information
        </h5>
        <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="modal"
          aria-label="Close"></button>
      </div>

      <form id="addUserForm" class="needs-validation">
        <div class="modal-body">
          <div class="row g-3">
            
            <div class="col-md-6">
              <label for="firstName" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">👤</span>
                <span>FirstName</span>
              </label>
              <input type="text" class="form-control bg-white text-dark" id="firstName" name="first_name" required />
              <div class="invalid-feedback">First name is required.</div>
            </div>

            <div class="col-md-6">
              <label for="lastName" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">👥</span>
                <span>LastName</span>
              </label>
              <input type="text" class="form-control bg-white text-dark" id="lastName" name="last_name" required />
              <div class="invalid-feedback">Last name is required.</div>
            </div>

            <div class="col-md-6">
              <label for="email" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">✉️</span>
                <span>Email</span>
              </label>
              <input type="email" class="form-control bg-white text-dark" id="email" name="email" required />
              <div class="invalid-feedback">Valid email is required.</div>
            </div>

            <div class="col-md-6">
              <label for="password" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">🔒</span>
                <span>Password</span>
              </label>
              <input type="password" class="form-control bg-white text-dark" id="password" name="pass" required />
              <div class="invalid-feedback">Password is required.</div>
            </div>

            <div class="col-md-6">
              <label for="phone" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">📞</span>
                <span>Phone</span>
              </label>
              <input type="tel" class="form-control bg-white text-dark" id="phone" name="phone" pattern="[0-9]{10,15}" required />
              <div class="invalid-feedback">
                Enter a valid phone number (10–15 digits).
              </div>
            </div>

            <div class="col-md-6">
              <label for="gender" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">⚧</span>
                <span>Gender</span>
              </label>
              <select id="gender" name="gender" class="form-select bg-white text-dark" required>
                <option selected disabled value="">Choose...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
              </select>
              <div class="invalid-feedback">Please select a gender.</div>
            </div>

            <div class="col-md-6">
              <label for="status" class="form-label d-flex align-items-center gap-1">
                <span class="emoji-fallback" aria-hidden="true">🔘</span>
                <span>Status</span>
              </label>
              <select id="status" name="status" class="form-select bg-white text-dark" required>
                <option selected disabled value="">Choose...</option>
                <option value="active">Admin</option>
                <option value="inactive">User</option>
              </select>
              <div class="invalid-feedback">Please select a status.</div>
            </div>

          </div>
        </div>

        <div class="modal-footer border-0">
          <button type="button" class="btn btn-outline-light" data-bs-dismiss="modal">
            Cancel
          </button>
          <button type="submit" class="btn btn-success">Save User</button>
        </div>
      </form>
    </div>
  </div>
</div>
