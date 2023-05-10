<?php 
if (isset($_POST["id"])) {
    include('connection.php');
    
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $middlename = $_POST["middlename"];
    $address = $_POST["address"];
    $gender = $_POST["gender"];
    $age = $_POST["age"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $usertype = $_POST["usertype"];
    

    $sql = "UPDATE tbl_info SET firstname='$firstname', lastname='$lastname', middlename='$middlename', address='$address', gender='$gender', age='$age', birthdate='$birthdate', email='$email' WHERE id=$id;";
    $sql .= "UPDATE tbl_user SET username='$username', password='$password', usertype='$usertype' WHERE id=$id;";


    if ($conn->multi_query($sql) === TRUE) {
        $message =  "<p>Record updated successfully</p>";
      } else {
        $message = "</p>Error updating record:" . $conn->error. "</p>";
      }
      
      $conn->close();
}
?>