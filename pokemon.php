<?php

class Pokemon{
    public $nome;
    public $tipo;
    public $xp;
    public $pv;
    public $ataque;
    public $defesa;
    public $velocidade;
    public $lv;

    function __construct($nome, $tipo, $pv, $ataque, $defesa, $velocidade)
    {
     $this->nome = $nome;
     $this->tipo = $tipo;
     $this->xp = 120;
     $this->pv = $pv;
     $this->ataque = $ataque;
     $this->defesa = $defesa;
     $this->velocidade = $velocidade;
     $this->lv = 1;
    }
   
    function batalhar(){
        if (rand(1,100) > 50) {
            print "Você VENCEU!!!!";
            print $this->nome . " recebeu " . $this->aumentar_xp() . "XP\n";
            print "Ganhou " . $this->aumentar_nivel() . " level";
            print "Aumentou PV para " . $this->aumentar_pv() . "PV" ;

        }
        else{
            print "Você PERDEU!!!";
        }
    }

    function aumentar_nivel(){
       if($this->lv =! ($this->xp / 120));
        return $this->lv++;
    }

    function aumentar_pv(){
        return $this->pv *= ($this->pv * 0.10);
    }

    function aumentar_xp(){
        return $this->xp +=120;
    }

    function ver_atributos(){
    
    }
}

$pokemon = new Pokemon("Totodile", "Água", 50, 65, 64, 43);
$pokemon2 = new Pokemon("Shedinja", "Inseto/Fantasma", 1, 90, 45, 40);

        while (true) {
            print "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n";
            print "          Batalha iniciada\n";
            print "Opções:\n\n";
            print "1.Lutar   |  2.Meus Pokémon  |  3.Fugir\n";
            print "~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n\n";

            $opcao = readline();

            switch ($opcao) {
                case 1:
                    print "Selecione um Pokémon
                    1. $pokemon->nome  |  2. $pokemon->nome ";

                    $opcao = readline();

                    switch ($opcao) {
                        case 1:
                            $pokemon -> batalhar();
                            break;
                        case 2:
                            $pokemon2 -> batalhar();
                        
                        default:
                            print "Pokémon não disponível";
                            break;
                    }
                    break;
                case 3:
                    print "\033c";
                    print "Você FUGIU\n";
                    die;

                default:
                    print "Opção Indisponível";
                    break;
            }
        }


