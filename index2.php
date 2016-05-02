<?php

require "vendor/autoload.php";

$consoles = [
	["name" => "Playstation 3   ", "image" => "https://images-na.ssl-images-amazon.com/images/G/01/videogames/detail-page/B004XABXY0.04.lg.jpg", "game" => "Uncharted 3"],
	["name" => " Xbox 360 ", "image" => "https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Microsoft-Xbox-360-E-wController.jpg/220px-Microsoft-Xbox-360-E-wController.jpg", "game" => "Halo 4" ],
	["name" => "     Nintendo Wii ", "image" => "https://tctechcrunch2011.files.wordpress.com/2013/01/nintendowii.gif?w=440&h=330&crop=1", "game" => "Wii sports"]
];

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

$db->schema()->dropIfExists('classics');

$db->schema()->create('classics', function ($table) {
    $table->string('name');
    $table->string('image');
    $table->string('game');
});

$db->table('classics')->insert($consoles);

$classics = $db->table('classics')->get();

foreach($classics as $classic) {
	print "<ul> <li style=display:inline;>";
	print "<h1>".$classic->name."</h1>";
	print "<h2>".$classic->game."</h2>";
	print "<img style=width:200px; height:200px; src=" . $classic->image . ">";
	print "</li> </ul>";
}
?>