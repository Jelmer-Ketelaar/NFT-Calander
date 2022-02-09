<?php
$seoTitle = 'NFTGenie: Explore all NFTs Projects';
$seoDescription = 'Explore the verified NFT Projects on NFTGenie, snipe the best NFT Projects! ✓ All-in-one NFT Tool ✓ Growing NFT Tool 2022';
$page = 'exploreP';
require 'connection.php';
require 'include/header.php';

$getProjects = $conn->query("SELECT * FROM projectsExist WHERE verified = 'true' ORDER BY promoted");
$projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);
?>

<!-- ***** Explore Area Start ***** -->
<section class="explore-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-7">
                <!-- Intro -->
                <div class="intro text-center mb-4">
                    <br>
                    <span>Explore</span>
                    <h3 class="mt-3 mb-0">Verified & Real Drops</h3>
                    <p>All projects are verified and checked by NFTGenie, they also have a solid roadmap with bright future plans.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <!-- Explore Menu -->
                <div class="explore-menu btn-group btn-group-toggle flex-wrap justify-content-center text-center mb-4" data-toggle="buttons">
                    <label class="btn active d-table text-uppercase p-2">
                        <input type="radio" value="all" checked class="explore-btn">
                        <span>All</span>
                    </label>
                    <label class="btn d-table text-uppercase p-2">
                        <input type="radio" value="ethereum" class="explore-btn">
                        <span><img src='img/extern_logo/crypto/ethereum.png' style='width:18px;'> Ethereum</span>
                    </label>
                    <label class="btn d-table text-uppercase p-2">
                        <input type="radio" value="solana" class="explore-btn">
                        <span><img src='img/extern_logo/crypto/solana.png' style='width:18px;'> Solana</span>
                    </label>
                    <label class="btn d-table text-uppercase p-2">
                        <input type="radio" value="polygon" class="explore-btn">
                        <span><img src='img/extern_logo/crypto/polygon.png' style='width:18px;'> Polygon</span>
                    </label>
                    <label class="btn d-table text-uppercase p-2">
                        <input type="radio" value="cardano" class="explore-btn">
                        <span><img src='img/extern_logo/crypto/cardano.png' style='width:18px;'> Cardano</span>
                    </label>
                </div>
            </div>
        </div>
        <div class="row items explore-items">

            <?php foreach($projects as $project){ ?>

                <?php if($project['blockchain'] === 'ethereum'){ ?>
                    <div class="col-12 col-sm-3 item explore-item" data-groups='["ethereum"]' style='margin-top:0px;'>

                        <!-- Single Slide -->
                        <div class="swiper-slide item">
                            <div class="card">
                                <div class="image-over">
                                    <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                        <strong style='position:absolute;color:white;margin:5px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'><?php echo $project['floorPrice'];if($project['blockchain'] === 'solana'){echo'SOL';} else { echo'ETH'; } ?></strong>
                                        <img class="card-img-top lazy" src="<?php echo $project['thumbnail']; ?>" alt="">
                                    </a>
                                </div>
                                <!-- Card Caption -->
                                <div class="card-caption col-12 p-0">
                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                        </a>
                                        <a class="seller d-flex align-items-center my-3" href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <span class="ml-2" style='color:white;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                        </a>
                                        <div class="card-bottom d-flex justify-content-between">
                                            <span><img src='img/extern_logo/twitter_logo.png' style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                            <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png' style='width:30px;'></span>
                                            <span><img src='img/extern_logo/discord_logo.png' style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>

                <?php if($project['blockchain'] === 'solana'){ ?>
                    <div class="col-12 col-sm-3 item explore-item" data-groups='["solana"]' style='margin-top:0px;'>

                        <!-- Single Slide -->
                        <div class="swiper-slide item">
                            <div class="card">
                                <div class="image-over">
                                    <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                        <strong style='position:absolute;color:white;margin:5px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'><?php echo $project['floorPrice'];if($project['blockchain']=='solana'){echo'SOL';} else { echo'ETH'; } ?></strong>
                                        <img class="card-img-top lazy" src="<?php echo $project['thumbnail']; ?>" alt="">
                                    </a>
                                </div>
                                <!-- Card Caption -->
                                <div class="card-caption col-12 p-0">
                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                        </a>
                                        <a class="seller d-flex align-items-center my-3" href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <span class="ml-2" style='color:white;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                        </a>
                                        <div class="card-bottom d-flex justify-content-between">
                                            <span><img src='img/extern_logo/twitter_logo.png' style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                            <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png' style='width:30px;'></span>
                                            <span><img src='img/extern_logo/discord_logo.png' style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if($project['blockchain'] == 'polygon'){ ?>
                    <div class="col-12 col-sm-3 item explore-item" data-groups='["polygon"]' style='margin-top:0px;'>

                        <!-- Single Slide -->
                        <div class="swiper-slide item">
                            <div class="card">
                                <div class="image-over">
                                    <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                        <strong style='position:absolute;color:white;margin:5px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'><?php echo $project['floorPrice'];if($project['blockchain']=='solana'){echo'SOL';} else { echo'ETH'; } ?></strong>
                                        <img class="card-img-top lazy" src="<?php echo $project['thumbnail']; ?>" alt="">
                                    </a>
                                </div>
                                <!-- Card Caption -->
                                <div class="card-caption col-12 p-0">
                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                        </a>
                                        <a class="seller d-flex align-items-center my-3" href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <span class="ml-2" style='color:white;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                        </a>
                                        <div class="card-bottom d-flex justify-content-between">
                                            <span><img src='img/extern_logo/twitter_logo.png' style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                            <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png' style='width:30px;'></span>
                                            <span><img src='img/extern_logo/discord_logo.png' style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <?php if($project['blockchain'] == 'cardano'){ ?>
                    <div class="col-12 col-sm-3 item explore-item" data-groups='["cardano"]' style='margin-top:0px;'>
                        <!-- Single Slide -->
                        <div class="swiper-slide item">
                            <div class="card">
                                <div class="image-over">
                                    <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                        <strong style='position:absolute;color:white;margin:5px;text-shadow: 1px 0 0 #000, 0 -1px 0 #000, 0 1px 0 #000, -1px 0 0 #000;'><?php echo $project['floorPrice'];if($project['blockchain'] === 'solana'){echo'SOL';} else { echo'ETH'; } ?></strong>
                                        <img class="card-img-top lazy" src="<?php echo $project['thumbnail']; ?>" alt="">
                                    </a>
                                </div>
                                <!-- Card Caption -->
                                <div class="card-caption col-12 p-0">
                                    <!-- Card Body -->
                                    <div class="card-body">

                                        <a href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <h5 class="mb-0"><?php echo $project['name']; ?></h5>
                                        </a>
                                        <a class="seller d-flex align-items-center my-3" href="project.php?id=<?php echo base64_encode($project['id']); ?>">
                                            <span class="ml-2" style='color:white;'><?php echo mb_strimwidth($project['description'], 0, 47, ".."); ?></span>
                                        </a>
                                        <div class="card-bottom d-flex justify-content-between">
                                            <span><img src='img/extern_logo/twitter_logo.png' style='width:40px;'> <?php echo $project['twitterFollowerNumber']; ?></span>
                                            <span><img src='img/extern_logo/crypto/<?php echo $project['blockchain']; ?>.png' style='width:30px;'></span>
                                            <span><img src='img/extern_logo/discord_logo.png' style='width:35px;'> <?php echo $project['discordMemberNumber']; ?></span>
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
    <script src="./js/scripts.js"></script>


<?php require 'footer.php'; ?>