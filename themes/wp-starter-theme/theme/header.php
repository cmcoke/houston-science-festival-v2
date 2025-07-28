<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body class='wrapper bg-[color:var(--blue)] text-[color:var(--white)]'>

  <!-- header -->
  <header class="absolute z-10 w-full bg-[rgba(32,43,82,0.30)]">

    <div
      class="grid grid-cols-[1em_6em_1fr_0.5fr_1em] grid-rows-[6em_1fr_auto] lg:grid-cols-[minmax(1rem,3rem)_auto_1fr_1fr_1fr_1fr_minmax(1rem,3rem)] lg:grid-rows-[7rem] items-center"
      id='header__container'>

      <div class="col-start-2 col-end-3 self-center z-[2] lg:hidden">
        <a href="<?php echo home_url();  ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/header/logo-mobile.webp' ?>"
            alt="Houston Science Festival logo">
        </a>
      </div>

      <div class="hidden lg:block col-start-2 col-end-3 row-start-1 row-end-2 z-[2]">
        <a href="<?php echo home_url();  ?>">
          <img src="<?php echo get_template_directory_uri() . '/images/header/logo-desktop.webp' ?>"
            alt="Houston Science Festival logo">
        </a>
      </div>

      <div class="col-start-4 col-end-5 self-center justify-self-end z-[2] lg:hidden" id='header__mobile-menu-icon'>
        <img src="<?php echo get_template_directory_uri() . '/images/header/hamburger-menu.webp' ?>"
          alt="mobile menu icon">
      </div>

      <nav
        class="hidden col-start-4 col-end-5 justify-self-end lg:block lg:col-start-3 lg:col-end-7 lg:2xl:row-start-1 lg:2xl:row-end-2"
        id='navigation'>
        <ul role="list"
          class='inline-flex flex-col justify-center items-end gap-[15px]  lg:gap-[46px] xl:gap-[75px] lg:flex-row lg:items-center '>
          <li><a href="<?php echo esc_url(site_url('/present')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Present</a>
          </li>
          <li><a href="<?php echo esc_url(site_url('/volunteer')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Volunteer</a>
          </li>
          <li><a href="<?php echo esc_url(site_url('/sponsor')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Sponsor</a>
          </li>
          <li><a href="<?php echo esc_url(site_url('/faq')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>FAQ</a>
          </li>
          <li class="hidden lg:block">
            <a href="https://givebutter.com/lMMQTk" rel="noreferrer" target="_blank"
              class='flex max-w-[250px]  justify-center items-center gap-2.5 text-[color:var(--blue)] border-[color:var(--blue)] bg-[color:var(--white)] text-[clamp(0.938rem,0.857rem_+_0.402vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[0.32px] transition-all duration-[0.35s] ease-[ease-in-out] mx-auto my-0 px-[30px] py-2.5 min-[768px]:px-[50px] min-[768px]:py-[15px] border-2 border-solid hover:border-[color:var(--white)] hover:bg-[color:var(--blue)] hover:text-[color:var(--white)] hover:border-2 hover:border-solid'>Donate</a>
          </li>
        </ul>
      </nav>

      <div
        class='hidden col-start-3 col-end-5 2xl:row-start-3 2xl:row-end-4 self-center justify-self-end z-[2] mb-4 lg:hidden'
        id='header__social-media'>
        <p
          class="text-[clamp(1rem,0.9643rem_+_0.1786vw,1.25rem)] not-italic font-normal leading-[160%] text-center text-[color:var(--blue)] mb-[5px]">
          Follow us on socials!</p>
        <ul role="list" class='flex gap-[15px]'>
          <li>
            <a href="https://www.facebook.com/houstonsciencefestival" rel="noreferrer" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/images/header/facebook.webp' ?>"
                alt="facebook logo">
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
            <a href="https://www.linkedin.com/company/wp-starter-theme" rel="noreferrer" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/images/header/linkedin.webp' ?>"
                alt="linkedin logo">
            </a>
          </li>
        </ul>
      </div>

    </div>

  </header>