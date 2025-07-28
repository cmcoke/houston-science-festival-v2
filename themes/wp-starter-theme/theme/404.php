<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package wp-starter-theme
 */

get_header();
?>

<section id="primary"
  class='col-start-2 col-end-[14] md:col-start-3 md:col-end-[13] xl:col-start-4 xl:col-end-[12] row-start-2 row-end-3 pt-[clamp(12rem,-0.915rem_+_64.574vw,30rem)]'>

  <div>

    <h1
      class="text-[clamp(1.5rem,2.5vw_+_1rem,5rem)] leading-[120%] not-italic font-bold tracking-[-0.48px] text-center max-w-[clamp(19.375rem,10.58rem_+_43.973vw,80.938rem)] mx-auto my-0">
      <?php esc_html_e( 'Page Not Found', 'wp-starter-theme' ); ?></h1>


    <div <?php wp_starter_theme_content_class( 'page-content' ); ?>>

      <p
        class='text-white text-center text-[clamp(1rem,0.357vw_+_0.929rem,1.5rem)] not-italic font-normal leading-[160%] max-w-[1300px] mx-auto mt-[25px] md:mt-[50px]'>
        <?php esc_html_e( 'This page could not be found. It might have been removed or renamed, or it may never have existed.', 'wp-starter-theme' ); ?>
      </p>

      <div class='mt-[4rem]'>
        <a href="<?php echo home_url();  ?>"
          class='flex max-w-[250px] md:max-w-[350px] justify-center items-center gap-2.5 text-[color:var(--blue)] border-[color:var(--blue)] bg-[color:var(--white)] text-[clamp(0.938rem,0.857rem_+_0.402vw,1.5rem)] not-italic font-bold leading-[120%] tracking-[0.32px] transition-all duration-[0.35s] ease-[ease-in-out] mx-auto my-0 px-[30px] py-2.5 min-[768px]:px-[50px] min-[768px]:py-[15px] border-2 border-solid hover:border-[color:var(--white)] hover:bg-[color:var(--blue)] hover:text-[color:var(--white)] hover:border-2 hover:border-solid'>
          Back To Homepage</a>
      </div>

    </div>
  </div>


</section>

<?php
get_footer();