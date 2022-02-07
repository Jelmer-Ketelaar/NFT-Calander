<?php include('include/header.php') ?>

<div class="page-title">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-6">
                <div class="page-title-content">
                    <h3>NFT Drop </h3>
                    <p class="mb-2">List here your NFT<strong> Drop</strong>
                        <br>
                        <strong>DO NOT LIST YOUR PROJECT HERE</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="upload-item section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-6 col-xl-6 col-lg-6">
                <h4 class="card-title mb-3">NFT Drop</h4>
                <div class="card">
                    <div class="card-body">
                        <form action="listingProjectProces.php" method="POST" enctype="multipart/form-data"
                              id="listingForm">
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="projectNameInput">Project Name</label>
                                    <input class="form-control"
                                           name="projectName"
                                           type="text" required="required" maxlength="25" id="projectNameInput">
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label class="form-label" for="projectShortDesInput">Project
                                            Description</label>
                                        <textarea
                                                class="form-control" id="projectShortDesInput" name="projectDescription"
                                                placeholder="Description about the project" maxlength="750" cols="30"
                                                required="required" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mt-3">
                                        <label class="form-label" for="selectBlockchain">Select
                                            Blockchain</label>

                                        <select name="blockchain" id="selectBlockchain"
                                                style="margin-left: 1vw">
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
                                                   id="inlineRadio1" value="Fun" checked="">
                                            <label class="form-check-label switch" for="inlineRadio1">Fun</label>
                                            <div class="check"></div>
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
                                <br>
                                <div class="col-12">
                                    <hr>
                                    <div class="input-group form-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="thumbnail"
                                                   id="inputGroupFile01" accept="image/*" onchange="loadFile(event)">
                                            <label class="custom-file-label" id="bannerLabel" for="inputGroupFile01">Choose
                                                project image (NO BANNER)</label>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="col-12 col-md-6">
                                    <hr>
                                    <div class="form-group mt-3">
                                        <label class="form-label" for="traits">Traits</label>
                                        <input type="number"
                                               class="form-control"
                                               id="traits"
                                               name="traits"
                                               placeholder="Diffrent Traits amount"
                                               step="1">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <hr>
                                    <div class="form-group mt-3">
                                        <label class="form-label" for="floorPrice">Floor Price</label><input
                                                type="number" class="form-control"
                                                id="floorPrice" name="floorPrice"
                                                placeholder="Current Floor-price"
                                                step="0.00001">
                                        <sub>Don't have a Floor price? <a style="color:blue;"
                                                                          onclick="alert('If your NFT project is not live, please submit it as a NFT Drop. You can click in the header on &quot;List Drop&quot;');">here</a></sub>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="roadmap">Roadmap:</label>
                                        <textarea class="form-control" id="roadmap"
                                                  name="roadmap" placeholder="2022 Q1: Creating NFTGenie coin to make things easier
