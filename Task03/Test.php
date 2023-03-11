<?php

use App\Book;
use App\BookList;

function runTest()
{
    $bl1 = new BookList(array());

    $b1 = new Book();
    $b1->setTitle("Пикник на обочине")
    ->setAuthors(array("братья Стругацкие"))
    ->setPublisher("Молодая гвардия")
    ->setYear(1972);
    echo $b1 . PHP_EOL;

    $bl1->add($b1);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    $b2 = new Book();
    $b2->setTitle("Трудно быть богом")
    ->setAuthors(array("А.Н. Стругацкий", "Б.Н. Стругацкий"))
    ->setPublisher("Акелла")
    ->setYear(1964);
    echo $b2 . PHP_EOL;

    $bl1->add($b2);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL;

    $b3 = new Book();
    $b3->setTitle("Песнь о море")
    ->setAuthors(array("Джон Керри", "Ханс Рин"))
    ->setPublisher("Astrel")
    ->setYear(2005);
    echo $b3 . PHP_EOL;

    $bl1->add($b3);
    echo "Количество книг в списке: " . $bl1->count() . PHP_EOL . PHP_EOL;

    $bl1->store("BookList");

    $bl2 = new BookList();
    $bl2->load("BookList");

    for ($i = 0; $i < $bl2->count(); $i++) {
        echo "Ожидается: " . $bl1->get($i)  . PHP_EOL;
        echo "Получено: " . $bl2->get($i) . PHP_EOL;
    }

    echo $bl2->count();
}
