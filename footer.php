<footer id="<?php echo sanitize_title(get_field('meniu_punktas_5')); ?>">

  <div class="main-container">
    <div class="footer-container">
      <div class="footer-container_item">
        <div class="footer-logo">
          <a href="">
            <img src="<?php echo get_correct_image_link_thumb(get_field('apatinis_logotipas'), 'company_logo'); ?>" alt="">
          </a>
        </div>

        <div class="footer-slug">
          <?php the_field('tekstas_po_logo'); ?>
        </div>

        <div class="footer-soc_items flex">
        <?php
             $in = get_field('linkedin_adresas');
              if($in){
            ?>
            <a target="_blanck" href="<?php echo $in; ?>">
            <div class="soc-item"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/in.svg)">
            </div>
          </a>
          <?php
            }
            $fb = get_field('facebook_adresas');
            if($fb){
          ?>
            <a target="_blanck" href="<?php echo $fb; ?>">
            <div class="soc-item"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/fb.svg)">
            </div>
          </a>
          <?php } ?>
        </div>
      </div>

      <div class="footer-container_item">
        <nav>
          <ul>
          <?php
                $punktas1 = get_field('apatinis_meniu_punktas_1');
              ?>
            <li> <a target="_blanck" href="<?php echo $punktas1['punktas_1_linkas']; ?>"> <?php echo $punktas1['punktas_1_antraste']; ?> </a> </li>
            <?php
                $punktas2 = get_field('apatinis_meniu_punktas_2');
              ?>
            <li> <a target="_blanck" href="<?php echo $punktas2['punktas_2_linkas']; ?>"> <?php echo $punktas2['punktas_2_antraste']; ?> </a> </li>
            <?php
                $punktas3 = get_field('apatinis_meniu_punktas_3');
              ?>
            <li> <a target="_blanck" href="<?php echo $punktas3['punktas_3_linkas']; ?>"> <?php echo $punktas3['punktas_3_antraste']; ?></a> </li>
            <?php
                $punktas4 = get_field('apatinis_meniu_punktas_4');
              ?>
            <li> <a target="_blanck" href="<?php echo $punktas4['punktas_4_linkas']; ?>"> <?php echo $punktas4['punktas_4_antraste']; ?> </a> </li>
            <?php
                $punktas5 = get_field('apatinis_meniu_punktas_5');
              ?>
            <li> <a target="_blanck" href="<?php echo $punktas5['punktas_5_linkas']; ?>"> <?php echo $punktas5['punktas_5_antraste']; ?> </a> </li>

          </ul>
        </nav>
      </div>

      <div class="footer-container_item">
        <div class="footer-item title-item"><?php the_field('imones_pavadinimas'); ?></div>
              <?php
                $address1 = get_field('adresas_1');
              ?>
        <span><?php echo $address1['miestas']; ?></span>
        <div class="footer-item"><?php echo $address1['andresas']; ?></div>
        <?php
          $address2 = get_field('adresas_2');
        ?>
        <span><?php echo $address2['miestas']; ?></span>
        <div class="footer-item"><?php echo $address2['adresas']; ?></div>
      </div>

      <div class="footer-container_item">
        <div class="footer-item"><?php the_field('imones_pavadinimas'); ?></div>
        <?php
          $numeris = get_field('telefono_numeris');
        ?>
        <span><?php echo $numeris['tekstas']; ?></span>
        <div class="footer-item"><a href="tel:<?php echo $numeris['numeris']; ?>"> <?php echo $numeris['numeris']; ?></a> </div>

        <?php
          $pastas = get_field('el_pastas');
        ?>
        <span><?php echo $pastas['tekstas']; ?></span>
        <div class="footer-item"><a href="mailto:<?php echo $pastas['el_pastas']; ?>"> <?php echo $pastas['el_pastas']; ?></a></div>
      </div>

    </div>
  </div>

  <div class="copy-right"><?php the_field('teises_saugomos_tekstas'); ?></div>
</footer>

<?php wp_footer(); ?>
</body>

</html>