<?php
# @Date:   2018-06-19T10:10:28+02:00
# @Last modified time: 2018-06-19T10:28:56+02:00

require 'Avatar.php';
require 'AvatarManager.php';

$monster = new Avatar ([
  'name' => 'Gobbal',
  'life' => 100,
  'dammage' => 3,
  'level' => 1,
  'experience' => 0
]);

$db = new PDO('mysql:host=localhost;dbname=rpgdb', 'root', '');
$manager = new AvatarManager($db);

$manager->add($monster);

var_dump($monster->life());
