<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	//echo "OK";
	$sql = new Ieq\DB\Sql();

	$results = $sql->select("select * from city");

	echo json_encode($results);

});

$app->run();

 ?>