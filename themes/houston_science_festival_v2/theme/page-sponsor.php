<?php get_header(); ?>

<!-- #hero-image -->
<section class="relative wrapper">

  <!-- #mobile-version -->
  <div class='lg:hidden col-start-1 col-end-[-1]'>

    <img src="<?php echo get_field('mobile_hero_image')['url']; ?>"
      alt="<?php echo get_field('mobile_hero_image')['alt']; ?>">

    <div class="absolute -translate-y-2/4 w-full text-center left-0 top-2/4">
      <h1 class="text-[clamp(3rem,1.862rem_+_5.69vw,5.5rem)] font-bold">Sponsor</h1>
    </div>


    <div class='absolute bottom-[-23%] left-1/2 transform -translate-x-1/2 w-full'>
      <img src="<?php echo get_template_directory_uri() . '/images/hero/shapes--mobile.webp' ?>" alt="colorful shapes">
    </div>

  </div>

  <!-- #desktop-version -->
  <div class='hidden lg:block col-start-1 col-end-[-1]'>

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

<?php // get_footer(); 
?>