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
	      
        */
        echo '<h4 class = "Menu">' . '<a href =http://localhost/Examen/category/cours/>' . "Cours" . " ". '</a>' .'<a href ="#">' . "Atelier" . '</a>'." ". '</a>' .'<a href ="#">' . "Nouvelles" . " ". '</a>' .'<a href ="#">' . "Événement" . '</a>'.'</a>'. '</h2>';
        echo '<h1>Question 3 - Les cours du programme de Techniques d intégration multimédia du collège de Maisonneuve</h1>';
 

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
    'posts_per_page' => 29,
    'orderby' => "title",
    'order' => "ASC",
);

$query1 = new WP_Query( $args );
$i = 1;
// The Loop
while ( $query1->have_posts() ) {
$query1->the_post();

echo '<h4>' . $i++ . " " .'<a href= get_post_permalink()>'. get_the_title() . '</a>' . " " . "-" .'<span class ="session">'. " session: " . substr(get_the_title(),4,1) .'</span>' ." " . "-" .'<span class ="domaine">'. " domaine: " . substr(get_the_title(),5,1) . '</span>' .'</h4>'; 
}

// Restore original Post Data
wp_reset_postdata();
 
?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
