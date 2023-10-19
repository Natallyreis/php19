<?php

    include("php19/index1.php");

    $carro0 = new carro();

    
        $carro0->ano = "2018";
        $carro0->modelo = "320i";
        $carro0->cor = "Branco";
        $carro0->fabricante = "BMW";
        $carro0->status = "Disponivel";
    

    $carro1 = new carro();


    
        $carro1->ano = "2023";
        $carro1->modelo = "GranTurismo";
        $carro1->cor = "Cinza";
        $carro1->fabricante = "Maserati";
        $carro1->status = "Disponivel";
    


        $carro2 = new carro();
    
        $carro2->ano = "2022";
        $carro2->modelo = "Ferrari Roma";
        $carro2->cor = "Vermelha";
        $carro2->fabricante = "Ferrari";
        $carro2->status = "Disponivel";
    



        $carro3 = new carro();
    
        $carro3->ano = "2013";
        $carro3->modelo = "Veneno";
        $carro3->cor = "Prata";
        $carro3->fabricante = "Lamborghini";
        $carro3->status = "Indisponivel";
    


    echo "Carro ". $carro0->status . ": <br/><br/>";

       echo "Fabricante do carro: ". $carro0->fabricante . "<br />
                Modelo: ". $carro0->modelo . "<br />
                de Cor; ". $carro0->cor . "<br >
                Ano: ". $carro0->ano . "<<br /> <hr>";

    echo "Carro ". $carro1->status . ": <br/><br/>";

            echo "Fabricante do carro: ". $carro1->fabricante . "<br />
                    Modelo: ". $carro1->modelo . "<br />
                    de Cor; ". $carro1->cor . "<br >
                    Ano: ". $carro1->ano . "<<br /> <hr>";

    echo "Carro ". $carro2->status . ": <br/><br/>";

       echo "Fabricante do carro: ". $carro2->fabricante . "<br />
                Modelo: ". $carro2->modelo . "<br />
                de Cor; ". $carro2->cor . "<br >
                Ano: ". $carro2->ano . "<<br /> <hr>";

    echo "Carro ". $carro3->status . ": <br/><br/>";

                echo "Fabricante do carro: ". $carro3->fabricante . "<br />
                        Modelo: ". $carro3->modelo . "<br />
                        de Cor; ". $carro3->cor . "<br >
                        Ano: ". $carro3->ano . "<<br /> <hr>";
    ?>