2022 Q2: Some plans to do in the future
2022 Q3: Some bright and cool things that are gonna be huge
2022 Q4: Some more plans etc
(summary of your roadmap)

                                        " cols="30" rows="5" maxlength="2000"></textarea>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <hr>
                                    <div class="form-group">
                                        <label for="volumeTxt">Volume Traded</label>
                                        <input type="number"
                                                                                                 class="form-control"
                                                                                                 id="volumeTxt"
                                                                                                 name="volume"
                                                                                                 placeholder="Volume traded (ETH)"
                                                                                                 step=".0001">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <hr>
                                    <div class="form-group">
                                        <label for="royality">Royalty</label><input type="number" class="form-control"
                                                                                    id="royality" name="royality"
                                                                                    placeholder="Royality fee (%)"
                                                                                    required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <br>
                                    <div class="form-group">
                                        <label for="supply">NFT Supply</label><input type="number" class="form-control"
                                                                                     id="supply" name="supply"
                                                                                     placeholder="NFT Supply (example 3333)"
                                                                                     required="required">
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <br>
                                    <div class="form-group">
                                        <label for="teamAmount">Team Size</label><input type="number"
                                                                                        class="form-control"
                                                                                        id="teamAmount"
                                                                                        name="teamAmount"
                                                                                        placeholder="Team size "
                                                                                        required="required">
                                    </div>
                                </div>
                                <div class="col-12 mb-3">
                                    <hr>
                                    <div class="custom-file">
                                        <label class="custom-file-label" id='bannerLabel' for="inputGroupFile01">Choose
                                            project image (NOT A BANNER)</label>
                                        <input type="file" class="custom-file-input" name='thumbnail'
                                               id="inputGroupFile01" accept="image/*" onchange="loadFile(event)">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <hr>
                                <div class="form-group">
                                    <label for="twitterNameInput">Twitter Username</label><input type="text"
                                                                                                 class="form-control"
                                                                                                 id="twitterNameInput"
                                                                                                 name="twitterName"
                                                                                                 placeholder="Twitter username"
                                                                                                 required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <hr>
                                <div class="form-group">
                                    <label for="discordNameInput">Discord Invite Link</label><input type="text"
                                                                                                    class="form-control"
                                                                                                    id="discordNameInput"
                                                                                                    name="discordLink"
                                                                                                    placeholder="Discord invite link"
                                                                                                    required="required">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <hr>
                                <div class="form-group">
                                    <label for="websiteLinkInput" class="form-label">Website Link</label><input
                                            type="text" class="form-control"
                                            id="websiteLinkInput"
                                            name="websiteLink"
                                            placeholder="Website link"
                                            required="required">
                                </div>
                            </div>
                            <input type="hidden" id="signature" name="signature" value="">
                            <div class="col-12">
                                <hr>
                                <div class="form-group mt-3">
                                    <label for="emailContact" class="form-label">Email</label><input type="email"
                                                                                                     class="form-control"
                                                                                                     id="emailContact"
                                                                                                     name="emailContact"
                                                                                                     placeholder="Email (only for contact, nobody can see)"
                                                                                                     required="required"
                                                                                                     maxlength="70">

                                    <div class="form-group mt-3" style="border:thin solid #4528DC;padding:10px;">
                                        <h5 style="margin:4px !important;text-align:center;">Boost Your Project
                                            +70.000 views!</h5>
                                        <p style="margin-bottom:4px;margin-top:4px;text-align:center;">Only
                                            <strong><span
                                                        style="color:#4528DC;">1</span></strong>/5 Promotion Place
                                            open! <strike id="normalPromoPrice">0.1ETH</strike><strong><span
                                                        id="promotePrice"> 0.09ETH</span></strong><span
                                                    id="countdownDiscount"
                                                    style="color:#4528DC; float:right;"> 2:25:20</span>
                                        </p>
                                        <div class="form-check form-check-inline"
                                             style="margin-bottom:4px !important;">
                                            <input class="form-check-input" type="radio" name="promotionBox"
                                                   id="promotionBox1" value="promote">
                                            <label class="form-check-label" for="promotionBox1" style="margin:5px;">Homepage
                                                promo, Listpage promo, Twitter Page Pin,<br>1 Week Full Promo,
                                                <strong>340%</strong> more actions, newspaper alert</label>
                                        </div>
                                        <p style="margin:0px;text-align:center;">Easy pay through
                                            <strong>Web3</strong> wallet: Metamask, Phantom wallet</p>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="promotionBox"
                                                   id="promotionBox2" value="promote2" checked="">
                                            <label class="form-check-label" for="promotionBox2">Listing on NFTGenie
                                                <strong id="listingPrice"> 0.004ETH</strong></label>
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
                            <!--<div class="col-12">
                                Banner, Section or other promotion? Check our <a href="assets/NFTGenie-pricing.pdf"
                                                                                 target="_blank">pricing PDF</a>
                                (new
                                tab)
                                <button class="btn w-100 mt-3 mt-sm-4" type="button" id="btn-connect">List project
                                </button>
                            </div>-->
                            <div class="col-12">
                                <br>
                                <div class="alert alert-primary" role="alert" id="walletRequiredMessage"
                                     style="display:none;">
                                    DM us on twitter and we will give you a SOL address to send the crypto's to :)
                                    click
                                    <a href="https://twitter.com/NFTGenie" target="_blank">@NFTGenie </a>for our
                                    twitter
                                </div>
                                <div class="alert alert-danger" role="alert" id="declinedAlert"
                                     style="display:none;">
                                    You rejected the transaction, why? you want to explode, right? We are here for
                                    you!
                                </div>
                                <div class="alert alert-danger" role="alert" id="emptyAlert" style="display:none;">
                                    You rejected the transaction, why? you want to explode, right? We are here for
                                    you!
                                </div>
                            </div>

                            <button class="btn btn-primary" id="btn-connect">
                                Connect wallet
                            </button>
                            <div class="mt-3">
                                <button class="btn btn-primary mr-2 w-100" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-lg-6">
                <div style="position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;">
                    <h4 class="card-title mb-3">Preview</h4>
                    <div class="card items">
                        <div class="card-body mt-4">
                            <div class="items-img position-relative image-over">
                                <img alt="" class="img-fluid rounded mb-3"
                                     src="images/items/1.jpg" id="projectImage">
                                <center>
                                    <!-- Author -->
                                    <div class="author">
                                        <div class="author-thumb avatar-lg">
                                            <img class="rounded-circle" id="blockchainLogo"
                                                 src="images/extern_logo/crypto/ethereum.png" alt="">
                                        </div>
                                    </div>
                                </center>
                            </div>
                            <h4 class="mb-3" id="projectName">Project name</h4>
                            <p class="my-3" id="projectShortDes">Project description</p>
                            <hr>
                            <div class="social-icons justify-content-center my-3" style="display: block;"
                                 id="socialBtn">
                                <p><img id="twitterLogo" src="images/extern_logo/twitter_logo_white.png"
                                        style="width: 25px; height: 25px; visibility: visible;"> <span
                                            id="twitterName"></span></p>
                                <p><img id="discordLogo" src="images/extern_logo/discord_logo.jpg"
                                        style="width: 25px; height: 25px; visibility: visible;"> <span
                                            id="discordName"></span></p>
                                <p><img id="websiteLogo" src="images/extern_logo/link_icon.jpg"
                                        style="width: 25px; height: 25px; visibility: visible;"> <span
                                            id="websiteName"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--</div>-->


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
<?php include "include/footer.php"; ?>

</div>


<script src="./vendor/jquery/jquery.min.js"></script>
<script src="./vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="https://unpkg.com/web3@latest/dist/web3.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/web3modal"></script>
<script type="text/javascript" src="https://unpkg.com/evm-chains/lib/index.js"></script>
<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider"></script>
<script type="text/javascript" src="https://unpkg.com/fortmatic@2.0.6/dist/fortmatic.js"></script>

<script src="./js/scripts.js"></script>


</body>

</html>