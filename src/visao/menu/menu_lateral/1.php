<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<?php if( $usuario['IdTipoUsuario'] == 2 ){ ?>  


        <!-- Inicio menu lateral -->
        <div class="sidebar-menu">
            
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                </div>
            </div>

            <div class="main-menu">

                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                    
                            <li>
                                <a href="index.php">
                                    <i class="ti-dashboard"></i> 
                                    <span>Home</span>
                                </a>
                            </li>
                            
                            <li>
                                <a href="lista_noticias.php">
                                    <i class="fa fa-align-right"></i> 
                                    <span>Lista Noticias</span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="javascript:void(0)" aria-expanded="true">
                                    <i class="fa fa-align-left"></i> 
                                    <span>Modulo Administrativo</span>
                                </a>

                                <ul class="collapse">
                                    
                                    <li>
                                        <a href="admin_noticias.php">Modulo Notícias</a>
                                    </li>
                                    
                                    <li>
                                        <a href="admin_usuarios.php">Modulo Usuarios</a>
                                    </li>
                                    
                                </ul>

                            </li>
                        <!-- Inicio menu lateral -->


                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Fim menu lateral -->

<?php }  ?>

<!-- ##################################################################################### -->
<!-- ##################################################################################### -->
<!-- Inicio conteiner corpo pagina, finaliza no arquivo footer-->
<div class="main-content">
<!-- ##################################################################################### -->
<!-- ##################################################################################### -->