<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: monformulaire
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BAP
 */

if (empty ($data)):
	var_dump($_POST);
	var_dump($now);
endif;


get_header();
?>
<div class="main page">
     <div class="post">
        <h1 class="post-title"><?php //the_title(); ?></h1>
        <div class="post-content">
		    <?php
			$data = $_POST;
			$valid= TRUE;
			$firstname = '';
			$lastname = '';
			$mail = '';	
			$txtBtn = 'Envoyer';
			$alerte = "Vous avez oubliez de remplir votre ";
			$lastname = isset($data['lastname']) ? $data['lastname'] : '';
			$firstname = isset($data['firstname']) ? $data['firstname'] : '';
			$mail = isset($data['mail']) ? $data['mail'] : '';
			$now = current_time('mysql');
			
			
			if ($lastname && $firstname && $mail) :
				global $wpdb;
				$tablename = 'users';
				$wpdb->show_errors;
				
				$dataUsers= array(
					'name'	=> $lastname,
					'firstname' => $firstname,
					'mail' => $mail,
					'time'=> $now,
				);
				$wpdb->replace($tablename, $dataUsers);
				echo sprintf('<h3>Monsieur%s %s votre e-mail %s, il est %s</h3>', $lastname, $firstname, $mail,$now);
				$txtBtn = "Corriger";
			endif;
			
		    ?>    
	    	<form method="post">
			    <label>Votre nom : <input type="text" name="lastname" placeholder="Nom" value="<?php echo $lastname ?>"/></label>
			    <?php
				if (!$lastname && count($_POST)) {
					echo sprintf('<span>%s nom</span>', $alerte);
					$valid = FALSE;
				}
			    ?><br />
			
			    <label>Votre pénom : <input type="text" name="firstname" placeholder="Prénom" value="<?php echo $firstname ?>"/></label>
			    <?php
				if (!$firstname && count($_POST)) {
					echo sprintf('<span>%s prénom</span>', $alerte);
					$valid = FALSE;
				}
			    ?><br />
			    <label>Votre e-mail : <input type="email" name="mail" placeholder="e-mail" value="<?php echo $mail ?>"/></label>
			    <?php
				if (!$mail && count($_POST)) {
					if (!is_email($mail)) {
					echo sprintf("<span>Votre adresse mail<b>%s </b>n'est pas valide</span>", $mail);
					$valid = FALSE;
				}}
			    ?><br />
			    <div class="widget">
			    	<button id="opener" class="ui-button ui-widget ui-corner-all" type="submit" name="send"><?php echo $txtBtn ?></button>
				</div>
			</form>
        </div>
	</div>
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <div class="post">        
        <div class="post-content">
        	Le contenu <?php the_content(); ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>  
</div>
<?php get_footer(); ?>
