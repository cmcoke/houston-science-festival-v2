<?php  

// echo '<pre>';
// print_r(get_field('sponsors'));
// echo '</pre>';
// die();

/* Template Name: Home Page */

get_header(); ?>

<!-- hero -->
<section class='relative col-start-1 col-end-[15] row-start-2 row-end-auto'>

  <!-- mobile version -->
  <div class='lg:hidden'>

    <img src="<?php echo get_field('mobile_hero_image')['url']; ?>"
      alt="<?php echo get_field('mobile_hero_image')['alt']; ?>">


    <div class="absolute -translate-y-2/4 w-full text-center left-0 top-2/4">
      <img src="<?php echo get_template_directory_uri() . '/images/homepage/hsf_scratch_day_logo.png' ?>"
        alt="HSF & Scratch Day logo">
    </div>


    <div class='absolute bottom-[-23%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--mobile.webp' ?>" alt="colorful shapes">
    </div>
  </div>

  <!-- desktop version -->
  <div class='hidden lg:block'>

    <img src="<?php echo get_field('desktop_hero_image')['url']; ?>"
      alt="<?php echo get_field('desktop_hero_image')['alt']; ?>">

    <div class="absolute inset-[0_10%_8%] flex items-center justify-center">
      <img src="<?php echo get_template_directory_uri() . '/images/homepage/hsf_scratch_day_logo.png' ?>"
        alt="HSF & Scratch Day logo" class="max-w-[54rem]">
    </div>

    <div class='absolute bottom-[-47%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--desktop.webp' ?>" alt="colorful shapes">
    </div>
  </div>

</section>


<!-- ¡Vamos a Descubrir! ... -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-3 row-end-auto pt-[clamp(6rem,-0.286rem_+_31.429vw,45rem)] ">

  <?php 
    $overview = get_field('overview');
  ?>

  <div class="overview">

    <?php echo $overview['overview_content']; ?>

  </div>

  <div class="button">
    <a href="<?php echo $overview['button']['url']; ?>" target="<?php echo $overview['button']['target']; ?>">
      <?php echo $overview['button']['title']; ?>
    </a>
  </div>

  <div class="mt-[6rem]">

    <!-- <img src="<?php echo get_template_directory_uri() . '/images/homepage/hsf-map.webp' ?>" alt="map of event"> -->

  </div>

</section>


<!-- Event Highlights -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-4 row-end-auto pt-[clamp(9rem,6rem_+_15vw,25rem)]">

  <h1
    class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto mb-[clamp(2.188rem,0.582rem_+_8.027vw,13.426rem)]">
    <?php echo the_field('four_column_main_heading'); ?>
  </h1>


  <?php 
    $columnOne = get_field('column_one');
    $columnTwo = get_field('column_two');
    $columnThree = get_field('column_three');
    $columnFour = get_field('column_four');
  ?>

  <div
    class="grid gap-y-[75px] md:grid-cols-2 md:gap-x-[45px] 2xl:grid-cols-4 mt-[clamp(0.688rem,0.482rem_+_1.027vw,2.125rem)]">

    <div>

      <img src="<?php echo $columnOne['image']['url']; ?>)" alt="<?php echo $columnOne['image']['url']; ?>"
        class="block mx-auto">

      <h3
        class="text-[color:var(--moonstone)] text-center text-[clamp(1.2rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[-0.3px] md:tracking-[-0.48px] my-[20px]">
        <?php echo $columnOne['heading'];?>
      </h3>

      <p class="text-center text-[1.15rem] not-italic font-normal leading-[160%]">
        <?php echo $columnOne['information']; ?></p>

    </div>


    <div>

      <img src="<?php echo $columnTwo['image']['url']; ?>)" alt="<?php echo $columnTwo['image']['url']; ?>"
        class="block mx-auto">

      <h3
        class="text-[color:var(--moonstone)] text-center text-[clamp(1.2rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[-0.3px] md:tracking-[-0.48px] my-[20px]">
        <?php echo $columnTwo['heading'];?>
      </h3>

      <p class="text-center text-[1.15rem] not-italic font-normal leading-[160%]">
        <?php echo $columnTwo['information']; ?></p>

    </div>


    <div>

      <img src="<?php echo $columnThree['image']['url']; ?>)" alt="<?php echo $columnThree['image']['url']; ?>"
        class="block mx-auto">

      <h3
        class="text-[color:var(--moonstone)] text-center text-[clamp(1.2rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[-0.3px] md:tracking-[-0.48px] my-[20px]">
        <?php echo $columnThree['heading'];?>
      </h3>

      <p class="text-center text-[1.15rem] not-italic font-normal leading-[160%]">
        <?php echo $columnThree['information']; ?></p>

    </div>

    <div>

      <img src="<?php echo $columnFour['image']['url']; ?>)" alt="<?php echo $columnFour['image']['url']; ?>"
        class="block mx-auto">

      <h3
        class="text-[color:var(--moonstone)] text-center text-[clamp(1.2rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[-0.3px] md:tracking-[-0.48px] my-[20px]">
        <?php echo $columnFour['heading'];?>
      </h3>

      <p class="text-center text-[1.15rem] not-italic font-normal leading-[160%]">
        <?php echo $columnFour['information']; ?></p>

    </div>

  </div>

