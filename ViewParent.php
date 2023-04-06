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
				<th width="150px">ParentsID<br><hr></th>
				<th width="250px">Name<br><hr></th>
				<th width="250px">Address<br><hr></th>
				<th width="250px">phonenumber<br><hr></th>
                
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT ParentsID, Name ,Address, phonenumber FROM parents");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['ParentsID']}</th>
				<th>{$row['Name']}</th>
				<th>{$row['Address']}</th>
				<th>{$row['phonenumber']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>

