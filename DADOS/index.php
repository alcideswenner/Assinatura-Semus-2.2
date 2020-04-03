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
        include_once './AssinaturaDAO.php';
        include_once './Assinatura.php';
        if (AssinaturaDAO::Conexao() != null) {
            echo "certo";
        }

        $a = new Assinatura();
        $a->setCod(AssinaturaDAO::geraCodigo());
        $a->setData("1");
        $a->setHorario("11");
        $a->setTitulo("11");
        $a->setAssinatura("1");
        $a->setDoc("1");
        AssinaturaDAO::salva($a);
        //AssinaturaDAO::retornaUltimoCodigo();
        ?>
    </body>
</html>
