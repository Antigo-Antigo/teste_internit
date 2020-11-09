

<!-- Modal -->
<div class="modal fade" id="modal_excluir_usuarios-<?php echo $lista_usuarios[$i]['IdUsuario']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Excluir Usuario</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <form method="POST" action="src/controles/admin/usuarios/Excluir.php"> 

                    <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />
                    <input type="hidden" name="id_usuario" value= "<?php echo $lista_usuarios[$i]['IdUsuario']; ?>" />
                    <input type="hidden" name="id_usuario_logado" value= "<?php echo $usuario['IdUsuario']; ?>" />

                <div class="modal-body">
    
                    

                <div class="text-center">
                    <br>
                    <h5> Está é uma ação Permanente!!!  </h5>
                    <br>
                    <h6> Tem certeza que deseja exluir o usuario: </h6>
                    <h6 style="color: blue;"> <?php echo $lista_usuarios[$i]['Nome']; ?>  </h6>
                    <br><br>
                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="botao_exluir_usuario" class="btn btn-danger">Exluir</button>
                    </div>

                </form>
        </div>
    </div>
</div>

