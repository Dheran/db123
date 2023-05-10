<?php
    include('connection.php');

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

    $sql = "INSERT INTO tbl_info (firstname, lastname, middlename, address, gender, age, birthdate, email)
    VALUES ('$firstname', '$lastname', '$middlename', '$address', '$gender', '$age', '$birthdate', '$email');";
    $sql .= "INSERT INTO tbl_user (username, password, usertype)
    VALUES ('$username', '$password', '$usertype');";
    

    if ($conn->multi_query($sql) === TRUE) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
  $conn->close();


?>
