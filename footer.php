<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="300" id="gmap_canvas"
            src="https://maps.google.com/maps?q=Gramvej%201,%206520%20Toftlund&t=&z=15&ie=UTF8&iwloc=&output=embed"
            frameborder="0" scrolling="no"></iframe>
    </div>
</div>

<footer>
    <div class="footer-wrap">
        <div class="f-contact">
            <div>
                <h3>Kontakt informationer</h3>
                <ul>
                    <li><?php echo get_gcf("Footer", "vej/nr")?></li>
                    <li><?php echo get_gcf("Footer", "postnr/by")?></li>
                    <li>CVR: <?php echo get_gcf("Footer", "cvr")?></li>
                    <li><br></li>
                    <li><i class="fas fa-phone-alt"></i> <?php echo get_gcf("Footer", "tlf")?></li>
                    <li><i class="far fa-envelope"></i> <?php echo get_gcf("Footer", "email")?></li>
                </ul>
            </div>
        </div>

        <div class="f-social">
            <a href="<?php echo get_gcf("Footer", "footer-instagram")?>" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="<?php echo get_gcf("Footer", "footer-facebook")?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
        </div>

        <div class="f-hours">
            <div>
                <h3>Åbningtider</h3>
                <ul>
                    <li><?php echo get_gcf("Footer", "man-fre")?></li>
                    <li><?php echo get_gcf("Footer", "lordag")?></li>
                    <li><?php echo get_gcf("Footer", "sondag")?></li>
                    <li><br></li>
                    <li><?php echo get_gcf("Footer", "info-tider")?></li>
                </ul>
            </div>
        </div>
    </div>

    <p class="copy">Copyright© 2021 - AM Automobiler ApS</p>
</footer>

<?php 
    wp_footer();    
?>
</body>

</html>