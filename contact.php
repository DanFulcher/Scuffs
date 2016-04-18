    <?php include 'includes/header.php' ?>

        <section id="contactheader" class="innerheader">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2><strong>Contact Scuffs</strong></h2>
                    </div>
                </div>
            </div>
        </section>

        <!-- Intro Section -->
        <section id="contactsection" class="intro-section content-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <h1>Got a Question? Or Looking for a Quote?<br/><strong>Contact Scuffs by:</strong></h1>
                        <p class="contactdetail">Phone:<br/>
                        <strong><?php echo $number; ?></strong></p>
                        <p class="contactdetail">Email:<br/>
                        <strong><?php echo $email; ?></strong></p>
                    </div>
                </div>
            </div>
        </section>

        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <hr/>
                </div>
            </div>
        </div>

        <?php include 'includes/form.php' ?>

        <?php include 'includes/footer.php' ?>
