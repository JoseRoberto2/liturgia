<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Leituras
 *
 * @author Roberto
 */
class Leituras {
    //put your code here
    var $ano;
    var $mes;
    var $dia;
    var $url;
    
    private function __construct() {
        $this->ano = '2019';
        $this->mes = '01';
        $this->dia = '17';
        $this->url = 'http://liturgiadiaria.cnbb.org.br/app/user/user/UserView.php?ano=';
    }
    
    
    public function getHTML(){ 
       $this->url = $this->url.$this->ano.'&mes='.$this->mes.'&dia='.$this->dia;    
        
       $site = file_get_contents($this->url);
       
    }
   
    public function leitura (){
        
    } 
}
