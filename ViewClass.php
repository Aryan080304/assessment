<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Parents</h3>
	
		<table>
		
			<tr>
				<th width="150px">ClassID<br><hr></th>
				<th width="250px">classname<br><hr></th>
				<th width="250px">classyear<br><hr></th>
				<th width="250px">classcapacity<br><hr></th>
				<th width="250px">TeacherID<br><hr></th>
               
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ClassID, classname ,classyear, classcapacity, TeacherID FROM Class");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ClassID']}</th>
				<th>{$row['classname']}</th>
				<th>{$row['classyear']}</th>
				<th>{$row['classcapacity']}</th>
				<th>{$row['TeacherID']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

