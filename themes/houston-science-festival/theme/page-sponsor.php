<?php  get_header(); ?>

<!-- hero section -->
<section class='relative col-start-1 col-end-[15] row-start-2 row-end-auto'>

  <!-- mobile version -->
  <div class='lg:hidden'>

    <img src="<?php echo get_field('mobile_hero_image')['url']; ?>"
      alt="<?php echo get_field('mobile_hero_image')['alt']; ?>">

    <div class="absolute -translate-y-2/4 w-full text-center left-0 top-2/4">
      <h1 class="text-[clamp(3rem,1.862rem_+_5.69vw,5.5rem)] font-bold">Sponsor</h1>
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
      <h1 class="text-[clamp(5.5rem,4.362rem_+_5.69vw,8rem)] font-bold">Sponsor</h1>
    </div>

    <div class='absolute bottom-[-47%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--desktop.webp' ?>" alt="colorful shapes">
    </div>
  </div>

</section>

<!-- Sponsor -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-3 row-end-auto pt-[clamp(7.5rem,2.143rem_+_26.786vw,45rem)]">

  <?php 
    $overview = get_field('overview');
  ?>

  <div class="overview button">

    <?php echo $overview['overview_content']; ?>

    <div class="mt-[4rem]">
      <a href="<?php echo $overview['button']['url']; ?>" target="<?php echo $overview['button']['target']; ?>">
        <?php echo $overview['button']['title']; ?>
      </a>
    </div>

  </div>

</section>

<!-- Why Sponsor? -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-4 row-end-auto pt-[clamp(10.563rem,9.839rem_+_3.616vw,15.625rem)]">

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
    class="grid gap-y-[75px] md:grid-cols-2 md:gap-x-[45px] xl:grid-cols-4 mt-[clamp(0.688rem,0.482rem_+_1.027vw,2.125rem)]">

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

  <?php 
    $sponsorButton = get_field('four_column_button');
  ?>

  <div class='mt-[clamp(6.25rem,6.009rem_+_1.205vw,7.938rem)] button'>
    <a href="<?php echo $sponsorButton['url']; ?>" target="<?php echo $sponsorButton['target']; ?>">
      <?php echo $sponsorButton['title']; ?>
    </a>
  </div>

</section>

