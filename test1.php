<?php


namespace myT\mytest;

use bo\mytest\myApp;
use myPackageB\master1;
use myProjectA\mastertt;

include __DIR__."/vendor/autoload.php";

$a = myApp::abc();

$b = new mastertt();
$b->devtest();

$c = master1::test();
