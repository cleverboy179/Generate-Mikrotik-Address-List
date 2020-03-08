<?php
$host       = "localhost";
$database   = "test";
$username   = "root";
$password   = "";
$sql        = "select * from ir;";
$connection = mysqli_connect($host, $username, $password, $database);
$result     = mysqli_query($connection, $sql);
//$response = array();
while ($row = mysqli_fetch_assoc($result)) {
    $ip = $row['IP'];
    echo "add address=$ip comment=IRAN (ISLAMIC REPUBLIC OF) list=IR <br>";
    //echo "allow from $ip <br>";
}
mysqli_close($connection);
?>