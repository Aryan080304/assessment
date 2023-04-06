<?php

//mysqli_connect() function establishes a connection with MySQL server and returns the connection as an object.
/*
   $host = "sdb-58.hosting.stackcp.net";
   $username  = "student86-3530313714c9";
   $passwd = "ua92-studentAc";
   $dbname = "student86-3530313714c9";
*/
$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}


/*
The isset() function checks whether a variable
 is set, which means that it has to be declared 
 and is not NULL. 
 This function returns true if the variable
  exists and is not NULL, 
  otherwise it returns false.
*/
if (isset($_POST['submit'])) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $addres = $_POST['addres'];
    $medicalinformation = $_POST['medicalinformation'];
    $ClassID = $_POST['ClassID'];
    $ParentsID = $_POST['ParentsID']
    $SportsID = $_POST['SportsID'];
    


/*
mysqli_query() function accepts a string value
representing a query as one of the parameters
and, executes/performs the given query 
on the database
*/
    $sql = "INSERT INTO Student(firstname,lastname,addres,medicalinformation,ClassID,ParentsID,SportsID) VALUES ('$firstname','$lastname','$addres','$medicalinformation','$ClassID','$ParentsID','$SportsID')";
    if (mysqli_query($link, $sql)) {
      echo "New record created successfully";
    } else {
      echo "Error adding record ";
    }
}


?>
