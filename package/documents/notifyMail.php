<?php
require 'connection.php';

if(isset($_POST['email'])){
    $email = $_POST['email'];

    $sql = 'INSERT INTO notify(email) VALUES(:email)';
    $statement = $conn->prepare($sql);
    $statement->execute([
        ':email' => $email
    ]);
}

header('Location:index.php');
