<?php
$splDoubleLinkedList = new SplDoublyLinkedList();

$splDoubleLinkedList->unshift(1);
$splDoubleLinkedList->unshift(2);
$splDoubleLinkedList->unshift(3);
$splDoubleLinkedList->unshift(4);

$splDoubleLinkedList->rewind();

for ($splDoubleLinkedList->rewind(); $splDoubleLinkedList->valid(); $splDoubleLinkedList->next()) {

    echo $splDoubleLinkedList->current() . PHP_EOL;
}
