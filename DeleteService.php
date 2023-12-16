<?php

global $connection;
include_once("DbConn.php");
$id = $_GET['ID'];
$sql = "DELETE FROM  services WHERE ID=:id";
$connect = $connection;
$DeleteService = $connect->prepare($sql);
$DeleteService->bindParam(":id", $id);
$DeleteService->execute();

header('Location:services.php');
?>


