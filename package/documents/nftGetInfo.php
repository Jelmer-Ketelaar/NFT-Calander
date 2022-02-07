<?php
require 'connection.php';

$id = base64_decode($_GET['id']);

if ( !is_numeric($id) ) {
    header('Location:index.php');
}


$getProject = $conn->query("SELECT * FROM projects WHERE id =".$id);
$count = $getProject->rowCount();
$project = $getProject->fetch();


if ($count === 0)
{
    header('Location:index.php');
}




$getProjectsOther = $conn->query("SELECT * FROM projects WHERE verified = 'true' ORDER BY RAND() LIMIT 9");
$projectsOther = $getProjectsOther->fetchAll(\PDO::FETCH_ASSOC);