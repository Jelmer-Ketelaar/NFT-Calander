<?php
$seoTitle = 'NFTDropCalender: Check out all the NFT Drops';
$seoDescription = 'Explore the verified NFT drops on NFTDropCalender, a view of NFTs about to drop! ✓ All-in-one NFT Tool ✓ Growing NFT Tool 2022';
$page = 'explore';
require 'connection.php';
require 'include/header.php';

$getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' ORDER BY dropDate");
$projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

if (isset($_GET['blockchain']) && $_GET['blockchain'] !== '') {
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
<!--    <div class="section-padding">-->
    <!-- ***** Explore Area Start ***** -->
    <section class="explore-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <br>
                    <!-- Intro -->
                    <div class="intro text-center mb-4">
                        <h4>Collection</h4>
                        <p>Check the collection of the listed drops</p>
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
                                                <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
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
                                                <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
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
                                                <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
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
                                                <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png'
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
<div class="section-padding"></div>
    <!-- ***** Explore Area End ***** -->
    <script src="./js/scripts.js"></script>

<?php require 'include/footer.php'; ?>