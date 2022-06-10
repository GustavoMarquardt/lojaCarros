<?php       

    namespace Classes;

    use Classes\Vendedor;
        class Carro{

            private string $marca;
            private string $modelo;
            private int $preco;
            private string $placa;
            private string $dataCompra;
            private  $vendedor;

            public function __construct(string $marca, string $modelo, int $preco, string $placa, string $dataCompra){
                $this->marca = $marca;
                $this->modelo = $modelo;
                $this->preco = $preco;
                $this->placa = $placa;
                $this->dataCompra = $dataCompra;
                $this->vendedor = '';
            }

            private function adicinaCarroEstoque(){
                echo "Carro adicionado ao estoque";
            }

            // gets
            public function pegaMarca(){
                return $this->marca;
            }

            public function pegaModelo(){
                return $this->modelo;
            }

            public function pegaPreco(){
                return $this->preco;
            }

            public function pegaPlaca(){
                return $this->placa;
            }

            public function adicionaVendedor(Vendedor $vendedor){
                $this->vendedor = $vendedor;

            }

        }