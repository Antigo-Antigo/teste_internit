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

                    <div class="col-6"> <h4 class="header-title">Usuarios Cadastrados </h4> </div>
                
                    <div class="col-6" > <button type="button" data-toggle="modal" data-target="#modal_cadastrar_usuarios" class="btn btn-flat btn-primary btn-xs mb-3">Cadastrar Usuario</button> </div>
                    
                </div>
                        
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-hover progress-table text-center">
                            
                        <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nome</th>   
                                    <th scope="col">Cidade</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tipo de Usuario</th>
                                    <th scope="col">Ações</th>
                                </tr>
                            </thead>

                            <tbody>

                            <?php 
                            
                            for($i=0; $i <count($lista_usuarios) ; $i++): 
                            ?>

                                <tr>
                                    <th scope="row"><?php echo $lista_usuarios[$i]['IdUsuario']; ?></th>

                                    <td><?php echo $lista_usuarios[$i]['Nome']; ?></td>

                                    <td><?php echo $lista_usuarios[$i]['Cidade']; ?></td>

                                    <td> <?php echo $lista_usuarios[$i]['Email']; ?> </td>

                                    <td>

                                        <?php if( $lista_usuarios[$i]['IdTipoUsuario'] == 2){ ?>
                                            <span class="status-p bg-primary">
                                                <?php echo "Administrador"; ?>
                                            </span>
                                        <?php }else{ ?>
                                                
                                            Padrão

                                        <?php }?>

                                    </td>

                                    <td>

                                        <ul class="d-flex justify-content-center">

                                            <li class="mr-3">    
                                                <a class="btn text-secondary" data-toggle="modal" data-target="#modal_editar_usuarios-<?php echo $lista_usuarios[$i]['IdUsuario']; ?>"><i class="fa fa-edit"></i></a>
                                            </li>

                                            <li>
                                                <a class="btn btntext-danger" data-toggle="modal" data-target="#modal_excluir_usuarios-<?php echo $lista_usuarios[$i]['IdUsuario']; ?>"><i class="ti-trash"></i></a>
                                            </li>
                                        </ul>

                                    </td>

                                </tr>
                                
                                <?php 
                                    include "src/visao/admin_usuarios/modal_editar.php"; 
                                    include "src/visao/admin_usuarios/modal_excluir.php"; 
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