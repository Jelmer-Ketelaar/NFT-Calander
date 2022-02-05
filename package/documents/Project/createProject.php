<?php
$seoTitle = 'NFTGenie: List your own NFT Project!';
$seoDescription = 'List your own NFT project and let the world explore it! ✓ Free ✓ Best tool 2022 ✓ 235% Hype';
$page = 'create';
require 'include/header.php'; ?>

    <!-- Production (un-minified) -->
    <script src="https://unpkg.com/@solana/web3.js@latest/lib/index.iife.min.js"></script>
    <script src="https://unpkg.com/browse/@solana/web3.js@1.29.2/lib/index.iife.min.js"></script>
    <script src="https://requirejs.org/docs/release/2.3.5/minified/require.js"></script>
    <!-- ManyChat -->
    <script src="//widget.manychat.com/103940448492780.js" defer="defer"></script>
    <script src="https://mccdn.me/assets/js/widget.js" defer="defer"></script>
    <style>
        #listing {
            position: absolute;
            margin-top: -100000px;
            visibility: hidden;
        }
    </style>
    <!-- ***** Create Area Start ***** -->
    <section class="author-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md-4">
                    <!-- Author Profile -->
                    <div class="card no-hover text-center" style='position: sticky; top:15vh;'>
                        <div class="image-over">
                            <img class="card-img-top" id='projectImage' src="assets/img/content/auction_2.jpg" alt="">
                            <!-- Author -->
                            <div class="author">
                                <div class="author-thumb avatar-lg">
                                    <img class="rounded-circle" id='blockchainLogo'
                                         src="assets/img/extern_logo/crypto/ethereum.png" alt="">
                                </div>
                            </div>
                        </div>
                        <!-- Card Caption -->
                        <div class="card-caption col-12 p-0">
                            <!-- Card Body -->
                            <div class="card-body mt-4">
                                <h5 class="mb-3" id='projectName'>Project name</h5>
                                <p class="my-3" id='projectShortDes'>Project description</p>
                                <hr>
                                <div class="social-icons justify-content-center my-3" style='display:none;'
                                     id='socialBtn'>
                                    <p><img id='twitterLogo' src='assets/img/extern_logo/twitter_logo_white.png'
                                            style='width:25px;height:25px;visibility:hidden;'> <span
                                                id='twitterName'></span></p>
                                    <p><img id='discordLogo' src='assets/img/extern_logo/discord_logo_white.png'
                                            style='width:25px;height:25px;visibility:hidden;'> <span
                                                id='discordName'></span></p>
                                    <p><img id='websiteLogo' src='assets/img/extern_logo/link_icon_white.png'
                                            style='width:25px;height:25px;visibility:hidden;'> <span
                                                id='websiteName'></span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <!-- Intro -->
                    <div class="intro mt-5 mt-lg-0 mb-4 mb-lg-5">
                        <div class="intro-content">
                            <span>List your own NFT Project (NOT <a href='create.php'
                                                                    style='text-decoration: underline;'>DROP</a>)</span>
                            <h3 class="mt-3 mb-0">NFT Project</h3>
                        </div>
                    </div>
                    <!-- Item Form -->
                    <form class="item-form card no-hover" id='listingForm' action='listingProjectProces.php'
                          method='POST' enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" id='projectNameInput' name="projectName"
                                           placeholder="Project name" required="required" maxlength="25">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <textarea class="form-control" id='projectShortDesInput' name="projectDescription"
                                              placeholder="Description about the project" maxlength='750' cols="30"
                                              required="required" rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <select name="blockchain" id="selectBlockchain">
                                        <option value="ethereum">Ethereum</option>
                                        <option value="solana">Solana</option>
                                        <option value="polygon">Polygon</option>
                                        <option value="cardano">Cardano</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio1" value="Fun" checked>
                                        <label class="form-check-label" for="inlineRadio1">Fun</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio2" value="Metaverse">
                                        <label class="form-check-label" for="inlineRadio2">Metaverse</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions"
                                               id="inlineRadio3" value="Artwork">
                                        <label class="form-check-label" for="inlineRadio3">Artwork</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="input-group form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name='thumbnail'
                                               id="inputGroupFile01" accept="image/*" onchange="loadFile(event)">
                                        <label class="custom-file-label" id='bannerLabel' for="inputGroupFile01">Choose
                                            project image (NO BANNER)</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" id='traits' name="traits"
                                           placeholder="Diffrent Traits amount" step="1">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" id='floorPrice' name="floorPrice"
                                           placeholder="Current Floor-price" step="0.00001">
                                    <sub>Don't have a Floor price? <a style='color:blue;'
                                                                      onclick="alert('If your NFT project is not live, please submit it as a NFT Drop. You can click in the header on &quot;List Drop&quot;');">here</a></sub>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="form-group">
                                    <label>Roadmap:</label>
                                    <textarea class="form-control" id='roadmap' name="roadmap" placeholder="2022 Q1: Creating NFTGenie coin to make things easier
