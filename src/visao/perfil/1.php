<!-- ##################################################################################### -->
<div class="main-content-inner">
<!-- ##################################################################################### -->            

         
         <!-- basic form start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">

                        <?php include_once "src/visao/mensagem/1.php"; ?>

                        <h4 class="header-title">Informações Usuario</h4>
                        
                        <form method="POST" action="src/controles/usuario/Editar.php">

                            <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />
                            <input type="hidden" name="id_usuario" value= "<?php echo $usuario['IdUsuario']; ?>" />
                            <input type="hidden" name="IdTipoUsuario" value= "<?php echo $usuario['IdTipoUsuario']; ?>" />

                            <div class="form-group">
                                <label>Nome</label>
                                <input type="text" class="form-control" name="nome" value="<?php echo $usuario['Nome']; ?>" placeholder="<?php echo $usuario['Nome']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label >Email</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $usuario['Email']; ?>" placeholder="<?php echo $usuario['Email']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label >Cpf</label>
                                <input type="text" class="form-control" name="cpf" value="<?php echo $usuario['Cpf']; ?>" placeholder="<?php echo $usuario['Cpf']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>
                            
                            <div class="form-group">
                                <label >Endereço</label>
                                <input type="text" class="form-control" name="endereco" value="<?php echo $usuario['End']; ?>" placeholder="<?php echo $usuario['End']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label >Cidade</label>
                                <input type="text" class="form-control" name="cidade" value="<?php echo $usuario['Cidade']; ?>" placeholder="<?php echo $usuario['Cidade']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label >Estado</label>
                                <input type="text" class="form-control" name="estado" value="<?php echo $usuario['Uf']; ?>" placeholder="<?php echo $usuario['Uf']; ?>">
                                <small class="form-text text-muted"></small>
                            </div>

                            <div class="form-group">
                                <label >Senha</label>
                                <input type="password" class="form-control" name="senha">
                                <small class="form-text text-muted"></small>
                            </div>

                            <button type="submit" name="alterar_usuario" class="btn btn-primary mt-4 pr-4 pl-4">Alterar Informações</button>
                        </form>

                    </div>
                </div>
            </div>
            <!-- basic form end -->

<!-- ##################################################################################### -->
</div>
<!-- ##################################################################################### -->            
