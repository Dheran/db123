<?php
    include ('../Server/connection.php');
    $username = $_SESSION['username'];
    $id = "";
    $firstname = "";
    $lastname = "";
    $middlename = "";
    $address = "";
    $gender = "";
    $age = "";
    $birthdate = "";
    $email = "";
    $sql = "SELECT * 
            FROM tbl_info 
                WHERE id = (
                    SELECT id
                    FROM tbl_user
                    WHERE username = '$username'
            );";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $middlename = $row['middlename'];
            $address = $row['address'];
            $gender = $row['gender'];
            $age = $row['age'];
            $birthdate = $row['birthdate'];
            $email = $row['email'];
        }
    } else {
        echo "0 results";
    }
?>

<div class="col-8 border rounded text-center p-3">
    <form>
    <h1 class="mb-5 mt-3">Personal Information</h1>
    <form>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="id">ID:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="id" value="<?php echo "$id";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="firstname">First Name:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="firstname" value="<?php echo "$firstname";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="lastname">Last Name:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="lastname" value="<?php echo "$lastname";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="middlename">Middle Name:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="middlename" value="<?php echo "$middlename";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="address">Address:</label>
        </div>
        <div class="col-6">
            <textarea class="form-control" id="address" disabled readonly><?php echo "$address";?></textarea>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="age">Age:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="age" value="<?php echo "$age";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="gender">Gender:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="gender" value="<?php echo "$gender";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="birthdate">Birthdate:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="birthdate" value="<?php echo "$birthdate";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
      <div class="form-group row mb-3">
        <div class="col-3">
            <label for="email">Email:</label>
        </div>
        <div class="col-6">
            <input type="text" class="form-control" id="email" value="<?php echo "$email";?>" disabled readonly>
        </div>
        <div class="col-3"></div>
      </div>
    </form>
    </form>
</div>

