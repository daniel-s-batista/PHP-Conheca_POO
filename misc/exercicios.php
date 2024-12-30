<?php 

class ContaBancaria {
    public function __construct(
        protected float $saldo,
    ) {
        
    }

    public function sacar(float $valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= $valor;
        }
    }

    public function depositar(float $valor) {
        if ($valor >= 0)
            $this->saldo += $valor;
    }

    public function consultar() {
        return $this->saldo;
    }
}

class ContaCorrente extends ContaBancaria {
    private const TAXA_SAQUE = 0.005;
    private const TARIFA_MENSAL = 500;

    public function cobrarTarifaMensal() {
        $this->saldo -= self::TARIFA_MENSAL;
    }

    #[Override]
    public function sacar(float $valor) {
        if ($valor > 0 && $this->saldo >= $valor) {
            $this->saldo -= ($valor * (1 + self::TAXA_SAQUE));
        }
    }
}