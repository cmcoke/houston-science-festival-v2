<?php get_header(); ?>

<!-- #hero-image -->
<section class="relative wrapper">

  <!-- #mobile-version -->
  <div class='lg:hidden col-start-1 col-end-[-1]'>

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

  <!-- #desktop-version -->
  <div class='hidden lg:block col-start-1 col-end-[-1]'>

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

<?php // get_footer(); 
?>