2022 Q2: Some plans to do in the future
2022 Q3: Some bright and cool things that are gonna be huge
2022 Q4: Some more plans etc
(summary of your roadmap)
                                        
                                        " cols="30" rows="5" maxlength='2000'></textarea>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id='volumeTxt' name="volume"
                                           placeholder="Volume traded (ETH)" step=".0001">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id='royality' name="royality"
                                           placeholder="Royality fee (%)" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id='supply' name='supply'
                                           placeholder="NFT Supply (example 3333)" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" id='teamAmount' name="teamAmount"
                                           placeholder="Team size " required="required">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control" id='twitterNameInput' name="twitterName"
                                           placeholder="Twitter username" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <hr>
                                <div class="form-group">
                                    <input type="text" class="form-control" id='discordNameInput' name="discordLink"
                                           placeholder="Discord invite link" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id='websiteLinkInput' name="websiteLink"
                                           placeholder="Website link" required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id='marketplaceLink' name="marketplaceLink"
                                           placeholder="Marketplace link" required="required">
                                    <sub>Don't have a Floor price? <a style='color:blue;'
                                                                      onclick="alert('If your NFT project is not live, please submit it as a NFT Drop. You can click in the header on &quot;List Drop&quot;');">here</a></sub>
                                </div>
                            </div>
                            <input type="hidden" id='signature' name='signature' value=''>
                            <div class="col-12">
                                <hr>
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" id='emailContact' name="emailContact"
                                           placeholder="Email (only for contact, nobody can see)" required="required"
                                           maxlength="70">

                                    <div class="form-group mt-3" style='border:thin solid #4528DC;padding:10px;'>
                                        <h5 style='margin:4px !important;text-align:center;'>Boost Your Project +70.000
                                            views!</h5>
                                        <p style='margin-bottom:4px;margin-top:4px;text-align:center;'>Only
                                            <strong><span style='color:#4528DC;'>1</span></strong>/5 Promotion Place
                                            open! <strike id='normalPromoPrice'>0.053ETH</strike><strong><span
                                                        id='promotePrice'> 0.043ETH</span></strong><span
                                                    id='countdownDiscount' style='color:#4528DC; float:right;'></span>
                                        </p>
                                        <div class="form-check form-check-inline" style='margin-bottom:4px !important;'>
                                            <input class="form-check-input" type="radio" name="promotionBox"
                                                   id="promotionBox1" value="promote">
                                            <label class="form-check-label" for="promotionBox1" style='margin:5px;'>Homepage
                                                promo, Listpage promo, Twitter Page Pin,<br>1 Week Full Promo, <strong>340%</strong>
                                                more actions, newspaper alert</label>
                                        </div>
                                        <p style='margin:0px;text-align:center;'>Easy pay through <strong>Web3</strong>
                                            wallet: Metamask, Phantom wallet</p>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="promotionBox"
                                                   id="promotionBox2" value="promote2" checked>
                                            <label class="form-check-label" for="promotionBox2">Custom Twitter tweet,
                                                Live on NFTGenie <strong id='listingPrice'> 0.004ETH</strong></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <script>

                                let count = 9461;
                                const counter = setInterval(timer, 1000); //1000 will  run it every 1 second

                                function timer() {
                                    count = count - 1;
                                    if (count === -1) {
                                        clearInterval(counter);
                                        return;
                                    }

                                    const seconds = count % 60;
                                    let minutes = Math.floor(count / 60);
                                    let hours = Math.floor(minutes / 60);
                                    minutes %= 60;
                                    hours %= 60;

                                    document.getElementById("countdownDiscount").innerHTML = ' ' + hours + ":" + minutes + ":" + seconds; // watch for spelling
                                }

                            </script>

                            <div class="col-12" style='text-align:center;'>
                                <button class="btn w-100 mt-3 mt-sm-4" type="button" onclick="listProject()">List
                                    project
                                </button>
                            </div>

                            <div class="col-12">
                                <br>
                                <div class="alert alert-primary" role="alert" id='walletRequiredMessage'
                                     style='display:none;'>
                                    You need atleast: Metamask, Phantom wallet or Math wallet to pay the listing fee.
                                    Install one of these wallet to get listed on NFTGenie.
                                </div>
                                <div class="alert alert-danger" role="alert" id='declinedAlert' style='display:none;'>
                                    You rejected the transaction, why? you want to explode, right? We are here for you!
                                </div>
                                <div class="alert alert-danger" role="alert" id='emptyAlert' style='display:none;'>
                                    You rejected the transaction, why? you want to explode, right? We are here for you!
                                </div>
                            </div>
                            <div class="col-12">
                                Want a custom place? on the site send us a Twitter DM: <a
                                        href='https://twitter.com/NFTGenie'>@NFTGenie</a> Only <span
                                        style='color:blue;'>1</span> Place!
                            </div>

                            <button class="btn btn-primary" id="btn-connect" type="button">
                                Connect wallet
                            </button>
                            <!-- PAID VERSION ADD THIS!
                            <div class="col-12">
                                <hr>
                                We charge a one time fee for investigating whether everything is correct and clear, also for keeping our website online. This verification can take up to 2 hours. We will notify you if everything is correct. If it is not correct, we will send the fee back to you.
                            </div>
                            -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** Create Area End ***** -->
    <script src='assets/js/createProject.js'></script>

    <script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/web3modal"></script>
    <script type="text/javascript" src="https://unpkg.com/evm-chains/lib/index.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
    <script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

    <!-- This is our example code -->
    <script src='assets/js/wallet-check-project.js'></script>
    <!--    <script type="text/javascript" src="./example.js"></script>-->

<?php require 'footer.php'; ?>