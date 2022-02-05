<?php
$seoTitle = 'NFTGenie - Contact';
$seoDescription = 'NFTGenie Contact page for questions or other things.';
$page = 'contact';
require('include/header.php') ?>

    <!-- ***** Contact Area Start ***** -->
    <section class="author-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-7">
                    <!-- Intro -->
                    <div class="intro text-center">
                        <span>Contact</span>
                        <h3 class="mt-3 mb-0">Get In Touch</h3>
                        <p>We will get back to you in 3 Hours, if you want to list your NFT drop <a href='create.php'>here</a>
                            and NFT project <a href='Project/createProject.php'>here</a>. If you have a good idea for NFTGenie
                            we would like to hear that!</p>
                    </div>
                    <!-- Item Form -->
                    <form class="item-form card no-hover" method="POST" action="contactMail.php">
                        <?php if (isset($_GET['m'])) { ?>
                            <div class="alert alert-primary" role="alert">
                                We recieved your email, thank you!
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="name" placeholder="Name"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <input type="email" class="form-control" name="email" placeholder="Email"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" placeholder="Message" cols="30"
                                              rows="3"></textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn w-100 mt-3 mt-sm-4" type="submit"><i
                                            class="icon-paper-plane mr-2"></i>Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Area End ***** -->

<?php require 'footer.php'; ?>