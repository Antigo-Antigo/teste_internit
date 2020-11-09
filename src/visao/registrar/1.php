 <!-- Inicio area de Registrar -->
 <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--100">

                <form method="POST" action="src/controles/usuario/Cadastrar.php">

                    <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />


                    <div class="login-form-head">
                        <div class="logo">
                            <a href="index.php"><img src="assets/images/icon/logo.png" alt="logo"></a>
                        </div>

                        <h4>Registrar-se</h4>
                        <p>Olá Seja bem vindo, Registre-se para acessar o sistema!</p>
                    </div>
                    
                    <?php include_once "src/visao/mensagem/1.php"; ?>

                    <div class="login-form-body">

                        <div class="form-gp">
                            <label >Nome Completo</label>
                            <input type="text" name="nome" >
                        </div>

                        <div class="form-gp">
                            <label >Email</label>
                            <input type="text" name="email">
                        </div>

                        <div class="form-gp">
                            <label >Cpf</label>
                            <input type="text" name="cpf">
                        </div>

                        <div class="form-gp">
                            <label >Endereço</label>
                            <input type="text" name="endereco" >
                        </div>

                        <div class="form-gp">
                            <label >Cidade</label>
                            <input type="text" name="cidade">
                        </div>

                        <div class="form-gp">
                            <label >Estado</label>
                            <input type="text" name="estado">
                        </div>

                        <div class="form-gp">
                            <label >Senha</label>
                            <input type="password" name ="senha">
                        </div>

                        <div class="form-gp">
                            <label >Confirmar Senha</label>
                            <input type="password" name="confirmar_senha" >
                        </div>

                        <div class="submit-btn-area">
                            <button type="submit" name="botao_registar" >Resgistrar-se <i class="ti-arrow-right"></i></button>
                        </div>

                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Já possui conta? <a href="logar.php">Logar Agora</a></p>
                        </div>

                    </div>
                </form>


        </div>
    </div>
</div>
<!-- login area end -->