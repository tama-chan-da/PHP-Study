<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30, 0);
$subWeapon = new Gun("Mosin-Nagant", 5, 0);

// 現在の状態を表示
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->relaod();
$subWeapon->relaod();
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->fire();
$subWeapon->fire();
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->setExtendedMagazine(10);
$subWeapon->setExtendedMagazine(10);
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->unsetExtendedMagazine();
$subWeapon->unsetExtendedMagazine();
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
$mainWeapon->setExtendedMagazine(10);
$subWeapon->setExtendedMagazine(10);
$mainWeapon->echoStatus();
$subWeapon->echoStatus();
