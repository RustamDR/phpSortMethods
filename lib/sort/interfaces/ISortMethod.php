<?php
namespace lib\sort\interfaces;

interface ISortMethod
{
  public static function create($dataToSort = []);

  public function sort();

  public function getSortedArray();
}