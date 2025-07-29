<?php
/**
 * Exercício proposto:
 * Crie uma classe chamada "Venda" com os atributos privados "data", "produto", "quantidade" e "valorTotal".
 * Crie um método capaz de exibir os dados da venda. Crie uma instância da classe e passe os atributos através
 * de um método construtor, em sequiga, invoque o método responsável por exibir o conteúdo da venda devidamente
 * formatado.
 */
class Venda {
  private $data;
  private $produto;
  private $quantidade;
  private $valorTotal;

  public function __construct($data, $produto, $quantidade, $valorTotal) {
    $this->data = $data;
    $this->produto = $produto;
    $this->quantidade = $quantidade;
    $this->valorTotal = $valorTotal;
  }

  public function obterVenda() {
    return 'No dia ' . $this->data . ' foram vendidos ' . $this->quantidade . ' ' . $this->produto . ' no valor total de R$ ' . $this->valorTotal;
  }
}

$venda = new Venda('20/12/2020', 'Cupcake', 3, 21.00);

echo $venda->obterVenda();
