<?php  get_header(); ?>

<!-- hero -->
<section class='relative col-start-1 col-end-[15] row-start-2 row-end-auto'>

  <!-- mobile version -->
  <div class='lg:hidden'>

    <img src="<?php echo get_field('mobile_hero_image')['url']; ?>"
      alt="<?php echo get_field('mobile_hero_image')['alt']; ?>">

    <div class="absolute -translate-y-2/4 w-full text-center left-0 top-2/4">
      <h1 class="text-[clamp(3rem,1.862rem_+_5.69vw,5.5rem)] font-bold">Present</h1>
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
      <h1 class="text-[clamp(5.5rem,4.362rem_+_5.69vw,8rem)] font-bold">Present</h1>
    </div>

    <div class='absolute bottom-[-47%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--desktop.webp' ?>" alt="">
    </div>
  </div>

</section>

<!-- Presenter -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-3 row-end-auto pt-[clamp(6rem,-0.286rem_+_31.429vw,45rem)]">

  <?php 
    $overview = get_field('overview');
  ?>

  <div class="overview">
    <?php echo $overview['overview_content']; ?>
  </div>

</section>

<!-- Speaker, Panelist & Demonstrator -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-4 row-end-auto pt-[clamp(8.875rem,7.688rem_+_5.938vw,17.188rem)]">

  <?php 
    $presentInformation = get_field('present_page_information');
  ?>

  <!-- Speaker -->
  <div class="flex flex-col gap-[50px] text-center mb-[clamp(4.563rem,3.652rem_+_4.554vw,10.938rem)]">

    <h2
      class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
      <?php echo $presentInformation['content_one']['heading']; ?>
    </h2>

    <p
      class='text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%] max-w-[clamp(54rem,44.813rem_+_19.141vw,75.438rem)] my-0 mx-auto'>
      <?php echo $presentInformation['content_one']['text_content']; ?>
    </p>

    <div class="button">
      <a href="<?php echo $presentInformation['content_one']['button']['url']; ?>"
        target="<?php echo $presentInformation['content_one']['button']['target']; ?>">
        <?php echo $presentInformation['content_one']['button']['title']; ?>
      </a>
    </div>

    <div class=" mt-[clamp(4.813rem,3.723rem_+_5.446vw,12.438rem)] z-10">
      <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
    </div>

  </div>

  <!-- Panelist -->
  <div class="flex flex-col item gap-[50px] text-center mb-[clamp(4.563rem,3.652rem_+_4.554vw,10.938rem)]">

    <h2
      class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
      <?php echo $presentInformation['content_two']['heading']; ?>
    </h2>

    <p
      class='text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%] max-w-[clamp(54rem,44.813rem_+_19.141vw,75.438rem)] my-0 mx-auto'>
      <?php echo $presentInformation['content_two']['text_content']; ?>
    </p>

    <div class="button">
      <a href="<?php echo $presentInformation['content_two']['button']['url']; ?>"
        target="<?php echo $presentInformation['content_two']['button']['target']; ?>">
        <?php echo $presentInformation['content_two']['button']['title']; ?>
      </a>
    </div>

    <div class=" mt-[clamp(4.813rem,3.723rem_+_5.446vw,12.438rem)] z-10">
      <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
    </div>

  </div>

  <!-- Demonstrator -->
  <div class="flex flex-col item gap-[50px] text-center">

    <h2
      class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
      <?php echo $presentInformation['content_three']['heading']; ?>
    </h2>

    <p
      class='text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%] max-w-[clamp(54rem,44.813rem_+_19.141vw,75.438rem)] my-0 mx-auto'>
      <?php echo $presentInformation['content_three']['text_content']; ?>
    </p>

    <div class="button">
      <a href="<?php echo $presentInformation['content_three']['button']['url']; ?>"
        target="<?php echo $presentInformation['content_three']['button']['target']; ?>">
        <?php echo $presentInformation['content_three']['button']['title']; ?>
      </a>
    </div>

  </div>

</section>

<!-- Image -->
<section
  class="col-start-1 col-end-[15] md:col-start-3 md:col-end-13 md:place-self-center row-start-5 row-end-auto pt-[clamp(15.063rem,14.768rem_+_1.473vw,17.125rem)] md:mb-[117px]">

  <img src="<?php echo get_field('present_mobile_image')['url']; ?>"
    alt="<?php echo get_field('present_mobile_image')['alt']; ?>" class="md:hidden">

  <img src="<?php echo get_field('present_desktop_image')['url']; ?>"
    alt="<?php echo get_field('present_desktop_image')['url']; ?>" class="hidden md:inline">

</section>



<?php get_footer(); ?>