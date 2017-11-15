<?php
	function medicle_theme_mane(){
		register_nav_menus(array(
				'main_manu' => 'Main Menu',
				'footer_manu' => "Footer Manu"
			)

			);
	}
	add_action('init','medicle_theme_mane');

?>