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
				<th width="150px">TeacherID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Email<br><hr></th>
				<th width="250px">number<br><hr></th>
                <th width="250px">Salary<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT TeacherID, Name ,Email, number, Salary FROM Teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['TeacherID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Email']}</th>
				<th>{$row['number']}</th>
                <th>{$row['Salary']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

