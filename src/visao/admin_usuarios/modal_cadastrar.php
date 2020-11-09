

<!-- Modal -->
<div class="modal fade" id="modal_cadastrar_usuarios">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Novo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <form method="POST" action="src/controles/admin/usuarios/Cadastrar.php"> 

                <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />

                <div class="modal-body">
    
                    

                <div class="form-gp">
                            <label >Nome Completo</label>
                            <input type="text" name="nome" >
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Email</label>
                            <input type="text" name="email">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Cpf</label>
                            <input type="text" name="cpf">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Endereço</label>
                            <input type="text" name="endereco" >
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Cidade</label>
                            <input type="text" name="cidade">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Estado</label>
                            <input type="text" name="estado">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Senha</label>
                            <input type="password" name ="senha">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <label >Confirmar Senha</label>
                            <input type="password" name ="confirmar_senha">
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Tipo de Usuario:</label>
                            <select class="custom-select" name="tipo_usuario">
                                <option selected="selected">Selecione</option>
                                <option value="1">Padrão</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>

                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="botao_cadastrar_usuario" class="btn btn-primary">Cadastrar</button>
                    </div>

                </form>
        </div>
    </div>
</div>

