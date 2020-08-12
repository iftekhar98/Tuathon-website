<html>
	<head>
		<meta charset="utf-8">
		<title>Registration into Database! </title>
	</head>
	<body>
		<?php
			$sname = $_POST["sname"];
			$sid = $_POST["sid"];
			$scollege = $_POST["scollege"];
			$smajor = $_POST["smajor"];
			$mnumber = $_POST["mnumber"];
			$email = $_POST["email"];
			$listOfEvents = $_POST["listOfEvents"];
			

			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "participants";

			$conn = new mysqli($servername, $username, $password, $db,"3308");

			if ($conn->connect_error) {
				die("Error: Connection to DB Server Fails </body></html>");
			}
			

			$sql = "INSERT INTO participant (Name, EventName, PhoneNum,Email, Major, StudentID,CollegeName )
			VALUES ('$sname','$listOfEvents' ,'$mnumber' , '$email ', '$smajor','$sid','$scollege')";
			
			if ($conn->query($sql)) {
				echo '<script language="javascript">';
                echo 'alert("Thank you,you have been registered successfully..")';
                echo '</script>';
                echo"<script type=\"text/javascript\">
                document.location.href='http://localhost/IT_project/index.html';
                </script>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}
			

			$conn->close();

		?>
	</body>
</html>