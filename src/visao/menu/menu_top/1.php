<!-- header area start -->
<div class="header-area">

    <div class="row align-items-center">
                    
        <div class="col-7 col-sm-9 col-md-9 col-lg-6 col-xl-10 align-items-center">
            
            <?php if( $usuario['IdTipoUsuario'] == 2 ){ ?>  

                <div class="nav-btn pull-left">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            
            <?php } ?>

                <div class="">
                    <div class="logo">
                        <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                    </div>
                </div>
        </div>
<!-- ##################################################################################### -->

        <!-- profile info & task notification -->
        <div class="col-5 col-sm-3 col-md-3 col-lg-6 col-xl-2 align-items-center pull-right">
            
            <div class="ui teal buttons">
                <div class="ui button">
                    <?php $primeiro_nome = explode(" ", $usuario['Nome']); echo $primeiro_nome[0]; ?>
                </div>
                
                <div class="ui floating dropdown icon button">
                    <i class="dropdown icon"></i>
                    <div class="menu">
                        
                        <div class="item" >
                            <a style="color: black;" href="perfil.php">Perfil</a>
                        </div>

                        <div class="item" >
                            <a style="color: black;" href="perfil.php">Configurações</a>
                        </div>

                        <div class="item" >
                            <a style="color: black;" href="src/controles/usuario/Deslogar.php">Deslogar</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>

<!-- ##################################################################################### -->

    </div>
</div>
<!-- header area end -->