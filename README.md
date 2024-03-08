# Carrinho de Compras - Prática do Princípio SOLID "S"

Este projeto é uma implementação de um carrinho de compras desenvolvido com o objetivo de praticar e demonstrar a aplicação do princípio da Responsabilidade Única (Single Responsibility Principle - SRP), que é o primeiro dos cinco princípios SOLID de design de software orientado a objetos.

## Sobre o Princípio da Responsabilidade Única (SRP)

O Princípio da Responsabilidade Única afirma que uma classe deve ter apenas um motivo para mudar. Isso significa que cada classe deve ser responsável por apenas uma parte da funcionalidade do software, reduzindo assim a complexidade e melhorando a manutenção do código.

## Funcionalidades do Projeto

- **Adicionar Item**: Permite adicionar produtos ao carrinho de compras, especificando a quantidade e detalhes do produto.
- **Remover Item**: Possibilita a remoção de itens previamente adicionados ao carrinho.
- **Listar Itens**: Exibe todos os itens presentes no carrinho, juntamente com suas quantidades e preços.
- **Confirmar Pedido**: Valida se tem itens no carrinho, altera o status do pedido e retorna um booleano.
- **Enviar email**: Recebe os parâmetros to, subject, e message e retorna uma string confirmando que o email foi enviado.

## Tecnologias Utilizadas

- Linguagem de Programação: PHP

## Como Executar o Projeto

1. Clone o repositório:
2. **Configure o servidor web** (Apache/Nginx) para apontar para a pasta do projeto ou utilize o servidor embutido do PHP:
3. **Acesse o projeto** através do navegador, indo para `http://localhost:8000`.

## Contribuições

Contribuições para o projeto são bem-vindas! Seja para corrigir um bug, adicionar novas funcionalidades ou melhorar a documentação, sinta-se à vontade para criar um pull request.


Desenvolvido por Patrick Grilanda como uma prática para aprofundar o conhecimento nos princípios SOLID, com foco no Princípio da Responsabilidade Única, usando PHP.
