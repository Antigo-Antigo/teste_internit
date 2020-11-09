<?php

include_once "src/visao/controle/controle_visao.php";

if( $usuario['IdTipoUsuario'] != 2 ){ header("location:index.php"); }


include_once "src/visao/admin_usuarios/controle.php";


include_once "src/visao/header/1.php";

include_once "src/visao/header/2.php";



include_once "src/visao/menu/menu_lateral/1.php";

include_once "src/visao/menu/menu_top/1.php";

include_once "src/visao/menu/menu_top/2.php";




include_once "src/visao/admin_usuarios/1.php";

include_once "src/visao/admin_usuarios/modal_cadastrar.php";





include_once "src/visao/modal_eu/1.php";

include_once "src/visao/footer/1.php";

include_once "src/visao/footer/2.php";

?>