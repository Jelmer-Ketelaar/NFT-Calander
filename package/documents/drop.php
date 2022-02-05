<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <title>Neftify - NFT Marketplace Bootstrap 5 HTML Template</title>
    <meta content="Neftify is the complete UX & UI dashboard for NFT. Here included bids, collection, wallet, and all user setting pages including profile, application, activity, payment method, api, sign in & sign up etc."
          name="description">


    <!-- Favicon icon -->
    <link href="./images/favicon.png" rel="icon" sizes="16x16" type="image/png">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="@@dashboard">

<!--<div id="preloader"><i>.</i><i>.</i><i>.</i></div>-->

<div class="front" id="main-wrapper">

    <?php include('include/header.php') ?>
    <div class="page-title">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-6">
                    <div class="page-title-content">
                        <h3>List Drop </h3>
                        <p class="mb-2">List here your <strong> Drop</strong> <br>
                            <strong>DO NOT LIST YOUR PROJECT</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="upload-item section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <h4 class="card-title mb-3">Upload Item</h4>
                    <div class="card">
                        <div class="card-body">
                            <form action="#">
                                <div class="row">
                                    <div class="col-xxl-12">
                                        <div class="d-flex align-items-center mb-3"><img
                                                alt="" class="me-3 rounded-circle me-0 me-sm-3"
                                                height="55" src="images/items/1.jpg" width="55">
                                            <div class="media-body">
                                                <h5 class="mb-0">Max file size is 20mb</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <input class="" name="photo" type="file">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Item Name</label><input class="form-control"
                                                                                          name="itemName"
                                                                                          type="text">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Description</label><input class="form-control"
                                                                                            name="description"
                                                                                            type="text">
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label class="form-label">Royalties</label><input class="form-control"
                                                                                          name="royalties"
                                                                                          type="text">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Size</label><input class="form-control" name="size"
                                                                                     type="text">
                                    </div>
                                    <div class="col-6 mb-3">
                                        <label class="form-label">Price</label><input class="form-control" name="price"
                                                                                      type="text">
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
                    <h4 class="card-title mb-3">Preview</h4>
                    <div class="card items">
                        <div class="card-body">
                            <div class="items-img position-relative"><img alt=""
                                                                          class="img-fluid rounded mb-3"
                                                                          src="./images/items/5.jpg"><img
                                    alt=""
                                    class="creator" src="./images/avatar/5.jpg" width="50"></div>
                            <h4 class="card-title">Liguid Wave</h4>
                            <p></p>
                            <div class="d-flex justify-content-between">
                                <div class="text-start">
                                    <p class="mb-2">Creator</p>
                                    <h5 class="text-muted">John Abrahmam</h5>
                                </div>
                                <div class="text-end">
                                    <p class="mb-2">Price</p>
                                    <h5 class="text-muted">0.55 ETH</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('include/footer.php') ?>

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