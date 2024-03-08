<?php 

require __DIR__ . '/vendor/autoload.php';

//cria um itens
$item = new App\Item('Cadeira', 200);
$item2 = new App\Item('Mesa', 300);

//cria um carrinho de compras
$cart = new App\CarrinhoCompra();

//adiciona o item ao carrinho
$cart->getItens()->addItem($item);
$cart->getItens()->addItem($item2);

//cria um pedido
$order = new App\Pedido($cart);

//remove o item do carrinho
$order->getCart()->removeItem($item);

echo '<pre>';
print_r($order);
echo'</pre>';

//se o pedido foi confirmado, envia um email
if($order->confirmOrder()) {
    $mail = new App\Mail("joaquim.lira@teste.com.br", "Pedido confirmado", "Seu pedido foi confirmado");

    $mail->send();
} else {
    echo "Pedido não confirmado";
}