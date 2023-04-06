
<html>
<body> 

<?php


$link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
// Check connection
if ($link === false) {
    die("Connection failed: ");
}
?>

<h3>See all Books</h3>
	
		<table>
		
			<tr>
				<th width="150px">BookID<br><hr></th>
				<th width="250px">bookname<br><hr></th>
				<th width="250px">authorname<br><hr></th>
				<th width="250px">borrowdate<br><hr></th>
				<th width="250px">returndate<br><hr></th>
				<th width="250px">penalty<br><hr></th>
               
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT BookID, bookname, authorname, borrowdate ,returndate, penalty FROM books_from_library");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['BookID']}</th>
				<th>{$row['bookname']}</th>
				<th>{$row['authornames']}</th>
				<th>{$row['borrowdate']}</th>
				<th>{$row['returndate']}</th>
				<th>{$row['penalty']}</th>
                
			</tr>";
			}
			?>
            </table>
        </body>
        </html>