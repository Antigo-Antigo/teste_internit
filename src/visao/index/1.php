<!-- ##################################################################################### -->
<div class="main-content-inner">
<!-- ##################################################################################### -->            

<!-- Inicio Card de Noticias -->
    <div class="card-area">
        <div class="row">
<!-- Inicio Card de Noticias -->

            <?php for($i=0; $i < count($lista_noticias) ; $i++):  
                
            ?>

            <div class="col-lg-4 col-md-6 mt-5">
                <div class="card card-bordered">
                    <img class="card-img-top img-fluid" src="<?php echo $lista_noticias[$i]['Imagem']; ?>" alt="image">
                    <div class="card-body">
                        
                        <h5 class="title"><?php echo $lista_noticias[$i]['Titulo']; ?></h5>
                        
                        <p class="card-text"><small class="text-muted">Data: <?php echo $lista_noticias[$i]['Data']; ?></small></p>

                        <p class="card-text"> <?php echo $lista_noticias[$i]['Resumo']; ?> ...</p>

                        <a href="noticia.php?noticia=<?php echo $lista_noticias[$i]['IdNoticia']; ?>" class="btn btn-primary">Saiba Mais ....</a>
                    </div>
                </div>
            </div>

            <?php endfor; ?>


<!-- Fim Card de Noticias -->
        </div>
    </div>
<!-- Fim Card de Noticias -->


        <div class="col-lg-12 mt-5">
            <a href="lista_noticias.php" type="button" class="btn btn-primary btn-lg btn-block"> Veja mais notícias</a>
        </div>




<!-- ##################################################################################### -->
</div>
<!-- ##################################################################################### -->