<!-- Levels and Benefits -->
<section
  class="col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] row-start-5 row-end-auto pt-[clamp(8.625rem,7.625rem_+_5vw,15.625rem)]">

  <h1
    class='text-[clamp(1.5rem,2.5vw_+_1rem,5rem)] leading-[120%] not-italic font-bold tracking-[-0.48px] text-center max-w-[clamp(19.375rem,10.58rem_+_43.973vw,80.938rem)] mx-auto mb-[30px] md:mb-[101px]'>
    Sponsorship Levels and Benefits</h1>

  <!-- mobile version -->
  <div class='grid gap-y-[100px] mb-[100px] md:grid-cols-2 lg:grid-cols-3 items-center gap-16 min-[1632px]:hidden'>

    <!-- Gold -->
    <div class='max-w-[350px] mx-auto'>

      <h2 class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center mb-[10px]'>Gold</h2>
      <span class='text-base not-italic font-normal leading-[160%] block text-center mb-[25px]'>$5,000+</span>
      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/gold-top--mobile3x.webp' ?>" alt="gold"
        class='block mx-auto mb-[26px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%]'>Logo on display banner</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Recognition in print materials</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Stage recognition on welcome message
        </p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Featured in our Houston Science Festival -
          Scratch Day highlight video</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Prime Booth Space (6ft table) at our
          Houston Science Festival - Scratch Day</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Sponsor's logo and link showcased on our
          Houston Science Festival - Scratch Day website and social media</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/gold-bottom--mobile3x.webp' ?>"
        alt="gold" class='block mx-auto mt-[22px]'>

    </div>


    <!-- Silver -->
    <div class='max-w-[350px] mx-auto'>

      <h2 class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center mb-[10px]'>Silver</h2>
      <span class='text-base not-italic font-normal leading-[160%] block text-center mb-[25px]'>$1,500+</span>
      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/silver-top--mobile3x.webp' ?>"
        alt="gold" class='block mx-auto mb-[26px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%]'>Logo on display banner</p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Recognition in print materials</p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Stage recognition on welcome message
        </p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Featured in our Houston Science Festival -
          Scratch Day highlight video</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Prime Booth Space (6ft table) at our
          Houston Science Festival - Scratch Day</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Sponsor's logo and link showcased on our
          Houston Science Festival - Scratch Day website and social media</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/silver-bottom--mobile3x.webp' ?>"
        alt="gold" class='block mx-auto mt-[22px]'>

    </div>


    <!-- Copper -->
    <div class='max-w-[350px] mx-auto'>

      <h2 class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center mb-[10px]'>Copper</h2>
      <span class='text-base not-italic font-normal leading-[160%] block text-center mb-[25px]'>$500+</span>
      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/copper-top--mobile3x.webp' ?>"
        alt="gold" class='block mx-auto mb-[26px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%]'>Logo on display banner</p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Recognition in print materials</p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Stage recognition on welcome message
        </p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Featured in our Houston Science Festival -
          Scratch Day highlight video</p>
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Prime Booth Space (6ft table) at our
          Houston Science Festival - Scratch Day</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>

      <hr class='bg-white border-[1px] mt-[20px] mb-[15px]'>

      <div class='flex items-center justify-between px-[1rem]'>
        <p class='text-base not-italic font-normal leading-[160%] w-[150px]'>Sponsor's logo and link showcased on our
          Houston Science Festival - Scratch Day website and social media</p>
        <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>" alt="Checkmark">
      </div>


      <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/copper-bottom--mobile3x.webp' ?>"
        alt="gold" class='block mx-auto mt-[22px]'>

    </div>

  </div>

  <!-- desktop version -->
  <table class="table-fixed mx-auto min-w-[1200px] hidden min-[1632px]:block">

    <thead>
      <tr>
        <th></th>
        <th class="text-[40px] not-italic font-bold leading-[120%] tracking-[-0.8px] text-center pr-[20px]">
          Gold <br>
          <span class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center'>
            $5,000+</span> <br>
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/gold-top--mobile3x.webp' ?>"
            alt="gold" class='block mx-auto mb-[26px] mt-[50px]'>
        </th>
        <th class="text-[40px] not-italic font-bold leading-[120%] tracking-[-0.8px] text-center pr-[20px]">
          Silver <br>
          <span class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center'>
            $1,500+</span> <br>
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/silver-top--mobile3x.webp' ?>"
            alt="silver" class='block mx-auto mb-[26px] mt-[50px]'>
        </th>
        <th class="text-[40px] not-italic font-bold leading-[120%] tracking-[-0.8px] text-center">
          Copper <br>
          <span class='text-2xl not-italic font-bold leading-[120%] tracking-[-0.48px] text-center'>
            $500+</span> <br>
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/copper-top--mobile3x.webp' ?>"
            alt="copper" class='block mx-auto mb-[26px] mt-[50px]'>
        </th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">Logo on
          display banner
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px]"></td>
        <td class="border-b-2 border-b-white px-4 py-[15px] "></td>
      </tr>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">Recognition
          in print materials</td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px]"></td>
        <td class="border-b-2 border-b-white px-4 py-[15px] "></td>
      </tr>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">
          Stage recognition on welcome message</td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px]"></td>
      </tr>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">Featured in
          our Houston Science Festival - Scratch Day highlight video</td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px]"></td>
      </tr>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">Prime Booth
          Space (6ft table) at our Houston Science Festival - Scratch Day</td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
      </tr>
      <tr>
        <td class="border-b-2 border-b-white px-4 py-[15px] text-base not-italic font-normal leading-[160%]">Sponsor's
          logo and link showcased on our Houston Science Festival - Scratch Day website and social media</td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
        <td class="border-b-2 border-b-white px-4 py-[15px] pl-[clamp(7rem,3.455rem_+_5.34vw,12rem)]">
          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/Checkmark1.webp' ?>"
            alt="Checkmark">
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td></td>
        <th class='pr-[20px]'>

          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/gold-bottom--mobile3x.webp' ?>"
            alt="gold" class='block mx-auto mt-[32px]'>

        </th>
        <th class='pr-[20px]'>

          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/silver-bottom--mobile3x.webp' ?>"
            alt="silver" class='block mx-auto mt-[32px]'>

        </th>
        <th>

          <img src="<?php echo get_template_directory_uri() . '/images/sponsor-page/copper-bottom--mobile2x.webp' ?>"
            alt="copper" class='block mx-auto mt-[32px]'>

        </th>
      </tr>
    </tfoot>

  </table>

  <?php 
    $levelAndBenefits = get_field('level_and_benefits_button');
  ?>

  <div class='mt-[clamp(6.25rem,4.518rem_+_8.661vw,18.375rem)] button button-large'>
    <a href="<?php echo $levelAndBenefits['url']; ?>" target="<?php echo $levelAndBenefits['target']; ?>">
      <?php echo $levelAndBenefits['title']; ?>
    </a>
  </div>

