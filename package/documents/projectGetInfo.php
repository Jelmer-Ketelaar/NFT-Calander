<?php
require 'connection.php';

$id = base64_decode($_GET['id']);

 if ( !is_numeric($id) ) {
    header('Location:index.php');
}


$getProject = $conn->prepare("SELECT * FROM projectsExist WHERE id =".$id);
$getProject->execute();
$count = $getProject->rowCount();
$project = $getProject->fetch();


if ($count == 0) 
{
    header('Location:index.php');
}




$getProjectsOther = $conn->prepare("SELECT * FROM projectsExist WHERE verified = 'true' ORDER BY RAND() LIMIT 9");
$getProjectsOther->execute();
$projectsOther = $getProjectsOther->fetchAll(\PDO::FETCH_ASSOC);