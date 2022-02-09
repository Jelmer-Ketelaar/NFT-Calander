<?php
require 'connection.php';

$getProjects = $conn->prepare("SELECT * FROM projects WHERE verified = 'true' ORDER BY RAND() LIMIT 5 ");
$getProjects->execute();
$projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

$getLisProjects = $conn->prepare("SELECT * FROM projectsExist WHERE verified = 'true' ORDER BY RAND() LIMIT 4");
$getLisProjects->execute();
$listedProjects = $getLisProjects->fetchAll(\PDO::FETCH_ASSOC);

$getProjectsPromo = $conn->prepare("SELECT * FROM projects WHERE verified = 'true' AND promoted = 'promote' ORDER BY dropDate");
$getProjectsPromo->execute();
$projectsPromo = $getProjectsPromo->fetchAll(\PDO::FETCH_ASSOC);

$getProjectsProPromo = $conn->prepare("SELECT * FROM projectsExist WHERE verified = 'true' AND promoted = 'promote'");
$getProjectsProPromo->execute();
$projectsPromoPro = $getProjectsProPromo->fetchAll(\PDO::FETCH_ASSOC);

