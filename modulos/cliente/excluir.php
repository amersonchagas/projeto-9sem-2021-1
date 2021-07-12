<?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])){        
        include('classes/Cliente.class.php');
        $excluir = new Cliente($_GET['id']);
        $excluir->excluir();
    }
?>