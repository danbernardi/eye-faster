<footer>
    <div class="topfooter">
        <div class="address">
          <ul>
            <li><i class="fa fa-envelope"></i><a href="mailto:<?php echo of_get_option( 'zd_contact_email'); ?>"><?php echo of_get_option( 'zd_contact_email'); ?></a></li>
            <?php
                $phoneNumber = of_get_option( 'zd_contact_phone');
                $removeAlpha = preg_replace("/[^A-Za-z0-9 ]/", '', $phoneNumber);
                $trimmedPhone = preg_replace('/\s+/', '', $removeAlpha);
            ?>
            <li><i class="fa fa-phone"></i><a href="tel:<?php echo $trimmedPhone; ?>"><?php echo $phoneNumber; ?></a></li>
            <li><a href="#">Job Opportunities</a></li>
          </ul>
        </div>
        <div class="social">
          <ul>
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          </ul>
        </div>
    </div>
    <div class="bottomfooter">
        <div class="copyright">
            <?php echo of_get_option( 'zd_copyright'); ?>
        </div>
    </div>
</footer>
</section>
<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>
</body>
</html>