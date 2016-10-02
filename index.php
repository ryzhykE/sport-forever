<?php

require __DIR__ .'/autoload.php';

use App\Controllers\RouteController;

set_include_path(get_include_path()
				.PATH_SEPARATOR.'app/Controllers'
				);

	$obj = RouteController::instasnce();
	$obj->route();
?>