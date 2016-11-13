<?php

namespace lib\sort;

class Sort
{
  protected $method;

  public function __construct(SortMethod $sortMethod)
  {
    $this->method = $sortMethod;
  }

  public function sort()
  {
    $this->method->run();

    return $this;
  }

  public function getSortedArray()
  {
    return $this->method->getSortedArray();
  }

  public function printResult()
  {
    printf("%-20s%-10s" . PHP_EOL . "%'=30s" . PHP_EOL, 'Время (с)', 'Итераций', '');
    printf('%-15f%-20d', $this->method->getTime(), $this->method->getIterationsCount());
  }
}