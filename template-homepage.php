<?php
/* Template name: Homepage */
get_header();
?>

<main>
  <section class="main-screen"
    style="background-image: url(<?php echo get_correct_image_link_thumb(get_field('bloko_fono_nuotrauka'), 'main_bg_size'); ?>)"
    id="<?php echo sanitize_title(get_field('meniu_punktas_1_')); ?>">
    <div class="main-container">
      <div class="main-screen_content">
        <h1><?php the_field('pirmo_bloko_antraste'); ?></h1>
        <h4><?php the_field('tekstas_po_antraste'); ?></h4>
        <button class="calc-btn"><?php the_field('didelio_migtuko_tekstas'); ?></button>
      </div>

    </div>

    <div class="wrapper-calc">
    <div class="calculator ">
      <div class="calculator-left">
        <div class="calculator-left_content">

          <div class="close-calculator"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/close.svg)">
          </div>

          <div class="left_content-item">
            <div class="content-item_title"><?php the_field('kairiojo_bloko_antraste'); ?></div>

            <script>
            var sritys = <?php echo json_encode(get_field('sritys')); ?>
            </script>

            <div class="select-cont">
              <select class="field" name="state">
                <option></option>
              </select>
            </div>

            <div class="select-cont">
              <select class="position" name="state">
                <option></option>
              </select>
            </div>

            <div class="select-cont">
              <select class="experience" name="state">
                <option></option>
                <option value="junior">1-3</option>
                <option value="regular">3-5</option>
                <option value="senior">5+</option>
              </select>
            </div>


            <button class="calc-submit"><?php the_field('kairiojo_bloko_migtuko_tekstas'); ?></button>
          </div>
          <div class="left_content-item">
            <div class="decor-arrow top-right"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/top-right.svg)">
            </div>
            <div class="content-item_title"><?php the_field('vidurinio_bloko_atraste'); ?></div>
            <div class="salary">0 EUR</div>
            <div class="content-item_text"><?php the_field('vidurinio_bloko_tekstas'); ?></div>
            <div class="decor-arrow bottom-left"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/bottom-left.svg)">
            </div>
          </div>
        </div>
      </div>
      <div class="calculator-right">
        <div class="calculator-right_content">
          <div class="right_content-item">
            <div class="content-item_title"><?php the_field('desinio_bloko_antraste'); ?></div>

            <form method="post" id="contact-form">
              <div class="form-item">
                <input class="input requiredemail" type="text" name="mail" placeholder="Įveskite savo el. paštą">
              </div>
              <div class="form-item">
                <input class="input minSeven" type="text" name="number" placeholder="Įveskite savo tel. nr">
              </div>
              <div class="form-item">
                <label for="check">
                  <span class="checkbox "></span>
                  <input type="checkbox" name="check" id="check" required>
                  <span class="checkbox-text">
                    <?php the_field('privatumo_politikos_tekstas'); ?>
                  </span>
                </label>
              </div>
              <div class="form-item">
                <button class="submit_btn" type="submit"><?php the_field('desinio_bloko_migtuko_tekstas'); ?></button>
              </div>
            </form>

            <div class="close-calculator"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/close.svg)">
            </div>

          </div>

        </div>
      </div>
    </div>
    </div>

  </section>

  <section class="clients">
    <div class="clients-inner section-inner">
      <div class="main-container">
        <div class="section-title">
          <h2><?php the_field('antro_bloko_antraste'); ?></h2>
        </div>

        <div class="slider-container">

          <div class="slider-btn btn_left"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/btn-left.svg)">
          </div>

          <?php if( have_rows('klientai') ): ?>
          <div class="section-slider">
            <?php  while( have_rows('klientai') ) : the_row(); ?>

            <div class="single-slider">
              <div class="single-slider_img"
                style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('kliento_nuotrauka'), 'thumbas'); ?>">
                <div class="decor-arrow"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/bottom-left.svg)">
                </div>
              </div>
              <div class="single-slider_content">
                <div class="client-name"><?php the_sub_field('kliento_vardas'); ?></div>
                <div class="client-position"><?php the_sub_field('kliento_pareigos'); ?></div>
                <div class="client-text"><?php the_sub_field('kliento_tekstas'); ?>
                </div>
                <div class="client-company"><?php the_sub_field('kliento_imones_pavadinimas'); ?></div>
                <div class="decor-arrow"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/top-right.svg)">
                </div>
              </div>
            </div>

            <?php endwhile;?>
          </div>
          <?php endif; ?>

          <div class="slider-btn btn_right"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/btn_right.svg)">
          </div>

        </div>

      </div>
    </div>
    <div class="clients-icons">
      <div class="main-container">
        <?php if( have_rows('kliento_ikonos') ): ?>
        <ul>
          <?php  while( have_rows('kliento_ikonos') ) : the_row(); ?>
          <li>
            <img src="<?php echo get_correct_image_link_thumb(get_sub_field('imones_ikona'), 'company_logo'); ?>"
              alt="">
          </li>
          <?php endwhile;?>
        </ul>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="about" id="<?php echo sanitize_title(get_field('meniu_punktas_2')); ?>">
    <div class="about-inner section-inner">
      <div class="main-container">
        <div class="section-title">
          <h2><?php the_field('trecio_bloko_antraste'); ?></h2>
        </div>

        <div class="about-content">
          <?php if( have_rows('apie_mus_') ): ?>
          <?php  while( have_rows('apie_mus_') ) : the_row(); ?>

          <div class="about-content_item">
            <div class="decor-arrow arrow_top-left"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/top-left.svg)">
            </div>

            <div class="content_item-logo"
              style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('apie_mus_icona'), 'company_logo'); ?>)">
            </div>
            <div class="content_item-text">
              <?php the_sub_field('apie_mus_tekstas'); ?>
            </div>

            <div class="decor-arrow arrow_bottom-right"
              style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/bottom-right.svg)">
            </div>
          </div>

          <?php endwhile;?>
          <?php endif; ?>

        </div>
      </div>
  </section>

  <section class="works" id="<?php echo sanitize_title(get_field('meniu_punktas_4')); ?>">
    <div class="works-inner section-inner">
      <div class="main-container">
        <div class="section-title">
          <h2><?php the_field('ketvirto_bloko_antraste'); ?></h2>
        </div>

        <div class="works-inner_container">

          <div class="works-table_title">
            <div class="works-table_item">Įmonės logotipas</div>
            <div class="works-table_item">POZICIJOS PAVADINIMAS</div>
            <div class="works-table_item">Atlyginimas (Bruto) EUR</div>
            <div class="works-table_item">Vieta</div>
            <div class="works-table_item">Pasiūlymas</div>
          </div>

          <?php if( have_rows('darbo_skelbimas') ): ?>
          <?php  while( have_rows('darbo_skelbimas') ) : the_row(); ?>

          <div class="works-table_content">
            <div class="works-table_item"><img
                src="<?php echo get_correct_image_link_thumb(get_sub_field('imones_logo'), 'company_logo'); ?>" alt="">
            </div>
            <div class="works-table_item"><?php the_sub_field('poziciojos_pavadinimas'); ?></div>
            <div class="works-table_item"><?php the_sub_field('alga'); ?></div>
            <div class="works-table_item"><?php the_sub_field('miestas'); ?></div>
            <div class="works-table_item">
              <?php
                $file = get_sub_field('pasiulymas');
                if( $file ):
                  $url = wp_get_attachment_url( $file ); ?>
              <div class="pdf-wrap">
                <a target="_blanc" href="<?php echo esc_html($url); ?>">
                  <div class="pdf-icon"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/pdf.svg)">
                  </div>
                  <div class="pdf-icon pdf-icon_hover"
                    style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/pdf-hover.svg)">
                  </div>
                </a>
              </div>
              <?php endif; ?>
            </div>
          </div>

          <?php endwhile;?>
          <?php endif; ?>

        </div>
      </div>
    </div>

  </section>

  <section class="team">
    <div class="works-inner section-inner">
      <div class="main-container">
        <div class="section-title">
          <h2><?php the_field('penkto_bloko_antraste'); ?></h2>
        </div>

        <div class="team-container team-slider">

          <div class="team-slider-btn btn_left prev"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/t-arr-l.svg)">
          </div>

          <div class="team-slider-btn btn_right next"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/t-arr-r.svg)">
          </div>

          <div class="slide-logo logo-left"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/s-logo.svg)">
          </div>
          <div class="slide-logo logo-right"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/s-logo.svg)">
          </div>

          <div class="team-slider-container">

            <?php if( have_rows('komanda') ): ?>
            <?php  while( have_rows('komanda') ) : the_row(); ?>


            <div class="team-single_slide">
              <div class="slide-img"
                style="background-image: url(<?php echo get_correct_image_link_thumb(get_sub_field('darbuotojo_nuotrauka'), 'thumbas'); ?>)">

                <div class="decor-arrow arrow_top-left hidden"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/top-left.svg)">
                </div>
                <div class="decor-arrow arrow_bottom-right hidden"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/bottom-right.svg)">
                </div>

                <!-- <div class="slide-logo logo-left"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/s-logo.svg)">
                </div>
                <div class="slide-logo logo-right"
                  style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/s-logo.svg)">
                </div> -->

              </div>
              <div class="slide-content">
                <div class="team-name"><?php the_sub_field('darbuotojo_vardas'); ?></div>
                <div class="team-about"><?php the_sub_field('darbuotojo_tekstas'); ?></div>
                <div class="team-soc_icons">
                  <?php
                  $linked = get_sub_field('darbuotojo_linkedin');
                if($linked){ 
                ?>
                  <a target="_blanc" href="<?php echo $linked ?>">
                    <div class="soc-icon"
                      style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/t-in.svg)">
                    </div>
                  </a>
                  <?php } ?>
                  <?php
                  $mail = get_sub_field('darbuotojo_emailas');
                if($mail){ 
                ?>
                  <a href="mailto:<?php echo $mail ?>">
                    <div class="soc-icon"
                      style="background-image: url(<?php echo get_template_directory_uri(); ?>/src/images/icons/t-mail.svg)">
                    </div>
                  </a>
                  <?php } ?>
                </div>
              </div>
            </div>

            <?php endwhile;?>
            <?php endif; ?>

          </div>

        </div>

      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>