<?php

include 'ArrayList.php';
$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(8);
$listInteger->add(6);
$listInteger->add(0);

echo $listInteger->get(2);
//$listInteger->remove(0);
print_r($listInteger->toArray());
$listInteger->sort();
print_r($listInteger->toArray()) ;
