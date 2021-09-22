<?php

    require_once('App/Template/template.html');
    require_once('App/Controller/HomeController.php');
    require_once('App/Controller/SobreController.php');
    require_once('App/Controller/ContatoController.php');
    require_once('App/Core/Core.php');
    

 $core = new Core;
 echo $core->start($_GET);
?>