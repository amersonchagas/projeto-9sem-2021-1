<?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        include('classes/Produto.class.php');
        $excluir = new Produto($_GET['id']);
        $excluir->excluir();
    }
?>