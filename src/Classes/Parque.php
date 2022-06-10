<?php

    namespace Classes;

    class Parque {

        private $ListaEstoque = [];
        private $ListaTotalVendas = [];
        private $ListaEmRevisao = [];
        private $ListaEsperaRevisao = [];

        public function __construct() {
            $this->estoque = [];
            $this->totalVendas = [];
            $this->revisao = [];
        }

        public function indoRevisao(){
            var_dump($this->$ListaEsperaRevisao);
        }

        // adiciona carros as listas 
        public function adicionaCarro(Carro $carro) {
            $this->estoque[] = $carro;
        }

        public function vendeCarro(Carro $carro) {
            $this->totalVendas[] = $carro;
        }

        public function filaRevisao(Carro $carro) {
            $this->revisao[] = $carro;
        }

        // Methodos get
        public function pegaEstoque() {
            return $this->estoque;
        }

        public function pegaTotalVendas() {
            return $this->totalVendas;
        }

        public function pegaRevisao() {
            return $this->revisao;
        }

        public function maisVendas(){
           $lista =  $this->pegaTotalVendas();
            

        }
    }