<?php

    namespace Classes;

    use Classes\Carro;
    use Classes\Parque;

    class Vendedor{
        private string $nome;

        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function pegaNome(){
            return $this->nome;
        }


        public function vendaFeira(Parque $parque, Carro $carro){
            $vendedor =  $this->pegaNome();
            $carroModelo = $carro->pegaModelo();
            if(in_array($carro, $parque->pegaEstoque()) == FALSE){
                $parque->vendaFeira($carro);
                echo "$vendedor tentou vender um carro que não existe", PHP_EOL;
            };
            $carro->adicionaVendedor($this);
            $parque->vendeCarro($carro);
            echo "$vendedor vendou um belo $carroModelo".PHP_EOL;
        }
    }