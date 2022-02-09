<?php
require 'connection.php';

if (isset($_GET['id'])) {
    $id = base64_decode($_GET['id']);
    $twitterFollowerAmount = $_GET['twitterFollowerAmount'];
    $discordMemberNumber = $_GET['discordMemberNumber'];
//    $email = $_GET['email'];
    $thumbnail = $_GET['thumbnail'];
    $projectName = $_GET['projectName'];
    $projectDes = $_GET['projectDes'];
    $twitterName = $_GET['twitterName'];
    $discordLink = $_GET['discordLink'];

    $sql = "UPDATE projects SET verified='true', discordMemberNumber=?, twitterFollowerNumber=? WHERE id=?";
    $conn->prepare($sql)->execute([$discordMemberNumber, $twitterFollowerAmount, $id]);

//    $getEmails = $conn->query("SELECT * FROM notify");
//    $getEmails = $getEmails->fetchAll(\PDO::FETCH_ASSOC);
//
//    $to = $email;
    $subject = 'We verified your project | NFTGenie';
    $message = '<!DOCTYPE html>

<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
<head>
<title></title>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
<!--[if !mso]><!-->
<link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet" type="text/css"/>
<!--<![endif]-->
<style>
		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			padding: 0;
		}

		a[x-apple-data-detectors] {
			color: inherit !important;
			text-decoration: inherit !important;
		}

		#MessageViewBody a {
			color: inherit;
			text-decoration: none;
		}

		p {
			line-height: inherit
		}

		@media (max-width:660px) {
			.icons-inner {
				text-align: center;
			}

			.icons-inner td {
				margin: 0 auto;
			}

			.row-content {
				width: 100% !important;
			}

			.stack .column {
				width: 100%;
				display: block;
			}
		}
	</style>
