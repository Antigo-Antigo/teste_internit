
<!-- ##################################################################################### -->
<div class="main-content-inner">
<!-- ##################################################################################### -->            

<!-- row area end -->
    <div class="row mt-5">
                    

    <?php for($i=0; $i <count($lista_noticias) ; $i++): ?>

        <!-- latest news area start -->
        <div class="col-xl-6" style="padding-top:30px;">
                        
            <div class="card">
                <div class="card-body">
                                    
                    <div class="single-post mb-xs-40 mb-sm-40">
                            <div class="lts-thumb">
                                <img src="<?php echo $lista_noticias[$i]['Imagem']; ?>" alt="post thumb">
                            </div>
                            <div class="lts-content">
                                <h2>
                                    <a href="noticia.php?noticia=<?php echo $lista_noticias[$i]['IdNoticia']; ?>">
                                        <?php echo $lista_noticias[$i]['Titulo']; ?>
                                    </a>
                                </h2>

                                <p class="card-text">
                                    <small class="text-muted">
                                        <?php echo $lista_noticias[$i]['Data']; ?>
                                    </small>
                                </p>

                                <p> <?php echo $lista_noticias[$i]['Resumo']; ?> </p>
                            </div>
                        </div>                                    

                </div>
            </div>
        </div>
        <!-- latest news area end -->

    <?php endfor; ?>


    </div> 
        
<!-- ##################################################################################### -->
</div>
<!-- ##################################################################################### -->
