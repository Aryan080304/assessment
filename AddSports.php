<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $sportsname = $_POST['sportsname'];
    $sportstiming = $_POST['sportstiming'];
    $sportslevel = $_POST['sportslevel'];
    $TeacherID = $_POST['TeacherID']

   

    $sql = "INSERT INTO sports(sportsname,sportstiming,sportslevel,TeacherID) VALUES ('$sportsname','$sportstiming','$sportslevel','$TeacherID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>