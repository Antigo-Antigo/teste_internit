 <!-- Inicio area de logar -->
 <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">
                

                <form method="POST" action="src/controles/usuario/Logar.php">

                    <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />

                    <div class="login-form-head">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                        </div>
                        <h4>Logar</h4>
                        <p>Olá, Sejá Bem Vindo !</p>
                    </div>
                    
                    <?php include_once "src/visao/mensagem/1.php"; ?>


                    <div class="login-form-body">

                        <div class="form-gp">
                            <label >Email</label>
                            <input type="email" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Senha</label>
                            <input type="password" name="senha">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>

                        <div class="row mb-4 rmber-area">

                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" name="lembrar_senha">
                                    <label class="custom-control-label" >Lembrar-Me</label>
                                </div>
                            </div>

                            <div class="col-6 text-right">
                                <a href="#">Esqueceu a Senha?</a>
                            </div>

                        </div>

                        <div class="submit-btn-area">
                            <button type="submit" name="botao_logar" >Logar <i class="ti-arrow-right"></i></button>
                        </div>

                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Não Possui Conta? <a href="registrar.php">Registar Agora</a></p>
                        </div>

                    </div>
                </form>


            </div>
        </div>
    </div>
 <!-- Inicio area de logar -->
