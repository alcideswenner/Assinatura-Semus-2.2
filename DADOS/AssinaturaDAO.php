<?php

class AssinaturaDAO {

    private static $con;

    public static function Conexao() {
        try {
            self::$con = mysqli_connect("localhost", "root", "", "assinatura");
            return self::$con;
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    public static function close() {
        return mysqli_close(AssinaturaDAO::Conexao());
    }

    public static function salva(Assinatura $s) {
        try {
            $sql = "INSERT INTO assinatura values('" . $s->getCod() . "',"
                    . "'" . $s->getData() . "','" . $s->getHorario() . "',"
                    . "'" . $s->getTitulo() . "','" . $s->getAssinatura() . "','" . $s->getDoc() . "')";
            if (mysqli_query(AssinaturaDAO::Conexao(), $sql) == TRUE) {
                echo "<script>alert('SALVO COM SUCESSO!')</script>";
            } else {
                echo "<script>alert('ERRO AO SALVAR')</script>";
            }
        } catch (Exception $ex) {
            echo $ex->getMessage();
        } finally {
            self::close();
        }
    }

    public static function geraCodigo() {
        if (self::retornaUltimoCodigo() == "") {
            $ano = date("Y");
            return (int) "01" + $ano;
        }else{
             $ano = date("Y");
            return (int) self::retornaUltimoCodigo() + $ano;
        }
    }

    public static function retornaUltimoCodigo() {
        $sql = "select cod from assinatura ORDER BY cod DESC LIMIT 1";
        $rs = mysqli_query(AssinaturaDAO::Conexao(), $sql);
        while ($next = mysqli_fetch_assoc($rs)) {
            echo $next["cod"];
        }
    }

}
