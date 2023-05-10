<div class="row">
    <div class="col-md-12 table-responsive">
        <table id="userTable" class="table table-bordered">
            <thead>
                <tr class="text-center">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Address</th>
                    <th>Gender</th>
                    <th>Age</th>
                    <th>Birthdate</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Usertype</th>
                    <th>Operation</th>
                </tr>
            </thead>
            <tbody>
<?php 
    include('../Server/connection.php');
    $sql = "SELECT tbl_info.id,
                    tbl_info.firstname,
                    tbl_info.lastname,
                    tbl_info.middlename,
                    tbl_info.address,
                    tbl_info.gender,
                    tbl_info.age,
                    tbl_info.birthdate,
                    tbl_info.email,
                    tbl_user.username as username,
                    tbl_user.password as password,
                    tbl_user.usertype as usertype
            FROM tbl_info
            JOIN tbl_user
            ON tbl_info.id = tbl_user.id";
    $result = $conn->query($sql);
    $updateBtns = array();
    $deleteBtns = array();

    if ($result->num_rows > 0) {
        // Output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td class='text-center' id='id".$row["id"]."'>" . $row["id"] . "</td>";
            echo "<td class='text-center' id='firstName".$row["id"]."'>" . $row["firstname"] . "</td>";
            echo "<td class='text-center' id='lastName".$row["id"]."'>" . $row["lastname"] . "</td>";
            echo "<td class='text-center' id='middleName".$row["id"]."'>" . $row["middlename"] . "</td>";
            echo "<td class='text-center' id='address".$row["id"]."'>" . $row["address"] . "</td>";
            echo "<td class='text-center' id='gender".$row["id"]."'>" . $row["gender"] . "</td>";
            echo "<td class='text-center' id='age".$row["id"]."'>" . $row["age"] . "</td>";
            echo "<td class='text-center' id='birthdate".$row["id"]."'>" . $row["birthdate"] . "</td>";
            echo "<td class='text-center' id='email".$row["id"]."'>" . $row["email"] . "</td>";
            echo "<td class='text-center' id='username".$row["id"]."'>" . $row["username"] . "</td>";
            echo "<td class='text-center' id='password".$row["id"]."'>" . $row["password"] . "</td>";
            echo "<td class='text-center' id='usertype".$row["id"]."'>" . $row["usertype"] . "</td>";
            echo "<td class='text-center'>";
            echo sprintf("<button class='btn btn-success update-button ms-2 me-2' name='update-btn' value='%s'>Update</button>", $row["id"]);
            echo sprintf("<button class='btn btn-danger delete-button ms-2 me-2' name='delete-btn' value='%s'>Delete</button>", $row["id"]);
            echo "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
        </tbody>
        </table>
    </div>
</div>