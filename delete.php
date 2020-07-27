
<?php
include("includes/config.php");
// menyimpan data id kedalam variabel
$id   = $_GET['id'];
// query SQL untuk insert data
$query="DELETE from gallery where id='$id'";
mysqli_query($_GET, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>