<?php
$seoTitle = 'NFTDropCalender: Explore all NFTs Drops';
$seoDescription = 'Explore the verified NFT drops on NFTDropCalender, pro view of NFTs about to drop! ✓ All-in-one NFT Tool ✓ Growing NFT Tool 2022';
$page = 'explore';
require 'connection.php';
require 'include/header.php';
$max_loop = 0;
$getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' ORDER BY dropDate");
//$banner = $conn->query("SELECT * FROM projects");
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

$getBanner = $conn->query("SELECT * FROM projects WHERE banner != 'null'");
$banner = $getBanner->fetch(\PDO::FETCH_ASSOC);

?>
<link
        rel="stylesheet"
        href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>

<div class="intro1 section-padding">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-xl-5 col-lg-6 col-12">
                <div class="intro-content  my-5">
                    <h1 class="mb-3">Discover<span> extraordinary NFTs</span></h1>
                    <div class="intro-btn mt-5">
                        <a class="btn btn-outline-primary" href="exploreDrops.php">Explore Drops</a>
                        <a class="btn btn-outline-primary" href="exploreProject.php">Explore Projects</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 col-12">
                <a href="nft.php?id=<?php echo base64_encode($banner['id']); ?>" target="_blank">
                    <div class="intro-slider">
                        <div class="slider-item">
                            <img alt="" class="img-fluid" src="<?php echo $banner['thumbnail'] ?>">
                            <div class="slider-item-avatar">
                                <img alt="" src="<?php echo $banner['thumbnail'] ?>">
                                <div>
                                    <h5><?php echo $banner['name'] ?></h5>
                                    <p><?php echo mb_strimwidth($banner['description'], 0, 150, "..."); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- <div class="section-padding">
 <center>
     <img alt="" class="CoverPhoto"
          src="">
 </center>
 </div>-->

<div class="notable-drops section-padding bg-light triangle-top-light triangle-bottom-light" id="NFT-DROPS">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center d-flex justify-content-between mb-3">
                    <h2>NFT Drops</h2>
                </div>
            </div>
        </div>
        <div class="swiper-container">
            <div class="row">
                <?php $i = 0;
                foreach ($projects as $project) {
                    if (++$i > 8) {
                        break;    /* You could also write 'break 1;' here. */
                    } ?>
                    <div class="col-xl-3 col-lg-6 col-md-6">
                        <div class="card"><img alt="" class="img-fluid card-img-top" src="img/items/1.jpg">
                            <div class="card-body">
                                <div class="notable-drops-content-img"></div>
                                <h4 class="card-title"><?php echo $project['name'] ?> </h4>
                                <p><?php echo mb_strimwidth($project['description'], 0, 80, "..."); ?> </p>
                                <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>">Check this NFT
                                    <i class="bi bi-arrow-right-short"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>


<div class="notable-drops section-padding" id="NFT-DROPS">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title text-center">
                    <h2>Reasons why you should choose us</h2>
                    <p>A few reasons why you should choose NFTDropCalendar</p>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-shield-check"></i></div>
                    <div>
                        <h4>Projects/Drops </h4>
                        <p>Every project/drop that is listed on <strong>NFTDropCalender</strong> is verified and a
                            legit project, we check everything before we list the project.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="fas fa-info-circle"></i></div>
                    <div>
                        <h4>Information</h4>
                        <p>On <strong>NFTDropCalender</strong> you can find all the information that you need to
                            know
                            about a project, best snipe tool for NFT projects/drops!</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-circle-half"></i></div>
                    <div>
                        <h4>Own project/drop</h4>
                        <p>If you list your own NFT project/drop, we will email all our newspaper
                            users, that we listed an amazing drop!</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6">
                <div class="create-sell-content">
                    <div class="create-sell-content-icon"><i class="bi bi-circle-half"></i></div>
                    <div>
                        <h4>Free to use</h4>
                        <p><strong>NFTDropCalender</strong> is completely free for the users of this platform, there
                            is no
                            catch at all. <br> You only have to pay for listing your project/drop to our page </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<?php include 'include/footer.php' ?>




