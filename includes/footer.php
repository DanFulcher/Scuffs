    
        <section id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <img src="images/logo.png" alt="Scuffs Mobile Cosmetic Auto Repairs" />
                        <ul class="footernav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="about.php">About Us</a>
                            </li>
                            <li>
                                <a href="services.php">Services</a>
                            </li>
                            <li>
                                <a href="gallery.php">Gallery</a>
                            </li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <p>Copyright &copy; <?php echo date('Y'); ?> Scuffs.<br/>
                        Website by danfulcher.co.uk</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
   

    <!-- jQuery -->
    <script   src="https://code.jquery.com/jquery-2.2.3.min.js" integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo=" crossorigin="anonymous"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom js -->
    <script src="js/global.js"></script>

    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
