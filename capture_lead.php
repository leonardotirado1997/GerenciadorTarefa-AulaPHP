<?php
include("conn.php");

$lead_name = $_POST['name'];
$lead_email = $_POST['email'];

$sql = "INSERT INTO leads (lead_name, lead_email) VALUES('$lead_name', '$lead_email')";

mysqli_query($conn, $sql);

header("Location: index.php");
exit();

?>