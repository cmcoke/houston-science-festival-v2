<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package houston_science_festival
 */

?>

<header class="absolute z-10 w-full bg-[rgba(32,43,82,0.30)]" id="masthead">

  <div
    class="grid grid-cols-[1rem_auto_1fr_auto_1rem] grid-rows-[6em_1fr_auto] lg:grid-cols-[minmax(1rem,3rem)_auto_1fr_1fr_auto_minmax(1rem,3rem)] lg:grid-rows-[7rem] 2xl:grid-cols-[minmax(1rem,8rem)_auto_1fr_1fr_auto_minmax(1rem,8rem)] items-center"
    id='header__container'>

    <!-- #hsf-logo -->
    <div class="col-start-2 col-end-3 z-[2]">
      <a href="<?php echo  esc_url(home_url('/')); ?>">
        <img src="<?php echo get_template_directory_uri() . '/images/header/logo-mobile.webp' ?>"
          alt="Houston Science Festival logo" class="lg:hidden">
        <img src="<?php echo get_template_directory_uri() . '/images/header/logo-desktop.webp' ?>"
          alt="Houston Science Festival logo" class="hidden lg:block">
      </a>
    </div>

    <!-- #mobile-menu-icon -->
    <div class="col-start-4 col-end-5 justify-self-end z-[2] lg:hidden" id='header__mobile-menu-icon'>
      <img src="<?php echo get_template_directory_uri() . '/images/header/hamburger-menu.webp' ?>"
        alt="mobile menu icon">
    </div>

    <!-- #site-navigation -->
    <nav class="hidden col-start-4 col-end-5 justify-self-end lg:block lg:col-start-4 lg:col-end-5" id="site-navigation"
      aria-label="<?php esc_attr_e('Main Navigation', 'houston_science_festival'); ?>">

      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'menu-1',
          'menu_id'        => 'primary-menu',
          'items_wrap'     => '<ul id="%1$s" class="inline-flex flex-col justify-center items-end gap-[15px] lg:gap-[46px] xl:gap-[50px] lg:flex-row lg:items-center" aria-label="submenu">%3$s</ul>',
        )
      );
      ?>

    </nav>

    <!-- #donate-button -->
    <div class="hidden lg:block lg:col-start-5 lg:col-end-6 lg:justify-self-center lg:ml-6 xl:ml-11">
      <a href="https://givebutter.com/lMMQTk" rel="noreferrer" target="_blank" class='btn'>Donate</a>
    </div>

    <!-- #social-media-information-on-mobile-screens -->
    <div
      class='hidden col-start-3 col-end-5 2xl:row-start-3 2xl:row-end-4 self-center justify-self-end z-[2] mb-4 lg:hidden'
      id='header__social-media'>
      <p
        class="text-[clamp(1rem,0.9643rem_+_0.1786vw,1.25rem)] not-italic font-normal leading-[160%] text-center text-hsf-blue mb-[5px]">
        Follow us on socials!</p>
      <ul role="list" class='flex gap-[15px]'>
        <li>
          <a href="https://www.facebook.com/houstonsciencefestival" rel="noreferrer" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/images/header/facebook.webp' ?>" alt="facebook logo">
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/houstonsciencefestival" rel="noreferrer" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/images/header/instagram.webp' ?>"
              alt="instagram logo">
          </a>
        </li>
        <li>
          <a href="https://twitter.com/HoustonSciFest" rel="noreferrer" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/images/header/twitter.webp' ?>" alt="twitter logo">
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/company/houstonsciencefestival" rel="noreferrer" target="_blank">
            <img src="<?php echo get_template_directory_uri() . '/images/header/linkedin.webp' ?>" alt="linkedin logo">
          </a>
        </li>
      </ul>
    </div>

  </div>

</header><!-- #masthead -->