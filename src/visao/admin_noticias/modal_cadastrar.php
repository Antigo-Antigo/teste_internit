

<!-- Modal -->
<div class="modal fade" id="modal_cadastrar_noticia">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            
            <div class="modal-header">
                <h5 class="modal-title">Cadastrar Nova Noticia</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
                <form method="POST" enctype="multipart/form-data" action="src/controles/admin/noticias/Cadastrar.php"> 

                
                <div class="modal-body">
    

                    <div class="form-gp">
                        <input name="Titulo" type="text" value="" placeholder="Titulo" >
                    </div>
                    
                    <div class="form-gp">
                        <input name="Data" type="date" value="<?php //echo date('h-i-s'); ?>" >
                    </div>

                    <div class="form-gp">
                        <textarea name="Resumo" class="form-control" value="" placeholder="Resumo" rows="3"></textarea>
                    </div>                    

                    <div class="form-gp">
                        <textarea name="Conteudo" class="form-control" value="" placeholder="Conteudo" rows="6"></textarea>
                    </div>  

                    <div class="form-gp">
                        <input type="file" class="custom-file-input" name="Imagem">
                        <label class="custom-file-label">Enviar Imagem</label>
                    </div>


                    <div class="ui sub header"> Noticias em Destaque: </div>

                        <select multiple="" name="Destaque[]" class="ui fluid normal dropdown" >

                            <option value="-1"><div style="color: blue;">Colocar Está Noticia Em Destaque</div></option>

                            <?php for($i=0; $i <count($lista_noticias) ; $i++): ?>

                                <option <?php if($lista_noticias[$i]['Destaque'] == 2 ){ echo "selected='selected'"; } ?> value="<?php echo $lista_noticias[$i]['IdNoticia']; ?>">
                                    <?php echo $lista_noticias[$i]['Titulo']; ?>
                                </option>

                            <?php endfor; ?>
c

                        </select>

                    <br><br><br>



 




                </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" name="botao_cadastrar_noticia" class="btn btn-primary">Cadastrar</button>
                    </div>

                </form>
        </div>
    </div>
</div>

