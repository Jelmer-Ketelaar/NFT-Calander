<?php include "include/header.php"?>

    <div class="header landing">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="navigation">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="brand-logo">
                                <a href="/">
                                    <img alt="" class="logo-primary" src="./images/logo.png">
                                    <img alt="" class="logo-white" src="./images/logow.png">
                                </a>
                            </div>
                            <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                                    class="navbar-toggler" data-bs-target="#navbarSupportedContent"
                                    data-bs-toggle="collapse" type="button">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto">
                                    <li class="nav-item dropdown"><a class="nav-link" href="/index.html">Home</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/explore.html">Explore</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/item.html">Item</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/collection.html">Collection</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/profile.html">Profile</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/upload.html">Upload</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/dashboard.html">Dashboard</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="signin-btn d-flex align-items-center">
                                <div class="dark-light-toggle theme-switch" onclick="themeToggle()">
                                    <span class="dark"><i class="ri-moon-line"></i></span>
                                    <span class="light"><i class="ri-sun-line"></i></span>
                                </div>

                                <a class="btn btn-primary" href="/connect.html">Connect</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-title">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="page-title-content">
                        <h3>Explore</h3>
                        <p class="mb-2">Neftify Explore page</p>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="breadcrumbs"><a href="#">Home </a><span><i
                            class="ri-arrow-right-s-line"></i></span><a href="#">Payments</a></div>
                </div>
            </div>
        </div>
    </div>


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
                                    <div class="d-flex align-items-center mb-3"><img alt=""
                                                                                     class="me-3 avatar-img" src="./images/avatar/1.jpg">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0">John Abraham<span class="circle bg-success"></span>
                                            </h5>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mt-4 mb-4">
                                        <div class="text-start">
                                            <h4 class="mb-2">Auction Time</h4>
                                            <h5 class="text-muted">3h : 1m : 50s</h5>
                                        </div>
                                        <div class="text-end">
                                            <h4 class="mb-2">Current Bid : <strong class="text-primary">0.05
                                                ETH</strong></h4>
                                            <h5 class="text-muted">0.15 ETH</h5>
                                        </div>
                                    </div>
                                    <p class="mb-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos,
                                        unde.
                                        Unde, doloremque ipsam? Nesciunt dolorem nisi quae nostrum veniam quasi
                                        illum,
                                        iusto tempore nihil, natus perspiciatis? Sed</p>
                                    <h4 class="card-title mb-3">Latest Bids</h4>
                                    <div class="bid mb-3 card">
                                        <div class="activity-content card-body py-0">
                                            <ul>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="activity-user-img me-3"><img
                                                                alt="" src="./images/avatar/1.jpg" width="50"></div>
                                                        <div class="activity-info">
                                                            <h5 class="mb-0">Papaya</h5>
                                                            <p>0.05 ETH</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end"><span class=" text-muted">12 min
                                                                ago</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="activity-user-img me-3"><img
                                                                alt="" src="./images/avatar/2.jpg" width="50"></div>
                                                        <div class="activity-info">
                                                            <h5 class="mb-0">Alex Maris</h5>
                                                            <p>0.06 ETH</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end"><span class=" text-muted">12 min
                                                                ago</span>
                                                    </div>
                                                </li>
                                                <li class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="activity-user-img me-3"><img
                                                                alt="" src="./images/avatar/3.jpg" width="50"></div>
                                                        <div class="activity-info">
                                                            <h5 class="mb-0">John Adams</h5>
                                                            <p>0.06 ETH</p>
                                                        </div>
                                                    </div>
                                                    <div class="text-end"><span class=" text-muted">12 min
                                                                ago</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex"><a class="btn btn-primary" href="">Place a Bid</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="bottom section-padding triangle-top-dark triangle-bottom-dark">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-7 col-sm-8">
                    <div class="bottom-logo"><img alt="" class="pb-3" src="./images/logoh.png">
                        <p>Neftify is a unique and beautiful collection of UI elements that are all flexible and
                            modular. A
                            complete and customizable solution to building the website of your dreams.</p>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-5 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">About us</h4>
                        <ul>
                            <li><a href="./explore.html">Explore</a></li>
                            <li><a href="./item.html">Item</a></li>
                            <li><a href="./collection.html">Collection</a></li>
                            <li><a href="./connect.html">Connect</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-4 col-6">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Settings</h4>
                        <ul>
                            <li><a href="./settings.html">Settings</a></li>
                            <li><a href="./application.html">Application</a></li>
                            <li><a href="./security.html">Security</a></li>
                            <li><a href="./activity.html">Activity</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-8 col-sm-8">
                    <div class="bottom-widget">
                        <h4 class="widget-title">Profile</h4>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <ul>
                                    <li><a href="./profile.html">Profile</a></li>
                                    <li><a href="./created.html">Created</a></li>
                                    <li><a href="./collected.html">Collected</a></li>
                                    <li><a href="./activity.html">Activity</a></li>
                                </ul>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <ul>
                                    <li><a href="./onsale.html">On Sale</a></li>
                                    <li><a href="./liked.html">Liked</a></li>
                                    <li><a href="./following.html">Following</a></li>
                                    <li><a href="./followers.html">Followers</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="copyright">
                        <p>© Copyright 2022 <a href="#">Neftify</a> <!-- -->All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                            <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                            <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                            <li><a href="#"><i class="bi bi-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>


<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<script src="./js/scripts.js"></script>


</body>

</html>