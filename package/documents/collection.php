<?php
$seoTitle = 'NFTGenie: All Promoted Drops';
$seoDescription = 'All promoted drops on NFTGenie, quick view of the projects.';
$page = 'quick';
require 'connection.php';
require 'include/header.php';


if (isset($_GET['blockchain']) && $_GET['blockchain'] !== '') {
    $blockchain = $_GET['blockchain'];
    $getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3' AND blockchain = '" . $blockchain . "'");
    $projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

    $getProjectLi = $conn->query("SELECT * FROM projectsExist WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3' AND blockchain = '" . $blockchain . "'");
} else {
    $blockchain = '';
    $getProjects = $conn->query("SELECT * FROM projects WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3'");
    $projects = $getProjects->fetchAll(\PDO::FETCH_ASSOC);

    $getProjectLi = $conn->query("SELECT * FROM projectsExist WHERE verified = 'true' AND promoted = 'promote' OR promoted = 'promote1' OR promoted = 'promote2' OR promoted = 'promote3'");
}
$projectsListed = $getProjectLi->fetchAll();

?>

<div class="collections section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="filter-tab">
                    <!--                    <div class="filter-nav mb-4"><a class="active">All</a><a>Games</a><a>Artwork</a></div>-->
                    <div class="row">
                        <?php foreach ($projects

                                       as $project) { ?>
                            <div class="col-xxl-3 col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="card items">
                                    <div class="card-body">
                                        <div class="items-img position-relative">
                                            <a href="nft.php?id=<?php echo base64_encode($project['id']); ?>"
                                               target="_blank">
                                                <img class="avatar-lg"
                                                     src="<?php echo $project["thumbnail"] ?>"
                                                     style="min-width:90px;height:90px;" alt="">
                                            </a>
                                        </div>
                                        <a href="nft.php?nft=BadKidz&amp;id=MTg4" target="_blank">
                                            <h4 class="mt-0 mb-2"><?php echo $project['name']; ?></h4>
                                        </a>

                                        <div class="d-flex justify-content-between">
                                            <div class="text-start">
                                                <p class="mb-lg-n2"><?php echo mb_strimwidth($project['description'], 0, 80, "..."); ?></p>
                                                <h5 class="text-muted">3h 1m 50s</h5>
                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-center mt-3"><a class="btn btn-primary"
                                                                                           href="nft.php"><?php echo ucfirst($project['blockchain']) ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./js/scripts.js"></script>
