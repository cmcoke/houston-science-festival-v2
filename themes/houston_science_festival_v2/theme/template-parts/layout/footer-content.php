<?php

/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package houston_science_festival
 */

?>

<footer id="colophon" class="wrapper pt-[clamp(21.563rem,20.786rem_+_3.884vw,27rem)]">

  <!-- #contact-us -->
  <div class="col-start-2 col-end-10 md:col-start-6 md:col-end-10 ">
    <h2
      class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px] mb-[25px]'>
      Contact Us!</h2>

    <?php echo apply_shortcodes('[contact-form-7 id="47b4927" title="Contact form 1"]'); ?>
  </div>

  <!-- #follow-us-on-socials! -->
  <div class='col-start-2 col-end-9 mt-14  md:col-start-2 md:col-end-5 md:row-start-1 md:row-end-2 md:mt-0'>

    <h2
      class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
      Follow us on socials!</h2>

    <ul class='flex gap-[15px] mt-[25px]'>
      <li>
        <a href="https://www.facebook.com/houstonsciencefestival" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/icons8-facebook-100 1(1).webp' ?>"
            alt="facebook logo">
        </a>
      </li>
      <li>
        <a href="https://www.instagram.com/houstonsciencefestival" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/icons8-instagram-100 1.webp' ?>"
            alt="instagram logo">
        </a>
      </li>
      <li>
        <a href="https://twitter.com/HoustonSciFest" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/icons8-twitter-100 1.webp' ?>"
            alt="twitter logo">
        </a>
      </li>
      <li>
        <a href="https://www.linkedin.com/company/houstonsciencefestival" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/icons8-linkedin-100 1.webp' ?>"
            alt="linkedin logo">
        </a>
      </li>
    </ul>

    <!-- #mobile-logos -->
    <ul class='flex flex-col items-start mt-14 mb-20 md:hidden'>
      <li>
        <a href="https://bridgestoscience.org/" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/beidges-to-science--mobile.webp' ?>"
            alt="bridges to science logo">
        </a>
      </li>
      <li>
        <a href="http://www.sciencefestivals.org/">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/hsf--mobile.webp' ?>"
            alt="houston science festival logo">
        </a>
      </li>
      <li>
        <img src="<?php echo get_template_directory_uri() . '/images/footer/alliance--mobile.webp' ?>"
          alt="alliance logo">
      </li>
    </ul>

  </div>

  <!-- #desktop-logos -->
  <div class='hidden md:block col-start-2 col-end-10 mt-30 mb-20'>
    <ul class=' flex justify-between items-center'>
      <li class='w-1/4'>
        <a href="https://bridgestoscience.org/" rel="noreferrer" target="_blank">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/beidges-to-science--desktop.webp' ?>"
            alt="bridges to science logo">
        </a>
      </li>
      <li class='w-1/4'>
        <a href="#">
          <img src="<?php echo get_template_directory_uri() . '/images/footer/hsf--desktop.webp' ?>"
            alt="houston science festival logo">
        </a>
      </li>
      <li class='w-1/4'>
        <img src="<?php echo get_template_directory_uri() . '/images/footer/alliance--desktop.webp' ?>"
          alt="alliance logo">
      </li>
    </ul>
  </div>

</footer>