<?php 
if (isset($_POST["id"])) {
    $id = $_POST["id"];
    include ('connection.php');

    $sql = "DELETE FROM tbl_info WHERE id='$id';";
    $sql .= "DELETE FROM tbl_user WHERE id='$id';";
   
    if ($conn->multi_query($sql) === TRUE) {
      echo "Record deleted successfully";
    } else {
      echo "Error deleting record: " . $conn->error;
    }
    
    $conn->close();
}


?>