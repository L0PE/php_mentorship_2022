<?php

use Patterns\Observer\Processor\FileProcessor;
use Patterns\Observer\Subscribers\LongestWordKeeper;
use Patterns\Observer\Subscribers\NumberCounter;
use Patterns\Observer\Subscribers\ReverseWord;
use Patterns\Observer\Subscribers\WordCounter;

require '../../vendor/autoload.php';

$processor = new FileProcessor();

$processor->subscribe(new WordCounter());
$processor->subscribe(new NumberCounter());
$processor->subscribe(new LongestWordKeeper());
$processor->subscribe(new ReverseWord());

$processor->process('C:\OpenServer\domains\php_mentorship_2022\src\patterns\observer\text.txt');

echo '<br><hr><br>';
echo 'Word count: ' . WordCounter::$wordCount;
echo '<br>';
echo 'Number count: ' . NumberCounter::$numberCount;
echo '<br>';
echo 'Longest word: ' . LongestWordKeeper::$word;
