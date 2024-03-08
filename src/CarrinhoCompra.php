<?php

declare(strict_types=1);

namespace App;

class CarrinhoCompra implements Debug
{
    //attributes    
    public function __construct(       
        private float $total = 0,
        private string $status = 'Aberto',
        private array $itens = []
    ){}
    
    public function debug($property){
        return '<pre>' . print_r($property, true) . '</pre>';
    }

    //methods
    public function showItens(): array
    {
        return $this->itens;
    }

    public function addItens(string $item, float $price): void
    {
        $this->itens[] = [
            'item' => $item,
            'price' => $price
        ];
        $this->total += $price;
    }

    public function removeItens(string $item): void
    {
        foreach($this->itens as $key => $value){
            if($value['item'] === $item){
                $this->total -= $value['price'];
                unset($this->itens[$key]);
            }
        }
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function confirmOrder(): void
    {

        if($this->verifyValidCart() === false){
            throw new \Exception('Carrinho vazio');
        }

        $this->status = 'Confirmado';
    }

    public function dispatchEmail(): void
    {
        echo "Email enviado" . PHP_EOL;
    }

    public function verifyValidCart(): bool {
        return count($this->itens) > 0;
    }
}
