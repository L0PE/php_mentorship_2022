<?php

use Patterns\Composite\FileSystem;

require '../../vendor/autoload.php';

$srcDirectory = new FileSystem\Directory('src');

$file1 = new FileSystem\File('file1.txt', 134);
$file2 = new FileSystem\File('file2.txt', 23428);
$directory1 = new FileSystem\Directory('directory1');
$directory1->add($file1);
$directory1->add($file2);
$file3 = new FileSystem\File('file3.txt', 23428);
$srcDirectory->add($file3);
$srcDirectory->add($directory1);

echo '<pre>';
print_r($srcDirectory->listContent());

$srcDirectory->remove($file3);

echo '<br><hr><br>';
print_r($srcDirectory->listContent());
