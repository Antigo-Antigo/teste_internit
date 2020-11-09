<?php
    session_start();
    
    if(isset($_SESSION['mensagem'])){
        $tipomensagem = $_SESSION['mensagem'][0];
        $mensagem = $_SESSION['mensagem'][1];

        if($tipomensagem == 1){ $cor = 'success'; }
        if($tipomensagem == 2){ $cor = 'warning'; }
        

?>

<div class="alert alert-<?php echo $cor; ?> alert-dismissible fade show" role="alert">
    <?php echo $mensagem; ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span class="fa fa-times"></span>
    </button>
</div>

<?php } unset($_SESSION['mensagem']);   ?>    
