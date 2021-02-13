<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "OK";
	$sql = new Ieqmaringa\DB\Sql();

	$results = $sql->select("SELECT * FROM world");

	echo json_encode($results);

});

$app->run();

 ?>