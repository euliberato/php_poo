<?php

class Lutador{

    private $nome, $nacionalidade, $idade, $altura, $peso, $categoria, $vitorias, $derrotas, $empates;

    //metodos
    function apresentar(){

        echo "<p>Lutador: " . $this->getNome() . "</p>";
        echo "<p>Origem: " . $this->getNacionalidade(). "</p>";
        echo "<p>Idade: " . $this->getIdade(). "</p>";
        echo "<p>Altura: " . $this->getAltura(). "</p>";
        echo "<p>Peso: " . $this->getPeso(). "</p>";
        echo "<p>Vitorias: " . $this->getVitorias(). "</p>";
        echo "<p>Derrotas: " . $this->getDerrotas(). "</p>";
        echo "<p>Empates: " . $this->getEmpates(). "</p>";
    }

    function status(){
        echo "<p>Lutador: " . $this->getNome() . "</p>";
        echo "<p>é um peso " . $this->getCategoria() . "</p>";
        echo "<p>" . $this->getVitorias() . " vitórias </p>";
        echo "<p>" . $this->getDerrotas() . " derrotas </p>";
        echo "<p>" . $this->getEmpates() . " empates </p>";
    }

    function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }

    function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }

    //construtor
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em){

        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;

    }

    //getters
    function getNome(){
        return $this->nome;
    }

    function getNacionalidade(){
        return $this->nacionalidade;
    }

    function getIdade(){
        return $this->idade;
    }

    function getAltura(){
        return $this->altura;
    }

    function getPeso(){
        return $this->peso;
    }

    function getCategoria(){
        return $this->categoria;
    }

    function getVitorias(){
        return $this->vitorias;
    }

    function getDerrotas(){
        return $this->derrotas;
    }

    function getEmpates(){
        return $this->empates;
    }

    //setters
    function setNome($nome){
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade){
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade){
        $this->idade = $idade;
    }

    function setAltura($altura){
        $this->altura = $altura;
    }

    function setPeso($peso){
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria(){

        if($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Inválido";
        }

    }

    function setVitorias($vitorias){
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas){
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates){
        $this->empates = $empates;
    }


}

?>