</section>


<!-- FREE Technology Kits & Festival Guide -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-5 row-end-auto pt-[clamp(3rem,-0.857rem_+_19.286vw,30rem)]">

  <div>
    <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
  </div>

  <!-- FREE Technology Kits -->
  <div class="py-[clamp(4.688rem,3.795rem_+_4.464vw,10.938rem)]">

    <?php 
      $technologyKits = get_field('free_technology_kits');
    ?>

    <h1
      class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto my-0">
      <?php echo $technologyKits['heading']; ?>
    </h1>

    <div class="mt-[clamp(1.813rem,1.625rem_+_0.938vw,3.125rem)] max-w-[1400px] mx-auto">

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-bold leading-[160%]">
          <?php echo $technologyKits['text_content_one']['heading']; ?> </p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $technologyKits['text_content_one']['information']; ?> </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-bold leading-[160%]">
          <?php echo $technologyKits['text_content_two']['heading']; ?> </p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $technologyKits['text_content_two']['information']; ?> </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-bold leading-[160%]">
          <?php echo $technologyKits['text_content_three']['heading']; ?> </p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $technologyKits['text_content_three']['information']; ?> </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-bold leading-[160%]">
          <?php echo $technologyKits['text_content_four']['heading']; ?> </p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $technologyKits['text_content_four']['information']; ?> </p>

      </div>

    </div>

    <div class='mt-[clamp(2.5rem,2.411rem_+_0.446vw,3.125rem)] button'>

      <a href="<?php echo $technologyKits['button']['url']; ?>"
        target="<?php echo $technologyKits['button']['target']; ?>">
        <?php echo $technologyKits['button']['title']; ?>
      </a>

    </div>

    <div class="flex flex-col items-center mt-[clamp(4.063rem,3.795rem_+_1.339vw,5.938rem)] ">

      <h3
        class="text-[clamp(1rem,0.964rem_+_0.179vw,1.25rem)] not-italic font-normal leading-[160%] tracking-[-0.24px] text-center mb-[20px]">
        Proud
        Partner</h3>

      <a href="https://canaryacademyonline.org" rel="noreferrer" target="_blank">

        <img src="<?php echo $technologyKits['partner_mobile_image']['url']; ?>)" alt="canary academy logo"
          class="block mx-auto md:hidden">

        <img src="<?php echo $technologyKits['partner_desktop_image']['url']; ?>)" alt="canary academy logo"
          class="hidden md:block mx-auto">
      </a>

    </div>

  </div>

  <div>
    <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
  </div>

  <!-- Festival Guide -->
  <div class="py-[clamp(4.688rem,3.795rem_+_4.464vw,10.938rem)]">

    <h1
      class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto my-0">
      <?php echo the_field('festival_guide_heading'); ?>
    </h1>

    <?php 
      $activities = get_field('actvities');
    ?>


    <div class="mt-[clamp(1.813rem,1.625rem_+_0.938vw,3.125rem)] max-w-[1300px] mx-auto">

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_one']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_one']['information']; ?>
        </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_two']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_two']['information']; ?>
        </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_three']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['acitivity_three']['information']; ?>
        </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_four']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_four']['information']; ?>
        </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_five']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_five']['information']; ?>
        </p>

      </div>

      <div class="mb-[4rem]">

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_six']['heading']; ?></p>

        <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
          <?php echo $activities['activity_six']['information']; ?>
        </p>

      </div>

    </div>

  </div>

  <div>
    <hr class="border-t-[color:var(--white)] border-t-2 border-solid ">
  </div>

</section>


