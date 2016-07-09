<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Aluno
 *
 * @author Felipe
 */
class Aluno {

    private $nome, $endereco, $idade;
    public $turma;

    function __construct($nome, $endereco, $idade) {
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->idade = $idade;
    }

    function matricularAluno($turma) {
        $this->turma = (object) $turma;
        $this->turma->adicionarAluno();
    }

    function getNome() {
        return $this->nome;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getIdade() {
        return $this->idade;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function mostraDados() {
        echo 'Informações do aluno ' . $this->getNome();
        echo '<br>';
        echo 'Endereço: ' . $this->getEndereco();
        echo '<br>';
        echo 'Idade: ' . $this->getIdade();
        echo '<br>';
        if ($this->turma == null) {
            echo 'Sem turma matriculada para o aluno ainda.';
        } else {
            echo 'Turma matriculada: ' . $this->turma->getNumTurma();
        }
        echo '<br>';
    }

}
