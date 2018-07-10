<?php
/*echo "coucou ".$now;
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

