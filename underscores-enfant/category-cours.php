<?php
get_header();
?>
<div id="primary" class="content-area">
    <h4 class = "Menu"><a href =http://localhost/Examen/category/cours> Cours </a> <a href ="#"> Atelier </a></a><a href ="#"> Nouvelles </a><a href ="#"> Événement </a></a></h2>';
    <h1> Question 4 - Les cours du programme de Techniques d intégration multimédia du collège de Maisonneuve </h1>
    <main id="main" class ="site-main" style="display: grid; grid-template-columns:repeat(5,1fr); grid-template-rows:repeat(6, 1fr); " >

<?php
$args = array(
    "category_name" => "cours",
    'posts_per_page' => 29,
    'orderby' => "title",
);
$query1 = new WP_Query( $args );
while ( $query1->have_posts() ) {
    $query1->the_post();

    echo "<h3 style ='grid-area:'". $gridArea."'>".get_the_title() . " "  . "</h3>";
}
    wp_reset_postdata();
?>
</main>
</div>