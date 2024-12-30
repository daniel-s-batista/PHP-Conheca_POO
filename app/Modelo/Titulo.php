<?php

class Titulo {
    private array $notas;

    public function __construct(public readonly string $nome, 
                                public readonly int $anoLancamento, 
                                public readonly Genero $genero) {
        $this->notas = array();

        if ($this->notas != null) {
            foreach($this->notas as $nota) {
                $this->avalia($nota);
            }
        }
        $this->media();
    }

    function avalia(float $nota) : void {
        $this->notas[] = $nota;
    }

    function media() : float {
        if (count($this->notas) > 0) {
            $somaNotas = array_sum($this->notas);
            $qntdNotas = count($this->notas);
    
            return $somaNotas / $qntdNotas;
        }
        else return 0;
    }

    public function duracaoEmMinutos() : int {
        return 0;
    }
}