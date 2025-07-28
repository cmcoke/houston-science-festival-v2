  <!-- footer -->
  <footer
    class="footer col-start-1 col-end-[15] row-start-[12] row-end-auto pt-[clamp(21.563rem,20.786rem_+_3.884vw,27rem)] mt-[clamp(9.313rem,8.634rem_+_3.393vw,14.063rem)]">

    <div class="wrapper mb-[4rem]">

      <!-- Contact Us! -->
      <div class='col-start-2 col-end-[14] md:col-start-9 md:col-end-13 row-start-1 row-end-auto'>

        <h2
          class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px] mb-[25px]'>
          Contact Us!</h2>

        <?php echo apply_shortcodes( '[contact-form-7 id="24" title="Contact form 1"]' ); ?>

      </div>

      <!-- Follow us on socials! -->
      <div
        class='col-start-2 col-end-[14] md:col-start-3 md:col-end-8 row-start-2 row-end-auto md:row-start-1 md:row-end-2 mt-[clamp(5.688rem,5.284rem_+_2.018vw,6.25rem)] md:mt-[0]'>

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
            <a href="https://www.linkedin.com/company/wp-starter-theme" rel="noreferrer" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/images/footer/icons8-linkedin-100 1.webp' ?>"
                alt="linkedin logo">
            </a>
          </li>
        </ul>

        <ul class='flex flex-col items-start mt-[65px] md:hidden'>
          <li class='mb-[-1rem]'>
            <a href="https://bridgestoscience.org/" rel="noreferrer" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/images/footer/beidges-to-science--mobile.webp' ?>"
                alt="beidges to science logo">
            </a>
          </li>
          <li class='ml-[-1rem]'>
            <a href="http://www.sciencefestivals.org/">
              <img src="<?php echo get_template_directory_uri() . '/images/footer/hsf--mobile.webp' ?>"
                alt="houston science festival logo">
            </a>
          </li>
          <li class='mt-[-1rem]'>
            <img src="<?php echo get_template_directory_uri() . '/images/footer/alliance--mobile.webp' ?>"
              alt="alliance logo">
          </li>
        </ul>

      </div>

      <!-- Bridges to Science, Houston Science Festival & Science Festival Alliance logos -->
      <div
        class='hidden md:block col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-3 row-end-4 mt-[clamp(5.688rem,5.607rem_+_0.402vw,6.25rem)]'>
        <ul class=' flex justify-between items-center'>
          <li class='mb-[-1rem] w-1/4'>
            <a href="https://bridgestoscience.org/" rel="noreferrer" target="_blank">
              <img src="<?php echo get_template_directory_uri() . '/images/footer/beidges-to-science--desktop.webp' ?>"
                alt="beidges to science logo">
            </a>
          </li>
          <li class='ml-[-1rem] w-1/4'>
            <a href="#">
              <img src="<?php echo get_template_directory_uri() . '/images/footer/hsf--desktop.webp' ?>"
                alt="houston science festival logo">
            </a>
          </li>
          <li class='mt-[-1rem] w-1/4'>
            <img src="<?php echo get_template_directory_uri() . '/images/footer/alliance--desktop.webp' ?>"
              alt="alliance logo">
          </li>
        </ul>
      </div>

    </div>

  </footer>


  <?php wp_footer(); ?>
  </body>

  </html>