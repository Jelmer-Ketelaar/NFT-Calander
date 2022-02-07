<?php

require 'nftGetInfo.php';

$seoTitle = $project['name'] . ' - NFTDropCalender.info';
$seoDescription = $project['description'];
$page = 'explore';
$titleOg = $project['name'] . ' - NFTDropCalender.info';
$beschrijving = $project['description'];
//$img = 'https://nftgenie.pro/'.$project['thumbnail'];
require 'include/header.php';

?>
<div class="item-single section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="top-bid">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6"><img alt="..." class="img-fluid rounded"
                                                       src="./images/items/11.jpg"></div>
                            <div class="col-md-6">
                                <h3 class="mb-3">Brighten LQ</h3>
                                <hr>
                                <ul class="list-unstyled">
                                    <li class="price d-flex justify-content-between">
                                        <h4>Mint Price : <strong
                                                    class="text-primary"><?php echo $project['mintPrice']; ?><?php if ($project['blockchain'] === 'solana') {
                                                    echo ' SOL';
                                                }
                                                if ($project['blockchain'] === 'ethereum') {
                                                    echo ' ETH';
                                                }
                                                if ($project['blockchain'] === 'cardano') {
                                                    echo ' ADA';
                                                }
                                                if ($project['blockchain'] === 'polygon') {
                                                    echo ' MATIC';
                                                } ?></strong></h4>
                                        <span></span>
                                    </li>
                                    <li>
                                        <h4>Collection supply: </h4>
                                        <span><strong><?php echo $project['supply']; ?></strong></span>
                                    </li>
                                </ul>
                                <hr>
                                <div class="row items">
                                    <div class="col-12 item px-lg-2">
                                        <h4 class="mt-0 mb-2">Roadmap:</h4>
                                        <div class="price d-flex justify-content-between align-items-center">
                                            <?php echo nl2br($project['roadmap']); ?>
                                        </div>
                                    </div>
                                </div>
                                <hr>
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
                                   data-show-count="false" style="color: gray">
                                    <img src='images/extern_logo/twitter_logo.png' style='width:25px;'>
                                    Follow <?php echo $project['twitterName']; ?></a>
                                <a class="d-block btn btn-bordered mt-4" target="_blank"
                                   href="<?php echo $project['discordLink']; ?>" data-dnt="true"
                                   data-show-count="false" style="color: gray">
                                    <img src='images/extern_logo/discord_logo.png' style='width:25px;'> Discord
                                    server</a>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include "include/footer.php" ?>


<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="./js/scripts.js"></script>


</body>

</html>