<?php  

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testIfNameIsString() {

        $item = new Item("Notebook", 400);

        $this->assertIsString($item->getName());
    }

    public function testIfAmountIsNumeric() {

        $item = new Item("Notebook", 400);

        $this->assertIsNumeric($item->getPrice());
    }

}