<div id="addMemberForm" class="container border rounded mt-5 mb-5 p-5 centered-element d-none bg-subtle">
    <h1>Member Registration Form</h1>
    <form>
      <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" class="form-control" id="firstName" placeholder="Enter first name" required>
      </div>
      <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" class="form-control" id="lastName" placeholder="Enter last name" required>
      </div>
      <div class="form-group">
        <label for="middleName">Middle Name</label>
        <input type="text" class="form-control" id="middleName" placeholder="Enter middle name (Optional)">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <textarea class="form-control" id="address" placeholder="Enter address" required></textarea>
      </div>
      <div class="form-group">
        <label for="gender">Gender</label>
        <select class="form-control" id="gender" required>
          <option value="">Select gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>   
      </div>
      <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" placeholder="Enter age" max="150" required>
      </div>
      <div class="form-group">
        <label for="birthdate">Date of Birth</label>
        <input type="date" class="form-control" id="birthdate" required>
      </div>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" required>
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control" id="username" placeholder="Enter username" required>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" placeholder="Enter password" required>
      </div>
      <div class="form-group">
        <label for="userType">User Type</label>
        <select class="form-control" id="userType" required>
          <option value="">Select type of user</option>
          <option value="member">Member</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group text-center">
          <button type="submit" class="btn btn-primary mt-3 mb-3" id="saveMember">Add Member</button>
          <button class="btn btn-danger mt-3 mb-3" id="cancelMember">Cancel</button>
      </div>
    </form>
  </div>