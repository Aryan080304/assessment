<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Address = $_POST['Address'];
    $phonenumber = $_POST['phonenumber'];

   

    $sql = "INSERT INTO parents(Name,Address,phonenumber) VALUES ('$Name','$Address','$phonenumber')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>