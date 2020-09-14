<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=9;IE=10;IE=Edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <link rel="apple-touch-icon" sizes="76x76"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16"
    href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/images/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/safari-pinned-tab.svg"
    color="#5bbad5">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon/favicon.ico">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="msapplication-config"
    content="<?php echo get_template_directory_uri(); ?>/images/favicon/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
  <title>
    <?php if (is_front_page()) {
      echo get_bloginfo('name');
    } else {
      echo get_bloginfo('name') . ' | ';
      wp_title('', true, 'right');
    } ?>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header>
    <div class="main-container">
      <div class="head-container">
        <div class="head-logo">
          <a href="">
            <img src="<?php echo get_correct_image_link_thumb(get_field('logotipas'), 'company_logo'); ?>" alt="">
          </a>
        </div>

        <nav>
          <ul class="main-menu">
            <li> <a
                href="#<?php echo sanitize_title(get_field('meniu_punktas_1_')); ?>"><?php the_field('meniu_punktas_1_'); ?></a>
            </li>
            <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_2')); ?>">
                <?php the_field('meniu_punktas_2'); ?> </a> </li>

            <li>
              <a class="drop-menu" href="http://"> <?php the_field('meniu_punktas_3'); ?></a>

              <div class="drop-menu_content displayNone">
                <ul class="menu-drop">
                  <?php
                      $p1 = get_field('meniu_punktas_1__copy');
                      $p2 = get_field('meniu_punktas_1__copy2');
                      $p3 = get_field('meniu_punktas_1__copy3');
                      $p4 = get_field('meniu_punktas_1__copy4');
                      $p5 = get_field('meniu_punktas_1__copy5');
                    ?>
                  <li><a target="_blanck" href="<?= $p1['linkas']; ?>"> <?= $p1['tekstas']; ?> </a></li>
                  <li><a target="_blanck" href="<?= $p2['linkas']; ?>"> <?= $p2['tekstas']; ?> </a></li>
                  <li><a target="_blanck" href="<?= $p3['linkas']; ?>"> <?= $p3['tekstas']; ?> </a></li>
                  <li><a target="_blanck" href="<?= $p4['linkas']; ?>"> <?= $p4['tekstas']; ?> </a></li>
                  <li><a target="_blanck" href="<?= $p5['linkas']; ?>"> <?= $p5['tekstas']; ?> </a></li>

                </ul>
              </div>

            </li>

            <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_4')); ?>">
                <?php the_field('meniu_punktas_4'); ?> </a> </li>
            <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_5')); ?>">
                <?php the_field('meniu_punktas_5'); ?> </a> </li>
          </ul>
        </nav>

        <div class="head-extra_items">
          <div class="extra_item flex">
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

          <div class="lang-item extra_item"><a href="">EN</a></div>
        </div>

        <div class="mob-burger">
          <input type="checkbox" id="hamburger1" />
          <label for="hamburger1"></label>
        </div>

      </div>
    </div>
  

  <div class="mobile-menu">
    <nav>
      <ul class="main-menu">
        <li> <a
            href="#<?php echo sanitize_title(get_field('meniu_punktas_1_')); ?>"><?php the_field('meniu_punktas_1_'); ?></a>
        </li>
        <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_2')); ?>">
            <?php the_field('meniu_punktas_2'); ?> </a> </li>

        <li>
          <a class="drop-menu" href="http://"> <?php the_field('meniu_punktas_3'); ?></a>

          <div class="drop-menu_content displayNone">
            <ul class="menu-drop">
              <?php
                      $p1 = get_field('meniu_punktas_1__copy');
                      $p2 = get_field('meniu_punktas_1__copy2');
                      $p3 = get_field('meniu_punktas_1__copy3');
                      $p4 = get_field('meniu_punktas_1__copy4');
                      $p5 = get_field('meniu_punktas_1__copy5');
                    ?>
              <li><a target="_blanck" href="<?= $p1['linkas']; ?>"> <?= $p1['tekstas']; ?> </a></li>
              <li><a target="_blanck" href="<?= $p2['linkas']; ?>"> <?= $p2['tekstas']; ?> </a></li>
              <li><a target="_blanck" href="<?= $p3['linkas']; ?>"> <?= $p3['tekstas']; ?> </a></li>
              <li><a target="_blanck" href="<?= $p4['linkas']; ?>"> <?= $p4['tekstas']; ?> </a></li>
              <li><a target="_blanck" href="<?= $p5['linkas']; ?>"> <?= $p5['tekstas']; ?> </a></li>

            </ul>
          </div>

        </li>

        <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_4')); ?>">
            <?php the_field('meniu_punktas_4'); ?> </a> </li>
        <li> <a href="#<?php echo sanitize_title(get_field('meniu_punktas_5')); ?>">
            <?php the_field('meniu_punktas_5'); ?> </a> </li>
      </ul>
    </nav>

    <div class="head-extra_items">
      <div class="extra_item flex">
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

      <div class="lang-item extra_item"><a href="">EN</a></div>
    </div>

    <div class="copy-right"><?php the_field('teises_saugomos_tekstas'); ?></div>
  </div>
  </header>