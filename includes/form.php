        <section id="quoteform" class="content-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1">
                        <?php

                        $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

                         if (strpos($url, 'contact.php')): ?>
                        
                            <h1>Alternatively, Fill Out This Simple Form <br/><strong>And We Will Be In Touch</strong></h1>

                        <?php endif; ?>
                        <h1>Get a Quote</h1>
                        <form action="send.php" name="Get a Quote">
                            <div class="col-sm-6">
                                <input name="Name" placeholder="Name" />
                            </div>

                            <div class="col-sm-6">
                                <input name="Contact Number" placeholder="Contact Number" />
                            </div>

                            <div class="col-sm-6">
                                <input name="Email Address" placeholder="Email Address" />
                            </div>

                            <div class="col-sm-6">
                                <select name="Service required">
                                    <option value="">Service Required</option>
                                    <option value="Bumper Reapir">Bumper Repair</option>
                                    <option value="Dents on Bodywork">Dents on Bodywork</option>
                                    <option value="Leather and Upholstery">Leather and Upholstery</option>
                                    <option value="Trim and Dash Repairs">Trim and Dash Repairs</option>
                                    <option value="Alloy Wheels Refurbishment">Alloy Wheels Refurbishment</option>
                                    <option value="Glass Chips and Cracks">Glass Chips and Cracks</option>
                                </select>
                            </div>

                            <div class="col-xs-12">
                                <textarea name="Details" placeholder="Details of Enquiry"></textarea>
                            </div>

                            <div class="col-sm-4 col-sm-offset-4">
                                <input id="submit" type="submit" value="Submit" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>