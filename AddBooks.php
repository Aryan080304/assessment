<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}



if (isset($_POST['submit'])) {

    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $borrowdate = $_POST['borrowdate'];
    $returndate = $_POST['returndate'];
    $penalty = $_POST['penalty'];

   

    $sql = "INSERT INTO books_from_library(bookname,authorname,borrowdate,returndate,penalty) VALUES ('$bookname','$authorname','$borrowdate','$returndate','$penalty')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }

}

?>