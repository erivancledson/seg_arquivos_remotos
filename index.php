<?php
require 'header.php';
//abri a home
$p = 'home';
if(!empty($_GET['p'])){
  
       $pagina = $_GET['p'];
       //verifica se ele não achou ponto
       if(strpos($pagina, '.') === false){
           //verifica se o arquivo existe
           if(file_exists('paginas/'.$pagina.'.php')){
               $p = $pagina;
               
           }
       }
       
   }
   require 'paginas/'.$p.'.php';

require 'footer.php';