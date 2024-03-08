<?php

namespace App;

class Pedido
{
    public function __construct(
        private CarrinhoCompra $cart,
        private string $status = 'aberto',
    ){}

    public function getCart(): CarrinhoCompra
    {
        return $this->cart;
    }

    public function confirmOrder(): bool
    {
        if($this->cart->verifyCart() !== false) {
           $this->status = 'confirmado';

           return true;
        }
        
        return false;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}