</section>

<!-- image of girl with magnifying glass -->
<section
  class="col-start-1 col-end-[15] md:col-start-3 md:col-end-13 min-[534px]:place-self-center row-start-6 row-end-auto pt-[clamp(15.063rem,14.768rem_+_1.473vw,17.125rem)] md:mb-[117px]">
  <img src="<?php echo get_field('sponsor_page_mobile_image')['url']; ?>"
    alt="<?php echo get_field('sponsor_page_mobile_image')['alt']; ?>" class="md:hidden">
  <img src="<?php echo get_field('sponsor_page_desktop_image')['url']; ?>"
    alt="<?php echo get_field('sponsor_page_desktop_image')['alt']; ?>" class="hidden md:inline">
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

  <div
    class="grid grid-cols-2 grid-rows-3 md:grid-cols-6 md:grid-rows-2 gap-[15px] lg:gap-[30px] xl:gap-[50px] place-items-center">

    <div class="col-start-1 col-end-2 md:col-start-1 md:col-end-3 row-start-1 row-end-2">
      <a href="<?php echo $sponsors['sponsor_one']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_one']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_one']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_one']['mobile_logo_image']['alt']; ?>" class="lg:hidden">

        <img src="<?php echo $sponsors['sponsor_one']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_one']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline">
      </a>
    </div>

    <div class="col-start-2 col-end-3 md:col-start-5 md:col-end-7 row-start-1 row-end-2">
      <a href="<?php echo $sponsors['sponsor_two']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_two']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_two']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_two']['mobile_logo_image']['alt']; ?>" class="lg:hidden">

        <img src="<?php echo $sponsors['sponsor_two']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_two']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline">
      </a>
    </div>

    <div class="col-start-1 col-end-3 md:col-start-3 md:col-end-5 row-start-2 row-end-3 md:row-start-1 md:row-end-2">
      <a href="<?php echo $sponsors['sponsor_three']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_three']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_three']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_three']['mobile_logo_image']['alt']; ?>" class="lg:hidden">

        <img src="<?php echo $sponsors['sponsor_three']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_three']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline">
      </a>
    </div>

    <div class="col-start-1 col-end-2 row-start-3 row-end-4 md:col-start-2 md:col-end-4 md:row-start-2 md:row-end-3">
      <a href="<?php echo $sponsors['sponsor_four']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_four']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_four']['moblie_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_four']['moblie_logo_image']['alt']; ?>" class="lg:hidden">

        <img src="<?php echo $sponsors['sponsor_four']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_four']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline">
      </a>
    </div>

    <div class="col-start-2 col-end-3 row-start-3 row-end-4 md:col-start-4 md:col-end-6 md:row-start-2 md:row-end-3">
      <a href="<?php echo $sponsors['sponsor_five']['website']['url']; ?>"
        target="<?php echo $sponsors['sponsor_five']['website']['target']; ?>">

        <img src="<?php echo $sponsors['sponsor_five']['mobile_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_five']['mobile_logo_image']['alt']; ?>" class="lg:hidden">

        <img src="<?php echo $sponsors['sponsor_five']['desktop_logo_image']['url']; ?>"
          alt="<?php echo $sponsors['sponsor_five']['desktop_logo_image']['alt']; ?>" class="hidden lg:inline">
      </a>
    </div>

  </div>

</section>


<?php get_footer(); ?>