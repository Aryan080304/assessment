<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $number = $_POST['number'];
    $Salary = $_POST['Salary'];

   

    $sql = "INSERT INTO teacher(Name,Email,number,Salary) VALUES ('$Name','$Email','$number','$Salary')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>