<?php
echo "hello world";
$link = mysqli_connect("172.18.0.2","root","bebas","Trucorp");
if (!$link){
echo "tidak bisa konek ke MySQL" . PHP_EOL;
exit;
}
echo "Sukses: Koneksi telah terbuat!" . PHP_EOL;
echo "Host Information: " . mysqli_get_host_info($link) . PHP_EOL;
$query = "SELECT * from Trucorp.users";
$res = mysqli_query($link, $query);
while($row = mysqli_fetch_array($res))
     {
        print_r($row);
     } 
mysqli_close($link);
?>
