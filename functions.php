<?php 



function view($path,$data = null)
{
	if ($data) {
		extract($data);
	}
	
	$path  = "views/{$path}.view.php";

	include 'views/layout.php';
}



// $view_file = 'views/single.view.php';

