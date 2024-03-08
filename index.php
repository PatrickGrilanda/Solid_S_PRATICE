<?php 

require __DIR__ . '/vendor/autoload.php';

//cria um item
$item = new App\Item('Cadeira', 200);

//cria um carrinho de compras
$cart = new App\CarrinhoCompra();

//adiciona o item ao carrinho
$cart->getItens()->addItem($item);

//cria um pedido
$order = new App\Pedido($cart);

//remove o item do carrinho
$order->getCart()->removeItem($item);

//se o pedido foi confirmado, envia um email
if($order->confirmOrder()) {
    $mail = new App\Mail("joaquim.lira@teste.com.br", "Pedido confirmado", "Seu pedido foi confirmado");

    $mail->send();
} else {
    echo "Pedido não confirmado";
}