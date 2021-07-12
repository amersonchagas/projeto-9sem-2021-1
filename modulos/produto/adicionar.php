<?php
if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/Produto.class.php");
    include("classes/DB.class.php");
    
    $add = new Produto();
    $add->setDescricao($_POST['descricao']);
    $add->setPreco($_POST['preco']);
    $add->setQuantidade($_POST['quantidade']);
    $add->adicionar();   

}
?>

<h1>Adicionar Produto</h1>

<form method="post" action="">
Descrição do Produto: <input type='text' name='descricao'> <br/>
Preço do Produto: <input type='text' name='preco'><br/>
Quantidade do Produto: <input type='text' name='quantidade'><br/>
<input type='submit' name='botao' value="Salvar">
</form>

