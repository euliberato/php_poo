<?php
class contaBanco{

    public $conta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrir($tipo){
       $this->setTipo($tipo);
       $this->setStatus(true);
       if($tipo == 'CC'){
            $this->setSaldo(50);
       }elseif($tipo == 'CP'){
            $this->setSaldo(150);
       }

    }

    public function fechar(){
        if($this->getSaldo() > 0){
            echo "<p>Conta ainda possui dinheiro</p>";
        }elseif($this->getSaldo() < 0){
            echo "<p>Conta está em débito</p>";
        }else{
            $this->setStatus(false);
        }
    }

    public function depositar($valor){
        if($this->getStatus() == true){
            $this->setSaldo($this->getSaldo() + $valor);
        }else{
            echo "<p>Conta fechada. Não possivel depositar</p>";
        }
    }

    public function sacar($valor){
        if($this->getStatus() == true){
            if($this->getSaldo() > $valor){
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de $valor autorizado na conta de " . $this->getDono() . "</p>";
            }else{
                echo "<p>Saldo insuficiente para saque</p>";
            }
        }else {
            echo "<p>Conta esta fechada</p>";
        }

    }

    public function pagar(){

       if($this->getTipo() == 'CC'){
            $valor = 12;
       }elseif($this->getTipo() == 'CP'){
            $valor = 20;
       }

       if($this->getStatus()){
            $this->setSaldo($this->getSaldo() - $valor);

       }else{
            echo "<p>Problemas com a conta. Não posso cobrar</p>";
       }

    }

    function __construct($saldo = 0, $status = false){
        $this->saldo = 0;
        $this->status = FALSE;
        echo "<p>Construido com sucesso!</p>";
    }

    public function getConta(){
        return $this->conta;
    }
    public function setConta($valConta){
        $this->conta = $valConta;
    }

    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($valTipo){
        $this->tipo = $valTipo;
    }

    public function getDono(){
        return $this->dono;
    }
    public function setDono($valDono){
        $this->dono = $valDono;
    }

    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($valSaldo){
        $this->saldo = $valSaldo;
    }

    public function getStatus(){
        return $this->status;
    }
    public function setStatus($valStatus){
        $this->status = $valStatus;
    }

}

?>