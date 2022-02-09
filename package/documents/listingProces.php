<?php
require 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['projectName'], $_POST['projectDescription'], $_POST['blockchain'], $_POST['dropDate'], $_POST['roadmap'], $_POST['mintPrice'], $_POST['royality'], $_POST['supply'], $_POST['teamAmount'], $_POST['twitterName'], $_POST['discordLink'], $_POST['websiteLink'], $_POST['signature'])) {

    // Get all the upload data
    $projectName = $_POST['projectName'];
    $projectDescription = $_POST['projectDescription'];
    $blockchain = $_POST['blockchain'];
    $category = $_POST['inlineRadioOptions'];
    $filename = $_FILES['thumbnail']['name'];
    $filetype = $_FILES['thumbnail']['type'];
    $dropDate = $_POST['dropDate'];
    $roadmap = $_POST['roadmap'];
    $mintPrice = $_POST['mintPrice'];
    $royality = $_POST['royality'];
    $supply = $_POST['supply'];
    $teamAmount = $_POST['teamAmount'];
    $twitterName = $_POST['twitterName'];
    $discordLink = $_POST['discordLink'];
    $websiteLink = $_POST['websiteLink'];
    $emailContact = $_POST['emailContact'];
    $signature = $_POST['signature'];
    $promoted = $_POST['promotionBox'];


    try {
        if (str_contains($twitterName, 'https://twitter.com/')) {
            $twitterName = explode("https://twitter.com/", $twitterName);
            $twitterName = $twitterName[1];
        }
        if (str_contains($twitterName, '@')) {
            $twitterName = explode("@", $twitterName);
            $twitterName = $twitterName[1];
        }
        $data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names=' . $twitterName);
        $parsed = json_decode($data, true, 512, JSON_THROW_ON_ERROR);
        $twitterFollowerCount = $parsed[0]['followers_count'];
    } catch (\Throwable $e) {
        //throw $e;
        $twitterFollowerCount = 0;
    }

    $discordMemberCount = 0;

    // Save image in folder
    if ($filetype === 'image/jpeg' || $filetype === 'image/png' || $filetype === 'image/gif' || $filetype === 'image/jpg') {
        $imageCreate = date("Y-m-d-H:i:s");
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], 'img/' . $imageCreate . '_' . $filename);
        $filepath = "img/" . $imageCreate . '_' . $filename;
    }


    // insert a single publisher
    $sql = 'INSERT INTO projects(name, description, blockchain, category, thumbnail, dropDate, roadmap, mintPrice, royality, supply, teamAmount, twitterName, discordLink, websiteLink, emailContact, discordMemberNumber, twitterFollowerNumber, signature, promoted) VALUES(:projectName, :projectDescription, :blockchain, :category, :thumbnail, :dropDate, :roadmap, :mintPrice, :royality, :supply, :teamAmount, :twitterName, :discordLink, :websiteLink, :emailContact, :discordMemberCount, :twitterFollowerCount, :signature, :promoted)';

    $statement = $conn->prepare($sql);

    $statement->execute([
        ':projectName' => $projectName,
        ':projectDescription' => $projectDescription,
        ':blockchain' => $blockchain,
        ':category' => $category,
        ':thumbnail' => $filepath,
        ':dropDate' => $dropDate,
        ':roadmap' => $roadmap,
        ':mintPrice' => $mintPrice,
        ':royality' => $royality,
        ':supply' => $supply,
        ':teamAmount' => $teamAmount,
        ':twitterName' => $twitterName,
        ':discordLink' => $discordLink,
        ':websiteLink' => $websiteLink,
        ':emailContact' => $emailContact,
        ':discordMemberCount' => $discordMemberCount,
        ':twitterFollowerCount' => $twitterFollowerCount,
        ':signature' => $signature,
        ':promoted' => $promoted
    ]);

    $hashedId = base64_encode($conn->lastInsertId());

    $to = 'info@nftdropcalender.info';
    $subject = 'New Drop | NFTDropCalender';
    $message = "Accept it or Decline it! \n https://nftgenie.pro/reviewApp.php?ww=Youtube022002!";
    $headers = "From: jelmerketelaar487@gmail.nl";

    mail($to, $subject, $message, $headers);

    header('Location: nft.php?id=' . $hashedId);

} else {
    echo 'Contact info@nftdropcalender.info';
}