<?php  

use PHPUnit\Framework\TestCase;
use App\Item;

class ItemTest extends TestCase {

    public function testIfCanCreateItem() {

        $item = new Item("Notebook", 400);

        $this->assertEquals("Notebook", $item->getName());
    }

    public function testIfAmountIsNumeric() {

        $item = new Item("Notebook", 400);

        $this->assertIsNumeric($item->getPrice());
    }

}