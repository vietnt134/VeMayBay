<?php
/**
 *
 */
class View {

	function __construct() {

	}

	public function render($name, $noInclude = false) {
		if ($noInclude == TRUE) {
			require 'Views/' . $name . '.php';
		} else {
			require 'Views/header_admin.php';
			require 'Views/' . $name . '.php';
			require 'Views/footer_admin.php';
		}

	}

}
