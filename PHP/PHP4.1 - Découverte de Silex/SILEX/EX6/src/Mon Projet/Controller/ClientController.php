<?php

namespace MonProjet\Controller;

class ClientController {
	public function FunctionName(){
		$PATH = '../';
		$tab = "Client";
		$TITLE = $tab;
		$template = 'View/ClientPage.phtml';
		ob_start();

		include 'View/Layout.phtml';
		return ob_get_clean();
	}
}