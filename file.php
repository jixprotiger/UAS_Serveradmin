<?php
echo "hellooo world";
$link = mysqli_connect("172.18.0.2","root","bebas","Trucorp");
$query = "SELECT * from Trucorp.users";
$res = mysqli_query($link, $query);
$count = mysqli_nuw_rows($res)
echo "Jumlah user ada " . $count;
mysqli_close($link);
?>
