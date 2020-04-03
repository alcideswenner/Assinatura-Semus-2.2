<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Assinatura
 *
 * @author alcid
 */
class Assinatura {

    private $cod;
    private $data;
    private $horario;
    private $titulo;
    private $assinatura;
    private $doc;

   
    function getCod() {
        return $this->cod;
    }

    function getData() {
        return $this->data;
    }

    function getHorario() {
        return $this->horario;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAssinatura() {
        return $this->assinatura;
    }

    function getDoc() {
        return $this->doc;
    }

    function setCod($cod): void {
        $this->cod = $cod;
    }

    function setData($data): void {
        $this->data = $data;
    }

    function setHorario($horario): void {
        $this->horario = $horario;
    }

    function setTitulo($titulo): void {
        $this->titulo = $titulo;
    }

    function setAssinatura($assinatura): void {
        $this->assinatura = $assinatura;
    }

    function setDoc($doc): void {
        $this->doc = $doc;
    }

}
