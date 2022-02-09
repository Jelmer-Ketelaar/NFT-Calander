<?php

require 'projectGetInfo.php';

$seoTitle = $project['name'] . ' - NFTGenie.pro';
$seoDescription = $project['description'];
$page = 'exploreP';
$titleOg = $project['name'] . ' - NFTGenie.pro';
$beschrijving = $project['description'];
$img = 'https://nftgenie.pro/' . $project['thumbnail'];
require 'include/header.php';

?>
    <div class="section-padding"></div>
    <!-- ***** Item Details Area Start ***** -->
    <section class="item-details-area">
        <div class="container">
            <?php if ($project['verified'] === 'false') { ?>
                <div class="alert alert-warning" role="alert">
                    We will investigate everything, and we will put some data manually in the system. Your nft is
                    private, if we have verified everything we will make it public and we will email you if it is ready!
                </div>
            <?php } ?>
            <div class="row justify-content-between">
                <div class="col-12 col-lg-5">
                    <div class="item-info">
                        <div class="item-thumb text-center">
                            <span style='position:absolute;'><img
                                        src='/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                        style='width:60px;'> </span>
                            <img src="<?php echo $project['thumbnail']; ?>" alt="">
                        </div>
                        <!-- Netstorm Tab -->
                        <ul class="netstorm-tab nav nav-tabs" id="nav-tab">
                            <li>
                                <a class="active" id="nav-home-tab" data-toggle="pill" href="#nav-home">
                                    <h5 class="m-0">Tweets</h5>
                                </a>
                            </li>
                            <li>
                                <a id="nav-profile-tab" data-toggle="pill" href="#nav-profile">
                                    <h5 class="m-0">Information</h5>
                                </a>
                            </li>
                            <?php if ($project['verified'] === 'true') { ?>
                                <li>
                                    <a id="nav-contact-tab" data-toggle="pill" href="#nav-contact">
                                        <h5 class="m-0">Share</h5>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home">
                                <ul class="list-unstyled">
                                    <a class="twitter-timeline" data-height="500" data-theme="dark"
                                       href="https://twitter.com/<?php echo $project['twitterName']; ?>"></a>
                                    <script async src="https://platform.twitter.com/widgets.js"
                                            charset="utf-8"></script>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-profile">
                                <ul class="list-unstyled">
                                    <!-- Single Tab List -->
                                    <li class="single-tab-list align-items-center">
                                        <p class="m-0"><img src='img/extern_logo/twitter_logo.png' style='width:40px;'>
                                            Account: <strong><a
                                                        href='https://twitter.com/<?php echo $project['twitterName']; ?>'
                                                        target="_blank"
                                                        style='color:blue;'><?php echo $project['twitterName']; ?></a></strong>
                                        </p>
                                        <p class="m-0"><img src='img/extern_logo/twitter_logo.png'
                                                            style='width:40px;visibility:hidden;'> Followers:
                                            <strong><?php echo $project['twitterFollowerNumber']; ?></strong></p>
                                        <p class="m-0"><img src='img/extern_logo/discord_logo.png' style='width:35px;'>
                                            Invite: <strong><a href='<?php echo $project['discordLink']; ?>'
                                                               target="_blank"
                                                               style='color:blue;'><?php echo $project['name']; ?></a></strong>
                                        </p>
                                        <p class="m-0"><img src='img/extern_logo/discord_logo.png'
                                                            style='width:35px;visibility:hidden;'> Members:
                                            <strong><?php if ($project['discordMemberNumber'] !== 0) {
                                                    echo $project['discordMemberNumber'];
                                                } else {
                                                    echo 'We will notify when ready';
                                                } ?></strong></p>
                                        <p class="m-0"><img src='img/extern_logo/link_icon.png' style='width:35px;'>
                                            Website: <strong><a href='<?php echo $project['websiteLink']; ?>'
                                                                target="_blank"
                                                                style='color:blue;'><?php echo $project['websiteLink']; ?></a></strong>
                                        </p>
                                        <p class="m-0"><img src='img/extern_logo/discord_logo.png'
                                                            style='width:35px;visibility:hidden;'> Blockchain:
                                            <strong><?php echo $project['blockchain']; ?></strong></p>
                                        <p class="m-0"><img src='img/extern_logo/discord_logo.png'
                                                            style='width:35px;visibility:hidden;'> Volume:
                                            <strong><?php echo $project['volume']; ?><?php if ($project['blockchain'] === 'solana') {
                                                    echo 'SOL';
                                                }
                                                if ($project['blockchain'] === 'ethereum') {
                                                    echo 'ETH';
                                                }
                                                if ($project['blockchain'] === 'cardano') {
                                                    echo 'ADA';
                                                }
                                                if ($project['blockchain'] === 'polygon') {
                                                    echo 'MATIC';
                                                } ?></strong></p>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-pane fade" id="nav-contact">
                                <ul class="list-unstyled">
                                    <li class="single-tab-list align-items-center">
                                        <a class="d-block btn btn-bordered-white mt-4"
                                           href="https://api.whatsapp.com/send?text=You need to see this insane drop 🔥 http://localhost/NFT-Calander/package/documents/project.php?id=<?php echo base64_encode($project['id']); ?>"
                                           target="_blank" data-dnt="true" data-show-count="false"><img
                                                    src='img/extern_logo/whatsapp_logo_white.png'
                                                    style='width:25px;margin-right:10px;'>
                                            Whatsapp <?php echo $project['name']; ?></a>
                                        <a class="d-block btn btn-bordered-white mt-4"
                                           href="https://twitter.com/intent/tweet?screen_name=<?php echo $project['twitterName']; ?>&ref_src=twsrc%5Etfw"
                                           target="_blank" data-dnt="true" data-show-count="false"><img
                                                    src='/extern_logo/twitter_logo_white.png'
                                                    style='width:25px;margin-right:10px;'> Tweet
                                            about <?php echo $project['twitterName']; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <!-- Content -->
                    <div class="content mt-5 mt-lg-0">
                        <h3 class="m-0"><?php echo $project['name']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <!-- Owner -->
                        <div class="owner d-flex align-items-center">
                            <span>Total Trading volume:</span>
                                <h6><?php echo $project['volume'];
                                    if ($project['blockchain'] === 'solana') {
                                        echo 'SOL';
                                    }
                                    if ($project['blockchain'] === 'ethereum') {
                                        echo 'ETH';
                                    }
                                    if ($project['blockchain'] === 'cardano') {
                                        echo 'ADA';
                                    }
                                    if ($project['blockchain'] === 'polygon') {
                                        echo 'MATIC';
                                    } ?> </h6>

                        </div>
                        <!-- Item Info List -->
                        <div class="item-info-list mt-4">
                            <ul class="list-unstyled">
                                <li>
                                    <span>Total traits:</span>
                                    <span><strong style='color:white;'><?php echo $project['traits']; ?></strong></span>
                                </li>
                                <li>
                                    <span>Collection supply:</span>
                                    <span><strong style='color:white;'><?php echo $project['supply']; ?></strong></span>
                                </li>
                                <li>
                                    <span>Floor price:</span>
                                    <span><strong style='color:white;'><?php echo $project['floorPrice'];
                                            if ($project['blockchain'] === 'solana') {
                                                echo 'SOL';
                                            } else {
                                                echo 'ETH';
                                            } ?></strong></span>
                                </li>
                                <li>
                                    <span>View on Marketplace:</span>
                                    <span><strong style='color:white;'><a
                                                    href="<?php echo $project['marketplaceLink']; ?>"
                                                    target="_blank"><?php echo $project['name']; ?></a></strong></span>
                                </li>
                            </ul>
                        </div>
                        <div class="row items">
                            <div class="col-12 item px-lg-2">
<!--                                <div class="card no-hover">-->
                                    <h4 class="mt-0 mb-2">Roadmap:</h4>
                                    <div class="price d-flex justify-content-between align-items-center">
                                        <?php echo nl2br($project['roadmap']); ?>
<!--                                    </div>-->
                                </div>
                            </div>
                        </div>
                        <div class="row items">
                            <div class="col-4 item px-lg-2">
                                <div class="card no-hover">
                                    <h4 class="mt-0 mb-2">Royality:</h4>
                                    <div class="price d-flex justify-content-between align-items-center">
                                        <?php echo $project['royality']; ?>%
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 item px-lg-2">
                                <div class="card no-hover">
                                    <h4 class="mt-0 mb-2">Team:</h4>
                                    <div class="price d-flex justify-content-between align-items-center">
                                        <?php echo $project['teamAmount']; ?> people
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 item px-lg-2">
                                <div class="card no-hover">
                                    <h4 class="mt-0 mb-2">Category:</h4>
                                    <div class="price d-flex justify-content-between align-items-center">
                                        <?php echo $project['category']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="d-block btn btn-bordered-white mt-4" target="_blank"
                           href="https://twitter.com/<?php echo $project['twitterName']; ?>" data-dnt="true"
                           data-show-count="false"><img src='img/extern_logo/twitter_logo_white.png' style='width:25px;'>
                            Follow <?php echo $project['twitterName']; ?></a>
                        <a class="d-block btn btn-bordered-white mt-4" target="_blank"
                           href="<?php echo $project['discordLink']; ?>" data-dnt="true" data-show-count="false"><img
                                    src='img/extern_logo/discord_logo_white.png' style='width:25px;'> Discord server</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Item Details Area End ***** -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <!-- ***** Live Auctions Area Start ***** -->
    <section class="live-auctions-area pt-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Intro -->
                    <div class="intro d-flex justify-content-between align-items-end m-0">
                        <div class="intro-content">
                            <span>Projects</span>
                            <h3 class="mt-3 mb-0">Random drops</h3>
                        </div>
                        <div class="intro-btn">
                            <a class="btn content-btn" href="exploreDrops.php">View All</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="auctions-slides">
                <div class="swiper-container slider-mid items">
                    <div class="swiper-wrapper">
                        <?php foreach ($projectsOther as $project) { ?>
                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <strong style='position:absolute;color:white;margin:5px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'><?php echo $project['floorPrice'];
                                                if ($project['blockchain'] == 'solana') {
                                                    echo 'SOL';
                                                }
                                                if ($project['blockchain'] == 'ethereum') {
                                                    echo 'ETH';
                                                }
                                                if ($project['blockchain'] == 'cardano') {
                                                    echo 'ADA';
                                                }
                                                if ($project['blockchain'] == 'polygon') {
                                                    echo 'MATIC';
                                                } ?></strong>
                                            <img class="card-img-top" src="<?php echo $project['thumbnail']; ?>" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">

                                            <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                                <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3"
                                               href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                                <span class="ml-2"><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span><img src='img/extern_logo/twitter_logo.png'
                                                           style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                                <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                                           style='width:30px;'></span>
                                                <span><img src='img/extern_logo/discord_logo.png'
                                                           style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Live Auctions Area End ***** -->
    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    <script src="./js/scripts.js"></script>

    <!--    <script src='assets/js/clipBoard.js'></script>-->

<?php require 'include/footer.php'; ?>