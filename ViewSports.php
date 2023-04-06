<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all sports</h3>
	
		<table>
		
			<tr>
				<th width="150px">SportsID<br><hr></th>
				<th width="250px">sportsname<br><hr></th>
				<th width="250px">sportstiming<br><hr></th>
				<th width="250px">sportslevel<br><hr></th>
               
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT SportsID, sportsname ,sportstiming, sportslevel FROM sports");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['SportsID']}</th>
				<th>{$row['sportsname']}</th>
				<th>{$row['sportstiming']}</th>
				<th>{$row['sportslevel']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

