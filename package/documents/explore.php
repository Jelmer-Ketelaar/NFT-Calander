<?php
require 'nftGetInfo.php';
$seoTitle = 'NFTDropCalender: Explore all NFTs Drops';
$seoDescription = 'Explore the verified NFT drops on NFTDropCalender, pro view of NFTs about to drop! ✓ All-in-one NFT Tool ✓ Growing NFT Tool 2022';
$page = 'explore';
require 'connection.php';
require 'include/header.php';

$getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' ORDER BY dropDate");
$projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

if (isset($_GET['blockchain']) && $_GET['blockchain'] != '') {
    $blockchain = $_GET['blockchain'];
    $getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3' AND blockchain = '" . $blockchain . "'");
    $projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

    $getProjectLi = $conn->prepare("SELECT * FROM projectsExist WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3' AND blockchain = '" . $blockchain . "'");
} else {
    $blockchain = '';
    $getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3'");
    $projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

    $getProjectLi = $conn->prepare("SELECT * FROM projectsExist WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3'");
}
$getProjectLi->execute();
$projectsListed = $getProjectLi->fetchAll();

?>

    <!-- ***** Explore Area Start ***** -->
    <section class="explore-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <!-- Intro -->
                    <div class="intro text-center mb-4">

                    </div>
                </div>
            </div>
            <div class="section-padding">
                <div class="col-12 col-md-6 col-lg-4">
                    <!-- Activity Content -->
                    <div class="activity-content mt-5 mt-lg-0">
                        <!-- Single Widget -->
                        <div class="single-widget">
                            <!-- Filter Widget -->
                            <div class="widget filter-widget">
                                <h4 class="title">Blockchain Filter</h4>
                                <!-- Filter Widget Content -->
                                <div class="widget-content">
                                    <!-- Tags Widget Items -->
                                    <div class="widget-content filter-widget-items mt-3">
                                        <a href="<?php if ($blockchain === 'ethereum') { ?>?blockchain=<?php } else { ?>?blockchain=ethereum<?php } ?>"

                                           <?php if ($blockchain === 'ethereum'){ ?>style='border-color:white;color:white!important;'<?php } ?>><img
                                                    src='img/extern_logo/crypto/ethereum.png' style='width:30px;'>
                                            Ethereum</a>
                                        <a href="<?php if ($blockchain === 'solana') { ?>?blockchain=<?php } else { ?>?blockchain=solana<?php } ?>"

                                           <?php if ($blockchain === 'solana'){ ?>style='border-color:white;color:white!important;'<?php } ?>><img
                                                    src='img/extern_logo/crypto/solana.png' style='width:30px;'> Solana</a>
                                        <a href="<?php if ($blockchain === 'polygon') { ?>?blockchain=<?php } else { ?>?blockchain=polygon<?php } ?>"

                                           <?php if ($blockchain === 'polygon'){ ?>style='border-color:white;color:white!important;'<?php } ?>><img
                                                    src='img/extern_logo/crypto/polygon.png' style='width:30px;'>
                                            Polygon</a>
                                        <a href="<?php if ($blockchain === 'cardano') { ?>?blockchain=<?php } else { ?>?blockchain=cardano<?php } ?>"

                                           <?php if ($blockchain === 'cardano'){ ?>style='border-color:white;color:white!important;'<?php } ?>><img
                                                    src='img/extern_logo/crypto/cardano.png' style='width:30px;'>
                                            Cardano</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row items explore-items">

                <?php foreach ($projects as $project) { ?>

                    <?php if ($project['blockchain'] === 'ethereum') { ?>
                        <div class="col-12 col-sm-3 item explore-item" data-groups='["ethereum"]'
                             style='margin-top:0;'>

                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <img class="card-img-top lazy" loading="lazy"
                                             src="<?php echo $project['thumbnail'] ?>" alt="">

                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center'
                                                     data-date="<?php echo explode("T", $project['dropDate'])[0]; ?>"
                                                     data-time="<?php echo explode("T", $project['dropDate'])[1]; ?>"></div>
                                            </div>

                                            <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3"
                                               href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <span class="ml-2"
                                                      style='color:grey;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span><img src='img/extern_logo/twitter_logo.png'
                                                           style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                                <span><img src='images/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                                           style='width:30px;'></span>
                                                <span><img src='img/extern_logo/discord_logo.png'
                                                           style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                    <?php if ($project['blockchain'] === 'solana') { ?>
                        <div class="col-12 col-sm-3 item explore-item" data-groups='["solana"]' style='margin-top:0px;'>

                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">
                                        <img class="card-img-top" loading="lazy"
                                             src="<?php echo $project['thumbnail']; ?>" alt="">
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center'
                                                     data-date="<?php echo explode("T", $project['dropDate'])[0]; ?>"
                                                     data-time="<?php echo explode("T", $project['dropDate'])[1]; ?>"></div>
                                            </div>

                                            <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3"
                                               href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <span class="ml-2"
                                                      style='color:grey;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span><img src='img/extern_logo/twitter_logo.png'
                                                           style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                                <span><img src='images/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                                           style='width:30px;'></span>
                                                <span><img src='img/extern_logo/discord_logo.png'
                                                           style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($project['blockchain'] === 'polygon') { ?>
                        <div class="col-12 col-sm-3 item explore-item" data-groups='["polygon"]'
                             style='margin-top:0px;'>

                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">

                                        <img class="card-img-top lazy" loading="lazy"
                                             src="<?php echo $project['thumbnail'] ?>" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center'
                                                     data-date="<?php echo explode("T", $project['dropDate'])[0]; ?>"
                                                     data-time="<?php echo explode("T", $project['dropDate'])[1]; ?>"></div>
                                            </div>

                                            <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3"
                                               href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <span class="ml-2"
                                                      style='color:grey;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span><img src='img/extern_logo/twitter_logo.png'
                                                           style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                                <span><img src='images/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                                           style='width:30px;'></span>
                                                <span><img src='img/extern_logo/discord_logo.png'
                                                           style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <?php if ($project['blockchain'] === 'cardano') { ?>
                        <div class="col-12 col-sm-3 item explore-item" data-groups='["cardano"]'
                             style='margin-top:0px;'>

                            <!-- Single Slide -->
                            <div class="swiper-slide item">
                                <div class="card">
                                    <div class="image-over">

                                        <img class="card-img-top lazy" loading="lazy"
                                             src="<?php echo $project['thumbnail'] ?>" alt="">
                                        </a>
                                    </div>
                                    <!-- Card Caption -->
                                    <div class="card-caption col-12 p-0">
                                        <!-- Card Body -->
                                        <div class="card-body">
                                            <div class="countdown-times mb-3">
                                                <div class='countdown d-flex justify-content-center'
                                                     data-date="<?php echo explode("T", $project['dropDate'])[0]; ?>"
                                                     data-time="<?php echo explode("T", $project['dropDate'])[1]; ?>"></div>
                                            </div>
                                            <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                            </a>
                                            <a class="seller d-flex align-items-center my-3"
                                               href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <span class="ml-2"
                                                      style='color:grey;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                            </a>
                                            <div class="card-bottom d-flex justify-content-between">
                                                <span><img src='img/extern_logo/twitter_logo.png'
                                                           style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                                <span><img src='images/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
                                                           style='width:30px;'></span>
                                                <span><img src='img/extern_logo/discord_logo.png'
                                                           style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                <?php } ?>

            </div>
        </div>
    </section>
    <!-- ***** Explore Area End ***** -->
    <script src="./js/scripts.js"></script>

<?php require 'include/footer.php'; ?>