<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * Template Name: MaPage
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BAP
 */

get_header();
?>
<div class="main page">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
      <div class="post">
        <h1 class="post-title"><?php the_title(); ?></h1>
        <div class="post-content">
        	<p>Le contenu <?php the_content(); ?></p>
        	<p>L'ID est <?php the_ID(); ?></p>
        	<p>L'URL est <?php the_permalink(); ?></p>
        	<p>L'auteur est <?php the_author(); ?></p>
        	<p>Date : <?php the_time(); ?></p>
        	<p>L'image <?php the_post_thumbnail(); ?></p>
        	<p>Categorie : <?php the_category(); ?></p>
          	<p>Nombre de Posts : <strong><?php echo wp_count_posts()->publish; ?></strong></p>
          	<p>Nombre de Pages : <strong><?php echo wp_count_posts('page')->publish; ?></strong></p>
          	<p>Nombre de commentaires publiés : <strong><?php echo wp_count_comments()->approved; ?></strong></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>  
</div>
<?php get_footer(); ?>