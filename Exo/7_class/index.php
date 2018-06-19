<?php
# @Date:   2018-06-14T09:17:28+02:00
# @Last modified time: 2018-06-14T10:50:06+02:00


function chargeClass($class)
{
  require $class . '.php';
}

spl_autoload_register('chargeClass');

$avatar = new Avatar(Avatar::HIGH_DAMMAGE);
$avatar::speak();
$avatar->showExperience();
$avatar->gainExperience();
$avatar->showExperience();

$monster = new Avatar(Avatar::LOW_DAMMAGE);
$monster->showLife();
$avatar->hit($monster);
$monster->showLife();

$avatar->setDammage();
$avatar->showDammage();
$monster->showDammage();
