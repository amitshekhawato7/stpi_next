<?php 
get_header();
while(have_posts()) : 
    the_post(); 
    $id = get_the_ID();
?>
    <section class="container portfolio-single">
        <div class="row">
            <?php 
            global $row_inner;
            $row_inner = true;
            get_template_part( 'templates/portfolio', anps_get_option('', 'style-1', "portfolio_single")); 
            ?>
        </div>    
    </section>
<?php 
endwhile;
$portfolio_footer = anps_get_option('', '', 'portfolio_single_footer');
if( $portfolio_footer != "" ): ?>
    <p>&nbsp;</p><p>&nbsp;</p>
<?php 
endif;
echo do_shortcode(stripslashes($portfolio_footer));
get_footer();