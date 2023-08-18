<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "Scrap");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
else{
    echo "Scrap db_connected";
}
//check query
/*$sql = "SELECT * FROM `login` WHERE 1;";
$result = $conn->query($sql);
$row = mysqli_fetch_array($result);
//echo $row['name'];
while($row = mysqli_fetch_array($result)) {
    echo $row['Name'];
}*/
?>