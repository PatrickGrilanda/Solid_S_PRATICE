<?php 

require __DIR__ . '/vendor/autoload.php';


$carrinho = new App\CarrinhoCompra();

$carrinho->addItens('Notebook', 1500);
$carrinho->addItens('Mouse', 100);
$carrinho->addItens('Teclado', 200);

echo "Itens: ".PHP_EOL;
echo $carrinho->debug($carrinho->showItens()); 

echo "Total: ".PHP_EOL; 
echo $carrinho->debug($carrinho->getTotal());

echo "Status: ".PHP_EOL;
echo $carrinho->debug($carrinho->getStatus());

$carrinho->removeItens('Mouse');
$carrinho->removeItens('Notebook');
//$carrinho->removeItens('Teclado');

echo "Itens: ".PHP_EOL;
echo $carrinho->debug($carrinho->showItens());

try{
    $carrinho->confirmOrder();
} catch(\Exception $e){
    echo "Erro: ".PHP_EOL;
    echo $e->getMessage();
}

$carrinho->dispatchEmail();

echo "Status: ".PHP_EOL;
echo $carrinho->debug($carrinho->getStatus());

