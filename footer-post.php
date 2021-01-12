
            </div>

        </div>
    </div>

    <footer class='container-fluid'>
        <div id='innerFooter' class='container'>
            <div id='footerRows' class='row'>
                <div id='contactMeFollowMeWrapper' class='col-sm-5'>
                    <div>
                        <h2 class='playFairFont'>Contact Me</h2>
                        <p id='emailAddress'><a href="mailto:PatrickP@PatrickP.Tech?Subject=Enter%20Subject" target="_top">PatrickP@PatrickP.Tech</a></p>
                    </div>
                    <div>
                        <h2 class='playFairFont'>Follow Me</h2>
                        <ul id='socialMediaLinks' class='list-unstyled'>
                            <li><a href="https://www.facebook.com/patrick.pelayo.733450" target="_blank"><i class="socialIcon fab fa-facebook-square"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/patrick-pelayo-91b778161/" target="_blank"><i class= "socialIcon fab fa-linkedin"></i></a></li>                
                        </ul>
                    </div>
                </div>
                <div class='col-sm-7'>
                    <img id='flagImg' class='img-fluid ' src="<?php echo get_template_directory_uri() . '/img/usflag.jpg'?>" alt='usFlag'/>
                </div>
            </div>
            <p id='copyright' class='playFairFont text-left'>&copy;<?php echo date("Y"); ?> PatrickP.Tech  </p>
        </div>


    </footer>
</body>
    <?php do_action('wp_footer'); ?>
</html>