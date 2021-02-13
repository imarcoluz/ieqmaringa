<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Ieq\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

    // -- Testes iniciais e de banco
	//echo "OK";
	//$sql = new Ieq\DB\Sql();
	//$results = $sql->select("select * from city");
	//echo json_encode($results);

});

$app->run();

 ?>