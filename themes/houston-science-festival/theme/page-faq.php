<?php get_header(); ?>

<!-- hero -->
<section class='relative col-start-1 col-end-[15] row-start-2 row-end-auto'>

  <!-- mobile version -->
  <div class='lg:hidden'>

    <img src="<?php echo get_field('mobile_hero_image')['url']; ?>"
      alt="<?php echo get_field('mobile_hero_image')['alt']; ?>">

    <div class="absolute -translate-y-2/4 w-full text-center left-0 top-2/4">
      <h1 class="text-[clamp(3rem,1.862rem_+_5.69vw,5.5rem)] font-bold">FAQ</h1>
    </div>


    <div class='absolute bottom-[-23%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--mobile.webp' ?>" alt="colorful shapes">
    </div>
  </div>

  <!-- desktop version -->
  <div class='hidden lg:block'>

    <img src="<?php echo get_field('desktop_hero_image')['url']; ?>"
      alt="<?php echo get_field('desktop_hero_image')['alt']; ?>">

    <div class="absolute translate-y-[-38%] w-full text-center left-0 top-[38%]">
      <h1 class="text-[clamp(5.5rem,4.362rem_+_5.69vw,8rem)] font-bold">FAQ</h1>
    </div>

    <div class='absolute bottom-[-47%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--desktop.webp' ?>" alt="">
    </div>
  </div>

</section>

<!-- Frequently Asked Questions ... -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-3 row-end-auto pt-[clamp(6rem,-0.286rem_+_31.429vw,45rem)]">

  <?php
  $overview = get_field('overview');
  ?>

  <div class="overview max-w-[828px] mx-auto my-0">

    <?php echo $overview['overview_content']; ?>

  </div>

</section>

<!-- FAQs -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-4 row-end-auto pt-[clamp(3rem,1.714rem_+_6.429vw,12rem)]">

  <?php
  $faq = get_field('faq');
  ?>

  <ul class="accordion">

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_one']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_one']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_two']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_two']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_three']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_three']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_four']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_four']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_five']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_five']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_six']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_six']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_seven']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_seven']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_eight']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_eight']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_nine']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_nine']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

    <li class="accordion-item">

      <div class="accordion-item-header">
        <h2
          class="text-[clamp(1.1rem,0.971rem_+_0.643vw,2rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]">
          <?php echo $faq['question_ten']['question']; ?></h2>
        <img src="<?php echo get_template_directory_uri() . '/images/faq/chevron-down.webp' ?>" alt="chevron-down">
      </div>

      <div class="accordion-item-body">
        <div
          class="accordion-item-body-content text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $faq['question_ten']['answer']; ?>
        </div>
      </div>

      <div class="accordion-line">
        <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
      </div>

    </li>

  </ul>

</section>

<?php get_footer(); ?>