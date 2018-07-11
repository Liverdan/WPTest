<?php
/*Si besoin de créer une table avec le changement de theme
function testTable(){
	global $wpdb;
	$tablename=$wpdb->prefix."contacts";
	if ($wpdb->get_var("SHOW TABLES LIKE '$tablename'") != $tablename) {
			
		$sql = "CREATE TABLE `$tablename` ( 
			`id_contact` INT(2) NOT NULL AUTO_INCREMENT ,
			`lastname` VARCHAR(20) NOT NULL ,
			`firstname` VARCHAR(20) NOT NULL ,
			PRIMARY KEY (`id_contact`)) ENGINE = InnoDB;";
	}
	


require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );

dbDelta($sql);
}

add_action("after_switch_theme", "testTable");*/

// Récupération des données $_post depuis le formulaire présent dans monformulaire.php
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
			
		       
