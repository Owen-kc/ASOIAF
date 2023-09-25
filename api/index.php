<?php
require 'Slim/Slim.php';
require 'character_db.php';
require 'database.php';
use Slim\Slim;
\Slim\Slim::registerAutoloader();

$app = new Slim();
$app->get('/characters', 'getCharacters');
$app->get('/characters/:id',  'getCharacter');
$app->get('/characters/search/:query', 'findByName');
$app->post('/characters', 'addCharacter');
$app->delete('/characters/:id',	'deleteCharacter');
$app->put('/characters/:id', 'updateCharacter');
$app->run();
?>