</head>
<body style="background-color: #000; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #09080e; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:50px;">
<div align="center" style="line-height:10px"><img alt="NFTGenie" src="https://nftgenie.pro/assets/img/logo/nftgenie-logo.png" style="display: block; height: 50px; border: 0; width: 50px; max-width: 100%;" title="NFTGenie" width="128"/></div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td style="padding-left:10px;padding-right:10px;padding-top:50px;">
<div style="font-family: Trebuchet MS, Tahoma, sans-serif">
<div style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2;">
<p style="margin: 0; font-size: 14px; text-align: center;">Congratulations</p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td style="padding-left:10px;padding-right:10px;padding-top:10px;">
<div style="font-family: Trebuchet MS, Tahoma, sans-serif">
<div style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #530aff; line-height: 1.2;">
<p style="margin: 0; font-size: 34px; text-align: center;"><span style="font-size:34px;">We verified your Project!</span></p>
<br>
<hr>
<br>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;">
<div align="center" style="line-height:10px"><img alt="Christmas image" src="https://nftgenie.pro/' . $thumbnail . '" style="display: block; height: auto; border: 0; width: 448px; max-width: 100%;" title="Christmas image" width="448"/></div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:10px;padding-left:45px;padding-right:45px;padding-top:60px;">
<div style="font-family: Trebuchet MS, Tahoma, sans-serif">
<div style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2;">
<p style="margin: 0; font-size: 14px; text-align: center;"><span style="">We have succesfully verified your NFT project on NFTGenie!</span></p>
<p style="margin: 0; font-size: 14px; text-align: center;"><span style="">We appreciate your support NFTGenie.</span></p>
<p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 14.399999999999999px;"> </p>
<p style="margin: 0; font-size: 14px; text-align: center;"><span style="">We will make a custom tweet of our collab: <a href="https://twitter.com/nftgenie">NFTGenie</span></p>
<p style="margin: 0; font-size: 14px; text-align: center;"><span style="">Feel free to retweet the post for extra Hype.</span></p>
</div>
</div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="button_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-bottom:60px;padding-left:10px;padding-right:10px;padding-top:30px;text-align:center;">
<div align="center">
<!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="nftgenie.pro/nft.php?id=' . $_GET['id'] . ' style="height:38px;width:263px;v-text-anchor:middle;" arcsize="27%" strokeweight="1.5pt" strokecolor="#FFFFFF" fill="false"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Tahoma, sans-serif; font-size:12px"><![endif]--><a href="nftgenie.pro/nft.php?id=' . $_GET['id'] . '" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:transparent;border-radius:10px;width:auto;border-top:2px solid #FFFFFF;border-right:2px solid #FFFFFF;border-bottom:2px solid #FFFFFF;border-left:2px solid #FFFFFF;padding-top:5px;padding-bottom:5px;font-family:Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:20px;padding-right:20px;font-size:12px;display:inline-block;letter-spacing:normal;"><span style="font-size: 12px; line-height: 2; word-break: break-word; mso-line-height-alt: 24px;">Click here for your project on NFTGenie</span></span></a>
<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #09080e; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-left:10px;padding-right:10px;padding-top:50px;">
<div align="center">
<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="80%">
<tr>
<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 2px solid #530AFF;"><span> </span></td>
</tr>
</table>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #09080e; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block" style="height:50px;line-height:50px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #09080e; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="41.666666666666664%">
<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:40px;">
<div align="center" style="line-height:10px"><img alt="NFTGenie" src="https://nftgenie.pro/assets/img/logo/nftgenie-logo.png" style="display: block; height: 50px; border: 0; width: 50px; max-width: 100%;" title="Your Logo" width="120"/></div>
</td>
</tr>
</table>
<table border="0" cellpadding="0" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="padding-left:10px;padding-right:10px;text-align:center;padding-top:20px;padding-bottom:5px;">
<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="104px">
<tr>
<td style="padding:0 10px 0 10px;"><a href="https://twitter.com/nftgenie" target="_blank"><img alt="Twitter" height="32" src="https://nftgenie.pro/assets/img/extern_logo/twitter_logo_white.png" style="display: block; height: auto; border: 0;" title="twitter" width="32"/></a></td>
<td style="padding:0 10px 0 10px;"><a href="https://www.instagram.com/nftgenie.pro/" target="_blank"><img alt="Instagram" height="32" src="https://nftgenie.pro/assets/img/extern_logo/instagram_logo_white.png" style="display: block; height: auto; border: 0;" title="instagram" width="32"/></a></td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
<table border="0" cellpadding="0" cellspacing="0" class="menu_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="color:#ffffff;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;font-size:14px;letter-spacing:2px;padding-bottom:15px;padding-right:20px;padding-top:50px;text-align:center;">
<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="text-align:center;font-size:0px;">
<div class="menu-links">
<!--[if mso]>
<table role="presentation" border="0" cellpadding="0" cellspacing="0" align="center" style="">
<tr>
<td style="padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px">
<![endif]--><a href="nftgenie.pro" style="padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;display:block;color:#ffffff;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;font-size:14px;text-decoration:none;letter-spacing:2px;">Home</a>
<!--[if mso]></td></tr><tr><td style="text-align:center;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><![endif]--><a href="nftgenie.pro/exploreDrops.php" style="padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;display:block;color:#ffffff;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;font-size:14px;text-decoration:none;letter-spacing:2px;">Explore</a>
<!--[if mso]></td></tr><tr><td style="text-align:center;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><![endif]--><a href="nftgenie.pro/create.php" style="padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;display:block;color:#ffffff;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;font-size:14px;text-decoration:none;letter-spacing:2px;">List own Project</a>
<!--[if mso]></td></tr><tr><td style="text-align:center;padding-top:5px;padding-right:20px;padding-bottom:5px;padding-left:20px"><![endif]--><a href="nftgenie.pro/contact.php" style="padding-top:5px;padding-bottom:5px;padding-left:20px;padding-right:20px;display:block;color:#ffffff;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;font-size:14px;text-decoration:none;letter-spacing:2px;">Contact</a>
<!--[if mso]></td></tr></table><![endif]-->
</div>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="25%">
<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
<tr>
<td style="padding-bottom:40px;padding-left:10px;padding-right:10px;padding-top:50px;">
<div style="font-family: sans-serif">
<div style="font-size: 12px; font-family: Montserrat, Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 18px; color: #ffffff; line-height: 1.5;">
</div>
</div>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<div class="spacer_block" style="height:40px;line-height:20px;font-size:1px;"> </div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tbody>
<tr>
<td>
<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 640px;" width="640">
<tbody>
<tr>
<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="color:#9d9d9d;font-family:inherit;font-size:15px;padding-bottom:5px;padding-top:5px;text-align:center;">
<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
<tr>
<td style="text-align:center;">
<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
<!--[if !vml]><!-->
<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
<!--<![endif]-->
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table><!-- End -->
</body>
</html>';


