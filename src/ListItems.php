<?php

namespace App;
use SplDoublyLinkedList;

class ListItems extends SplDoublyLinkedList
{
    public function addItem(Item $item)
    {
        $this->push($item);
    }

    public function removeItem(Item $item)
    {
        $this->pop();
    }
}
