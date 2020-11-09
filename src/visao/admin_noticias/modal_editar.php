

<!-- Modal -->
<div class="modal fade" id="modal_editar_noticia-<?php echo $lista_noticias[$i]['IdNoticia']; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Editar Noticia</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <form method="POST" enctype="multipart/form-data" action="src/controles/admin/noticias/Editar.php"> 
                
                    <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />
                    <input type="hidden" name="IdNoticia" value= "<?php echo $lista_noticias[$i]['IdNoticia']; ?>" />

                <div class="modal-body">
    
                    <div class="form-gp">
                        <input name="Titulo" type="text" placeholder="Titulo" value="<?php echo $lista_noticias[$i]['Titulo']; ?>" >
                    </div>
                    
                    <div class="form-gp">
                        <input name="Data" type="date" placeholder="Data" value="<?php echo $lista_noticias[$i]['Data']; ?>" >
                    </div>

                    <div class="form-gp">
                        <textarea name="Resumo" class="form-control" rows="3" placeholder="Resumo"><?php echo $lista_noticias[$i]['Resumo']; ?></textarea>
                    </div>                    

                    <div class="form-gp">
                        <textarea name="Conteudo" class="form-control"rows="6" placeholder="Conteudo"><?php echo $lista_noticias[$i]['Conteudo']; ?></textarea>
                    </div>  

                    <span>Imagem Atual: <?php echo $lista_noticias[$i]['Imagem']; ?></span>

                    <div class="form-gp">
                        <input type="file" class="custom-file-input" name="Imagem">
                        <label class="custom-file-label">Enviar Imagem</label>
                    </div>


                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="botao_editar_noticia" class="btn btn-primary">Editar</button>
                    </div>

                </form>
        </div>
    </div>
</div>

