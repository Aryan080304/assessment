<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $Classname = $_POST['Classname'];
    $Classyear = $_POST['Classyear'];
    $classcapacity = $_POST['classcapacity'];
    $TeacherID = $_POST['TeacherID'];
   

    $sql = "INSERT INTO Class (Classname,Classyear,classcapacity,TeacherID) VALUES ('$Classname','$Classyear','$classcapacity','$TeacherID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>