<!-- Schedule -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] lg:col-start-4 lg:col-end-[12] row-start-6 row-end-auto pt-[clamp(5.063rem,4.188rem_+_4.375vw,11.188rem)]">

  <h1
    class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto my-0 mb-[0.625rem]">
    <?php echo the_field('schedule_heading'); ?>
  </h1>

  <h3 class="text-center mb-[1.75rem] text-[clamp(1rem,0.9rem_+_0.5vw,1.7rem)]">
    <?php echo the_field('schedule_sub_heading'); ?>
  </h3>

  <?php 
    $morningSession = get_field('morning_session');
  ?>

  <table class="table-auto mx-auto">

    <tbody>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[35%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold  lg:text-center">
          <?php echo $morningSession['first_session']['time']; ?>
        </td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['first_session']['activity']; ?></td>
      </tr>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[35%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold  lg:text-center">
          <?php echo $morningSession['second_session']['time']; ?></td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['second_session']['activity']; ?></td>
      </tr>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[35%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold lg:text-center">
          <?php echo $morningSession['third_session']['time']; ?></td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['third_session']['activity']; ?></td>
      </tr>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[38%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold  lg:text-center">
          <?php echo $morningSession['fourth_session']['time']; ?>
        </td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['fourth_session']['activity']; ?>
      </tr>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[35%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold  lg:text-center">
          <?php echo $morningSession['fifth_session']['time']; ?>
        </td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['fifth_session']['activity']; ?></td>
      </tr>
      <tr class="">
        <td
          class="py-[10px] lg:py-[20px] px-[12px] w-[35%] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-bold  lg:text-center">
          <?php echo $morningSession['sixth_session']['time']; ?>
        </td>
        <td
          class="py-[10px] px-[12px] lg:text-[1.5rem] text-[clamp(1rem,0.929rem_+_0.357vw,1.5rem)] not-italic font-normal  lg:tracking-[-0.4px]">
          <?php echo $morningSession['sixth_session']['activity']; ?></td>
      </tr>
    </tbody>

  </table>

  <!-- map -->
  <div class="map_2024">
    <img src="<?php echo get_template_directory_uri() . '/images/homepage/hsf-map-2024.webp' ?>" alt="map of event">
  </div>

</section>


<!-- image of boy holding plane toy -->
<section class="md:hidden col-start-1 col-end-[15] row-start-7 row-end-auto mt-[7.8125rem] ">
  <img src="<?php echo get_field('schedule_image')['url']; ?>" alt="<?php echo get_field('schedule_image')['alt']; ?>">
</section>

<!-- Meet our 2023 Exhibitors -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-[8] md:row-start-7 row-end-auto pt-[clamp(7.813rem,6.438rem_+_6.875vw,17.438rem)]">

  <h1
    class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto my-0 mb-[clamp(2rem,1.857rem_+_0.714vw,3rem)]">
    Meet our 2023 Exhibitors!
  </h1>

  <?php 
    $theExhibitors = get_field('the_exhibitors');
  ?>

  <div class="marquee">
    <ul class="marquee-content">

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_one']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_one']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_one']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_one']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_one']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_one']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_two']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_two']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_two']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_two']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_two']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_two']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_three']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_three']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_three']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_three']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_three']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_three']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_four']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_four']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_four']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_four']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_four']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_four']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_five']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_five']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_five']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_five']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_five']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_five']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_six']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_six']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_six']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_six']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_six']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_six']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_seven']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_seven']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_seven']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_seven']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_seven']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_seven']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_eight']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_eight']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_eight']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_eight']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_eight']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_eight']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_nine']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_nine']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_nine']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_nine']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_nine']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_nine']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_ten']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_ten']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_ten']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_ten']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_ten']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_ten']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_eleven']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_eleven']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_eleven']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_eleven']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_eleven']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_eleven']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_twelve']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_twelve']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_twelve']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_twelve']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_twelve']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_twelve']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_thirteen']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_thirteen']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_thirteen']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_thirteen']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_thirteen']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_thirteen']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>

      <li>

        <a href="<?php echo $theExhibitors['exhibitor_fourteen']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_fourteen']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_fourteen']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_fourteen']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_fourteen']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_fourteen']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>


      <li>

        <a href="<?php echo $theExhibitors['exhibitor_fifteen']['website']['url']; ?>"
          target="<?php echo $theExhibitors['exhibitor_fifteen']['website']['target']; ?>">

          <img src="<?php echo $theExhibitors['exhibitor_fifteen']['mobile_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_fifteen']['mobile_image']['alt']; ?>" class="lg:hidden">

          <img src="<?php echo $theExhibitors['exhibitor_fifteen']['desktop_image']['url']; ?>"
            alt="<?php echo $theExhibitors['exhibitor_fifteen']['desktop_image']['alt']; ?>" class="hidden lg:inline">

        </a>

      </li>



    </ul>
  </div>


