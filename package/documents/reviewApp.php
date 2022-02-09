<?php
require 'connection.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_GET['ww']) && $_GET['ww'] === 'Test') {
    $getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'false'");
    $projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

    $getProjectsLis = $conn->query("SELECT * FROM projectsExist WHERE verified = 'false'");
    $projectsListed = $getProjectsLis->fetchAll(\PDO::FETCH_ASSOC);
} else {
    die();
}


?>
<html lang="en">
<head>
    <meta name="robots" content="noindex">
    <meta name="googlebot" content="noindex">
    <title>NFTDropCalendar</title>
    <link rel="apple-touch-icon" href="img/logo/apple-touch-icon.png">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!-- ***** Activity Area Start ***** -->
<section class="activity-area load-more">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Intro -->
                <div class="intro mb-4">
                    <div class="intro-content">
                        <span>Drops</span>
                        <h3 class="mt-3 mb-0">Waiting for Accept/Declined</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row items">
            <div class="col-12 col-md-12 col-lg-12">
                <!-- Netstorm Tab -->
                <ul class="netstorm-tab nav nav-tabs" id="nav-tab">
                    <li>

                    </li>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home">
                        <ul class="list-unstyled">
                            <?php foreach ($projects as $project) { ?>
                                <!-- Single Tab List -->
                                <li class="single-tab-list d-flex align-items-center"
                                    style='<?php if ($project['promoted'] == 'promote') {
                                        echo 'background-color:yellow;';
                                    } ?>'>
                                    <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>" target="_blank">
                                        <img class="avatar-lg" src="<?php echo $project['thumbnail']; ?>"
                                             style='min-width:100px;height:100px;' alt="">
                                    </a>
                                    <!-- Activity Content -->
                                    <div class="activity-content ml-4">
                                        <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                           target="_blank">
                                            <div class='row'><h5 class="mt-0 mb-2"><?php echo $project['name']; ?>
                                                    <br>
                                                    <a href='https://twitter.com/<?php echo $project['twitterName']; ?>'
                                                       style='color:blue;'
                                                       target='_blank'>Twitter: <?php echo $project['twitterName']; ?></a>
                                                    <br>
                                                    <a href='<?php echo $project['discordLink']; ?>' style='color:blue;'
                                                       target='_blank'>Discord: <?php echo $project['name']; ?></a></h5>
                                            </div>
                                        </a>
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <form action='reviewAppProc.php' method='get'>
                                                <input type='hidden'
                                                       value='<?php echo base64_encode($project['id']); ?>' name='id'>
                                                <input type='hidden' value='<?php echo $project['emailContact']; ?>'
                                                       name='email'>
                                                <input type='hidden' value='<?php echo $project['thumbnail']; ?>'
                                                       name='thumbnail'>
                                                <input type='hidden' value='<?php echo $project['name']; ?>'
                                                       name='projectName'>
                                                <input type='hidden' value='<?php echo $project['description']; ?>'
                                                       name='projectDes'>
                                                <input type='hidden' value='<?php echo $project['discordLink']; ?>'
                                                       name='discordLink'>

                                                <div class='row'>
                                                    <div class='col-2'>
                                                        <label>Twitter followers:</label>
                                                        <input type='text'
                                                               value='<?php echo $project['twitterFollowerNumber']; ?>'
                                                               name='twitterFollowerAmount'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Discord:</label>
                                                        <input type='text'
                                                               value='<?php if ($project['discordMemberNumber'] !== 0) {
                                                                   echo $project['discordMemberNumber'];
                                                               } ?>' name='discordMemberNumber'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Twitter:</label>
                                                        <input type='text'
                                                               value='<?php if (str_contains($project['twitterName'], '@')) {
                                                                   echo str_replace("@", "", $project['twitterName']);
                                                               } else {
                                                                   echo $project['twitterName'];
                                                               } ?>' name='twitterName'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Mint price:</label>
                                                        <input type='text' value='<?php echo $project['mintPrice']; ?>'
                                                               name='mintPrice'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <button type='submit'
                                                                style="background-color:green; color:white;">Update &
                                                            Accept
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <hr>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Intro -->
                <div class="intro mb-4">
                    <div class="intro-content">
                        <span>Projects</span>
                        <h3 class="mt-3 mb-0">Waiting for Accept/Declined</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row items">
            <div class="col-12 col-md-12 col-lg-12">
                <!-- Netstorm Tab -->
                <ul class="netstorm-tab nav nav-tabs" id="nav-tab">
                    <li>
                        <a class="active" id="nav-home-tab" data-toggle="pill" href="#nav-home">
                            <h5 class="m-0">All</h5>
                        </a>
                    </li>
                </ul>
                <!-- Tab Content -->
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home">
                        <ul class="list-unstyled">
                            <?php foreach ($projectsListed as $project) { ?>
                                <!-- Single Tab List -->
                                <li class="single-tab-list d-flex align-items-center"
                                    style='<?php if ($project['promoted'] == 'promote') {
                                        echo 'background-color:yellow;';
                                    } ?>'>
                                    <a href="project.php?id=<?php echo base64_encode($project['id']); ?>"
                                       target="_blank">
                                        <img class="avatar-lg" src="<?php echo $project['thumbnail']; ?>"
                                             style='min-width:100px;height:100px;' alt="">
                                    </a>
                                    <!-- Activity Content -->
                                    <div class="activity-content ml-4">
                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>"
                                           target="_blank">
                                            <div class='row'><h5 class="mt-0 mb-2"><?php echo $project['name']; ?> <a
                                                            href='https://twitter.com/<?php echo $project['twitterName']; ?>'
                                                            style='color:blue;'
                                                            target='_blank'>Twitter: <?php echo $project['twitterName']; ?></a><a
                                                            href='<?php echo $project['discordLink']; ?>'
                                                            style='color:blue;'
                                                            target='_blank'>Discord: <?php echo $project['name']; ?></a>
                                                </h5></div>
                                        </a>
                                        <div class="col-12 col-md-12 col-lg-12">
                                            <form action='reviewAppProjectProc.php' methode='get'>
                                                <input type='hidden'
                                                       value='<?php echo base64_encode($project['id']); ?>' name='id'>
                                                <input type='hidden' value='<?php echo $project['emailContact']; ?>'
                                                       name='email'>
                                                <input type='hidden' value='<?php echo $project['thumbnail']; ?>'
                                                       name='thumbnail'>
                                                <input type='hidden' value='<?php echo $project['name']; ?>'
                                                       name='projectName'>
                                                <input type='hidden' value='<?php echo $project['description']; ?>'
                                                       name='projectDes'>
                                                <input type='hidden' value='<?php echo $project['discordLink']; ?>'
                                                       name='discordLink'>
                                                <input type='hidden' value='<?php echo $project['marketplaceLink']; ?>'
                                                       name='marketplaceLink'>
                                                <input type='hidden'
                                                       value='<?php echo $project['twitterFollowerAmount']; ?>'
                                                       name='twitterFollowerAmount'>

                                                <div class='row'>
                                                    <div class='col-2'>
                                                        <label>Floorprice:</label>
                                                        <input type='text' value='<?php echo $project['floorPrice']; ?>'
                                                               name='floorPrice'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Discord:</label>
                                                        <input type='text'
                                                               value='<?php if ($project['discordMemberNumber'] !== 0) {
                                                                   echo $project['discordMemberNumber'];
                                                               } ?>' name='discordMemberNumber'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Twitter:</label>
                                                        <input type='text'
                                                               value='<?php if (str_contains($project['twitterName'], '@')) {
                                                                   echo str_replace("@", "", $project['twitterName']);
                                                               } else {
                                                                   echo $project['twitterName'];
                                                               } ?>' name='twitterName'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Volume:</label>
                                                        <input type='text' value='<?php echo $project['volume']; ?>'
                                                               name='volume'>
                                                    </div>
                                                    <div class='col-2'>
                                                        <label>Traits:</label>
                                                        <input type='text' value='<?php echo $project['traits']; ?>'
                                                               name='traits' required>
                                                    </div>
                                                    <div class='col-2'>
                                                        <button type='submit'
                                                                style="background-color:green; color:white;">Update &
                                                            Accept
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            <?php } ?>
                            <hr>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Activity Area End ***** -->
</body>
</html>