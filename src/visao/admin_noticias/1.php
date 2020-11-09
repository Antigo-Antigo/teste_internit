<!-- ##################################################################################### -->
<div class="main-content-inner">
<!-- ##################################################################################### -->            

    <!-- Progress Table start -->
    <div class="col-12 mt-5">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <?php include_once "src/visao/mensagem/1.php"; ?>
                    </div>
                </div>

                <div class="row">

                    <div class="col-6"> 
                        <h4 class="header-title">Noticias Cadastradas </h4> 
                    </div>

                    <div class="col-6"> 
                        <button type="button" data-toggle="modal" data-target="#modal_cadastrar_noticia" class="btn btn-flat btn-primary btn-xs mb-3">Cadastrar Noticia</button>
                    </div>

                </div>

                <br>

                        
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            
                        <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Titulo</th>   
                                    <th scope="col">Data</th>
                                    <th scope="col">Link</th>
                                    <th scope="col">Destaque</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php for($i=0; $i <count($lista_noticias) ; $i++): ?>

                                <tr>
                                    <th scope="row"><?php echo $lista_noticias[$i]['IdNoticia']; ?></th>

                                    <td><?php echo $lista_noticias[$i]['Titulo']; ?></td>

                                    <td><?php echo $lista_noticias[$i]['Data']; ?></td>

                                    <td> https://fazer .. </td>

                                    <td>

                                    <form method="POST" enctype="multipart/form-data" action="src/controles/admin/noticias/AlterarDestaque.php"> 
                                        
                                        <input type="hidden" name="pagina_link" value= "<?php echo $pagina_link; ?>" />
                                        <input type="hidden" name="IdNoticia" value= "<?php echo $lista_noticias[$i]['IdNoticia']; ?>" />

                                    <select name="select_destaque" class="ui dropdown blue" id="select_destaque" onchange = 'this.form.submit ()'>
                                            <option <?php if($lista_noticias[$i]['Destaque'] == 2){ echo "selected='selected' "; } ?> value='2'>Destaque</option>
                                            <option <?php if($lista_noticias[$i]['Destaque'] == 1){ echo "selected='selected' "; } ?> value='1'> Padrão</option>
                                    </select>
                                    </form>   
                                        
                                    </td>

                                    <td>

                                        <ul class="d-flex justify-content-center">

                                            <li class="mr-3">    
                                                <a class="btn text-secondary" data-toggle="modal" data-target="#modal_editar_noticia-<?php echo $lista_noticias[$i]['IdNoticia']; ?>"><i class="fa fa-edit"></i></a>
                                            </li>

                                            <li>
                                                <a class="btn btntext-danger" data-toggle="modal" data-target="#modal_excluir_noticia-<?php echo $lista_noticias[$i]['IdNoticia']; ?>"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>

                                    </td>

                                </tr>
                                <?php 
                                    include "src/visao/admin_noticias/modal_editar.php"; 
                                    include "src/visao/admin_noticias/modal_excluir.php"; 
                                ?>

                            <?php endfor; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Progress Table end -->


<!-- ##################################################################################### -->
</div>
<!-- ##################################################################################### -->