</section>


<!-- image of a girl wearing glasses -->
<section class="col-start-1 col-end-[15] row-start-[9] row-end-auto mt-[9.375rem] md:hidden">
  <img src="<?php echo get_field('mobile_exhibitor_image')['url']; ?>"
    alt="<?php echo get_field('mobile_exhibitor_image')['alt']; ?>">
</section>


<!-- Thank you to our 2023 Sponsors! -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-[10] row-end-auto md:row-start-[9] md:row-end-auto pt-[clamp(7.813rem,6.696rem_+_5.58vw,15.625rem)]">

  <h1
    class="text-[clamp(1.5rem,1.143rem_+_1.786vw,4rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] max-w-[clamp(19.375rem,12rem_+_36.875vw,71rem)] text-center mx-auto my-0 mb-[clamp(3.75rem,2.946rem_+_4.018vw,9.375rem)]">
    <?php echo the_field('sponsor_heading'); ?>
  </h1>

  <?php 
    $sponsors = get_field('sponsors');
  ?>


  <div class="flex flex-col justify-center items-center">

    <div class="mb-[clamp(4rem,3.571rem_+_2.143vw,7rem)]">
      <a href="<?php echo $sponsors['sponsor_one']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_one']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_one']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_one']['mobile_logo_image']['alt']; ?>"
          class="inline max-w-[18rem] lg:hidden">

        <img src="<?php echo $sponsors['sponsor_one']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_one']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline max-w-xl">
      </a>
    </div>

    <div>
      <a href="<?php echo $sponsors['sponsor_two']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_two']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_two']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_two']['mobile_logo_image']['alt']; ?>" class="inline  lg:hidden">

        <img src="<?php echo $sponsors['sponsor_two']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_two']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline ">
      </a>
    </div>

  </div>

</section>


<!-- Sponsor -->
<section
  class="col-start-2 col-end-[14] md:col-start-4 md:col-end-[12] lg:col-start-3 lg:col-end-[13] row-start-[11] row-end-auto pt-[clamp(8.438rem,7.17rem_+_6.339vw,17.313rem)]">

  <?php 
    $sponsorUs = get_field('sponsor_us');
  ?>

  <!-- Sponsor (mobile version) -->
  <div class="flex flex-col items-center gap-y-[35px] lg:hidden">

    <h3 class="text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px]">
      <?php echo $sponsorUs['heading']; ?>
    </h3>

    <p class="text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]">
      <?php echo $sponsorUs['text_content']; ?>
    </p>

    <div class="button">
      <a href="<?php echo $sponsorUs['button']['url']; ?>" target="<?php echo $sponsorUs['button']['target']; ?>">
        <?php echo $sponsorUs['button']['title']; ?>
      </a>
    </div>


  </div>

  <!-- Sponsor (desktop version) -->
  <div class="hidden lg:block col-start-3 col-end-13">

    <div class="grid grid-cols-[repeat(10,1fr)] auto-rows-auto">

      <div class="col-start-1 col-end-6 row-start-1 row-end-[7]">
        <img src="<?php echo $sponsorUs['left_image']['url'] ?>" alt="<?php echo $sponsorUs['left_image']['alt'] ?>">
      </div>

      <div class="col-start-7 col-end-11 row-start-1 row-end-6 self-center">

        <div class="flex flex-col gap-y-[25px] items-center ">

          <h2
            class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
            <?php echo $sponsorUs['heading']; ?></h2>

          <p class='text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%]'>
            <?php echo $sponsorUs['text_content']; ?>
          </p>

          <div class="button">
            <a href="<?php echo $sponsorUs['button']['url']; ?>" target="<?php echo $sponsorUs['button']['target']; ?>">
              <?php echo $sponsorUs['button']['title']; ?>
            </a>
          </div>
        </div>

      </div>

      <div class="col-start-4 col-end-11 row-start-6 row-end-[9] mt-[1rem]">
        <img src="<?php echo $sponsorUs['bottom_image']['url'] ?>"
          alt="<?php echo $sponsorUs['bottom_image']['alt'] ?>">
      </div>

    </div>

  </div>

</section>



<?php get_footer(); ?>