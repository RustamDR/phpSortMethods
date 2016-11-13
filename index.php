<?php

use lib\sort;

spl_autoload_register(function ($class) {
  include str_replace('\\', '/', $class) . '.php';
});

$size = 100;
$arr = array_fill(0, $size, 0);

for ($i = 0; $i < $size; $i++) {
  $arr[$i] = rand(0, $size);
}

$sort = new sort\Sort(sort\Shell::create($arr));

$sort->sort()->printResult();