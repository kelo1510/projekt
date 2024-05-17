<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "građevina";

$knauf = filter_input(INPUT_POST,'knauf');
$plocice = filter_input(INPUT_POST,'plocice');
$estrih = filter_input(INPUT_POST,'estrih');



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO troškovnik (knauf, plocice,estrih)
VALUES ('$knauf', '$plocice','$estrih')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!DOCTYPE html>
<body>
<ul>
        <li><a href="pozdrav.html" >Unos</a></li>
        <li><a href="citaj.php" >Citaj</a></li>
    </ul>
</body>
</html>