<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Underscores
 * https://codex.wordpress.org/Function_Reference
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		/*while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
		

		endwhile; // End of the loop.
	
        */echo '<h1>Question 1</h1>';
 

/* Restore original Post Data 
 * NB: Because we are using new WP_Query we aren't stomping on the 
 * original $wp_query and it does not need to be reset with 
 * wp_reset_query(). We just need to set the post data back up with
 * wp_reset_postdata().
 */
wp_reset_postdata();
 

 // The Query
$args = array(
    "category_name" => "cours",
    'posts_per_page' => 10,
);
$query1 = new WP_Query( $args );

// The Loop
while ( $query1->have_posts() ) {
$query1->the_post();
echo '<h4>' . get_the_title() . '</h4>';
}

// Restore original Post Data
wp_reset_postdata();
 
/* The 2nd Query (without global var) */
$args2 = array(

    "category_name" => "",

    


);
$query2 = new WP_Query( $args2 );
$catID = get_the_category($query2->post->ID);

echo "<h1>" .category_description($catID[0]). "</h1>";
// The 2nd Loop
while ( $query2->have_posts() ) {
    $query2->the_post();

         echo '<li>' . get_the_title( $query2->post->ID ) . " - " .get_the_date().'</li>';
       
}
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
