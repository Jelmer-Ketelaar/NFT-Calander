<?php
require 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['projectName']) && isset($_POST['projectDescription']) && isset($_POST['floorPrice']) && isset($_POST['blockchain']) && isset($_POST['traits']) && isset($_POST['roadmap']) && isset($_POST['volume']) && isset($_POST['royality']) && isset($_POST['supply']) && isset($_POST['teamAmount']) && isset($_POST['twitterName']) && isset($_POST['discordLink']) && isset($_POST['websiteLink']) && isset($_POST['signature']) && isset($_POST['marketplaceLink'])){

    // Get all the upload data
    $projectName = $_POST['projectName'];
    $projectDescription = $_POST['projectDescription'];
    $blockchain = $_POST['blockchain'];
    $category = $_POST['inlineRadioOptions'];
    $filename=$_FILES['thumbnail']['name'];
    $filetype=$_FILES['thumbnail']['type'];
    $traits = $_POST['traits'];
    $roadmap = $_POST['roadmap'];
    $volume = $_POST['volume'];
    $royality = $_POST['royality'];
    $supply = $_POST['supply'];
    $teamAmount = $_POST['teamAmount'];
    $twitterName = $_POST['twitterName'];
    $discordLink = $_POST['discordLink'];
    $websiteLink = $_POST['websiteLink'];
    $marketplaceLink = $_POST['marketplaceLink'];
    $emailContact = $_POST['emailContact'];
    $signature = $_POST['signature'];
    $promoted = $_POST['promotionBox'];
    $floorPrice = $_POST['floorPrice'];


try {
        if (str_contains($twitterName, 'https://twitter.com/')) { 
            $twitterName = explode("https://twitter.com/",$twitterName);
            $twitterName = $twitterName[1];
        }
       if (str_contains($twitterName, '@')) { 
            $twitterName = explode("@",$twitterName);
            $twitterName = $twitterName[1];
        }
        $data = file_get_contents('https://cdn.syndication.twimg.com/widgets/followbutton/info.json?screen_names='.$twitterName); 
        $parsed =  json_decode($data,true);
        $twitterFollowerCount =  $parsed[0]['followers_count'];
} catch (\Throwable $e) {
   //throw $e;
   $twitterFollowerCount = 0;
}

    $discordMemberCount = 0;

    // Save image in folder
    if($filetype=='image/jpeg' or $filetype=='image/png' or $filetype=='image/gif' or $filetype=='image/jpg')
    {
    $imageCreate = date("Y-m-d-H:i:s");
    move_uploaded_file($_FILES['thumbnail']['tmp_name'],'images/'.$imageCreate.'_'.$filename);
    $filepath="images/".$imageCreate.'_'.$filename;
    }


    // insert a single publisher
    $sql = 'INSERT INTO projectsExist(name, description, blockchain, category, thumbnail, traits, floorPrice, roadmap, volume, royality, supply, teamAmount, twitterName, discordLink, websiteLink, emailContact, discordMemberNumber, twitterFollowerNumber, signature, promoted, marketplaceLink) VALUES(:projectName, :projectDescription, :blockchain, :category, :thumbnail, :traits, :floorPrice, :roadmap, :volume, :royality, :supply, :teamAmount, :twitterName, :discordLink, :websiteLink, :emailContact, :discordMemberCount, :twitterFollowerCount, :signature, :promoted, :marketplaceLink)';

    $statement = $conn->prepare($sql);

    $statement->execute([
        ':projectName' => $projectName,
        ':projectDescription' => $projectDescription,
        ':blockchain' => $blockchain,
        ':category' => $category,
        ':thumbnail' => $filepath,
        ':traits' => $traits,
        ':floorPrice' => $floorPrice,
        ':roadmap' => $roadmap,
        ':volume' => $volume,
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
        ':promoted' => $promoted,
        ':marketplaceLink' => $marketplaceLink
    ]);

    $hashedId = base64_encode($conn->lastInsertId());

//    $to = 'jelmerketelaar487@gmail.com';
//    $subject = 'New Drop | NFTDropCalender';
//    $message = "Accept it or Decline it! \n http://localhost/NFT-Calander/package/documents/reviewApp.php?ww=Test";
//    $headers = "From: jelmerketelaar487@gmail.nl";

//    mail($to, $subject, $message, $headers);

    header('Location: nft.php?id=' . $hashedId);

} else {
    echo 'Contact info@nftdropcalender.info';
}