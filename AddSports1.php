<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
        body {
          font-family: Arial, Helvetica, sans-serif;
        }

        .navbar {
          overflow: hidden;
          background-color: #333;
        }

        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
        }

        .dropdown {
          float: left;
          overflow: hidden;
        }

        .dropdown .dropbtn {
          font-size: 16px;
          border: none;
          outline: none;
          color: white;
          padding: 14px 16px;
          background-color: inherit;
          font-family: inherit;
          margin: 0;
        }

        .navbar a:hover, .dropdown:hover .dropbtn {
          background-color: red;
        }

        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          float: none;
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        .dropdown-content a:hover {
          background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
          display: block;
        }
        </style>
    </head>
    <body>
        <div class="navbar">
            <a href="index.html">Home</a>
            <div class="dropdown">
                <button class="dropbtn">View
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="ViewStudent.html">Student</a>
                    <a href="ViewParent.html">Parent</a>
                    <a href="ViewTeacher.html">Teacher</a>
                    <a href="ViewClass.html">Class</a>
                    <a href="ViewBooks.html">Books</a>
                    <a href="ViewSports.html">Sports</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Add
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent1.php">Student</a>
                    <a href="AddParent1.php">Parent</a>
                    <a href="AddTeacher1.php">Teacher</a>
                    <a href="AddClass1.php">Class</a>
                    <a href="AddBooks1.php">Books</a>
                    <a href="AddSports1.php">Sports</a>
                </div>
            </div>
            <a href="Contact.html">Contact Us</a>
        </div>

        <div>
            <br>
            <form method="post" action="AddSports.php">

    			
          <label for="sportsname">sportsname:</label>
    			<input type="text" name="sportsname"><br>
          <label for="sportstiming">sportstiming:</label>
    			<input type="text" name="sportstiming"><br>
          <label for="sportslevel">sportslevel:</label>
    			<input type="text" name="sportslevel"><br>
          <label>TeacherID:</label>
              <select name="TeacherID">
              <?php
              $link = mysqli_connect("sdb-58.hosting.stackcp.net", "student86-3530313714c9", "ua92-studentAc", "student86-3530313714c9");
  
              if ($link === false) {
                  die("Connection failed: ");
              }
               $sql = mysqli_query($link, "SELECT TeacherID, Name FROM Teacher");
              while ($row = $sql->fetch_assoc()){
              echo "<option value='{$row['TeacherID']}'>{$row['Name']}</option>";
              }
              ?>  
               </select><br>

    			<br><br>

    			<input type="submit" name="submit">

    		</form>
        </div>
    </body>
</html>
