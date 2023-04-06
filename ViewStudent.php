<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Students</h3>
	
		<table>
		
			<tr>
				<th width="150px">StudentID<br><hr></th>
				<th width="250px">firstname<br><hr></th>
				<th width="250px">lastname<br><hr></th>
				<th width="250px">addres<br><hr></th>
				<th width="250px">medicalinformation<br><hr></th>
				<th width="250px">ClassID<br><hr></th>
				<th width="250px">ParentsID<br><hr></th>
				<th width="250px">SportsID<br><hr></th>
				
		
			</tr>
				
			<?php
			/* 	function fetches a result row as an associative array.
              Note: Fieldnames returned from 
			  this function are case-sensitive.
			*/	
			$sql = mysqli_query($link, "SELECT StudentID, firstname, lastname, addres, medicalinformation, ClassID, ParentsID, SportsID  FROM Student");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['StudentID']}</th>
				<th>{$row['firstname']}</th>
				<th>{$row['lastname']}</th>
				<th>{$row['addres']}</th>
				<th>{$row['medicalinformation']}</th>
				<th>{$row['ClassID']}</th>
				<th>{$row['ParentsID']}</th>
				<th>{$row['SportsID']}</th>
				

                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>


