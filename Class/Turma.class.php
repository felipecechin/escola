<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Professor
 *
 * @author Felipe
 */
class Turma {

    private $numTurma, $qntdAlunos, $professor;

    function __construct($numTurma, $professor) {
        $this->numTurma = $numTurma;
        $this->qntdAlunos = 0;
        $this->professor = $professor;
    }

    function adicionarAluno() {
        $this->qntdAlunos +=1;
    }

    function getNumTurma() {
        return $this->numTurma;
    }

    function getQntdAlunos() {
        return $this->qntdAlunos;
    }

    function getProfessor() {
        return $this->professor;
    }

    function mostraDados() {
        echo 'Informações da turma ' . $this->getNumTurma();
        echo '<br>';
        echo 'Quantidade de alunos na turma: ' . $this->getQntdAlunos();
        echo '<br>';
        echo 'Professor: ' . $this->getProfessor();
        echo '<br>';
    }

}
