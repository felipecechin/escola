<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once './Class/Aluno.class.php';
        require_once './Class/Turma.class.php';

        $a1 = new Aluno('Felipe', 'Avenida Dores', 16);
        $a2 = new Aluno('Fernando', 'Avenida Dores', 15);
        $t1 = new Turma(433, 'Fábio');
        $a1->matricularAluno($t1);
        $a2->matricularAluno($t1);
        $t1->mostraDados();
        ?>
    </body>
</html>
