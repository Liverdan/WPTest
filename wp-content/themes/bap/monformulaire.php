<?php
/**
 * The template for displaying all pages
 * 
 * Template Name: monformulaire
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BAP
 */


	//var_dump($_POST);
	//var_dump($row);



get_header();
?>
<div class="main page">
     <div class="post">
        <h1 class="post-title"><?php //the_title(); ?></h1>
        <div class="post-content">
		    
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
				if (!$mail && count($_POST) && (!is_email($mail))) {
					//if (!is_email($mail)) {
					echo sprintf("<span>Votre adresse mail<b>%s </b>n'est pas valide</span>", $mail);
					$valid = FALSE;
				}
			    ?><br />
			    <div class="widget">
			    	<button id="opener" class="ui-button ui-widget ui-corner-all" type="submit" name="send"><?php echo $txtBtn1 ?></button>
			    <h2>Vos priorités et niveaux</h2>
			<p>Classer par ordre croissant, en déplacant les flèches suivantes <span class="ui-icon ui-icon-arrowthick-2-n-s"></span> votre choix de formation.</p>
			<p><i>(Le premier étant le plus important)</i></p>
			<!--formulaire priorités et niveaux-->
			<ul id="sortable">
				<?php
				global $wpdb;
   				$nom_table = 'categories';
   				$requete = "SELECT * FROM  $nom_table ORDER BY Pos DESC";
				$wpdb->show_errors;
   				$rows = $wpdb->get_results( $requete );
				$i=0;
				//$requete->data_seek(0);
				foreach ($rows as $row) {
					$i++;
				?>
				<li>
					<span class="ui-icon ui-icon-arrowthick-2-n-s"></span>
			    	<input type="text" name="Categorie[<?php echo $i;?>][id]" value="<?php echo $row->id;?>"/>
			    	<input type="text" name="Categorie[<?php echo $i;?>][cat]" value="<?php echo $row->cat;?>"/>
			    	<input type="text" name="Categorie[<?php echo $i;?>][mail]" value="<?php echo isset($data['mail']) ? $data['mail'] : '';?>"/>
			    	<input type="text" class="positionInput" name="Categorie[<?php echo $i;?>][Pos]" value="<?php echo $row->Pos;?>"/>
			    	<span>0</span>
			    	<input type="range" id="custom-handle" class="ui-slider-handle" name="Categorie[<?php echo $i;?>][level]" min="0" max="10" step="1" value="<?php echo $row->level;?>"/>
			    	<span>10</span>
				</li>
				<?php
				};
				?>
				</ul>&nbsp;
				<?php
				
				?>			
			<div class="widget">
		    	<button id="opener" class="ui-button ui-widget ui-corner-all" type="submit"><?php echo $txtBtn2 ?></button>
			</div>
		</form>
			</div>
        </div>
	</div>
<?php if (have_posts()) :
    while (have_posts()) : the_post(); ?>
      <div class="post">        
        <div class="post-content">
        	Le contenu <?php the_content();?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>  
</div>
<?php get_footer(); ?>
