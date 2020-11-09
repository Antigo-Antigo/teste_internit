

<!-- Modal -->
<div class="modal fade" id="modal_editar_usuarios-<?php echo $lista_usuarios[$i]['IdUsuario']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <form method="POST" action="src/controles/admin/usuarios/Editar.php"> 

                    <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />
                    <input type="hidden" name="id_usuario" value= "<?php echo $lista_usuarios[$i]['IdUsuario']; ?>" />
                    <input type="hidden" name="id_usuario_logado" value= "<?php echo $usuario['IdUsuario']; ?>" />

                <div class="modal-body">
    
                    

                <div class="form-gp">
                            <input type="text" name="nome" value="<?php echo $lista_usuarios[$i]['Nome']; ?>" placeholder="Nome" >
                        </div>

                        <div class="form-gp">
                            <input type="text" name="email" value="<?php echo $lista_usuarios[$i]['Email']; ?>" placeholder="Email">
                        </div>

                        <div class="form-gp">
                            <input type="text" value="<?php echo $lista_usuarios[$i]['Cpf']; ?>" placeholder="Cpf" name="cpf">
                        </div>

                        <div class="form-gp">
                            <input type="text" name="endereco" value="<?php echo $lista_usuarios[$i]['End']; ?>" placeholder="Endereço" >
                            <div class="text-danger"></div>
                        </div>

                        <div class="form-gp">
                            <input type="text" value="<?php echo $lista_usuarios[$i]['Cidade']; ?>" placeholder="Cidade"  name="cidade">
                        </div>

                        <div class="form-gp">
                            <input type="text" name="estado" value="<?php echo $lista_usuarios[$i]['Uf']; ?>" placeholder="Estado">
                        </div>

                        <div class="form-gp">
                            <input type="password" name ="senha" placeholder="Nova Senha">
                        </div>

                        <div class="form-group">
                            <label class="col-form-label">Tipo de Usuario:</label>
                            <select class="custom-select" name="tipo_usuario">
                                <option <?php if( $lista_usuarios[$i]['IdTipoUsuario'] == 1){ echo "selected='selected' "; } ?> value="1">Padrão</option>
                                <option <?php if( $lista_usuarios[$i]['IdTipoUsuario'] == 2){ echo "selected='selected' "; } ?> value="2">Administrador</option>
                            </select>
                        </div>

                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="botao_editar_usuario" class="btn btn-primary">Editar</button>
                    </div>

                </form>
        </div>
    </div>
</div>

