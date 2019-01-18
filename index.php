<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$ano = '2019';
$mes = '01';
$dia = '17';

$url = 'http://liturgiadiaria.cnbb.org.br/app/user/user/UserView.php?ano='.$ano.'&mes='.$mes.'&dia='.$dia;

echo $url;

$site = file_get_contents($url);

$info = explode('<h3 class="title-leitura">', $site);
$leitura2 = explode('</h3>', $pego[1]);




echo $pego2[0];



?>
