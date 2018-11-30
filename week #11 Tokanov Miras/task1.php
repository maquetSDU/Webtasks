<html>
<head>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$host = 'localhost';
$username ='root';
$password = '';
$db = 'webtask1';
$conn = mysqli_connect($host,$username,$password,$db);
$conn_error = mysqli_connect_error();
if ($conn_error != null){
    echo "We have an error:<p>  $conn_error </p>";
}
$query="SELECT * FROM cars";
$result = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($result)) {
    echo "<div class='car'>";
    echo "<img src=".$row['url'].">";
    echo "<div class='opis'>";
    echo "<b>".$row['maker']." ".$row['model']."</b>";
    echo "<p>".$row['price']."</p>";
    echo $row['year']." year ";
    echo "</div>";
    echo "</div>";
}
mysqli_close($conn);
?>
</body>
</html>