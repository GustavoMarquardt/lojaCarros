<?php

    include_once 'autoload.php';

    use Classes\Carro;
    use Classes\Parque;
    use Classes\Vendedor;

    $parque = new Parque();
    $gustavo = new Vendedor('Gustavo'); 
    $nicolas = new Vendedor('Nicolas');

    $supra = new Carro('Toyota', 'Supra', 1000000, 'SUT-9999','10/10/2020');
    $parque->adicionaCarro($supra);

    $silvia15 = new Carro('Nissan', 'Silvia', 150000, 'SIL-9999','10/10/2020');
    $parque->adicionaCarro($silvia15);
    
    $gtr_r34 = new Carro('Nissan', 'GTR', 340000, 'GTR-9999','10/10/2020');
    $parque->adicionaCarro($gtr_r34);


    $gustavo->vendaFeira($parque, $supra);
    $gustavo->vendaFeira($parque, $silvia15);
    $nicolas->vendaFeira($parque, $gtr_r34);
    
    var_dump($parque->maisVendas());
