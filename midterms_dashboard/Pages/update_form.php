<div class="container border rounded mt-5 mb-5 p-5 centered-element d-none bg-subtle" id="update-form">
    <h1>Update Form</h1>
    <form action="../Server/update.php" method='post'>
        <div class="form-group">
            <label for="idInput">Id</label>
            <input type="text" name="idInput" id="idInput" class="form-control" disabled>
        </div>
      <div class="form-group">
        <label for="firstNameInput">First Name</label>
        <input type="text" class="form-control" id="firstNameInput" required>
      </div>
      <div class="form-group">
        <label for="lastNameInput">Last Name</label>
        <input type="text" class="form-control" id="lastNameInput" required>
      </div>
      <div class="form-group">
        <label for="middleNameInput">Middle Name</label>
        <input type="text" class="form-control" id="middleNameInput">
      </div>
      <div class="form-group">
        <label for="addressInput">Address</label>
        <textarea class="form-control" id="addressInput"></textarea required>
      </div>
      <div class="form-group">
        <label for="genderInput">Gender</label>
        <select class="form-control" id="genderInput" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>   
      </div>
      <div class="form-group">
        <label for="ageInput">Age</label>
        <input type="number" class="form-control" id="ageInput" max="150" required>
      </div>
      <div class="form-group">
        <label for="birthdateInput">Date of Birth</label>
        <input type="date" class="form-control" id="birthdateInput" required>
      </div>
      <div class="form-group">
        <label for="emailInput">Email Address</label>
        <input type="email" class="form-control" id="emailInput" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="usernameInput">Username</label>
        <input type="text" class="form-control" id="usernameInput" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="passwordInput">Password</label>
        <input type="password" class="form-control" id="passwordInput" placeholder="Enter password" required>
      </div>
      <div class="form-group">
        <label for="userTypeInput">User Type</label>
        <select class="form-control" id="userTypeInput" required>
          <option value="">Select type of user</option>
          <option value="member">Member</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group text-center mt-3">
        <button type="submit" id="updateBtn" name='updateBtn' class="btn btn-success btn-lg me-3">Save</button>
        <button class="btn btn-danger btn-lg" id="cancelBtn">Cancel</button>
      </div>
    </form>
  </div>