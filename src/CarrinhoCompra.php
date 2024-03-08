<?php

declare(strict_types=1);

namespace App;

class CarrinhoCompra
{
   public function __construct(
    private ListItems $itens = new ListItems()
   ){}

   public function getItens(): ListItems {
    return $this->itens;
   }

   public function addItem(Item $item): void {
    $this->itens->addItem($item);
   }

   public function removeItem(Item $item): void {
    $this->itens->removeItem($item);
   }

   public function verifyCart(): bool
   {
    return $this->itens->count() > 0;
   }
}
