<?php

require "vendor/autoload.php";

use Illuminate\Database\Capsule\Manager as DB;

$db = new DB;
$db->addConnection([
    'driver'    => 'mysql',
    'database'  => 'consoles',
    'username'  => 'root',
    'password'  => '',
    'host'      => 'localhost',
    'charset'   => 'latin1',
    'collation' => 'latin1_swedish_ci',
    'prefix'    => ''
]);
$db->setAsGlobal();

$consoles = [
	["name" => "Playstation 3   ", "image" => "https://images-na.ssl-images-amazon.com/images/G/01/videogames/detail-page/B004XABXY0.04.lg.jpg"],
	["name" => " Xbox 360 ", "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Microsoft-Xbox-360-E-wController.jpg/220px-Microsoft-Xbox-360-E-wController.jpg"],
	["name" => "     Nintendo Wii ", "image" => "https://tctechcrunch2011.files.wordpress.com/2013/01/nintendowii.gif?w=440&h=330&crop=1"]
];

?>