//    $headers = "From: NFTGenie <listed@nftgenie.pro>\r\n" .
//        "X-Mailer: php\r\n";
//    $headers .= "MIME-Version: 1.0\r\n";
//    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
//
//    mail($to, $subject, $message, $headers);


    // Email to notify people:
    $message2 = '<!DOCTYPE html>

	<html lang="en" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
	<head>
	<title></title>
	<meta charset="utf-8"/>
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
	<!--[if !mso]><!-->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet" type="text/css"/>
	<!--<![endif]-->
	<style>
			* {
				box-sizing: border-box;
			}
	
			body {
				margin: 0;
				padding: 0;
			}
	
			a[x-apple-data-detectors] {
				color: inherit !important;
				text-decoration: inherit !important;
			}
	
			#MessageViewBody a {
				color: inherit;
				text-decoration: none;
			}
	
			p {
				line-height: inherit
			}
	
			@media (max-width:700px) {
				.icons-inner {
					text-align: center;
				}
	
				.icons-inner td {
					margin: 0 auto;
				}
	
				.row-content {
					width: 100% !important;
				}
	
				.stack .column {
					width: 100%;
					display: block;
				}
			}
		</style>
	</head>
	<body style="background-color: transparent; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
	<table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: transparent;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<div class="spacer_block" style="height:40px;line-height:40px;font-size:1px;"> </div>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="50%">
	<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="padding-left:15px;padding-right:15px;width:100%;">
	<div align="center" style="line-height:10px"><img alt="NFTGenie_logo" src="https://nftgenie.pro/assets/img/logo/nftgenie-logo.png" style="display: block; height: auto; border: 0; width: 71px; max-width: 100%;" title="NFTGenie_logo" width="71"/></div>
	</td>
	</tr>
	</table>
	</td>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="50%">
	<table border="0" cellpadding="15" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="72px">
	<tr>
	<td style="padding:0 2px 0 2px;"><a href="https://twitter.com/' . $twitterName . '" target="_blank"><img alt="Twitter" height="32" src="https://nftgenie.pro/assets/img/extern_logo/twitter_logo_white.png" style="display: block; height: auto; border: 0;" title="Twitter" width="32"/></a></td>
	<td style="padding:0 2px 0 2px;"><a href="' . $discordLink . '" target="_blank"><img alt="Discord" height="32" src="https://nftgenie.pro/assets/img/extern_logo/discord_logo_white.png" style="display: block; height: 30px; border: 0;" title="Discord" width="32"/></a></td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"> </div>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000; background-position: center top;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-position: center top; background-color: #000215; color: #000000; background-image: url(https://nftgenie.pro/' . $thumbnail . '); background-repeat: no-repeat; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 0px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<table border="0" cellpadding="0" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="padding-bottom:10px;">
	<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 5px solid #530AFF;"><span> </span></td>
	</tr>
	</table>
	</div>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000; background-position: center top;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
	<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
	<tr>
	<td style="padding-bottom:10px;padding-left:15px;padding-right:15px;padding-top:35px;">
	<div style="font-family: Tahoma, Verdana, sans-serif">
	<div style="font-size: 12px; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
	<p style="margin: 0; font-size: 12px; text-align: center;">We are happy to announce that we are Live on NFTGenie</p>
	</div>
	</div>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
	<tr>
	<td style="padding-bottom:10px;padding-left:15px;padding-right:15px;padding-top:30px;">
	<div style="font-family: sans-serif">
	<div style="font-size: 12px; font-family: Poppins, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #ffffff; line-height: 1.2;">
	<p style="margin: 0; font-size: 14px; text-align: center;"><span style="font-size:30px;"><strong>' . $projectName . '</strong></span></p>
	</div>
	</div>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
	<tr>
	<td style="padding-bottom:10px;padding-left:15px;padding-right:15px;padding-top:10px;">
	<div style="font-family: Tahoma, Verdana, sans-serif">
	<div style="font-size: 14px; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif; mso-line-height-alt: 16.8px; color: #ffffff; line-height: 1.2;">
	<p style="margin: 0; font-size: 14px; text-align: center;"><span style="font-size:16px;">' . mb_strimwidth($projectDes, 0, 47, "..") . '</span></p>
	</div>
	</div>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="button_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="padding-bottom:35px;padding-left:20px;padding-right:20px;padding-top:30px;text-align:center;">
	<div align="center">
	<!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="nftgenie.pro/nft.php?id=' . $_GET['id'] . '" style="height:46px;width:249px;v-text-anchor:middle;" arcsize="0%" strokeweight="1.5pt" strokecolor="#530aff" fillcolor="#530aff"><w:anchorlock/><v:textbox inset="0px,0px,0px,0px"><center style="color:#ffffff; font-family:Tahoma, Verdana, sans-serif; font-size:16px"><![endif]--><a href="nftgenie.pro/nft.php?id=' . $_GET['id'] . '" style="text-decoration:none;display:inline-block;color:#ffffff;background-color:#530aff;border-radius:0px;width:auto;border-top:1px solid #530aff;border-right:1px solid #530aff;border-bottom:1px solid #530aff;border-left:1px solid #530aff;padding-top:5px;padding-bottom:5px;font-family:Lato, Tahoma, Verdana, Segoe, sans-serif;text-align:center;mso-border-alt:none;word-break:keep-all;" target="_blank"><span style="padding-left:30px;padding-right:30px;font-size:16px;display:inline-block;letter-spacing:1px;"><span style="font-size: 16px; line-height: 2; word-break: break-word; mso-line-height-alt: 32px;"><strong><span data-mce-style="font-size: 16px; line-height: 32px;" style="font-size: 16px; line-height: 32px;">CHECK OUR PROJECT</span></strong></span></span></a>
	<!--[if mso]></center></v:textbox></v:roundrect><![endif]-->
	</div>
	</td>
	</tr>
	</table>
	</td>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
	<table border="0" cellpadding="0" cellspacing="0" class="image_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="width:100%;padding-right:0px;padding-left:0px;padding-top:40px;padding-bottom:5px;">
	<div align="center" style="line-height:10px"><img alt="' . $projectName . '" src="https://nftgenie.pro/' . $thumbnail . '" style="display: block; height: auto; border: 0; width: 227px; max-width: 100%;" title="' . $projectName . '" width="227"/></div>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<div class="spacer_block" style="height:20px;line-height:20px;font-size:1px;"> </div>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000000;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #000215; color: #000000; background-position: top center; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 0px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<table border="0" cellpadding="0" cellspacing="0" class="divider_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="padding-bottom:10px;">
	<div align="center">
	<table border="0" cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td class="divider_inner" style="font-size: 1px; line-height: 1px; border-top: 5px solid #530AFF;"><span> </span></td>
	</tr>
	</table>
	</div>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="10" cellspacing="0" class="social_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="social-table" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="72px">
	</table>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="15" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
	<tr>
	<td>
	<div style="font-family: Tahoma, Verdana, sans-serif">
	<div style="font-size: 12px; mso-line-height-alt: 18px; color: #5e5e5e; line-height: 1.5; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
	<p style="margin: 0; font-size: 12px; text-align: center; letter-spacing: 1px;">Snipe the hyped NFT drops and get the most important information about a project.</p>
	</div>
	</div>
	</td>
	</tr>
	</table>
	<table border="0" cellpadding="0" cellspacing="0" class="text_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
	<tr>
	<td style="padding-bottom:30px;padding-left:15px;padding-right:25px;padding-top:10px;">
	<div style="font-family: Tahoma, Verdana, sans-serif">
	<div style="font-size: 12px; mso-line-height-alt: 18px; color: #5e5e5e; line-height: 1.5; font-family: Lato, Tahoma, Verdana, Segoe, sans-serif;">
	<p style="margin: 0; font-size: 12px; text-align: center; letter-spacing: normal;">NFTGenie.pro</p>
	</div>
	</div>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tbody>
	<tr>
	<td>
	<table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; color: #000000; width: 680px;" width="680">
	<tbody>
	<tr>
	<td class="column" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; padding-top: 5px; padding-bottom: 5px; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
	<table border="0" cellpadding="0" cellspacing="0" class="icons_block" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="padding-bottom:5px;padding-top:5px;color:#9d9d9d;font-family:inherit;font-size:15px;text-align:center;">
	<table cellpadding="0" cellspacing="0" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
	<tr>
	<td style="text-align:center;">
	<!--[if vml]><table align="left" cellpadding="0" cellspacing="0" role="presentation" style="display:inline-block;padding-left:0px;padding-right:0px;mso-table-lspace: 0pt;mso-table-rspace: 0pt;"><![endif]-->
	<!--[if !vml]><!-->
	<table cellpadding="0" cellspacing="0" class="icons-inner" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; display: inline-block; margin-right: -4px; padding-left: 0px; padding-right: 0px;">
	<!--<![endif]-->
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table>
	</td>
	</tr>
	</tbody>
	</table><!-- End -->
	</body>
	</html>';
//    extracted($projectName, $getEmails, $message2);
}